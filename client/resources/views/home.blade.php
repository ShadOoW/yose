@extends('master')

@section('content')
  <div class="title m-b-md">
    Hello Yose
  </div>

  <div class="links">
    <a href="https://iprice.my">Team Name</a>
    <a href="https://github.com/ShadOoW/yose">GitHub</a>
    <a id="repository-link" href="{{ url('readme') }}">Readme</a>
    <a id="ping-challenge-link" href="{{ config('app.api') }}/ping" target="_blank">Portfolio - Ping</a>
  </div>
@stop
