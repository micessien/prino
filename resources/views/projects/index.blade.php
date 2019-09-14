@extends('layouts.user')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading" style="padding-bottom: 25px;">
        <h3 class="panel-title">Informations sur l’entité</h3>
    </div>
    <div class="panel-body">

        <form action="/projects/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="entite"><span style="color:#ff0000">*</span> Personne morale ou physique</label>
                    <input required type="text" name="entite" value="{{ old('entite',($user->projects!=null ? $user->projects->entite:'')) }}" class="form-control{{ $errors->has('entite') ? ' is-invalid' : '' }}" id="entite" placeholder="entite">
                    @if ($errors->has('entite'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('entite') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="categorie"><span style="color:#ff0000">*</span> Catégorie</label>
                    <input required type="text" name="categorie" value="{{ old('categorie',($user->projects!=null ? $user->projects->categorie:'')) }}" class="form-control{{ $errors->has('categorie') ? ' is-invalid' : '' }}" id="categorie" placeholder="categorie">
                    @if ($errors->has('categorie'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('categorie') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="adresse"><span style="color:#ff0000">*</span> Adresse</label>
                    <input required type="text" name="adresse" value="{{ old('adresse',($user->projects!=null ? $user->projects->adresse:'')) }}" class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" id="adresse" placeholder="1234 Main St">
                    @if ($errors->has('adresse'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('adresse') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="boitepostal">Boite Postal </label>
                    <input type="text" name="boite_postale" value="{{ old('boite_postale',($user->projects!=null ? $user->projects->boite_postale:'')) }}" class="form-control{{ $errors->has('boite_postale') ? ' is-invalid' : '' }}" id="boitepostal" placeholder="boite postal">
                    @if ($errors->has('boite_postale'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('boite_postale') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ville"><span style="color:#ff0000">*</span> Ville </label>
                    <input name="ville" value="{{ old('ville',($user->projects!=null ? $user->projects->ville:'')) }}" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" id="ville" placeholder="">
                    @if ($errors->has('ville'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ville') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="nombremploye">Nombre d’employés à temps plein </label>
                    <input name="nombremploye" value="{{ old('nombremploye',($user->projects!=null ? $user->projects->nombremploye:'')) }}" type="text" class="form-control{{ $errors->has('nombremploye') ? ' is-invalid' : '' }}" id="nombremploye" placeholder="">
                    @if ($errors->has('nombremploye'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombremploye') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="descriptifentreprise">Descriptif de l’entreprise (le cas echeant) </label>
                <textarea name="descriptifentreprise" placeholder="Descriptif de l'entreprise (500 signes maximum espaces compris)" value="" class="form-control{{ $errors->has('descriptifentreprise') ? ' is-invalid' : '' }}" id="descriptifentreprise" rows="3">{{ old('descriptifentreprise',($user->projects!=null ? $user->projects->descriptifentreprise:'')) }}</textarea>
                @if ($errors->has('descriptifentreprise'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('descriptifentreprise') }}</strong>
                    </span>
                @endif
                <p class="small"><i class="fa fa-exclamation-circle"></i> Ce descriptif pourra être utilisé pour les différentes communications sur le concours</p>
            </div>

            <div class="form-group">
                <label for="boitepostal">Chiffre d’affaire ( millions XOF)</label>
                <input name="chiffredaffaire" value="{{ old('chiffredaffaire',($user->projects!=null ? $user->projects->chiffredaffaire:'')) }}" type="text" class="form-control{{ $errors->has('chiffredaffaire') ? ' is-invalid' : '' }}" id="ville" placeholder="20">
                @if ($errors->has('chiffredaffaire'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('chiffredaffaire') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="prixremporte">Labels et prix remportés </label>
                <input type="text" name="prixremporte" value="{{ old('prixremporte',($user->projects!=null ? $user->projects->prixremporte:'')) }}" class="form-control{{ $errors->has('prixremporte') ? ' is-invalid' : '' }}" id="ville" placeholder="Labels et prix remportés">
                @if ($errors->has('prixremporte'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('prixremporte') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="siteweb">Site Web</label>
                    <input type="text" name="siteweb" value="{{ old('siteweb',($user->projects!=null ? $user->projects->siteweb:'')) }}" class="form-control{{ $errors->has('siteweb') ? ' is-invalid' : '' }}" id="siteweb" placeholder="Site Web">
                    @if ($errors->has('siteweb'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('siteweb') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-4">siteweb
                    <label for="facebook">Facebook </label>
                    <input type="text" name="facebook" value="{{ old('facebook',($user->projects!=null ? $user->projects->facebook:'')) }}" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" id="facebook" placeholder="Facebook">
                    @if ($errors->has('facebook'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('facebook') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    <label for="twitter">Twitter </label>
                    <input type="text" name="twitter" value="{{ old('twitter',($user->projects!=null ? $user->projects->twitter:'')) }}" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" id="twitter" placeholder="Twitter">
                    @if ($errors->has('twitter'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('twitter') }}</strong>
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
            <button type="submit" class="btn btn-primary">Suivant</button>

        </form>

    </div>
</div>

@endsection