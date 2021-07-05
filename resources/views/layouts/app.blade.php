
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/jpg" href="https://images.squarespace-cdn.com/content/v1/60784c037df8cf1b1ccb72ed/1618496629918-HFIW942FDD6854WSVICM/logoBRM.png"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Prueba BRM</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                     <img href="{{ url('/') }}" width="80px" height="40px" src="https://images.squarespace-cdn.com/content/v1/60784c037df8cf1b1ccb72ed/1618496629918-HFIW942FDD6854WSVICM/logoBRM.png">
                </a>
                 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
 @guest

 
                            

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif


                        @else
        
         @if (Auth::user()->tipo == 1 || Auth::user()->tipo == 3 )
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('compra') }}">{{ __('Comprar productos') }}</a>
                                </li>
                            @endif

                             @if (Auth::user()->tipo == 2 || Auth::user()->tipo == 3)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('productos.create') }}">{{ __('Entregar productos') }}</a>
                                </li>
                            @endif

                               @if (Auth::user()->tipo == 3)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('productos.index') }}">{{ __('Ver productos') }}</a>
                                </li>
                            @endif
                               @if (Auth::user()->tipo == 3)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ Route('tproductos.index') }} ">{{ __('Productos') }}</a>
                                </li>
                            @endif

                           
                                
</ul>
                                 </div>
 @if (Auth::user()->tipo == 1)
<a  style="color: black" class="nav-link">
                                        {{ __('Cliente ').('- ').(Auth::user()->name) }}
                                    </a>
                                     @endif @if (Auth::user()->tipo == 2)
<a  style="color: black" class="nav-link">
                                        {{ __('Provedor ').('- ').(Auth::user()->name)  }}
                                    </a>
                                     @endif

                                  @if (Auth::user()->tipo == 3)
<a  style="color: black" class="nav-link">
                                        {{ __('Administrador ').('- ').(Auth::user()->name)  }}
                                    </a>
                                     @endif
                                 <a  style="color: black" class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                               
                           
                        @endguest
                    
                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
