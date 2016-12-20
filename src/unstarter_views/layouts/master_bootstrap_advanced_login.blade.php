<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Chiron Lead Management System </title>

    <!-- Styles -->
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/elements_common.css')}}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                   Chiron Lead Management System 
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        @if(!Request::is('login*'))
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @endif
                        <li><a href="{{ url('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')



        @if( \App::environment() == 'local')
            <link href="{{URL::to('css\bootstrap-4.0.0-alpha.5.min.css')}}" rel="stylesheet">
            <link href={{URL::to('css/font-awesome.css')}} rel=stylesheet>
        @else
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">
        <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css rel=stylesheet>
        @endif


        <link rel="stylesheet"  type="text/css" href="{{asset('css/elements_common.css')}}">
    

    <link rel="stylesheet" type="text/css" href="{{URL::to('css/advanced_presenter.css')}}">
    <link rel="stylesheet"  type="text/css" href="{{asset('css/unrulynatives_attitudes.css')}}">
    <link rel="stylesheet"  type="text/css" href="{{asset('css/adjustments_bootstrap_advanced_presenter.css')}}">
    <link rel="stylesheet"  type="text/css" href="{{asset('css/adjustments_kailong.css')}}">



    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
    {!! Html::script('js/jquery-3.1.1.min.js') !!}


        @if( \App::environment() == 'local')
            <script src="{{URL::to('js\bootstrap-4.0.0-alpha.5.min.js')}}"></script>
        @else
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
        @endif


    <!-- Scripts -->
    <script src="{{URL::to('js/app.js')}}"></script>
</body>
</html>
