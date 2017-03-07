<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
  <link rel="manifest" href="/icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Laravel</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.4.4/randomColor.min.js"></script>
  <script src="/js/grid.js" type="application/javascript"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
    html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }


    .members {
      padding-top: 10px;
    }
    .members > span {
      padding: 5px;
    }

    #contact-me > div > span {
     padding: 10px;
    }

    .social {
      padding-top: 150px;
    }

    .social > a {
      text-decoration: none;
      padding: 5px;
      color: blue;
    }

    .social > span {
      display: block;
    }
    .info {
      background-color: lightcyan;
      padding: 50px;
      border-radius: 20px;
    }


    * {
      box-sizing: border-box;
    }

    .grid {
      display: flex;
      flex-wrap: wrap;
      width: 500px;
    }

    .grid > div {
      width: 62.5px;
      height: 62.5px;
      background-color: red;
      border: solid 1px #333;
    }

    .grid > div.lost {
      background-color: red !important;
    }

  </style>
</head>
<body>
<div class="flex-center position-ref full-height">
  @if (Route::has('login'))
    <div class="top-right links">
      @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
      @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
      @endif
    </div>
  @endif

  <div class="content">
    @yield('content')
  </div>
</div>

<script>
  function load () {
    var values = [].concat.apply([], this.document.grid);

    var elements = this.document.querySelectorAll('.grid > div');
    for (var i = 0 ; i < elements.length ; i++) {
      elements[i].setAttribute('data-value', values[i]);
      if (values[i] === 'bomb') {
        elements[i].classList.add('lost');
      }
      elements[i].onclick = function() {
        if (this.getAttribute('data-value') === 'bomb') {
          this.classList.add('lost');
        }
      };
    }
  };
</script>
@yield('javascript')
</body>
</html>
