@extends('layouts.user')

@section('content')
<div class="container">

        <div class="alert alert-primary" role="alert">
                Le Marche
        </div>
            
    <div class="row justify-content-center">

            <form action="/projects/create3" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
            <form>

                      <div class="form-group col-md-12">
                            <label for="categorie">*Qui sont vos concurrents ?</label>
                            <textarea 
                            name="concurrent" value="{{ $user->projects->concurrent }}"
                            class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Descriptif de la concurrence (500 signes maximum espaces compris)">
                                </textarea>                         
                        </div>

                      <div class="form-group col-md-12">
                            <label for="equipe">*Avez-vous (eu) de la main d’œuvre qualifiée pour le développement  de votre projet ? 
                                Combien de personnes avez-vous / comptez vous embaucher pour le développement de votre projet ?</label>
                            <textarea 
                            name="equipe" value="{{ $user->projects->equipe }}"
                            class="form-control" id="exampleFormControlTextarea1" rows="3" 
                            placeholder="Descriptif des compétences nécessaires au développement du projet (700 signes maximum espaces compris)">
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
