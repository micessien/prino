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
                    <label for="equipe"> Combien de personnes comptez vous embaucher pour le développement de votre projet ?</label>
                    <textarea name="equipe" value="{{ $user->projects->equipe }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif des compétences nécessaires au développement du projet (700 signes maximum espaces compris)">
                    </textarea>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label" for="gridCheck">
                            Les données de votre entité fournies dans le cadre des prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles. descriptif pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractères publiques seront divulguées pour les besoins de publicité du concours.
                            Tous les champs marqués « * » sont obligatoires.
                        </label>
                    </div>
                </div>
            </div>
            
            <a href="{{ url('projects/index2') }}" class="btn btn-primary">Retour</a>
            <button type="submit" class="btn btn-primary">Suivant</button>
        </form>
    </div>
</div>

@endsection