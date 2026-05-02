<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title') - Paróquia de Russas</title>
  </head>
  <body>  
  <header class='h-[94px] bg-blue-site'>
    <nav id="navbar" class="container mx-auto flex items-center justify-between h-full">
      <a href="/" ><img src="{{Vite::asset('resources/images/Logo.png')}}" alt="" class="h-full max-h-[70px]"></a>
      
      <div id="links-textos">
        <a href="/liturgia" class="inline-block text-[20px] text-white hover:text-blue-200 hover:scale-105 hover:underline transition-all duration-200 ">Liturgia diaria</a>
        <a href=""></a>
      </div>
    </nav>
  </header>
  
  @yield('content')

</body>
</html>
