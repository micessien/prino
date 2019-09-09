@extends('layouts.user')

@section('content')

    <div class="alert alert-primary" role="alert">
        Informations sur l’entité
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        {{ Form::hidden('userid',$user->id, old('userid'), ['class' => 'form-control', 'display' =>'none', 'id' => 'userid']) }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="entite">Entité</label>

                {{ Form::text('entite', old('entite'), ['class' => 'form-control', 'placeholder' => 'Entite', 'id' => 'entite']) }}
            </div>
            <div class="form-group col-md-6">
                <label for="categorie">Catégorie</label>
                {{ Form::text('categorie', old('categorie'), ['class' => 'form-control', 'placeholder' => 'categorie', 'id' => 'categorie']) }}
            </div>
        </div>


        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="Adresse">Adresse</label>
                {{ Form::text('adresse', old('adresse'), ['class' => 'form-control', 'placeholder' => '1234 Main St', 'id' => 'adresse']) }}
            </div>
            <div class="form-group col-md-6">
                <label for="boitepostal">*Boite Postal </label>
                {{ Form::text('boitepostal', old('boitepostal'), ['class' => 'form-control', 'placeholder' => 'boite postal', 'id' => 'boitepostal']) }}
            </div>

        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="ville">Ville</label>
                {{ Form::text('ville', old('ville'), ['class' => 'form-control', 'placeholder' => 'Ville', 'id' => 'ville']) }}

            </div>

            <div class="form-group col-md-6">
                <label for="boitepostal">*Nombre d’employés à temps plein </label>
                {{ Form::number('nombremploye', old('nombremploye'), ['class' => 'form-control', 'placeholder' => '20', 'id' => 'nombremploye']) }}
            </div>
        </div>

        <div class="form-group">
            <label for="descriptifentreprise">*Descriptif de l’entreprise </label>
            {{ Form::textarea('descriptifentreprise', old('descriptifentreprise'), ['class' => 'form-control', 'id' => 'descriptifentreprise', 'rows' => '3']) }}
        </div>
        </div>


        <div class="form-group">
            <label for="chiffredaffaire">*Chiffre d’affaire ( millions XOF) </label>
            {{ Form::number('chiffredaffaire', old('chiffredaffaire'), ['class' => 'form-control', 'id' => 'chiffredaffaire', 'placeholder' => '10.000.000']) }}

        </div>


        <div class="form-group">
            <label for="prixremporte">*Labels et prix remportés </label>
            {{ Form::text('prixremporte', old('prixremporte'), ['class' => 'form-control', 'id' => 'prixremporte', 'placeholder' => 'Labels et prix remportés']) }}
        </div>


        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label" for="gridCheck">
                    Les données de votre entité fournies dans le cadre des prix de l’innovation du Ministère du Pétrole,
                    de l’Energie et des Energies Renouvelables seront confidentielles. descriptif pourra être utilisé
                    pour les différentes communications sur le concours. Seules les données à caractères publiques
                    seront divulguées pour les besoins de publicité du concours.
                    Tous les champs marqués « * » sont obligatoires.
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Suivant</button>
    </form>

@endsection
