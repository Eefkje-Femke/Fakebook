@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img class="rounded" style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                            <small>Written on {{$post->created_at}}</small>
                        </div>
                    </div> 
                </div>               
            </div>
        @endforeach
        {{$posts->links()}}{{--paginatie--}}
     @else
    <p>No posts found</p>
    @endif 
@endsection
