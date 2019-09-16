@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
        <!-- <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"> -->
            <h2>Bonjour {{ $user->prenom }} {{ $user->name }} | ESPACE MODIFICATION</h2>

            {{-- <form enctype="multipart/form-data" action="/profile" method="POST"> --}}

            <form action="/profile" method="POST">


                {{-- {{ method_field('patch') }}   --}}
                
                 <div class="form-group">
                        <label for="name">Votre Nom</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="{{ $user->name }}"
                         placeholder="Entrer votre nom" />
                </div> 

                <div class="form-group">
                        <label for="prenom">Votre Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" aria-describedby="prenom" value="{{ $user->prenom }}"
                         placeholder="Entrer votre prenom"/>
                </div> 

                <div class="form-group">
                    <label for="prenom">Genre</label>
                    <input type="text" name="genre" class="form-control" id="genre" aria-describedby="genre" value="{{ $user->genre }}"
                     placeholder="Entrer votre genre"/>
                </div>
                
                <div class="form-group">
                    <label for="prenom">Votre Entreprise</label>
                    <input type="text" name="entreprise" class="form-control" id="prenom" aria-describedby="entreprise" value="{{ $user->entreprise }}"
                     placeholder="Entrer votre entreprise"/>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" aria-describedby="email" value="{{ $user->email }}"
                     placeholder="Entrer votre Email"/>
                </div>

                <div class="form-group">
                    <label for="prenom">Votre Telephone</label>
                    <input type="text" name="telephone" class="form-control" id="telephone" aria-describedby="telephone" value="{{ $user->telephone }}"
                     placeholder="Entrer votre telephone"/>
                </div>


                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="submit" value="Modifier" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection

