@extends('layouts.app')

@section('content')
    <h1>{{ Auth::user()->name}} </h1>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($profiles as $profile)
        <tr>
            <td>{{$profile['id']}}</td>
            <td>{{$profile['name']}}</td>
            <td>{{$profile['email']}}</td>
        </tr>
        @endforeach
    </table>
   
@endsection
