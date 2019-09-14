@extends('layouts.main')

@section('content')
<!-- Start Banner 
    ============================================= -->
    <div class="banner-area auto-height text-center text-normal text-light shadow dark-hard bg-fixed" style="background-image: url(assets/img/banner/bg-palm-1.png);">
        <div class="container">
            <div class="row">
                <div class="content-box video-popup">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="content">
                            <!--made by vipul mirajkar thevipulm.appspot.com-->
                            <h1>
                                <a href="" class="typewrite" data-period="2000" data-type='[ "PRIX DE L’INNOVATION DU MINISTÈRE", "DU PÉTROLE, DE L’ENERGIE ET", "DES ÉNERGIES RENOUVELABLES" ]'>
                                    <span class="wrap"></span>
                                </a>
                            </h1>
                            <p class="text-black text-600">
                                Le Prix de l’innovation (#InnovMPEER), du Ministère du Pétrole, de l’Energie et des Energies Renouvelables (MPEER), vise à 
                                encourager et soutenir l’innovation technologique, dans les secteurs de l’Energie et des Hydrocarbures, pour le bien-être des 
                                populations ivoiriennes. <br><br>
                                 
                                Le MPEER souhaite, à travers ce prix, favoriser l’émergence des nouvelles générations de chercheurs ou prodiges, en soutenant 
                                leurs projets et innovations, dans les secteurs Hydrocarbures et Energies, en Côte d’Ivoire. <br>
                                Ce prix est attribué dans chacune des deux (2) catégories suivantes : </p>
                                <p class="text-black text-600 innovation-puce">
                                    - Innovation dans le secteur des Hydrocarbures <br> - Innovation dans le secteur de l’Energie.</p>
                                <p class="text-black text-600">
                                Pour chacun de ces deux prix, une somme de 10 000 000 FCFA et un accompagnement du Ministère pour la réalisation de votre projet sont à gagner. <br>
                                Vous êtes jeunes, vous êtes une startup ou une association, venez faire valoir votre talent pour une exploitation durable et à moindre coût des ressources énergétiques de la Côte d’Ivoire. <br>
                                Postulez, bonne chance à vous et que les meilleurs gagnent !
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn circle btn-primary btn-vert btn-inscrire btn-lg padding-left-right" data-toggle="modal" data-target="#myModal">
                            S'inscrire
                        </button>
                        <p>
                            <ul class="list-inline text-600">
                                <li>Déjà inscrit ?</li>
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
                @if($message = Session::get('success'))
                    <p>{{$message}}</p>
                @endif
                <form method="post" action="{{ route('contact.store') }}">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Nom*" type="text">
                                @if ($errors->has('name'))
                                    <span class="alert-error text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="email" placeholder="Email*" type="email">
                                @if ($errors->has('email'))
                                    <span class="alert-error text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="phone" placeholder="Telephone" type="text">
                                @if ($errors->has('phone'))
                                    <span class="alert-error text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group comments">
                                <textarea class="form-control" name="commentaire" placeholder="Parlons de vos préoccupations *"></textarea>
                                @if ($errors->has('commentaire'))
                                    <span class="alert-error text-danger">{{ $errors->first('commentaire') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <button type="submit">
                                Envoyer Votre Message <i class="fa fa-paper-plane"></i>
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
                            <span>Ministère du Pétrole, de l’Energie et des Energies Renouvelables

                                Immeuble. <br> SCIAM, 15ème Etage Plateau <br>
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
                            <span>prix.innovation@energie.gouv.ci</span>
                        </li>
                    </ul>
                    <h4>Reseaux Sociaux</h4>
                    <ul class="social">
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
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->

<!-- Scroll button -->
<a id="myScrollBtn-right" href="{{ url('/pdf/Calendrier_PDE19.pdf') }}" title="Télécharger le calendrié"><i class="fa fa-download"></i> Calendrier</a>
<a id="myScrollBtn-left" href="{{ url('/pdf/Reglement-interieur-InnovMpeer.pdf') }}" title="Télécharger le reglement interieur"><i class="fa fa-download"></i> Règlement intérieur</a>
<!-- /.Scroll button -->

@endsection
