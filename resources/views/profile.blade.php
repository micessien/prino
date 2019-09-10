@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>Bonjour {{ $user->prenom }} {{ $user->name }} | ESPACE MODIFICATION</h2>

            <form enctype="multipart/form-data" action="/profile" method="POST">
                {{ method_field('patch') }}  
                
                 <div class="form-group">
                        <label for="name">Votre Nom</label>
                        <input type="name" class="form-control" id="name" aria-describedby="name" value="{{ $user->name }}" placeholder="Entrer votre nom">
                </div> 

                <div class="form-group">
                        <label for="prenom">Votre Prénom</label>
                        <input type="prenom" class="form-control" id="prenom" aria-describedby="prenom" value="{{ $user->prenom }}" placeholder="Entrer votre prenom">
                </div> 

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection

