@extends('layouts.app')
@section('content')
  <div class="jumbotron">
    <a href="{{route('posts.index')}}" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
      {!!$post->body!!}
      <!-- синтаксис !! нужен для того, чтобы шаблонизатор пропарсил HTML теги -->
    </div>
    <hr>
    <p><small>{{$post->created_at}}</small></p>
  </div>
@endsection
