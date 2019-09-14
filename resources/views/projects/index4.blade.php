@extends('layouts.user')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading" style="padding-bottom: 25px;">
        <h3 class="panel-title">La Règlementation et le Financement</h3>
    </div>
    <div class="panel-body">

        <form action="/projects/create44" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="reglementation">Votre projet est-il conforme à la règlementation de la Côte D’Ivoire ? Si Non Quel texte faut-il prendre pour le rendre conforme ?</label>
                    <textarea name="reglementation" placeholder="Descriptif du cadre règlementaire (500 signes maximum espaces compris)" value="{{ $user->projects->reglementation }}" class="form-control" id="reglementation" rows="3"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="stadedevelopement"><span style="color:#ff0000">*</span> A quel stade de développement est le projet ?</label>
                    <textarea required name="stadedevelopement" placeholder="Descriptif de l’évolution du projet (500 signes maximum espaces compris)" value="{{ $user->projects->stadedevelopement }}" class="form-control" id="stadedevelopement" rows="3"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="besoinfinancement"><span style="color:#ff0000">*</span> Quels sont vos besoins de financement ?</label>
                    <textarea required name="besoinfinancement" placeholder="Descriptif du financement du projet (1000 signes maximum espaces compris)" value="{{ $user->projects->besoinfinancement }}" class="form-control" id="besoinfinancement" rows="3"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="repartitioncapitale"><span style="color:#ff0000">*</span> Quelle est la répartition du capital Social ?</label>
                    <textarea required name="repartitioncapitale" placeholder="Descriptif de la structure du Capital de l’entité (200 signes maximum espaces compris)" value="{{ $user->projects->repartitioncapitale }}" class="form-control" id="repartitioncapitale" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <p class="small">
                    <i class="fa fa-exclamation-circle"></i>
                    Les données fournies dans le cadre du prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles. Le descriptif pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractère public seront divulguées pour les besoins de publicité du concours.
                    Tous les champs marqués « * » sont obligatoires.
                </p>
            </div>

            <a href="{{ url('projects/index3') }}" class="btn btn-primary">Retour</a>
            <button type="submit" class="btn btn-primary">Suivant</button>
        </form>

    </div>
</div>

@endsection