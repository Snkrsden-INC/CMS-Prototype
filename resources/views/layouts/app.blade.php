<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CMS-Prototype') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- MD Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/mdb.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accordion-extended.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations-extended.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cards-extended.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chat.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/megamenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/multi-range.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parallax.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-charts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/steppers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timeline.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'CMS-Prototype') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="chip nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <div class="chip chip-md cyan darken-2 white-text">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg"
                                         alt="Contact Person">
                                    {{ Auth::user()->name }}
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @auth
        <div class="container-fluid">
            @if(session()->has('success'))
                <div class="list-group-flush text-center">
                    <div class="list-group-item success-color">
                        <p class="mb-0">
                            <i class="far py-1 px-1 fa-check-circle fa-3x"></i>
                            {{ session()->get('success') }}
                        </p>
                    </div>
                </div>
            @endif
            @if($errors->any())
                <div class="list-group-flush text-center">
                    <div class="list-group-item danger-color">
                        <p class="mb-0">
                            <i class="fas py-1 px-1 fa-exclamation fa-3x"></i>
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </p>
                    </div>
                </div>
            @endif

            <div class="row mt-5">
                <div class="col-md-4">
                    <ul class="list-group list-group-flush">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a class="text-white btn-floating btn-dark tn-sm"
                                   href="{{ route('categories.index') }}">
                                    <i class="fas fa-grip-horizontal"></i>
                                </a>
                                Category
                            </li>
                            <li class="list-group-item">
                                <a class="btn-floating btn-warning btn-sm" href="{{ route('products.index') }}">
                                    <i class="fas fa-shoe-prints"></i>
                                </a>
                                Products
                            </li>
                            <li class="list-group-item">
                                <a class="btn-floating btn-danger btn-sm" href="{{ route('trashed-products.index') }}">
                                    <i class="fas fa-shoe-prints"></i>
                                </a>
                                Removed Products
                            </li>
                        </ul>
                    </ul>

                    <hr class=""/>


                    <ul class="list-group list-group-flush">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a class="text-white btn-floating btn-dark btn-sm"
                                   href="{{ route('categories.index') }}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                Buying
                            </li>
                            <li class="list-group-item">
                                <a class="btn-floating btn-warning btn-sm" href="{{ route('products.index') }}">
                                    <i class="fas fa-money-bill-alt"></i>
                                </a>
                                Selling
                            </li>
                            <li class="list-group-item">
                                <a class="btn-floating btn-dark btn-sm" href="{{ route('products.index') }}">
                                    <i class="fas fa-user-alt fa-5x"></i>
                                </a>
                                Profile
                            </li>
                        </ul>
                    </ul>

                </div>
                <div class="col-md-8">
                    @yield('content')
                </div>
            </div>
            @else
                @yield('content')
            @endauth
        </div>

</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/cards-extended.min.js') }}"></script>
<script src="{{ asset('js/chat.min.js') }}"></script>
<script src="{{ asset('js/multi-range.min.js') }}"></script>
<script src="{{ asset('js/simple-charts.min.js') }}"></script>
<script src="{{ asset('js/steppers.min.js') }}"></script>
<script src="{{ asset('js/timeline.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
{{--<script>--}}
{{--    $(document).ready(() => {--}}
{{--        new WOW().init();--}}
{{--    });--}}
{{--</script>--}}
<!-- JQuery -->
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<!-- Bootstrap tooltips -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

@yield('scripts')
</body>
</html>
