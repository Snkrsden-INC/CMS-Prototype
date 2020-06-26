{{--@extends('layouts.app')--}}
{{--@section('content')--}}
{{--    <h1>Random Text</h1>--}}
{{--@endsection--}}

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'SnkrsDen') }}</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('img/snkrs-logo-blacks.png') }}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Ecommerce styles -->
    <link rel="stylesheet" href="{{ asset('css/mdb.ecommerce.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="skin-light">
<header>
    <div class="jumbotron jumbotron-image color-grey-light"
         style="background-image: url('{{ asset('img/img01.jpg') }}'); height: 500px;">
        <div class="mask rgba-black-strong d-flex align-items-center h-100">
            <div class="container text-center white-text py-5">
                <h1 class="mb-0 main-header-logo">SnkrsDen</h1>
                <h2 class="mb-0 main-header-p">Buy and sale!</h2>
            </div>
        </div>
    </div>

</header>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar navbar-transparent">

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">

            <!-- News -->
            <li class="nav-item dropdown mega-dropdown">
                <a class="nav-link" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img class=""
                         src="{{ asset('img/snkrs-logo-blacks.png') }}"
                         alt=""
                         style="width: 7rem"
                    >
                    <span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu mega-menu v-1 z-depth-1 white py-5 px-3"
                     aria-labelledby="navbarDropdownMenuLink1">
                    <div class="row">
                        <div class="col-md-5 col-xl-3 sub-menu mb-xl-0 mb-5">
                            <ul class="list-unstyled">
                                <li class="sub-title text-uppercase">
                                    <a class="menu-item pl-1 mt-2" href="#!">
                                        Laptops
                                    </a>
                                </li>
                                <li class="sub-title text-uppercase">
                                    <a class="menu-item pl-1 mt-2" href="#!">
                                        Phones
                                    </a>
                                </li>
                                <li class="sub-title text-uppercase">
                                    <a class="menu-item pl-1 mt-2" href="#!">
                                        Lifestyle
                                    </a>
                                </li>
                                <li class="sub-title text-uppercase">
                                    <a class="menu-item pl-1 mt-2" href="#!">
                                        Technology
                                    </a>
                                </li>
                                <li class="sub-title text-uppercase">
                                    <a class="menu-item pl-1 mt-2" href="#!">
                                        Design
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-xl-4 sub-menu mb-xl-0 mb-4">
                            <h6 class="sub-title pb-3 text-uppercase font-weight-bold">Featured</h6>
                            <!--Featured image-->
                            <a href="#!" class="view overlay z-depth-1 p-0 my-3">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(42).jpg"
                                     class="img-fluid" alt="First sample image">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                            <a class="news-title font-weight-bold pl-0" href="#!">Lorem ipsum dolor sit amet,
                                consectetur
                                isum adipisicing elit.</a>
                            <p class="font-small text-uppercase text-muted">By <a class="p-0 m-sm" href="#!">Anna
                                    Doe</a> -
                                July 15, 2017</p>
                        </div>
                        <div class="col-md-12 col-xl-5 sub-menu mb-md-0 mb-xl-0 mb-4">
                            <h6 class="sub-title pb-3 text-uppercase font-weight-bold">Design</h6>
                            <div class="news-single">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--Image-->
                                        <a href="#!" class="view overlay z-depth-1 p-0 my-3">
                                            <img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(43).jpg"
                                                class="img-fluid" alt="First sample image">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="news-title smaller mt-md-2 pl-0" href="#!">Duis aute irure dolor
                                            reprehenderit in
                                            voluptate.</a>
                                        <p class="font-small text-uppercase text-muted">July 14, 2017</p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-single">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--Image-->
                                        <a href="#!" class="view overlay z-depth-1 p-0 mb-3 mt-4">
                                            <img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(44).jpg"
                                                class="img-fluid" alt="First sample image">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="news-title smaller mt-md-2 pl-0" href="#!">Tempore autem reiciendis
                                            iste nam
                                            dicta.</a>
                                        <p class="font-small text-uppercase text-muted">July 14, 2017</p>
                                    </div>
                                </div>
                            </div>
                            <div class="news-single">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--Image-->
                                        <a href="#!" class="view overlay z-depth-1 p-0 mb-3 mt-4">
                                            <img
                                                src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(41).jpg"
                                                class="img-fluid" alt="First sample image">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="news-title smaller mt-2 pl-0" href="#!">Eligendi dicta sunt amet,
                                            totam ea
                                            recusandae.</a>
                                        <p class="font-small text-uppercase text-muted">July 14, 2017</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <!-- Links -->
        <!-- Right -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link waves-effect">
                    {{ isset(Auth::user()->name)  ? Auth::user()->name : ''}}
                </a>
            </li>
            <li class="nav-item">
                <a href="#!" class="nav-link navbar-link-2 waves-effect">
                    <span class="badge badge-pill red">1</span>
                    <i class="fas fa-shopping-cart pl-0"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="true">
                    <i class="united states flag m-0"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#!">Action</a>
                    <a class="dropdown-item" href="#!">Another action</a>
                    <a class="dropdown-item" href="#!">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#!" class="nav-link waves-effect">
                    App
                </a>
            </li>
            <li class="nav-item">
                <a href="#!" class="nav-link waves-effect">
                    Shop
                </a>
            </li>
            <li class="nav-item">
                <a href="#!" class="nav-link waves-effect">
                    Contact
                </a>
            </li>
            <li class="nav-item">
                <a href="#!" class="nav-link waves-effect">
                    About
                </a>
            </li>
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link waves-effect">
                        Sign in
                    </a>
                </li>
                <li class="nav-item pl-2 mb-2 mb-md-0">
                    <a href="{{ route('register') }}" type="button"
                       class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign
                        up</a>
                </li>
            @endguest
        </ul>
        <!-- Links -->

    </div>
    <!-- Collapsible content -->


