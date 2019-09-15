@extends('layouts.user')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading" style="padding-bottom: 25px;">
                <h3 class="panel-title">Informations sur l’entité</h3>
        </div>
        <div class="panel-body">
                <h4>M/Mme <strong>{{ Auth::user()->prenom }} {{ Auth::user()->name }}</strong> - <strong>{{ Auth::user()->email }}</strong></h4>
                <form action="/projects/create2" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="telephone"><span style="color:#ff0000">*</span> Téléphone</label>
                                        <input name="telephone" value="{{ $user->projects->telephone }}" type="text" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" id="telephone" placeholder="+225 00000000">
                                        @if ($errors->has('telephone'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                                </span>
                                        @endif
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="entite">Fonction occupée dans l’entreprise</label>
                                        <input name="fonctionoccupe" value="{{ $user->projects->fonctionoccupe }}" type="text" class="form-control{{ $errors->has('entite') ? ' is-invalid' : '' }}" id="entite" placeholder="entite">
                                        @if ($errors->has('fonctionoccupe'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fonctionoccupe') }}</strong>
                                                </span>
                                        @endif
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-12">
                                        <label for="categorie"><span style="color:#ff0000">*</span> Descriptif du projet / de l’activité</label>
                                        <textarea name="descriptifprojet" placeholder="Descriptif du projet (1500 signes maximum espaces compris)" value="" class="form-control{{ $errors->has('descriptifprojet') ? ' is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif du projet (2500 signes maximum espaces compris)" required>{{ old('descriptifprojet',($user->projects!=null ? $user->projects->descriptifprojet:'')) }}</textarea>
                                        @if ($errors->has('descriptifprojet'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('descriptifprojet') }}</strong>
                                                </span>
                                        @endif
                                        <p class="small"><i class="fa fa-exclamation-circle"></i> Ce descriptif pourra être utilisé pour les différentes communications sur le concours</p>
                                </div>
                        </div>


                        <div class="form-row">
                                <div class="form-group col-md-12">
                                        <label for="Adresse"><span style="color:#ff0000">*</span> En quoi votre projet est-il innovant ? Comment peut il être bénéfique au pays?</label>
                                        <textarea name="innovantprojet" placeholder="Descriptif de l'innovation (500 signes maximum espaces compris)" value="" class="form-control{{ $errors->has('innovantprojet') ? ' is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptif de l’innovation (500 signes maximum espaces compris)">{{ old('innovantprojet',($user->projects!=null ? $user->projects->innovantprojet:'')) }}</textarea>
                                        @if ($errors->has('innovantprojet'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('innovantprojet') }}</strong>
                                                </span>
                                        @endif
                                </div>
                        </div>
                        <div class="form-group">
                                <p class="small">
                                        <i class="fa fa-exclamation-circle"></i>
                                        Les données fournies dans le cadre du prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles. Le descriptif pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractère public seront divulguées pour les besoins de publicité du concours.
                                        Tous les champs marqués « * » sont obligatoires.
                                </p>
                        </div>

                        <a href="{{ url('projects/index') }}" class="btn btn-primary">Retour</a>
                        <button type="submit" class="btn btn-primary">Suivant</button>
                </form>
        </div>
</div>
@endsection