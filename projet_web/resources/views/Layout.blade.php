<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="{{asset('css/header.css')}}" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" rel="stylesheet">
    <!-- Styles -->



</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#"><img class="cesi" src="pictures/cesientreprise.png"/> </a>
    <img class="bde" src="pictures/bdeexia3.png"/>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Evènement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Boutique</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Campus
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Arras</a>
                    <a class="dropdown-item" href="#">Rouen</a>
                    <a class="dropdown-item" href="#">Strasbourg</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Autre campus</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            <ul class="social">
                <a href="#" class="reseaux facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" class="reseaux twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="reseaux instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="reseaux youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="reseaux linkedin"><i class="fab fa-linkedin"></i></a>
            </ul>
        </ul>
        <button type="button" class="connexion btn btn-connexion">Connexion</button>
    </div>
</nav>

@yield('contenu')

<nav class="footer">
    <a class="mention_legal" href="#">mention legal</a>
    <a class="contact" href="#">contact</a>


</body>
</html>
