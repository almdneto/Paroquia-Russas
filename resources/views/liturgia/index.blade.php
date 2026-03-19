<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Liturgia Diária</title>
</head>
<body>
    <h1>Liturgia Diária</h1>

    @if($erro)
        <p><strong>Erro:</strong> {{ $erro }}</p>
    @endif

    @if($liturgia)
        <pre>{{ print_r($liturgia, true) }}</pre>
    @endif
</body>
</html>