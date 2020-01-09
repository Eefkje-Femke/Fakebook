@extends('layouts.app')

@section('content')
    <h1>{{ Auth::user()->name}} </h1>
    {{--@foreach($iterable as $key)
        
    @endforeach--}}
@endsection
