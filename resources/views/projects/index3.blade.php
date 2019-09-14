@extends('layouts.user')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading" style="padding-bottom: 25px;">
        <h3 class="panel-title">Le Marche</h3>
    </div>
    <div class="panel-body">

        <form action="/projects/create3" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="equipe"><span style="color:#ff0000">*</span> Combien de personnes comptez vous embaucher pour le développement de votre projet ?</label>
                    <textarea required name="equipe" placeholder="Descriptif des compétences nécessaires au développement du projet (300 signes maximum espaces compris)" value="{{ $user->projects->equipe }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif des compétences nécessaires au développement du projet (700 signes maximum espaces compris)"></textarea>
                </div>
            </div>
            <div class="form-group">
                <p class="small">
                    <i class="fa fa-exclamation-circle"></i>
                    Les données fournies dans le cadre du prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles. Le descriptif pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractère public seront divulguées pour les besoins de publicité du concours.
                    Tous les champs marqués « * » sont obligatoires.
                </p>
            </div>

            <a href="{{ url('projects/index2') }}" class="btn btn-primary">Retour</a>
            <button type="submit" class="btn btn-primary">Suivant</button>
        </form>
    </div>
</div>

@endsection