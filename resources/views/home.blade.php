@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Welcome {{Auth::user()->name}}!</h1>
                        You are logged in!
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
                </div>
            </div>
        </div>
    </div>
@endsection
