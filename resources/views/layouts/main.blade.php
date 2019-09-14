<!DOCTYPE html>
<html lang="en">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PRIX DE L’INNOVATION DU MINISTERE DU PETROLE DE L’ENERGIE ET DES ENERGIES RENOUVELABLES">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========== Page Title ========== -->
    <title>PRIX DE L’INNOVATION DU MINISTERE DU PETROLE DE L’ENERGIE ET DES ENERGIES RENOUVELABLES</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/logo-prix-innovation.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <!-- <link href="custom.css" rel="stylesheet"> -->
    <link href="assets/css/roadmap.css" rel="stylesheet">
    <link href="assets/css/scroll-button.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default active-border navbar-fixed navbar-transparent white bootsnav">
            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav button theme">
                    <ul>
                        @guest
                            <li class="nav-item">
                                <button class="nav-link" data-toggle="modal" data-target="#myModal">{{ __('S \'Inscrire') }}</button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="assets/img/logo-prix-innovation.png" width="80" class="logo logo-display" alt="Logo">
                        <img src="assets/img/logo-prix-innovation.png" width="80" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="list-social">
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/mpeerciv/" target="_blank"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/mpederciv" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/mpeerciv/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="smooth-menu" style="font-size: 25px;" href="javascript:void(0)">#InnovMPEER</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    @yield('content')
    
    <!-- Start modal inscription -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-image: url(assets/img/banner/bg-palm-1.png); background-repeat: no-repeat; background-size: auto; background-position: center;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel"></h3>
                </div>
                <div class="modal-body text-center">
                    <h4>
                        Bienvenu(e) sur le site du Prix de l'Innovation du <strong>MPEER</strong> <br>
                        Veuillez sélectionner votre catégorie
                    </h4>
                    <ul class="list-inline">
                        <li>
                            <!-- <div class="icon"><i class="flaticon-down-arrow"></i></div> -->
                            <a class="btn circle btn-primary btn-vert btn-lg padding-left-right" href="{{ route('hydrocarbures') }}">Prix Innovation Hydrocarbures</a>
                        </li>
                        <li>
                            <!-- <div class="icon"><i class="flaticon-customer-service"></i></div> -->
                            <a class="btn circle btn-primary btn-vert btn-lg padding-left-right" href="{{ route('energie') }}">Prix Innovation Energie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End modal inscription -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/typewriter.js"></script>

    <script>
        // $('.owl-carousel').owlCarousel({
        //     autoplay:true,
        //     rtl:true,
        //     loop:true,
        //     margin:10,
        //     nav:true,
        //     responsive:{
        //         0:{
        //             items:1
        //         },
        //         600:{
        //             items:3
        //         },
        //         1000:{
        //             items:5
        //         }
        //     }
        // })
</script>
</body>

</html>