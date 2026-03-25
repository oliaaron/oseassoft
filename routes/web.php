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
    
    // Guardamos el Lead
    \App\Models\Lead::create($request->only('email', 'product', 'source'));

    // Enviamos el Correo de Acceso
    Mail::to($request->email)->send(new DemoAccessMail([
        'title' => $request->product,
        'email' => $request->email_acceso,
        'pass'  => $request->pass_acceso,
        'link'  => $request->link_acceso
    ]));

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
