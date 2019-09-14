@extends('layouts.main')

@section('content')
    <!-- Start Confirm Area  
    ============================================= -->
    <div class="congrats-container default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <p><i class="fa fa-check"></i></p>
                        <h4 style="text-transform: none">Félicitations! Vous êtes inscrit, vous pouvez désormais remplir le dossier</h4>
                        <a href="{{ route('login') }}" class="btn circle btn-primary btn-vert btn-lg padding-left-right">
                            Je remplis le dossier de candidature
                        </a>
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