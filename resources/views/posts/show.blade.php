@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-outline-dark" style="margin-top: 15px;">Go Back</a>
    <h1>{{$post->title}}</h1>
        <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
        <div>
            {{$post->body}}
        </div>
        <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>

    {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',  'class' => 'float-right'] )}}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {{Form::close()}}
@endsection