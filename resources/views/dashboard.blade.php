@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h3>Your Blog Posts</h3>
                    <a href="/posts/create" class="btn btn-primary">Create post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
