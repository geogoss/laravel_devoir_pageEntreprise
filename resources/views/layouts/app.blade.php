<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
    <title>Document</title>
</head>

<body>
    <div>
        <div class="black">

            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent text-white pt-3">
                <div class="container-fluid w-100">
                    <a class="navbar-brand w-25 text-center fs-3" href="#">Manufacture Corporation</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse w-50" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link fs-5 active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="contact">Nous contacter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="sav">Services après vente</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="partenariat">Partenariat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="info">Infos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="equipe">Equipes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="frontend">Front End</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="backend">Back End</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
        <footer class="bg-dark d-flex justify-content-around align-items-center py-5">
            <p>copyright</p>
            <p>My exercice 2022</p>
            <p>Coding School 21</p>

        </footer>
    </div>
    <script src="{{ asset('js/app.js') }} "></script>
</body>

</html>
