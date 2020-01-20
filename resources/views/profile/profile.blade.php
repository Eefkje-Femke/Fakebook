@extends('layouts.app')

@section('content')
<h1>{{ Auth::user()->name}} </h1>
<img src="/storage/avatars/{{Auth::user()->avatar}}" class="rounded-circle" style="max-width:200px; height:200px; margin-bottom:10px">  
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
