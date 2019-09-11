<!DOCTYPE html>
<html lang="en">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PRIX DE L’INNOVATION DU MINISTERE DU PETROLE DE L’ENERGIE ET DES ENERGIES RENOUVELABLES">

    <!-- ========== Page Title ========== -->
    <title>PRIX DE L’INNOVATION DU MINISTERE DU PETROLE DE L’ENERGIE ET DES ENERGIES RENOUVELABLES</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/logo-pimpeer-1.png" type="image/x-icon">

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
    <link href="custom.css" rel="stylesheet">
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
                                <a class="nav-link" href="{{ route('register') }}">{{ __('S \'Inscrire') }}</a>
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
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo-pimpeer-1.png" width="265" class="logo logo-display" alt="Logo">
                        <img src="assets/img/logo-pimpeer-1.png" width="265" class="logo logo-scrolled" alt="Logo">
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
                            <a class="smooth-menu" href="javascript:void(0)">#PIMPEER</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area auto-height text-center text-normal text-light shadow dark-hard bg-fixed" style="background-image: url(assets/img/banner/10.jpg);">
        <div class="container">
            <div class="row">
                <div class="content-box video-popup">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="content">
                            <!--made by vipul mirajkar thevipulm.appspot.com-->
                            <h1>
                                <a href="" class="typewrite" data-period="2000" data-type='[ "PRIX DE L’INNOVATION #PIMPEER", "prixinnovation.energie.gouv.ci" ]'>
                                    <span class="wrap"></span>
                                </a>
                            </h1>
                            <p class="text-justify">
                                Le Prix de l’innovation (#PIMPEER) vise à encourager, soutenir et valoriser l’innovation
                                technologique, sociétale et de service pour le bien-être des populations. <br>
                                Le PIMPEER a pour but de favoriser l’émergence de nouvelles générations de chercheurs ou
                                prodiges, en soutenant leurs projets et innovations technologiques inhérents aux secteurs
                                Hydrocarbures et Energies. <br><br>
                                Ce prix de l’innovation est attribué dans chacune des catégories suivantes : <br>
                                # innovation hydrocarbures <br>
                                # innovation Energie <br><br>
                                Vous êtes jeunes, vous êtes une startup, une association, venez faire valoir votre savoir,
                                votre talent pour une exploitation durable et à moindre coût des ressources énergétiques
                                et pour un impact significatif et bénéfique des énergies dans la vie socio-économique de la
                                Côte d’Ivoire.
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn circle btn-primary btn-vert btn-inscrire btn-lg padding-left-right" data-toggle="modal" data-target="#myModal">
                            S'inscrire
                            </button>
                            <p>
                                <ul class="list-inline">
                                <li class="text-white">Déjà inscrit ?</li>
                                <li><a href="{{ route('login') }}" class="text-orange">Connectez-vous ici</a></li>
                                </ul>
                            </p>
                            <!-- <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button video-inline">
                                <i class="fa fa-play"></i>
                            </a> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-8 col-md-offset-2">
                        <div class="banner banner-carousel owl-carousel owl-theme">
                            <img alt="Thumb" src="assets/img/dashboard/1.png">
                            <img alt="Thumb" src="assets/img/dashboard/2.png">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

     <!-- Start Companies Area 
    ============================================= -->
    <div class="bg-gray companies-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 info">
                    <h3>Nos Partenaires</h3>
                    <p>
                        Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                    </p>
                </div>
                <div class="col-md-6 clients">
                    <div class="clients-items owl-carousel owl-theme text-center">
                        <div class="single-item">
                            <a href="#"><img src="assets/img/clients/1.png" height="90" width="200" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/clients/2.png" height="90" width="200" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/clients/3.png" height="90" width="200" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/clients/4.jpg" height="90" width="200" alt="Clients"></a>
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Companies Area -->


    <!-- Start Contact Area  
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Contactez - <span>NOUS</span></h2>
                        <h4>Avez-Vous Des Questions?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 contact-form">
                    <h2>Parlons de vos préoccupations</h2>
                    <form action="http://validthemes.com/themeforest/dostart/assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nom" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Telephone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="commentaire" name="commentaire" placeholder="Parlons de vos préoccupations *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Envoyer Votre Message  <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 address">
                    <div class="address-items">
                        <ul class="info">
                            <li>
                                <h4>Notre Localisation</h4>
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                <span>Ministère du Pétrole, de l’Energie et du Développement des Energies Renouvelables

                                    Immeuble. <br> SCIAM,  15ème Etage Plateau <br>
                                    BP 06 Abidjan - Côte d’Ivoire <br>
                                    Abidjan, Côte d'Ivoire</span>
                            </li>
                            <li>
                                <h4>Phone</h4>
                                <div class="icon"><i class="fas fa-phone"></i></div> 
                                <span>(+225) 20 21 50 03 </span>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                <span>info@energie.gouv.ci</span>
                            </li>
                        </ul>
                        <h4>Reseaux Sociaux</h4>
                        <ul class="social">
                            <li class="facebook">
                                <a href="https://www.facebook.com/mpeerciv/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start modal inscription -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Le choix du Prix de soumission</h4>
                </div>
                <div class="modal-body text-center">
                    <h4>
                        Bienvenu(e) sur le site du Prix d'innovation du <strong>MPEER</strong> <br>
                        Veuillez sélectionner votre catégorie
                    </h4>
                    <p>
                        <ul class="list-inline">
                            <li>
                                <div class="icon"><i class="flaticon-television"></i></div>
                                <a href="{{ route('register') }}">Prix Innovation Hydrocarbures</a>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-customer-service"></i></div>
                                <a href="{{ route('register') }}">Prix Innovation Energie</a>
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End modal inscription -->
    
    <!-- Scroll button -->
    <a id="myScrollBtn-right" title="Télécharger le calendrié">Calendrier</a>
    <a id="myScrollBtn-left" title="Télécharger le reglement interieur">Reglément intérieur</a>
    <!-- /.Scroll button -->


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

</body>

</html>