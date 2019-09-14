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
                    <input type="text" name="entite" value="{{ old('entite',($user->projects!=null ? $user->projects->entite:'')) }}" class="form-control" id="entite" placeholder="entite">
                </div>
                <div class="form-group col-md-6">
                    <label for="categorie"><span style="color:#ff0000">*</span> Catégorie</label>
                    <input type="text" name="categorie" value="{{ old('categorie',($user->projects!=null ? $user->projects->categorie:'')) }}" class="form-control" id="categorie" placeholder="categorie">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="adresse"><span style="color:#ff0000">*</span> Adresse</label>
                    <input type="text" name="adresse" value="{{ old('adresse',($user->projects!=null ? $user->projects->adresse:'')) }}" class="form-control" id="adresse" placeholder="1234 Main St">
                </div>
                <div class="form-group col-md-6">
                    <label for="boitepostal">Boite Postal </label>
                    <input type="text" name="boite_postale" value="{{ old('boite_postale',($user->projects!=null ? $user->projects->boite_postale:'')) }}" class="form-control" id="boitepostal" placeholder="boite postal">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ville"><span style="color:#ff0000">*</span> Ville </label>
                    <input name="ville" value="{{ old('ville',($user->projects!=null ? $user->projects->ville:'')) }}" type="text" class="form-control" id="ville" placeholder="">
                </div>

                <div class="form-group col-md-6">
                    <label for="nombremploye">Nombre d’employés à temps plein </label>
                    <input name="nombremploye" value="{{ old('nombremploye',($user->projects!=null ? $user->projects->nombremploye:'')) }}" type="text" class="form-control" id="nombremploye" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="descriptifentreprise">Descriptif de l’entreprise (le cas echeant) </label>
                <textarea name="descriptifentreprise" placeholder="Descriptif de l'entreprise (500 signes maximum espaces compris)" value="{{ old('descriptifentreprise',($user->projects!=null ? $user->projects->descriptifentreprise:'')) }}" class="form-control" id="descriptifentreprise" rows="3"></textarea>
                <p class="small"><i class="fa fa-exclamation-circle"></i> Ce descriptif pourra être utilisé pour les différentes communications sur le concours</p>
            </div>

            <div class="form-group">
                <label for="boitepostal">Chiffre d’affaire ( millions XOF)</label>
                <input name="chiffredaffaire" value="{{ old('chiffredaffaire',($user->projects!=null ? $user->projects->chiffredaffaire:'')) }}" type="text" class="form-control" id="ville" placeholder="20">
            </div>

            <div class="form-group">
                <label for="prixremporte">Labels et prix remportés </label>
                <input type="text" name="prixremporte" value="{{ old('prixremporte',($user->projects!=null ? $user->projects->prixremporte:'')) }}" class="form-control" id="ville" placeholder="Labels et prix remportés">
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="siteweb">Site Web</label>
                    <input type="text" name="siteweb" value="{{ old('siteweb',($user->projects!=null ? $user->projects->siteweb:'')) }}" class="form-control" id="siteweb" placeholder="Site Web">
                </div>
                <div class="form-group col-md-4">
                    <label for="facebook">Facebook </label>
                    <input type="text" name="facebook" value="{{ old('facebook',($user->projects!=null ? $user->projects->facebook:'')) }}" class="form-control" id="facebook" placeholder="Facebook">
                </div>
                <div class="form-group col-md-4">
                    <label for="twitter">Twitter </label>
                    <input type="text" name="twitter" value="{{ old('twitter',($user->projects!=null ? $user->projects->twitter:'')) }}" class="form-control" id="twitter" placeholder="Twitter">
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