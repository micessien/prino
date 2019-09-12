@extends('layouts.main')

@section('content')
    <!-- Start Confirm Area  
    ============================================= -->
    <div class="confirm-container default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <p>
                            <a href="{{ url('felicitation') }}" style="color: #ffffff" title="Cliquez ici"><i class="fa fa-thumbs-up"></i></a></p>
                        <h4>Un mail vous a été envoyé à votre adresse, veuillez vous connecter pour valider votre compte afin de remplir le dossier de candidature!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    
    <!-- Scroll button -->
    <a id="myScrollBtn-right" href="{{ url('/pdf/Calendrier_PDE19.pdf') }}" title="Télécharger le calendrié">Calendrier</a>
    <a id="myScrollBtn-left" href="{{ url('/pdf/PI-MPEER_Reglement des Prix_R9_11Sep2019.pdf') }}" title="Télécharger le reglement interieur">Reglément intérieur</a>
    <!-- /.Scroll button -->

@endsection