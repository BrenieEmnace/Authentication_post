@extends('base')

@section('content')

<div class="row">
    <div class="col-md-6">
        <h1>Edit Music</h1>
        <hr>
        {!! Form::model($post, ['url'=>'/posts/'. $post->id, 'method'=>'put']) !!}

        <div class="mb-3">
        {!! Form::label ("title", "Title") !!}
        {!! Form::text("title", null, ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
        {!! Form::label ("genre", "Genre") !!}
        {!! Form::textarea ("genre", null, ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">
                Update Movie
            </button>
        </div>

        {!! Form::close() !!}
    </div>
</div>
@endsection