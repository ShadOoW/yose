<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
    </style>
</head>
<body onload="bootstrap()">
<div class="flex-center position-ref full-height">
    <div class="content">
        <div id="astroport-name" class="title m-b-md">
            Hello Yose from Team Name team.
        </div>

        <div class="m-b-md">
            <div id="gate-1">
                <div id="ship-1" class="ship">
                    <input id='ship' type='text'/><button id='dock'>Dock</button>
                </div>
            </div>
            <div id="gate-2">
                <div id="ship-2" class="ship">--None--</div>
            </div>
            <div id="gate-3">
                <div id="ship-3" class="ship">--None--</div>
            </div>
        </div>
    </div>
</div>
<script>
    function bootstrap() {
        var inputItem = "<input id='ship' type='text'/><button id='dock'>Dock</button>";
        var currentName = '';
        var DEFAULT_VALUE = '--None--';
        var hasChange = false;

        document.addEventListener('click', function (event) {
            event.stopPropagation();
            event.preventDefault();

            if (/ship/.test(event.target.className)) {
                var $ship = document.getElementById('ship');
                $ship && ($ship.parentNode.innerHTML = currentName || DEFAULT_VALUE); //check the result

                if (!currentName || currentName === DEFAULT_VALUE || !hasChange)
                    currentName = event.target.textContent;

                event.target.innerHTML = inputItem;
                hasChange = false;

            } else if (event.target.id === 'dock') {
                var inputValue = document.getElementById('ship').value.trim();
                event.target.parentNode.innerHTML = inputValue || DEFAULT_VALUE;
                hasChange = true;
                currentName = '';
            }

        });
    }


</script>
</body>
</html>
