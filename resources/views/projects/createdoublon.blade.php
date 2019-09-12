@extends('layouts.user')

@section('content')

<div class="alert alert-primary" role="alert">
        Informations sur l’entité
</div>

        <form action="/projects/create" method="POST">
            {{ csrf_field()}}

                <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="entite">Entité</label>
                                <input type="text" name="entite" value="{{ $user->projects->entite }}"  class="form-control" id="entite" placeholder="entite">
                          </div>
                          <div class="form-group col-md-6">
                                <label for="categorie">Catégorie</label>
                            <input type="text" name="categorie" value="{{ $user->projects->categorie }}" class="form-control" id="categorie" placeholder="categorie">
                        </div>
                </div>
                  
                  
            <div class="form-row">

                      <div class="form-group col-md-6">
                            <label for="Adresse">Adresse</label>
                            <input type="text" name="adresse" value="{{ $user->projects->adresse }}" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                          <div class="form-group col-md-6">
                                  <label for="boitepostal">*Boite Postal </label>
                            <input type="text" name="boite_postale" value="{{ $user->projects->boite_postale }}" class="form-control" id="boitepostal" placeholder="boite postal">
                          </div>

            </div>
            <div class="form-row">

                        <div class="form-group col-md-6">
                                        <label for="boitepostal">*Ville   </label>
                                        <input name="ville" value="{{ $user->projects->ville }}" type="text" class="form-control" id="ville" placeholder="20">
                                    </div>

                        <div class="form-group col-md-6">
                                <label for="boitepostal">*Nombre d’employés à temps plein   </label>
                                <input name="nombremploye" value="{{ $user->projects->nombremploye }}" type="text" class="form-control"  placeholder="20">
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="boitepostal">*Descriptif de l’entreprise   </label>
                                <textarea  name="descriptifentreprise" value="{{ $user->projects->descriptifentreprise }}"  class="form-control" id="exampleFormControlTextarea1" rows="3">
                                    </textarea>                    
                        </div>
                    </div>



                    <div class="form-group">
                            <label for="boitepostal">*Chiffre d’affaire ( millions XOF) </label>
                                <input name="chiffredaffaire" value="{{ $user->projects->chiffredaffaire }}" type="text" class="form-control" id="ville" placeholder="20">
                    </div>



                    <div class="form-group">
                            <label for="prixremporte">*Labels et prix remportés   </label>
                            <input type="text" name="prixremporte" value="{{ $user->projects->prixremporte }}" class="form-control" id="ville" placeholder="Labels et prix remportés">
                    </div>



                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label" for="gridCheck">
                                Les données de votre entité fournies dans le cadre des prix de l’innovation du Ministère du Pétrole, de l’Energie et des Energies Renouvelables seront confidentielles.  descriptif  pourra être utilisé pour les différentes communications sur le concours. Seules les données à caractères publiques seront divulguées pour les besoins de publicité du concours.
                                Tous les champs marqués « * » sont obligatoires.
                        </label>
                      </div>
                    </div>
                    <button type="submit"  class="btn btn-primary">Suivant</button>

        </form>
           
@endsection
