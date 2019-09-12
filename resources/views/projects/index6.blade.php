@extends('layouts.user')

@section('content')
<div class="container">

        <div class="alert alert-primary" role="alert">
                Pièces Jointes
        </div>
            
    <div class="row justify-content-center">

                <form action="/projects/create5" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}} 

                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Plan de financement projet (.docx)</label>
                                    <input name="planfin" value="{{ $user->projects->planfin }}" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>  
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlFile1">Présentation Powerpoint du Projet</label>
                                <input name="powerpoint" value="{{ $user->projects->powerpoint }}" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>  


                    </div>  

                    <button type="submit" class="btn btn-primary">Suivant</button>


             
              
              
              </form>        

    </div>
</div>


@endsection
