@extends('layouts.user')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading" style="padding-bottom: 25px;">
        <h3 class="panel-title">La Règlementation et le Financement</h3>
    </div>
    <div class="panel-body">

        <form action="/projects/create4" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="categorie">*Votre projet est-il conforme à la règlementation de la Côte D’Ivoire ?Si Non Quel texte faut-il prendre pour le rendre conforme ?</label>
                    <textarea name="reglementation" value="{{ $user->projects->reglementation }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif du cadre règlementaire (500 signes maximum espaces compris)">
                    </textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Adresse">*A quel stade de développement est le projet ?</label>
                    <textarea name="stadedevelopement" value="{{ $user->projects->stadedevelopement }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif de l’évolution du projet (500 signes maximum espaces compris)">
                    </textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Adresse">*Quels sont vos besoins de financement ?</label>
                    <textarea name="besoinfinancement" value="{{ $user->projects->besoinfinancement }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif du financement du projet (1000 signes maximum espaces compris)">
                    </textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Adresse">*Quelle est la répartition du capital Social ?</label>
                    <textarea name="repartitioncapitale" value="{{ $user->projects->repartitioncapitale }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif de la structure du Capital de l’entité  (200 signes maximum espaces compris)">
                    </textarea>
                </div>
                <div class="form-group col-md-12">
                    <div class="form-check">
                        <label class="form-check-label" for="gridCheck">
                            Les données de votre entité fournies dans le cadre des prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles. descriptif pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractères publiques seront divulguées pour les besoins de publicité du concours.
                            Tous les champs marqués « * » sont obligatoires.
                        </label>
                    </div>
                </div>
            </div>
            
            <a href="{{ url('projects/index3') }}" class="btn btn-primary">Retour</a>
            <button type="submit" class="btn btn-primary">Suivant</button>
        </form>

    </div>
</div>

@endsection