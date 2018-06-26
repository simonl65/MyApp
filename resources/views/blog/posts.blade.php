@extends('layouts\app')

@section('content')
  <h1>{{$page_heading}}</h1>

  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card mb-2">
        <div class="card-body">
          <h2 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
          <p class="card-info">Written on {{$post->created_at}}</p>
        </div>
      </div>
    @endforeach
  @else
    <p>No blog posts found.</p>
  @endif
@endsection
