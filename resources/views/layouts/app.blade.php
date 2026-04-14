<!DOCTYPE html>
<html lang="en">
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
      <div id="logo" class="inline-block items-center h-full">
        <a href="/" ><img src="{{Vite::asset('resources/images/Logo.png')}}" alt="" class="h-full max-h-[70px]"></a>
      </div>
      
      <div id="links-textos">
        <a href="/liturgia" class="inline-block text-[24px] text-white duration-300 hover:text-blue-200 hover:scale-110 hover:underline transition-all ">Liturgia diaria</a>
      </div>
    </nav>
  </header>
  
  @yield('content')

</body>
</html>
