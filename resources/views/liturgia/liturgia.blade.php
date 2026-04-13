@include('components.navbar')

@php


  // Variáveis gerais
  $data = $liturgia['data'];
  $nomeLiturgia = $liturgia['liturgia'];
  $corLiturgia = $liturgia['cor'];
  $leituras = $liturgia['leituras'];

  // Variáveis para as leituras
  $primeiraLeitura = $leituras[0] ?? null;
  $salmoResponsorial = $leituras[1] ?? null;
  $segundaLeitura = $leituras[2] ?? null;
  $evangelho = $leituras[3] ?? null;

@endphp