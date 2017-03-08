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
            <div id="gate-1" class="free">
                <div id="ship-1" class="ship"></div>
            </div>
            <div id="gate-2" class="free">
                <div id="ship-2" class="ship"></div>
            </div>
            <div id="gate-3" class="free">
                <div id="ship-3" class="ship"></div>
            </div>
        </div>

        <div class="m-b-md">
            <input id='ship' type='text'/><button id='dock'>Dock</button>
        </div>

        <section id="info" class="m-b-md hidden">

        </section>
    </div>
</div>
<script>
    function bootstrap() {
        //var inputItem = "<input id='ship' type='text'/><button id='dock'>Dock</button>";
        var DEFAULT_VALUE = '--None--';

        document.addEventListener('click', function (event) {
            event.stopPropagation();
            event.preventDefault();

            if (event.target.id === 'dock') {
                var inputValue = document.getElementById('ship').value.trim();
                if(!inputValue)
                    return;

                var el = document.getElementsByClassName('ship');
                for (var i = 0; i < el.length; i++) {
                    if (!el[i].parentNode.classList.contains('occupied')) {
                        el[i].innerText = inputValue;
                        el[i].parentNode.classList.add("occupied");
                        document.getElementById('info').classList.remove("hidden");
                        document.getElementById('info').innerText += "The ship " + inputValue + " has been dock at gate " + (i + 1) + '\n';
                        return;
                    }
                }

                document.getElementById('ship').value ='';

            }

        });
    }


</script>
</body>
</html>
