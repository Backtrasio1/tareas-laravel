<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlbB</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

     @vite(['resources/css/app.css', 'resources/js/app.js'])
     
  </head>
  <body>

    <div class="container px-4 mx-auto">
      <header class="flex justify-between items-center py-4">
        <nav class="navbar navbar-expand-lg">
           <div class="container-fluid">
        <div class=" flex items-center flex-grow gap-4">
          <a href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" class="drop-shadow-lg h-12" alt="">
          </a>
              <p class="text-emerald-500 bg-gray-100 drop-shadow-md rounded-full px-2 py-1">Backtrasio</p>
          <form action="{{route('home')}}" method="GET" class="flex-grow">
            <input class="rounded-full border border-gray-400 py-2 px-9 mx-5" type="text" name="search" placeholder="Buscar" value="{{request('search')}}">
          </form>
        </div>

        @auth
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fw-bold" className="rounded-lg px-3 py-2 text-slate-700 font-medium hover:bg-slate-100 hover:text-slate-900" aria-current="page" href="{{ route('home') }}" >Inicio</a>
            </li>
            

            <li class="nav-item">
              <a class="nav-link fw-bold" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            
            @else

            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
      
            @endauth
          </ul>
      </header>
    </nav>
    </nav>
      <div class="opacity-60 h-px mb-8" style="
        background: linear-gradient(to right,
        rgba(200, 200, 200, 0) 0%,
        rgba(200, 200, 200, 1) 30%,
        rgba(200, 200, 200, 1) 70%,
        rgba(200, 200, 200 ,0) 100%
        
        );">

    </div>
      @yield('content')
      <p class="py-16">
         <img src="{{asset('images/logo.png')}}" class="h-12 mx-auto" alt="">
      </p>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>
