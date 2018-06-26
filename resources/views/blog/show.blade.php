@extends('layouts\app')

@section('content')
  <h1>{{$post->title}}</h1>

  <p class="card-info">Written on {{$post->created_at}}</p>

  <div class="card mb-2">
    <div class="card-body">
      <p class="card-text">{{$post->body}}</p>
    </div>
  </div>
  <a href="/posts" class="btn btn-primary">Go back</a>
@endsection
