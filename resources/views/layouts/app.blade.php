<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hôtel Mirambeau') }}</title>

    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">


    <style>
        /**
        nav{

            height: 70px;
            background:url({{ asset('img/bg-pattern.png') }}),#66FF99;
            background:url({{ asset('img/bg-pattern.png') }}),-webkit-linear-gradient(to left,#66FF99,#66CC99);
            background:url({{ asset('img/bg-pattern.png') }}),linear-gradient(to left,#66FF99,#66CC99);
        }
        **/

        .navbar-default .navbar-brand {
            color: #58ab77;
            font-family: "Kaushan Script", "Helvetica Neue", Helvetica, Arial, cursive;
            font-size: 22px;
        }

        .panel-default .panel-heading {
            color: #58ab77;
            font-family: "Kaushan Script", "Helvetica Neue", Helvetica, Arial, cursive;
            font-size: 20px;
        }

        .navbar-default .navbar-right li {
            font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 400;
            letter-spacing: 1px;
            color: #ffffff;
            margin-right: -10px;
            margin-top: 7px;
        }
        section{
            padding: 60px 0;
        }


    </style>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}" style="margin-top: 10px;">
                        <div class="row">
                            <img src="favicon.ico" alt="" width="30px" height="30px">
                            {{ config('app.name', 'Hôtel Mirambeau') }}
                        </div>

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/reservation">Réservation</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/hebergement">Hebergement</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/restauration">Restauration</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/salles">Nos Salles</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/services">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer>
            <div class="container" style="background-color: rgba(218,226,219,0.13)">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; Mirambeau Sarl U 2017</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>

    <script src="{{ asset('js/contact_me.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('js/agency.js') }}"></script>
</body>
</html>
