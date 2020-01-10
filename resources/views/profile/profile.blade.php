@extends('layouts.app')

@section('content')
<h1>{{ Auth::user()->name}} </h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{$profiles->name}}</td>
            <td>{{$profiles->email}}</td>
        </tr>
    </table>
   
@endsection
