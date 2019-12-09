@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($post) > 1)
    @foreach($post as $post)
        <div class="card" style="padding: 5px;margin: 10px;">
            <h3>{{ $post->title }}</h3>
        <small>Written on {{$post->created_at}}</small>
        </div>
    @endforeach
    @else
    <p>No posts found</p>
    @endif
@endsection
