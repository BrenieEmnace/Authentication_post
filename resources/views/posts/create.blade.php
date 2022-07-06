@extends('base')

@section('content')

<div class="row">
    
 <div class="col-md-6 offset-md-3">
 <h1> Movie </h1>
    <hr>
<div class="card mt-5 border-dark bg-secondary">
 <div class="card-body">
    
    {!! Form::open(['url' => '/posts', 'method'=>'post']) !!}

    <div class="mb-2">
    {!! Form::label("title", "Title",) !!}
    {!! Form::text("title", null, ['class'=>'form-control']) !!}
    </div>

    <div class="mb-2">
    {!! Form::label("genre", "Genre",) !!}
    {!! Form::text("genre", null, ['class'=>'form-control']) !!}
    </div>

    <div class="mb-2 d-flex justify-content-center">
        <button class="btn btn btn-primary" type=" submit">
            Save
        </button>
    </div>


    {!! Form::close() !!}
         </div>
      </div>
  </div>
</div>
@endsection