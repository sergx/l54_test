@extends('layouts.app')
@section('content')
    <h1>Create post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title', '', ['class' => 'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body', 'Best time to create a new post is <strong>now!<strong>', ['class' => 'form-control','placeholder' => 'Body text', 'id' => 'article-ckeditor'])}}
    </div>
    <div class="form-group">
      {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
