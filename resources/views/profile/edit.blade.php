@extends('layouts.app')

@section('content')
    <h1>Edit credentials/data</h1>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{action('ProfileController@update', $profiles->id)}}">
                
            </form>
        </div>
    </div>
@endsection