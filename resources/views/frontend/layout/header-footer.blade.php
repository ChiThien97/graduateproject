<!DOCTYPE html>
<html lang="en">
<head>
    <title>TH-Computer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>

<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-wrap">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-md-end">
                            <div class="social-media">
                                <p class="mb-0 d-flex"></p>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <p class="mb-0 phone pl-md-2">
                                <a href="#" class="mr-2"><span class="fa fa-newspaper-o"></span> Tin công nghệ</a>
                                <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
                                <a href="#"><span class="fa fa-paper-plane mr-1"></span> thcompurter.suport@gmail.com</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline m-auto">
                <input class="form-control mr-sm-2 border-radius" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0 border-radius" type="submit"><span class="fa fa-search"></span></button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- END nav -->

<main class="py-3 flex-grow container">
    @yield('content')
</main>

<footer class="footer bg-white">
    <div class="container px-lg-5">
        <div class="row">
            <div class="col-md-9 py-5">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">About us</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Services</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="py-1 d-block">Market Analysis</a></li>
                                            <li><a href="#" class="py-1 d-block">Accounting Advisor</a></li>
                                            <li><a href="#" class="py-1 d-block">General Consultancy</a></li>
                                            <li><a href="#" class="py-1 d-block">Structured Assestment</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Discover</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="py-1 d-block">About us</a></li>
                                            <li><a href="#" class="py-1 d-block">Contract us</a></li>
                                            <li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a></li>
                                            <li><a href="#" class="py-1 d-block">Policies</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Resources</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="py-1 d-block">Security</a></li>
                                            <li><a href="#" class="py-1 d-block">Global</a></li>
                                            <li><a href="#" class="py-1 d-block">Charts</a></li>
                                            <li><a href="#" class="py-1 d-block">Privacy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-md-5">
                    <div class="col-md-12">
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                <h2 class="footer-heading">Free consultation</h2>
                <form action="#" class="form-consultation">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control submit px-3">Send A Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
