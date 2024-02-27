<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
      
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/catalog') }}">
                   
                    <img style="height: 50px; " src={{asset('images/logo.png')}} alt="chair" class="img-thumbnail"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                         
                    <ul class="navbar-nav me-auto">
                        <form style="margin-left: 145px" action="/home" >
                          <button class="btn btn-success"> Cauta aici mobila ta preferata</button>
                           </form>
                    </ul>

                    <!-- Right Side Of Navbar -->
                       <ul class="navbar-nav ms-auto">
                        @if(Route::has('update'))
                        <li class="nav-item">

                         <a class="nav-link" href="{{route('update')}}">{{ __('Inoieste') }}</a>
                        </li>
                   @endif
                        

                        @if(Route::has('create'))
                        <li class="nav-item">

                         <a class="nav-link" href="{{route('create')}}">{{ __('Creaza') }}</a>
                        </li>
                   @endif


                   <a href="{{ url('/delete') }}">
                   
                    <img style="height: 40px; border-style: none; " src={{asset('images/13sterge.png')}} alt="delete" class="img-thumbnail"> 
                </a>

                        @if(Route::has('About'))
                        <li class="nav-item">

                         <a class="nav-link" href="{{route('About')}}">{{ __('Despre') }}</a>
                        </li>
                   @endif
                      
                        @if(Route::has('catalog'))
                                   <li class="nav-item">

                                    <a class="nav-link" href="{{route('catalog')}}">{{ __('Catalog') }}</a>
                                   </li>
                              @endif
                              <a href="{{ url('/cart') }}">
                   
                                <img style="height: 50px; border-style:none; " src={{asset('images/cart1.png')}} alt="cart" class="img-thumbnail"> 
                            </a>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            


                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif 
                            
                          

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
                </div>
                
            </div>
            
        </nav>
       

        <main class="py-4">
            @yield('content')
        </main>
         <body style="background-color: #BDEDFF">
          
           
        </body>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
