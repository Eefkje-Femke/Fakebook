@extends('layouts.app')
@section('content')
    <h1>Follow page of {{Auth::user()->name}}</h1>
    <div>
        <h3>Who do you follow?</h3>
        @foreach($users as $user)
            <p>{{ $user }}</p>
            {{-- <p>{{ $user->name }}</p> --}}
        @endforeach
    </div>
    <div>
    </div>
@endsection

{{--
    wie volg jij?
--}}
