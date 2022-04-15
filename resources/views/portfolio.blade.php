<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo asset('css/lightbox.min.css')?>" type="text/css">
        <script src="<?php echo asset('css/lightbox-plus-jquery.min.js')?>"></script>
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../">STRONA GŁÓWNA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="omnie">O MNIE </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ksiegagosci">KSIĘGA GOŚCI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontakt">KONTAKT</a>
                    </li>
                </ul>


        </nav>

    </div>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <script src="css/bootstrap.bundle.min.js"></script>
    <section class="srodek">
        <div class="container">
            <div class="row">
                <div class="gallery">
                    <div class="row g-0">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/1.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/1s.jpg "></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/2.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/2s.jpg"></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/3.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/3s.jpg"></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/4.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/4s.jpg"></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/5.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/5s.jpg"></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/7.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/7s.jpg"></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/8.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/8s.jpg"></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/9.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/9s.jpg"></a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="images/10.jpg" data-lightbox="mygallery" data-title="Galeria IT"><img src="images/10s.jpg"></a>
                        </div>
        </div>
    </div>
    <script src="css/bootstrap.bundle.min.js"></script>
    </body>
</html>
