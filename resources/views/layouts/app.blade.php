<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>

                    <!-- Right Side Of Navbar
                    <ul >
                         Authentication Links
                        @guest
                            @if (Route::has('login'))
                                <li >
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> 
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                 <li >
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> 
                            @endif
                            @else 
                             <li >
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a> -->

                                <!-- <div  aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form  action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div> -->
                            <!-- </li>
                        @endguest
                    </ul> -->


        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
