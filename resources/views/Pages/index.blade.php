@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
            <h1>{{$title}}</h1>
            <p>Project Fakebook</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">log in</a> <a class="btn btn-success btn-lg" href="/register" role="button">register</a></p>
        </div>
    </div>
@endsection
