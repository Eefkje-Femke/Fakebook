@extends('layouts.app')

@section('content')
<h1>{{ Auth::user()->name}} </h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
        </tr>
        <tr>
            <td>{{$profiles->name}}</td>
            <td>{{$profiles->email}}</td>
            <td><a href="{{action('ProfileController@edit', $profiles->id)}}">Edit</a></td>
        </tr>
    </table>
   
@endsection
