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
    <p><small>{{$post->created_at}} by {{$post->user->name}}</small></p>
    <hr>
    @if(!Auth::guest() && Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
      {!!Form::close()!!}
    @endif
  </div>
@endsection
