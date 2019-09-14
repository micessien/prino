@extends('layouts.main')

@section('content')
    <!-- Start Confirm Area  
    ============================================= -->
    <div class="confirm-container default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <p><i class="fa fa-thumbs-up"></i></p>
                        <h4 style="text-transform: none">Un mail vous a été envoyé à votre adresse, veuillez-vous connecter pour valider votre compte afin de remplir le dossier de candidature !</h4>
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