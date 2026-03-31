<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/formulario/{{ $usuario->id }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{ $usuario->nome }}" placeholder="Digite seu nome">
        <input type="email" name="email" value="{{ $usuario->email }}" placeholder="Digite seu email">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>