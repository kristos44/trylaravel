<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
    <!-- Site Title-->
    <title>{{ $title }}</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ URL::asset('assets/site/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,700%7CMontserrat:400,700">
    <link rel="stylesheet" href="{{ URL::asset('assets/site/css/style.css') }}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="{{ URL::asset('assets/site/js/html5shiv.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    <!-- Page-->
    <div class="page">
        <!-- Page Header-->
        <header class="page-head">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap header_minimal">
                <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-static" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-device-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="100px">
                    <!--RD Navbar Panel-->
                    <div class="rd-navbar-top-panel">
                        <div class="rd-navbar-top-panel-wrap">
                            <div class="contact-info"><a href="callto:#"><span class="material-icons-local_phone"></span> 504-031-232</a><a href="mailto:#"><span class="material-icons-drafts"></span> biuro@trynieruchomosci.pl</a></div>
                            <div class="slogan">
                                <p>Professional realtor works for you</p>
                            </div>
                            <ul class="list-inline">
                                <li><a href="#" class="fa-facebook"></a></li>
                                <li><a href="#" class="fa-twitter"></a></li>
                                <li><a href="#" class="fa-pinterest-p"></a></li>
                                <li><a href="#" class="fa-vimeo"></a></li>
                                <li><a href="#" class="fa-google"></a></li>
                                <li><a href="#" class="fa-rss"></a></li>
                            </ul>
                            <div class="btn-group"><a href="submit-property.html" class="btn btn-sm btn-primary">Zgłoś nieruchomość</a></div>
                        </div>
                    </div>
                    <div class="rd-navbar-inner inner-wrap">
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="index.html" class="brand-name">TRY<br><span>Nieruchomości</span></a></div>
                        </div>
                        <div class="btn-group"><a href="submit-property.html" class="btn btn-sm btn-primary">Zgłoś nieruchomość</a></div>
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="active"><a href="./">Home</a></li>
                                <li><a href="/oferta">Znajdź nieruchomość</a></li>
                                <li><a href="#">Współpraca</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        @yield('content')
        <!-- Page Footer-->
        <footer class="page-foot text-center text-md-left bg-gray">
            <div class="container-fluid">
                <div class="footer-wrap">
                    <div class="rd-navbar-brand"><a href="index.html" class="brand-name">TRY<br><span>Nieruchomości</span></a></div>
                    <ul class="list-inline">
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-pinterest-p"></a></li>
                        <li><a href="#" class="fa-vimeo"></a></li>
                        <li><a href="#" class="fa-google"></a></li>
                        <li><a href="#" class="fa-rss"></a></li>
                    </ul>
                    <div class="copyright">
                        <p>&#169;<span id="copyright-year"></span> Wszystkie prawa zastrzeżone <a href="terms.html">Warunki użytkowania i polityka prywatności</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Java script-->
    <script src="{{ URL::asset('assets/site/js/core.min.js') }}"></script>
    <script src="{{ URL::asset('assets/site/js/script.js') }}"></script>
</body>
</html>