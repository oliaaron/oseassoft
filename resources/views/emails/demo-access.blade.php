<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Acceso al Demo de OseasSoft</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; color: #333;">

    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
        <div style="background: linear-gradient(135deg, #6366f1, #8b5cf6); padding: 30px; text-align: center;">
            <h1 style="color: #ffffff; margin: 0; font-size: 24px;">¡Bienvenido al sistema!</h1>
        </div>
        
        <div style="padding: 30px;">
            <p style="font-size: 16px; line-height: 1.5;">Hola,</p>
            <p style="font-size: 16px; line-height: 1.5;">Aquí tenés los accesos inmediatos para probar tu entorno de demostración de <strong>OseasSoft ({{ $data['title'] }})</strong>. Tenés 15 días gratis para visualizar todas las funciones.</p>
            
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; margin: 25px 0;">
                <p style="margin: 0 0 10px 0;"><strong>Usuario:</strong> <span style="font-family: monospace; font-size: 16px;">{{ $data['email'] }}</span></p>
                <p style="margin: 0;"><strong>Contraseña:</strong> <span style="font-family: monospace; font-size: 16px;">{{ $data['pass'] }}</span></p>
            </div>

            <div style="text-align: center; margin: 30px 0;">
                <a href="{{ $data['link'] }}" style="background: #4f46e5; color: #ffffff; text-decoration: none; padding: 14px 28px; border-radius: 6px; font-weight: bold; display: inline-block;">Ir al Sistema Ahora</a>
            </div>

            <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 30px 0;">
            
            <p style="font-size: 14px; color: #64748b; text-align: center; margin: 0;">Si tenés alguna duda, simplemente respondé a este correo.</p>
        </div>
    </div>

</body>
</html>
