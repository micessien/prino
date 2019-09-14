@extends('layouts.user')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading" style="padding-bottom: 25px;">
                <h3 class="panel-title">Informations sur l’entité</h3>
        </div>
        <div class="panel-body">

                <form action="/projects/create2" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="entite">* M / Mme Prénoms Nom</label>
                                        <input name="nomcomplet" value="{{ $user->projects->nomcomplet }}" type="text" class="form-control" id="entite" placeholder="Koffi Jean">
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="entite">* Email</label>
                                        <input name="email" value="{{ $user->projects->email }}" type="text" class="form-control" id="entite" placeholder="ean@mail.com">
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="telephone">* Telephone</label>
                                        <input name="telephone" value="{{ $user->projects->telephone }}" type="text" class="form-control" id="telephone" placeholder="+225">
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="entite">*Fonction occupée dans l’entreprise</label>
                                        <input name="fonctionoccupe" value="{{ $user->projects->fonctionoccupe }}" type="text" class="form-control" id="entite" placeholder="entite">
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-12">
                                        <label for="categorie">*Descriptif du projet / de l’activité</label>
                                        <textarea name="descriptifprojet" value="{{ $user->projects->descriptifprojet }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif du projet (2500 signes maximum espaces compris)">
                                        </textarea>
                                </div>
                                <div class="form-group col-md-12">
                                        <div class="form-check">
                                                <label class="form-check-label" for="gridCheck">
                                                        Ce descriptif pourra être utilisé pour les différentes communications sur le concours
                                                </label>
                                        </div>
                                </div>
                        </div>


                        <div class="form-row">
                                <div class="form-group col-md-12">
                                        <label for="Adresse">*En quoi votre projet est – il innovant et bénéficie t-il au pays?</label>
                                        <textarea name="innovantprojet" value="{{ $user->projects->innovantprojet }}" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif de l’innovation (500 signes maximum espaces compris)">
                                        </textarea>
                                </div>
                                <div class="form-group col-md-12">
                                        <div class="form-check">
                                                <label class="form-check-label" for="gridCheck">
                                                        Les données de votre entité fournies dans le cadre des prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles. descriptif pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractères publiques seront divulguées pour les besoins de publicité du concours.
                                                        <br> Tous les champs marqués « * » sont obligatoires.
                                                </label>
                                        </div>
                                </div>
                        </div>

                        <a href="{{ url('projects/index') }}" class="btn btn-primary">Retour</a>
                        <button type="submit" class="btn btn-primary">Suivant</button>
                </form>
        </div>
</div>
@endsection