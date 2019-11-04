@extends('layouts.user')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading" style="padding-bottom: 25px;">
                <h3 class="panel-title">Pièces Jointes <small class="text-danger">(Après avoir cliqué sur "j'ai terminer, je valide" veuillez patientez SVP pour le téléchargement des fichier)</small></h3>
        </div>
        <div class="panel-body">

                <form action="/projects/create4" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile1">Plan de financement projet (doc,docx)</label>
                                        <input name="planfin" value="{{ $user->projects->planfin }}" type="file" class="form-control-file{{ $errors->has('planfin') ? ' is-invalid' : '' }}" id="exampleFormControlFile1">
                                        @if ($errors->has('planfin'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('planfin') }}</strong>
                                        </span>
                                        @endif
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile2">Présentation PDF (Recommandée) ou Powerpoint du Projet (pdf,ppt,pptx)</label>
                                        <input name="powerpoint" value="{{ $user->projects->powerpoint }}" type="file" class="form-control-file{{ $errors->has('powerpoint') ? ' is-invalid' : '' }}" id="exampleFormControlFile2">
                                        @if ($errors->has('powerpoint'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('powerpoint') }}</strong>
                                        </span>
                                        @endif
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile3">Business Plan (xls,xlsx)</label>
                                        <input name="businessplan" value="{{ $user->projects->businessplan }}" type="file" class="form-control-file{{ $errors->has('businessplan') ? ' is-invalid' : '' }}" id="exampleFormControlFile3">
                                        @if ($errors->has('businessplan'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('businessplan') }}</strong>
                                        </span>
                                        @endif
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile4">Declaration fiscale (ppt,pptx,doc,docx,pdf,xls,xlsx)</label>
                                        <input name="declarationfiscale" value="{{ $user->projects->declarationfiscale }}" type="file" class="form-control-file{{ $errors->has('declarationfiscale') ? ' is-invalid' : '' }}" id="exampleFormControlFile4">
                                        @if ($errors->has('declarationfiscale'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('declarationfiscale') }}</strong>
                                        </span>
                                        @endif

                                </div>


                        </div>

                        <a href="{{ url('projects/index4') }}" class="btn btn-primary">Retour</a>
                        <button type="submit" class="btn btn-primary">J'ai terminé, je valide</button>
                </form>
        </div>
</div>

@endsection