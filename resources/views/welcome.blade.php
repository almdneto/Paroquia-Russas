
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <h1>Paróquia Russas</h1>

    @if (Route::has('login'))
        <a href="{{ route('login') }}">Entrar</a>
    @endif

    @if (Route::has('register'))
        <a href="{{ route('register') }}">Cadastrar</a>
    @endif
</body>
</html>