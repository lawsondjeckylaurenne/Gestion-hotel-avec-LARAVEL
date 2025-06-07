<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion Hotel</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
        <link href="{{ asset('css/list.css') }}" rel="stylesheet">
        <link href="{{ asset('css/model.css') }}" rel="stylesheet">

    </head>
    <style>
        :root {
    --primary-color: #30b1ed;
}

.navbar {
    background-color: var(--primary-color);
}

.navbar .navbar-brand, .navbar .nav-link {
    color: white;
}

.navbar .nav-link:hover {
    color: #ffffffcc; /* Slightly transparent white for hover effect */
}

.navbar-toggler {
    border-color: white;
}

.navbar-toggler .fas {
    color: white;
}

</style>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #30b1ed;" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Hotel 5 Etoiles</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('welcome') }}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('welcome') }}">Apercu de l'hotel</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('welcome') }}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('form') }}" >Prendre une Chambre</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')