@extends('master')

@section('content')
  <div id="title" class="title m-b-md">
    Minesweeper
  </div>

  <?php
    $row = 0;
    $column = 0;
  ?>

  <div class="grid flex">
    @for ($x = 0 ; $x < 64 ; $x++)
      @if ($x % 8 === 0)
        <?php
          $row += 1;
          $column = 1;
        ?>
      @else
        <?php
          $column += 1;
        ?>
      @endif

      <div id="{{ $row . 'x' . $column }}" class="cell">

      </div>
    @endfor
  </div>
@stop