</nav>
<!-- Navbar -->
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">
        <!--Section: Block Content-->
        <section>

            <h4 class="text-center mt-4 mb-5"><strong>Bestsellers</strong></h4>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-5">
                    <!-- Rotating card -->
                    <div class="card-wrapper">
                        <div id="card-1" class="card card-rotating text-center">

                            <!-- Front Side -->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img class="card-img-top" src="{{ asset('img/jordan-olympics-landing.jpg') }}" alt="Image with a photo of clouds.">
                                </div>
                                <!-- Avatar -->
                                    <div class="mask card-up">
                                        <img class="img-fluid w-100"
                                             src="{{ asset('img/jordan-olympic-landing-2.jpg') }}">
                                        <div class="mask rgba-black-slight"></div>
                                    </div>
                                <!-- Content -->
                                <div class="card-body">
                                    <h4 class="font-weight-bold mb-3">
                                        Jordan 7 OG Olympic (1992)
                                    </h4>
{{--                                    <p class="font-weight-bold blue-text">Web developer</p>--}}
                                    <div class="card-body text-center pt-4">
{{--                                        <h5>Blue denim shirt</h5>--}}
{{--                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>--}}
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p>
                                            <p class="">Buy it now: </p>
                                            <span class="mr-1">
                                                <a href="" class="btn btn-success">
                                                    $500.00
                                                </a>
                                            </span>
                                        </p>
                                        <div class="row">
                                            <button type="button"
                                                    class="btn btn-warning btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>
                                                Add to cart
                                            </button>
                                            <button type="button"
                                                    class="btn btn-light btn-sm mr-1 mb-2 rotate-btn"
                                                    data-card="card-1">
                                                <i class="fas fa-info-circle pr-2"></i>
                                                Market Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Front Side -->

                            <!-- Back Side -->
                            <div class="face back">
                                <div class="card-body">

                                    <!-- Content -->
                                    <h4 class="font-weight-bold mb-0">Details</h4>
                                    <hr>

                                    <div class="btn-group btn-group-lg mb-4" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success btn-sm">Last Sold: 500</button>
                                        <button type="button" class="btn btn-warning btn-sm">Make An Offer</button>
                                        <button type="button" class="btn btn-danger btn-sm">Highest Bid</button>
                                    </div>
                                    <hr>
                                    <!-- Social Icons -->
                                    <h4 class="font-weight-bold mb-0">Share this product</h4>
                                    <ul class="list-inline py-2">
                                        <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <!-- Triggering button -->
                                    <a class="rotate-btn" data-card="card-1">
                                        <i class="fas fa-undo"></i>
                                        Go Back
                                    </a>
                                </div>
                            </div>
                            <!-- Back Side -->

                        </div>
                    </div>
                    <!-- Rotating card -->
                    <!-- Rotating card -->
                    <div class="card-wrapper">
                        <div id="card-1" class="card card-rotating text-center">

                            <!-- Front Side -->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img class="card-img-top" src="{{ asset('img/jordan-olympics-landing.jpg') }}" alt="Image with a photo of clouds.">
                                </div>
                                <!-- Avatar -->
                                <div class="mask card-up">
                                    <img class="img-fluid w-100"
                                         src="{{ asset('img/jordan-olympic-landing-2.jpg') }}">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <!-- Content -->
                                <div class="card-body">
                                    <h4 class="font-weight-bold mb-3">
                                        Jordan 7 OG Olympic (1992)
                                    </h4>
                                    {{--                                    <p class="font-weight-bold blue-text">Web developer</p>--}}
                                    <div class="card-body text-center pt-4">
                                        {{--                                        <h5>Blue denim shirt</h5>--}}
                                        {{--                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>--}}
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p>
                                        <p class="">Buy it now: </p>
                                        <span class="mr-1">
                                                <a href="" class="btn btn-success">
                                                    $500.00
                                                </a>
                                            </span>
                                        </p>
                                        <div class="row">
                                            <button type="button"
                                                    class="btn btn-warning btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>
                                                Add to cart
                                            </button>
                                            <button type="button"
                                                    class="btn btn-light btn-sm mr-1 mb-2 rotate-btn"
                                                    data-card="card-1">
                                                <i class="fas fa-info-circle pr-2"></i>
                                                Market Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Front Side -->

                            <!-- Back Side -->
                            <div class="face back">
                                <div class="card-body">

                                    <!-- Content -->
                                    <h4 class="font-weight-bold mb-0">Details</h4>
                                    <hr>

                                    <div class="btn-group btn-group-lg mb-4" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success btn-sm">Last Sold: 500</button>
                                        <button type="button" class="btn btn-warning btn-sm">Make An Offer</button>
                                        <button type="button" class="btn btn-danger btn-sm">Highest Bid</button>
                                    </div>
                                    <hr>
                                    <!-- Social Icons -->
                                    <h4 class="font-weight-bold mb-0">Share this product</h4>
                                    <ul class="list-inline py-2">
                                        <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <!-- Triggering button -->
                                    <a class="rotate-btn" data-card="card-1">
                                        <i class="fas fa-undo"></i>
                                        Go Back
                                    </a>
                                </div>
                            </div>
                            <!-- Back Side -->

                        </div>
                    </div>
                    <!-- Rotating card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-5">
                    <!-- Rotating card -->
                    <div class="card-wrapper">
                        <div id="card-1" class="card card-rotating text-center">

                            <!-- Front Side -->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img class="card-img-top" src="{{ asset('img/jordan-olympics-landing.jpg') }}" alt="Image with a photo of clouds.">
                                </div>
                                <!-- Avatar -->
                                <div class="mask card-up">
                                    <img class="img-fluid w-100"
                                         src="{{ asset('img/jordan-olympic-landing-2.jpg') }}">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <!-- Content -->
                                <div class="card-body">
                                    <h4 class="font-weight-bold mb-3">
                                        Adidas Seeley 2020
                                    </h4>
                                    {{--                                    <p class="font-weight-bold blue-text">Web developer</p>--}}
                                    <div class="card-body text-center pt-4">
                                        {{--                                        <h5>Blue denim shirt</h5>--}}
                                        {{--                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>--}}
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p>
                                        <p class="">Buy it now: </p>
                                        <span class="mr-1">
                                                <a href="" class="btn btn-success">
                                                    $500.00
                                                </a>
                                            </span>
                                        </p>
                                        <div class="row">
                                            <button type="button"
                                                    class="btn btn-warning btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>
                                                Add to cart
                                            </button>
                                            <button type="button"
                                                    class="btn btn-light btn-sm mr-1 mb-2 rotate-btn"
                                                    data-card="card-1">
                                                <i class="fas fa-info-circle pr-2"></i>
                                                Market Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Front Side -->

                            <!-- Back Side -->
                            <div class="face back">
                                <div class="card-body">

                                    <!-- Content -->
                                    <h4 class="font-weight-bold mb-0">Details</h4>
                                    <hr>

                                    <div class="btn-group btn-group-lg mb-4" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success btn-sm">Last Sold: 500</button>
                                        <button type="button" class="btn btn-warning btn-sm">Make An Offer</button>
                                        <button type="button" class="btn btn-danger btn-sm">High Bid</button>
                                    </div>
                                    <hr>
                                    <!-- Social Icons -->
                                    <h4 class="font-weight-bold mb-0">Share this product</h4>
                                    <ul class="list-inline py-2">
                                        <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <!-- Triggering button -->
                                    <a class="rotate-btn" data-card="card-1">
                                        <i class="fas fa-undo"></i>
                                        Go Back
                                    </a>
                                </div>
                            </div>
                            <!-- Back Side -->

                        </div>
                    </div>
                    <!-- Rotating card -->
                    <!-- Rotating card -->
                    <div class="card-wrapper">
                        <div id="card-1" class="card card-rotating text-center">

                            <!-- Front Side -->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img class="card-img-top" src="{{ asset('img/jordan-olympics-landing.jpg') }}" alt="Image with a photo of clouds.">
                                </div>
                                <!-- Avatar -->
                                <div class="mask card-up">
                                    <img class="img-fluid w-100"
                                         src="{{ asset('img/jordan-olympic-landing-2.jpg') }}">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <!-- Content -->
                                <div class="card-body">
                                    <h4 class="font-weight-bold mb-3">
                                        Jordan 7 OG Olympic (1992)
                                    </h4>
                                    {{--                                    <p class="font-weight-bold blue-text">Web developer</p>--}}
                                    <div class="card-body text-center pt-4">
                                        {{--                                        <h5>Blue denim shirt</h5>--}}
                                        {{--                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>--}}
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p>
                                        <p class="">Buy it now: </p>
                                        <span class="mr-1">
                                                <a href="" class="btn btn-success">
                                                    $500.00
                                                </a>
                                            </span>
                                        </p>
                                        <div class="row">
                                            <button type="button"
                                                    class="btn btn-warning btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>
                                                Add to cart
                                            </button>
                                            <button type="button"
                                                    class="btn btn-light btn-sm mr-1 mb-2 rotate-btn"
                                                    data-card="card-1">
                                                <i class="fas fa-info-circle pr-2"></i>
                                                Market Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Front Side -->

                            <!-- Back Side -->
                            <div class="face back">
                                <div class="card-body">

                                    <!-- Content -->
                                    <h4 class="font-weight-bold mb-0">Details</h4>
                                    <hr>

                                    <div class="btn-group btn-group-lg mb-4" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success btn-lg">Last Sold: 500</button>
                                        <button type="button" class="btn btn-warning btn-lg">Make An Offer</button>
                                        <button type="button" class="btn btn-danger btn-lg">Highest Bid</button>
                                    </div>
                                    <hr>
                                    <!-- Social Icons -->
                                    <h4 class="font-weight-bold mb-0">Share this product</h4>
                                    <ul class="list-inline py-2">
                                        <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <!-- Triggering button -->
                                    <a class="rotate-btn" data-card="card-1">
                                        <i class="fas fa-undo"></i>
                                        Go Back
                                    </a>
                                </div>
                            </div>
                            <!-- Back Side -->

                        </div>
                    </div>
                    <!-- Rotating card -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 mb-5">
                    <!-- Rotating card -->
                    <div class="card-wrapper">
                        <div id="card-1" class="card card-rotating text-center">

                            <!-- Front Side -->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img class="card-img-top" src="{{ asset('img/jordan-olympics-landing.jpg') }}" alt="Image with a photo of clouds.">
                                </div>
                                <!-- Avatar -->
                                <div class="mask card-up">
                                    <img class="img-fluid w-100"
                                         src="{{ asset('img/jordan-olympic-landing-2.jpg') }}">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <!-- Content -->
                                <div class="card-body">
                                    <h4 class="font-weight-bold mb-3">
                                        Jordan 7 OG Olympic (1992)
                                    </h4>
                                    {{--                                    <p class="font-weight-bold blue-text">Web developer</p>--}}
                                    <div class="card-body text-center pt-4">
                                        {{--                                        <h5>Blue denim shirt</h5>--}}
                                        {{--                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>--}}
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p>
                                        <p class="">Buy it now: </p>
                                        <span class="mr-1">
                                                <a href="" class="btn btn-success">
                                                    $500.00
                                                </a>
                                            </span>
                                        </p>
                                        <div class="row">
                                            <button type="button"
                                                    class="btn btn-warning btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>
                                                Add to cart
                                            </button>
                                            <button type="button"
                                                    class="btn btn-light btn-sm mr-1 mb-2 rotate-btn"
                                                    data-card="card-1">
                                                <i class="fas fa-info-circle pr-2"></i>
                                                Market Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Front Side -->

                            <!-- Back Side -->
                            <div class="face back">
                                <div class="card-body">

                                    <!-- Content -->
                                    <h4 class="font-weight-bold mb-0">Details</h4>
                                    <hr>

                                    <div class="btn-group btn-group-lg mb-4" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success btn-lg">Last Sold: 500</button>
                                        <button type="button" class="btn btn-warning btn-lg">Make An Offer</button>
                                        <button type="button" class="btn btn-danger btn-lg">Highest Bid</button>
                                    </div>
                                    <hr>
                                    <!-- Social Icons -->
                                    <h4 class="font-weight-bold mb-0">Share this product</h4>
                                    <ul class="list-inline py-2">
                                        <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <!-- Triggering button -->
                                    <a class="rotate-btn" data-card="card-1">
                                        <i class="fas fa-undo"></i>
                                        Go Back
                                    </a>
                                </div>
                            </div>
                            <!-- Back Side -->

                        </div>
                    </div>
                    <!-- Rotating card -->
                    <!-- Rotating card -->
                    <div class="card-wrapper">
                        <div id="card-1" class="card card-rotating text-center">

                            <!-- Front Side -->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img class="card-img-top" src="{{ asset('img/jordan-olympics-landing.jpg') }}" alt="Image with a photo of clouds.">
                                </div>
                                <!-- Avatar -->
                                <div class="mask card-up">
                                    <img class="img-fluid w-100"
                                         src="{{ asset('img/jordan-olympic-landing-2.jpg') }}">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <!-- Content -->
                                <div class="card-body">
                                    <h4 class="font-weight-bold mb-3">
                                        Jordan 7 OG Olympic (1992)
                                    </h4>
                                    {{--                                    <p class="font-weight-bold blue-text">Web developer</p>--}}
                                    <div class="card-body text-center pt-4">
                                        {{--                                        <h5>Blue denim shirt</h5>--}}
                                        {{--                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>--}}
                                        <ul class="rating">
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-sm text-success"></i>
                                            </li>
                                        </ul>
                                        <hr>
                                        <p>
                                        <p class="">Buy it now: </p>
                                        <span class="mr-1">
                                                <a href="" class="btn btn-success">
                                                    $500.00
                                                </a>
                                            </span>
                                        </p>
                                        <div class="row">
                                            <button type="button"
                                                    class="btn btn-warning btn-sm mr-1 mb-2">
                                                <i class="fas fa-shopping-cart pr-2"></i>
                                                Add to cart
                                            </button>
                                            <button type="button"
                                                    class="btn btn-light btn-sm mr-1 mb-2 rotate-btn"
                                                    data-card="card-1">
                                                <i class="fas fa-info-circle pr-2"></i>
                                                Market Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Front Side -->

                            <!-- Back Side -->
                            <div class="face back">
                                <div class="card-body">

                                    <!-- Content -->
                                    <h4 class="font-weight-bold mb-0">Details</h4>
                                    <hr>

                                    <div class="btn-group btn-group-lg mb-4" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success btn-lg">Last Sold: 500</button>
                                        <button type="button" class="btn btn-warning btn-lg">Make An Offer</button>
                                        <button type="button" class="btn btn-danger btn-lg">Highest Bid</button>
                                    </div>
                                    <hr>
                                    <!-- Social Icons -->
                                    <h4 class="font-weight-bold mb-0">Share this product</h4>
                                    <ul class="list-inline py-2">
                                        <li class="list-inline-item"><a class="p-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li class="list-inline-item"><a class="p-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <!-- Triggering button -->
                                    <a class="rotate-btn" data-card="card-1">
                                        <i class="fas fa-undo"></i>
                                        Go Back
                                    </a>
                                </div>
                            </div>
                            <!-- Back Side -->

                        </div>
                    </div>
                    <!-- Rotating card -->
                </div>
                <!-- Grid column -->
                </div>
                <!-- Grid column -->



            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Block Content-->

        <!--Section: Block Content-->
        <section>

            <h4 class="text-center mt-4 mb-5"><strong>New products</strong></h4>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                                 alt="Sample">
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15.jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Black denim jacket</h5>
                            <p class="mb-2 text-muted text-uppercase small">Jackets</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="mr-1"><strong>$99.99</strong></span></p>
                            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart
                            </button>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details
                            </button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                                    class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                 alt="Sample">
                            <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Grey sweater</h5>
                            <p class="mb-2 text-muted text-uppercase small">Sweaters</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="text-danger mr-1"><strong>$21.99</strong></span><span
                                    class="text-grey"><strong><s>$36.99</s></strong></span></p>
                            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart
                            </button>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details
                            </button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                                    class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-5">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                                 alt="Sample">
                            <a href="#!">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center pt-4">

                            <h5>Blue denim shirt</h5>
                            <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                            <ul class="rating">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <p><span class="mr-1"><strong>$17.99</strong></span></p>
                            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart
                            </button>
                            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                                    class="fas fa-info-circle pr-2"></i>Details
                            </button>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                                    data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </section>

        <!--Section: Block Content-->

    </div>
