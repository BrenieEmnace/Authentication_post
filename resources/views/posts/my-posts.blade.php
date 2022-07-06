@extends('base')

@section('content')

<div class="div float-end mt-2">
    <a href="{{url('/posts/create')}}" class="btn btn-secondary">Create new Movie</a>
</div>


<h1>My Movie</h1>
<hr>

<div class="d-flex justify-content-between">
    @foreach($myPosts as $post)

    <div class="card align-self-stretched border-warning mb-3 " style="width: 31%">
    <div class="card-header bg-dark text-white text-center">Movie</div>
       <div class="card-body bg-primary">
            <div class="card-title">
            <table class="table table-bordered bg-light">
                <tr>
                    <th scope = "row"> Title :</th><td>{{$post->title}}</td>
                    </tr>
                    <tr>
                    <th scope = "row"> Genre :</th><td>{{$post->genre}}</td>
                    <tr>
                    </tr>
              </table>
               
            </div>
            <div class="mb-2 d-flex justify-content-center">
                <a href="{{url('/posts/edit/' . $post->id)}}" class="btn btn-sm btn-dark" style="margin: 1%"> Edit </a>
            </div>
            
       </div>
  </div>
    @endforeach
</div>

@endsection