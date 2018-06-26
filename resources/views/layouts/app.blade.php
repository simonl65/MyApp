<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@if(isset($title)) {{$title}} | @endif{{config('app.name')}}</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  @include('incs/nav')
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
