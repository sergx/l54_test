@extends('layouts.app')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-center">
        <h1>{{$title}}</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p>
          <a class="btn btn-primary btn-lg" href="/login">Login</a>
          <a class="btn btn-success btn-lg" href="/register">Register</a>
        </p>
      </div>
    </div>
@endsection
