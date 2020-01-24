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
        <h3 style="margin-left:15px;">Lijst gebruikers</h3>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Follow</th>
                <th>Unfollow</th>
            </tr>                            
                @foreach($users as $user)   
                    <tr>                         
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a class="btn btn-primary" role="button" href="{{ route('followUser', ['user_id' => $user->id]) }}">
                            Follow User
                        </a></td>
                        <td><a class="btn btn-danger" role="button" href="{{ route('unfollowUser', ['user_id' => $user->id]) }}">
                            Unfollow User
                        </a></td>
                    </tr>                              
                @endforeach                            
        </table>
       {{ $users->links() }}{{--paginatie --}}
    </div>
@endsection

