@extends('master')

@section('content')
  <div class="title m-b-md">
    Hello Yose
  </div>

  <div class="links">
    <a href="https://iprice.my">Team Name</a>
    <a href="https://github.com/ShadOoW/yose">GitHub</a>
    <a href="{{ url('minesweeper') }}">Minesweeper</a>
    <a id="contact-me-link" href="{{ url('contact-me') }}">Contact Us</a>
    <a id="repository-link" href="{{ url('readme') }}">Readme</a>
    <a id="ping-challenge-link" href="{{ config('app.api') }}/ping">Portfolio - Ping</a>
  </div>
@stop
