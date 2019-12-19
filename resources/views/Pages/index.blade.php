<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Fakebook')}}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <div class="jumbotron text-center">
                <div class="container">
                    <h1>{{$title}}</h1>
                    <p>Project Fakebook</p>
                    <p><a class="btn btn-primary btn-lg" href="/login" role="button">log in</a> <a class="btn btn-success btn-lg" href="/register" role="button">register</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
