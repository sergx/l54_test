@extends('layouts.app')
@section('content')
    <h1>Edit post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{Form::hidden('_method', 'PUT')}}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title', $post->title, ['class' => 'form-control','placeholder' => 'title'])}}
    </div>
    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body', $post->body, ['class' => 'form-control','placeholder' => 'Body text', 'id' => 'article-ckeditor'])}}
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
