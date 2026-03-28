<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoAccessMail;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/leads', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    
    // Guardamos el Lead (siempre, independientemente del correo)
    \App\Models\Lead::create($request->only('email', 'product', 'source'));

    // Enviamos el Correo de Acceso (con red de seguridad)
    try {
        Mail::to($request->email)->send(new DemoAccessMail([
            'title' => $request->product,
            'email' => $request->email_acceso,
            'pass'  => $request->pass_acceso,
            'link'  => $request->link_acceso
        ]));
    } catch (\Throwable $e) {
        // El correo falló, pero el lead ya se guardó. Se registra el error.
        \Illuminate\Support\Facades\Log::error('DemoAccessMail falló: ' . $e->getMessage());
        return response()->json(['success' => true, 'mail_error' => $e->getMessage()]);
    }

    return response()->json(['success' => true]);
});

Route::redirect('/admin', '/admin/leads');

Route::get('/admin/leads', function () {
    // Autenticación básica HTTP de un solo nivel (sin base de datos)
    if (request()->header('PHP_AUTH_USER') !== 'admin' || request()->header('PHP_AUTH_PW') !== 'Oseas2025!') {
        return response('Acceso Denegado.', 401, ['WWW-Authenticate' => 'Basic realm="Panel OseasSoft"']);
    }

    $leads = \App\Models\Lead::orderBy('created_at', 'desc')->get();
    return view('admin.leads', compact('leads'));
});
