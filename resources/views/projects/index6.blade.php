@extends('layouts.user')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading" style="padding-bottom: 25px;">
                <h3 class="panel-title">Pièces Jointes</h3>
        </div>
        <div class="panel-body">

                <form action="/projects/create4" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile1">Plan de financement projet (.docx)</label>
                                        <input name="planfin" value="{{ $user->projects->planfin }}" type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile1">Présentation Powerpoint du Projet</label>
                                        <input name="powerpoint" value="{{ $user->projects->powerpoint }}" type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile1">Déclaration Fiscale d’Existence (DFE)</label>
                                        <input name="declarationfiscale" value="{{ $user->projects->declarationfiscale }}" type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile1">Business Plan à 3 ans (.xlsx)</label>
                                        <input name="businessplan" value="{{ $user->projects->businessplan }}" type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                        </div>
                        <div class="form-group">
                                <p class="small">
                                        <i class="fa fa-exclamation-circle"></i>
                                        Les données fournies dans le cadre du prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles. Le descriptif pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractère public seront divulguées pour les besoins de publicité du concours.
                                        Tous les champs marqués « * » sont obligatoires.
                                </p>
                        </div>

                        <a href="{{ url('projects/index4') }}" class="btn btn-primary">Retour</a>
                        <button type="submit" class="btn btn-primary">J'ai terminé, je valide</button>
                </form>
        </div>
</div>

@endsection