<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2;url=http://zcpublicidad.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje enviado</title>
</head>
<body>
    @csrf
    <div class="mensaje-enviado">
        <div class="contenedor-mensaje-enviado">
        <img src="{{ asset('img/message_sent.svg') }}" alt="Mensaje enviado">
        </div>
    </div>
    <h1>Mensaje enviado</h1>
</body>
</html>