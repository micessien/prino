@extends('layouts.user')

@section('content')
<div class="container">

        <div class="alert alert-primary" role="alert">
                La Règlementation et le Financement
        </div>
            
    <div class="row justify-content-center">

        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}
            <form>

                      <div class="form-group col-md-12">
                            <label for="categorie">*Votre projet est-il conforme à la règlementation de la Côte D’Ivoire ? Quel texte faut-il prendre pour le rendre conforme ?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Descriptif du cadre règlementaire (500 signes maximum espaces compris)">
                                </textarea>                         
                        </div>

                      <div class="form-group col-md-12">
                            <label for="Adresse">*A quel stade de développement est le projet ?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" 
                            placeholder="Descriptif de l’évolution du projet (500 signes maximum espaces compris)">
                                </textarea>                             
                        </div>

                        <div class="form-group col-md-12">
                                <label for="Adresse">*Quels sont vos besoins de financement ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" 
                                placeholder="Descriptif du financement du projet (1000 signes maximum espaces compris)">
                                    </textarea>                             
                        </div>

                        <div class="form-group col-md-12">
                                    <label for="Adresse">*Quelle est la répartition du capital Social ?</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" 
                                    placeholder="Descriptif de la structure du Capital de l’entité  (200 signes maximum espaces compris)">
                                        </textarea>                             
                        </div>

                        <div class="form-group">
                                <div class="form-check">
                                  <label class="form-check-label" for="gridCheck">
                                        Les données de votre entité fournies dans le cadre des prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles.  descriptif  pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractères publiques seront divulguées pour les besoins de publicité du concours.
Tous les champs marqués « * » sont obligatoires.
                                  </label>
                                </div>
                        </div>

                    </div>

                   <button type="submit" class="btn btn-primary">Suivant</button>
                  </form>

    </div>
</div>
@endsection
