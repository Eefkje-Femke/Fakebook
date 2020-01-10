@extends('layouts.app')
@section('content')
    <h1>settings page of {{Auth::user()->name}}</h1>
    <p>$user = Auth::user();
        print_r($user);</p>
@endsection

{{--
     button all posts/your posts if else in functie?
--}}