</main>
<!--Main layout-->

<!-- Footer -->
<footer class="page-footer font-small warning-color">

    <div class="color-warning">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left pt-4 pt-md-5">

        <!-- Grid row -->
        <div class="row mt-1 mt-md-0 mb-4 mb-md-0">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>About me</h5>


                <p class="foot-desc mb-0">Here you can use rows and columns to organize your footer content. Lorem
                    ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Products</h5>

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a href="#!">MDBootstrap</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">MDWordPress</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">BrandFlow</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Bootstrap Angular</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Useful links</h5>

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a href="#!">Your Account</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Become an Affiliate</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Shipping Rates</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Help</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Contacts</h5>

                <ul class="fa-ul foot-desc ml-4">
                    <li class="mb-2"><span class="fa-li"><i class="far fa-map"></i></span>New York, Avenue Street 10
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>042 876 836 908</li>
                    <li class="mb-2"><span class="fa-li"><i class="far fa-envelope"></i></span>company@example.com</li>
                    <li><span class="fa-li"><i class="far fa-clock"></i></span>Monday - Friday: 10-17</li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://snkrsden.com"> SnkrsDen.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- SCRIPTS -->
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{'js/mdb.min.js'}}"></script>
<!-- MDB eCommerce -->
<script type="text/javascript" src="{{ asset('js/mdb.ecommerce.min.js') }}"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">
    if($) {
        console.log(1);
    }
</script>

</body>

</html>

