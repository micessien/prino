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
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

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
                                <a class="nav-link" href="{{ route('register') }}">{{ __('M \' Inscription') }}</a>
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
                                        {{ __('Logout') }}
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
                        <img src="assets/img/logo-light.png" height="98" width="100" class="logo logo-display" alt="Logo">
                        <img src="assets/img/logo.png" height="98" width="100" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                        <li>
                            <a class="smooth-menu" href="#about">A Propos</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#features">RECOMPENSES</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#actualite">ACTUALITES</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#team">PANELISTES</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#contact">contact</a>
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
    <div class="banner-area auto-height text-center text-normal text-light shadow dark-hard bg-fixed" style="background-image: url(assets/img/banner/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="content-box video-popup">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="content">
                            <h1 style="font-size: 26px">PRIX DE L’INNOVATION DU MINISTERE DU PETROLE DE L’ENERGIE ET DES ENERGIES RENOUVELABLES WEEKS </h1>
                            <p>
                            « Le Prix de l’innovation (#PIMPEER) vise à encourager, soutenir et valoriser l’innovation
                                technologique, sociétale et de service pour le bien-être des populations.
                                Le PIMPEER a pour but de favoriser l’émergence de nouvelles générations de chercheurs ou
                                prodiges, en soutenant leurs projets et innovations technologiques inhérents aux secteurs
                                Hydrocarbures et Energies.
                                Ce prix de l’innovation est attribué dans chacune des catégories suivantes :
                                # innovation hydrocarbures
                                # innovation Energie
                                Vous êtes jeunes, vous êtes une startup, une association, venez faire valoir votre savoir,
                                votre talent pour une exploitation durable et à moindre coût des ressources énergétiques
                                et pour un impact significatif et bénéfique des énergies dans la vie socio-économique de la
                                Côte d’Ivoire. »
                            </P>                       
                                <a class="btn circle btn-light border btn-md" href="register">M'inscrire</a>
                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button video-inline">
                                <i class="fa fa-play"></i>
                            </a>
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

    <!-- Start About 
    ============================================= -->
    <div id="about" class="about-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 promo-video">
                    <img src="assets/img/work/4.png" alt="Thumb">
                </div>
                <div class="col-md-7 default info">
                    <h4>A PROPOS</h4>
                    <h4 style="color: green">LES PRIX DE L’INNOVATION DU MINISTERE DU PETROLE DE L’ENERGIE ET DES ENERGIES RENOUVELABLES</h4>
                    <p>
                                            
                    </p>
                    <ul>
                        <li>
                            <h5>Condidition de Participation</h5>
                            <span>ouvert à toute personne physique ivoirienne résidant en Côte D’Ivoire ou à l’étranger et à toute personne morale détenue en majorité par des personnes physiques ivoiriennes</span>
                        </li>
                        <li>
                            <h5>Prix et Accompagnement du Laureat </h5>
                            <span>
                                <ul>
                                    <li>Une dotation de 10 000 000 FCFA</li>
                                    <li>Un accompagnement du MPEER pour la mise en œuvre du projet</li>
                                </ul>
                            </span>
                        </li>
                        <li>
                            <h5>Telecharger Le reglement </h5>
                        </li>
                    </ul>
                    <a href="http://prixinnovation.test/assets/pdf/ReglementPIMPEER.docx" class="btn circle btn-theme effect btn-md">Telecharger</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Features 
    ============================================= -->
    <div id="features" class="features-area cell-items default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Nos <span>RECOMPENSES</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features-items icon-solid">
                    <div class="col-md-7">
                        <div class="items-box inc-cell">
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-television"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Prix des Hydrocarbures</h4>
                                        <p>
                                            Esteem garden men yet shy course. Consulted up my tolerably
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-customer-service"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Prix Energie et Energie Renouvelable.</h4>
                                        <p>
                                            Affronting everything discretion men now own did. Still round
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="assets/img/illustrations/2.svg" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Fun Factor 
    ============================================= -->
    <div class="fun-factor-area shadow dark bg-fixed text-light default-padding" style="background-image: url(assets/img/banner/7.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 fun-fact-items">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="230" data-speed="5000"></div>
                                <span class="medium">Nombres d'inscrits</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="89" data-speed="5000"></div>
                                <span class="medium">Professionels</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="50" data-speed="5000"></div>
                                <span class="medium">Exposants</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 subscribe">
                    <h3>Notre NewsLetter</h3>
                    <p>
                        Ne manquez rien de cette grande messe de l'innovation 
                    </p>
                    <form action="#">
                        <div class="input-group stylish-input-group">
                            <input type="email" placeholder="Entrez votre e-mail ici" class="form-control" name="email">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="fa fa-paper-plane"></i>
                                </button>  
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->


    <!-- Start Team  
    ============================================= -->
    <div id="team" class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Nos <span>Panelistes</span></h2>
                        <h4>Decouvrer nos brillants panelistes</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items">
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/7.jpg" height="300" width="400"  alt="Thumb">
                                <div class="overlay">
                                    <h4>I love my Studio</h4>
                                    <p>
                                        Jointure goodness interest debating did outweigh. Is time from them full my gone in went Of no introduced
                                    </p>
                                    <div class="social">
                                        <ul>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="vimeo">
                                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Ahmed Kamal</h4>
                                <span>Chairman of Softing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/9.jpg" height="300" width="400" alt="Thumb">
                                <div class="overlay">
                                    <h4>Connecting People</h4>
                                    <p>
                                        Jointure goodness interest debating did outweigh. Is time from them full my gone in went Of no introduced
                                    </p>
                                    <div class="social">
                                        <ul>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="vimeo">
                                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Drunal Park</h4>
                                <span>Manager of Softing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/8.jpg" height="300" width="400" alt="Thumb">
                                <div class="overlay">
                                    <h4>Network Builder</h4>
                                    <p>
                                        Jointure goodness interest debating did outweigh. Is time from them full my gone in went Of no introduced
                                    </p>
                                    <div class="social">
                                        <ul>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li class="instagram">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="vimeo">
                                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="info">
                                <span class="message">
                                    <a href="#"><i class="fas fa-envelope-open"></i></a>
                                </span>
                                <h4>Munia Ankor</h4>
                                <span>Founder of Softing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->



    <!-- Start Faq  
    ============================================= -->
    <div class="faq-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Question et <span>Reponse</span></h2>
                        <h4>Les questions les plus posées et leurs réponses</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Star Video Faq -->
                <div class="col-md-6 video-faq">
                    <div class="video">
                        <img src="assets/img/about/1.jpg" width="560" height="500" alt="Thumb">
                        <a class="popup-youtube light video-play-button" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                            <i class="fa fa-play"></i>
                        </a>
                        <h4>Le message de Monsieur le Mininstre</h4>
                    </div>
                </div>
                <!-- End Video Faq -->

                <!-- Star Accordion Items -->
                <div class="col-md-6 faq-items">
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                            <span>1</span> Engagement des Organisateurs
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>L’Organisateur s’engage à garantir l’indépendance du jury : en cas de conflit d’intérêts (lien quelconque avec le projet, l’entreprise ou le candidat) le jury ne pourra voter et un autre jury sera constituer à cet effet pour poursuivre les délibérations .

                                            L’Organisateur s’engage à rembourser les frais engagés par les Finalistes pour leur venue au lieu de soutenance, dans les conditions décrites à l’article 8 du présent règlement.
                                            
                                            L’Organisateur s’engage à mettre tout en œuvre pour garantir la confidentialité sur les informations communiquées par les participants au Prix.
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                            <span>2</span> Confidentialité
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Les membres des jurys et les personnes ayant accès aux dossiers déposés dans le cadre du Concours, s’engagent par écrit à garder confidentielles les informations communiquées par les participants.                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            <span>3</span> Protection des données
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            L’Organisateur du Prix sera amené à collecter des données personnelles afin de traiter les candidatures et d’assurer le bon déroulé du Prix. Les personnes physiques disposeront de droits, notamment de communication, de modification et éventuellement de suppression des informations qui les concernent, qu’elles peuvent exercer auprès de l’Organisateur.                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                            <span>4</span> Litiges
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Le fait d’adresser un dossier de participation implique, de la part des candidats, l’acceptation pure et simple du présent règlement, sans possibilité de réclamation quant aux résultats, qui ne peuvent donner lieu à contestation, les jurys étant souverains et n’ayant pas à motiver leur décision.

                                            Le vote du jury se fera à la majorité simple.                                        
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->

                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq  -->

    <!-- Start Blog  
    ============================================= -->
    <div id="actualite" class="blog-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>L'ACTUALITES <span>DU PRIX</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-items blog-carousel owl-carousel owl-theme">
                        <!--  Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/blog/1.jpg" height="200" width="400" alt="Thumb">
                                </a>
                                <div class="tags">
                                    <a href="#">startup</a>
                                    <a href="#">business</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#"> Séminaire à Yamoussoukro: Développement des secteurs Pétrole et Energie pour la période 2019-2030
                                        </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                        <li><i class="fas fa-calendar-alt "></i> 12 Nov, 2018</li>
                                        <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Les 15 et 16 juillet 2019, le ministère du Pétrole, de l’Energie et des Energies Renouvelables, a convié à Yamoussoukro, le secteur                                  <div class="read-more">
                                        <a href="#" class="more-btn">Voir Plus <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                            </div>
                        </div>
                        <!--  End Single Item -->
                        <!--  Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html">
                                    <img src="assets/img/blog/2.jpg" height="200" width="400" alt="Thumb">
                                </a>
                                <div class="tags">
                                    <a href="#">asset</a>
                                    <a href="#">earning</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Abdourahmane Cissé ouvre le Guichet Emploi de la commune de Marcory</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                        <li><i class="fas fa-calendar-alt "></i> 12 Nov, 2018</li>
                                        <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Un acte fort. C’est celui qu’a posé le lundi 05 août 2019, au foyer des jeunes de Marcory, le Ministre du Pétrole, de l’Energie et des Energies Renouvelables, Abdourahmane Cissé.                                </p>
                                <div class="read-more">
                                    <a href="#" class="more-btn">Voir Plus <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--  End Single Item -->
                        <!--  Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html">
                                    <img src="assets/img/blog/3.jpg" height="200" width="400" alt="Thumb">
                                </a>
                                <div class="tags">
                                    <a href="#">success</a>
                                    <a href="#">product</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Ouverture du Séminaire Pétrole et Energie 2019 à Yamoussoukro</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                        <li><i class="fas fa-calendar-alt "></i> 12 Nov, 2018</li>
                                        <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                    </ul>
                                </div>
                                <p>
                                    « Etat des lieux et perspectives des Secteurs Pétrole et Energie ». C’est autour de ce thème que s’est ouvert ce lundi 15 juillet 2019, à l’hôtel Président de Yamoussoukro
                                    ,  le séminaire des acteurs du Pétrole et de l’Energie
                                </p>
                                <div class="read-more">
                                    <a href="#" class="more-btn">Voir Plus <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--  End Single Item -->
                        <!--  Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="single.html">
                                    <img src="assets/img/blog/4.jpg" height="200" width="400" alt="Thumb">
                                </a>
                                <div class="tags">
                                    <a href="#">startup</a>
                                    <a href="#">business</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">INCENDIE A LA SIR - VISITE DU MINISTRE ABDOURAHMANE CISSE</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                                        <li><i class="fas fa-calendar-alt "></i> 12 Nov, 2018</li>
                                        <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                    </ul>
                                </div>
                                <p>
                                    De retour d’une visite matinale des  plateformes pétrolières de l’entreprise CNR, le vendredi 31 mai 2019,  le Ministre du Pétrole, de l’Energie et des Energies Renouvelables,  
                                </p>
                                <div class="read-more">
                                    <a href="#" class="more-btn">Voir Plus <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--  End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

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

</body>

</html>