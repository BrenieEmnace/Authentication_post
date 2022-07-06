@extends('base')

@section('content')

<h1>Recent Posts</h1>
<hr>

<div class="d-flex justify-content-between">
    @foreach($recentPosts as $post)

    <div style="width: 31%" class="card align-self-stretched">
        <div class="card-body">
            <table class="table table-bordered bg-primary">
                <tr>
                    <th scope = "row"> Title :</th><td>{{$post->title}}</td>
                    </tr>
                    <tr>
                    <th scope = "row"> Author :</th><td>{{$post->genre}}</td>
                    </tr>
              </table>
               
            </div>
            <div class="d-flex justify-content-center ">
                <a href="{{url('/posts/edit/' . $post->id)}}" class="btn btn-sm btn-danger" style="margin: 1%"> Edit </a>
            
       </div>
  </div>
    @endforeach
</div>
@endsection