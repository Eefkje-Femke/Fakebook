@extends('layouts.app')

@section('content')
    <h1>Edit credentials/data</h1>
    {{--change name and email--}}
    {!! Form::open(['action' => ['ProfileController@update', $profiles->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Your Name')}}
            {{Form::text('name', $profiles->name, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('title', 'Your Email')}}
            {{Form::text('email', $profiles->email, ['class' => 'form-control'])}}
        </div> 
        {{Form::hidden('_method', 'PUT')}}{{--hidden put method--}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    {{--change avatar--}}
    {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST',  'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Your Avatar')}}<br>
            {{Form::file('avatar')}}  
        </div>  
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection