<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title') - Paróquia de Russas</title>

    {{-- Fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=EB+Garamond:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    {{-- Ícones --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>      
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="min-h-screen flex flex-col ">
    
    {{-- Indentidade visual --}}
    <header class="
      {{-- Gradientezin na diagonal --}}
      bg-gradient-to-br from-header via-bg to-header-alt 
      
      {{-- Borda --}}
      border-b border-border/25

      {{-- Padding e altura --}}
      px-8 h-[64px]

      {{-- Display --}}
      flex items-center justify-between

      {{-- Posição --}}
      relative">

      {{-- Borda superior --}}
      <div class="
        {{-- Posição e altura "queria usar w-full, mas o scroll vertical não deixou, paia" --}}
        absolute top-0 right-0 left-0 h-px 

        {{-- Oto gradiente  --}}
        bg-gradient-to-r from-transparent via-primary to-transparent"></div>

      {{-- Logo e título do site --}}
      <div class="
        {{-- Espaçamento e display --}}
        flex items-center gap-4">
        
        {{-- Logo --}}
        <div class="
          {{-- Tamanho e borda --}}
          size-11 rounded-full bg-header border border-primary/40

          {{-- Display e tamanho --}}
          flex items-center justify-center text-xl">
          <i class="fa-sharp fa-solid fa-cross text-xl"></i>
        </div>

        {{-- Título --}}
        <div class="
        {{-- Display --}}
        flex flex-col">
          <span class="
            {{-- Fonte --}}
            font-cinzel text-[14px] font-semibold text-primary-light tracking-widest leanding-tight">
            Paróquia Nossa Senhora do Rosário
          </span>

          <span class="
          {{-- Fonte --}}
          text-[10px] text-muted tracking-widest uppercase">
            Russas · Ceará
          </span>
        </div>

      </div>

      {{-- Página que a pessoa tá vendo --}}
      <div class="
        {{-- Fonte --}}
        italic text-primary-mid text-[16px]">
        <p>@yield('title')</p>
      </div>

    </header>
    
    {{-- Navbar --}}
    <nav class="
      {{-- Background "Cor de fundo" e borda --}}
      bg-surface border-b border-border/15
    
      {{-- Padding, display e altura --}}
      px-8 h-12 flex items-center gap-1">
      <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Início</a>
      <a href="{{ route('liturgia.index') }}" class="nav-link {{ request()->is('liturgia*') ? 'active' : '' }}">Liturgia</a>
      <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Início</a>
      <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Início</a>
      <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Início</a>
    </nav>
  
  @yield('content')

</body>
</html>
