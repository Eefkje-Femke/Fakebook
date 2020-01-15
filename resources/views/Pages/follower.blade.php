@extends('layouts.app')
@section('content')
    <h1>Follow page of {{Auth::user()->name}}</h1>
    <div>
        <h3>Who do you follow?</h3>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>                            
                @foreach($Usersfollowing as $user)   
                    <tr>                         
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>                              
                @endforeach                            
        </table>
    </div>
    <div>
        <h3>Who is following you?</h3>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>                            
                @foreach($followingUsers as $followingUser)   
                    <tr>                         
                        <td>{{$followingUser->name}}</td>
                        <td>{{$followingUser->email}}</td>
                    </tr>                              
                @endforeach                            
        </table>
    </div>
    <div>
    </div>
@endsection
