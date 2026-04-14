@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('layouts.app')

@section('title', 'Liturgia Diária')

@php


  // Variáveis gerais
  $data = $liturgia['data'];
  $nomeLiturgia = $liturgia['liturgia'];
  $corLiturgia = $liturgia['cor'];
  $leituras = $liturgia['leituras'];

  // Variáveis para as leituras
  // Primeira leitura
  $primeiraLeituraReferencia = $leituras['primeiraLeitura'][0]['referencia'] ?? null;
  $primeiraLeituraTitulo = $leituras['primeiraLeitura'][0]['titulo'] ?? null;
  $primeiraLeituraTexto = $leituras['primeiraLeitura'][0]['texto'] ?? null;

  // Salmo responsorial

  $salmoResponsorialReferencia = $leituras['salmo'][0]['referencia'] ?? null;
  $salmoResponsorialRefrao = $leituras['salmo'][0]['refrao'] ?? null;
  $salmoResponsorialTexto = $leituras['salmo'][0]['texto'] ?? null;
  
  // Segunda leitura
  if ($leituras['segundaLeitura'] !== null) {
    $segundaLeituraReferencia = $leituras['segundaLeitura'][0]['referencia'] ?? null;
    $segundaLeituraTitulo = $leituras['segundaLeitura'][0]['titulo'] ?? null;
    $segundaLeituraTexto = $leituras['segundaLeitura'][0]['texto'] ?? null;
  } else {
    $segundaLeituraReferencia = null;
    $segundaLeituraTitulo = null;
    $segundaLeituraTexto = null;
  }

  // Evangelho

  $evangelhoReferencia = $leituras['evangelho'][0]['referencia'] ?? null;
  $evangelhoTitulo = $leituras['evangelho'][0]['titulo'] ?? null;
  $evangelhoTexto = $leituras['evangelho'][0]['texto'] ?? null;

  

@endphp

@section('content')

  <p class="whitespace-pre-line">{{ $salmoResponsorialTexto }}</p>

@endsection
