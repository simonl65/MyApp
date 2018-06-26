@extends('layouts\app')

@section('content')
  <div class="jumbotron text-center">
    <h1 class="display-4">{{$page_heading}}</h1>
    <p class="lead">This page is served via PagesController@index</p>
    <p>It's nothing special, but it shows what I've learned about Laravel so far.</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
  </div>
@endsection
