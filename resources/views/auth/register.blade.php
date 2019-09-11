@extends('layouts.main')

@section('content')
<!-- Start Banner 
============================================= -->
<div class="banner-area auto-height text-center text-normal text-light shadow dark-hard bg-fixed" style="background-image: url(assets/img/banner/11.jpg);">
    <div class="container">
        <div class="row justify-content-center padding-top-160">
            <div class="col-md-12">
                <div class="card card-register">
                    <div class="card-header text-shadow-10 text-white"><h1>{{ __('Prix Hydrocarbures') }}</h1></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="register">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="genre" type="text" placeholder="M" class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" name="genre" value="{{ old('genre') }}" required autofocus>

                                        @if ($errors->has('genre'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('genre') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="name" type="text" placeholder="Nom" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="prenom" type="text" placeholder="Prénom" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                        @if ($errors->has('prenom'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('prenom') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="entreprise" type="text" placeholder="Entreprise" class="form-control{{ $errors->has('entreprise') ? ' is-invalid' : '' }}" name="entreprise" value="{{ old('entreprise') }}" required autofocus>

                                        @if ($errors->has('entreprise'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('entreprise') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="telephone" type="text" placeholder="Téléphone" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                        @if ($errors->has('entreprise'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="Adresse Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="password" type="password" placeholder="Mot de passe" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="password-confirm" placeholder="Confirmer mot de passe" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary btn-vert btn-inscrire btn-lg">
                                    {{ __('Suivant') }}
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
@endsection
