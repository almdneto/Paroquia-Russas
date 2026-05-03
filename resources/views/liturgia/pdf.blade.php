<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Georgia', serif;
            font-size: 14pt;
            color: #2c2c2c;
            background: #fff;
        }

        .pagina { padding: 20px 22px; }

        .cabecalho {
            text-align: center;
            border-bottom: 2px solid #8B0000;
            padding-bottom: 10px;
            margin-bottom: 16px;
        }

        .cabecalho h1 {
            font-size: 18pt;
            color: #8B0000;
            letter-spacing: 1px;
            margin-bottom: 2px;
        }

        .cabecalho .subtitulo {
            font-size: 14pt;
            color: #555;
            font-style: italic;
            margin-bottom: 2px;
        }

        .cabecalho .data {
            font-size: 14pt;
            color: #999;
        }

        .cor-liturgica {
            display: inline-block;
            font-size: 12pt;
            padding: 2px 8px;
            border-radius: 10px;
            margin-top: 4px;
            background-color: #f0e6e6;
            color: #8B0000;
        }

        .bloco { margin-bottom: 14px; }

        .bloco-titulo {
            font-size: 14pt;
            font-weight: bold;
            color: #8B0000;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-left: 3px solid #8B0000;
            padding-left: 6px;
            margin-bottom: 3px;
        }

        .bloco-subtitulo {
            font-size: 12pt;
            color: #666;
            font-style: italic;
            margin-bottom: 3px;
            padding-left: 9px;
        }

        .bloco-refrao {
            font-size: 14pt;
            font-style: italic;
            color: #8B0000;
            background: #fdf5f5;
            padding: 6px 10px;
            border-radius: 4px;
            margin-bottom: 6px;
        }

        .bloco-texto {
            font-size: 14pt;
            line-height: 1.7;
            text-align: justify;
            white-space: pre-line;
        }

        .bloco-texto-salmo {
            text-align: left;
        }

        .divisor {
            border: none;
            border-top: 1px solid #e0e0e0;
            margin: 12px 0;
        }

        .rodape {
            text-align: center;
            font-size: 12pt;
            color: #bbb;
            margin-top: 20px;
            padding-top: 8px;
            border-top: 1px solid #eee;
        }
    </style>
</head>
<body>
<div class="pagina">

    <div class="cabecalho">
        <h1>Liturgia do Dia</h1>
        @if(!empty($liturgia['liturgia']))
            <div class="subtitulo">{{ $liturgia['liturgia'] }}</div>
        @endif
        <div class="data">{{ $liturgia['data'] ?? now()->format('d/m/Y') }}</div>
        @if(!empty($liturgia['cor']))
            <div class="cor-liturgica">Cor litúrgica: {{ $liturgia['cor'] }}</div>
        @endif
    </div>

    @php $leituras = $liturgia['leituras'] ?? []; @endphp

    {{-- 1ª Leitura --}}
    @if(!empty($leituras['primeiraLeitura'][0]))
        @php $l = $leituras['primeiraLeitura'][0]; @endphp
        <div class="bloco">
            <div class="bloco-titulo">1ª Leitura</div>
            @if(!empty($l['titulo']))
                <div class="bloco-subtitulo">{{ $l['titulo'] }}</div>
            @endif
            @if(!empty($l['referencia']))
                <div class="bloco-subtitulo"><em>{{ $l['referencia'] }}</em></div>
            @endif
            <div class="bloco-texto">{{ $l['texto'] ?? '' }}</div>
        </div>
        <hr class="divisor">
    @endif

    {{-- Salmo --}}
    @if(!empty($leituras['salmo'][0]))
        @php $s = $leituras['salmo'][0]; @endphp
        <div class="bloco">
            <div class="bloco-titulo">Salmo Responsorial</div>
            @if(!empty($s['referencia']))
                <div class="bloco-subtitulo"><em>{{ $s['referencia'] }}</em></div>
            @endif
            @if(!empty($s['refrao']))
                <div class="bloco-refrao">{{ $s['refrao'] }}</div>
            @endif
            <div class="bloco-texto bloco-texto-salmo">{{ $s['texto'] ?? '' }}</div>
        </div>
        <hr class="divisor">
    @endif

    {{-- 2ª Leitura --}}
    @if(!empty($leituras['segundaLeitura'][0]))
        @php $l2 = $leituras['segundaLeitura'][0]; @endphp
        <div class="bloco">
            <div class="bloco-titulo">2ª Leitura</div>
            @if(!empty($l2['titulo']))
                <div class="bloco-subtitulo">{{ $l2['titulo'] }}</div>
            @endif
            @if(!empty($l2['referencia']))
                <div class="bloco-subtitulo"><em>{{ $l2['referencia'] }}</em></div>
            @endif
            <div class="bloco-texto">{{ $l2['texto'] ?? '' }}</div>
        </div>
        <hr class="divisor">
    @endif

    {{-- Evangelho --}}
    @if(!empty($leituras['evangelho'][0]))
        @php $e = $leituras['evangelho'][0]; @endphp
        <div class="bloco">
            <div class="bloco-titulo">Evangelho</div>
            @if(!empty($e['titulo']))
                <div class="bloco-subtitulo">{{ $e['titulo'] }}</div>
            @endif
            @if(!empty($e['referencia']))
                <div class="bloco-subtitulo"><em>{{ $e['referencia'] }}</em></div>
            @endif
            <div class="bloco-texto">{{ $e['texto'] ?? '' }}</div>
        </div>
    @endif

    <div class="rodape">
        Paróquia Russas &mdash; Gerado em {{ now()->format('d/m/Y \à\s H:i') }}
    </div>

</div>
</body>
</html>