@extends ('Layout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, init-scale=1">
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet" />
    <title>site bde</title>

    <script type="text/javascript">

            function testConfirmCookie()  {

                var result = confirm("acceptez-vous les cookies");

                if(result)  {
                    alert("merci et bonne visite sur notre sites");
                } else {
                    alert("aurevoir");
                    document.location.href="https://www.cesi.fr/";
                }
            }

        </script>
</head>

@section('contenu')

    <body>
    <h2>Confirmation Cookie</h2>

    <button onclick="testConfirmCookie()">Click me!</button>

    <div id="slider">
        <figure>
        <img src="pictures/event1.png" width="626" height="469" class="responsive" />
        <img src="pictures/event1.png" width="626" height="469" class="responsive" />
        <img src="pictures/event1.png" width="626" height="469" class="responsive" />
        </figure>
    </div>
    </body>

@endsection
