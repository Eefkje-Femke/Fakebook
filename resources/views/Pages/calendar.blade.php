<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='{{asset('assets/packages/core/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/packages/daygrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/packages/timegrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/packages/list/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/style.css')}}' rel='stylesheet' />

<script src='{{asset('assets/packages/core/main.js')}}'></script>
<script src='{{asset('assets/packages/interaction/main.js')}}'></script>
<script src='{{asset('assets/packages/daygrid/main.js')}}'></script>
<script src='{{asset('assets/packages/timegrid/main.js')}}'></script>
<script src='{{asset('assets/packages/list/main.js')}}'></script>

<script src='{{asset('assets/js/calendar.js')}}'></script>

</head>
<body>
@extends('layouts.app')
@section('content')
  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event'>My Event 1</div>
        <div class='fc-event'>My Event 2</div>
        <div class='fc-event'>My Event 3</div>
        <div class='fc-event'>My Event 4</div>
        <div class='fc-event'>My Event 5</div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

    <div id='calendar'></div>

    <div style='clear:both'></div>

  </div>
@endsection
