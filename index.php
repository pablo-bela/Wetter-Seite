<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="Wetter, Langenpreising Wetter, Wartenberg Wetter">
    <meta name="author" content="RoyalMiner">

    <link rel="icon" href="https://cdn.discordapp.com/attachments/637625425404887080/829363394581889084/cool_bitmoji.png" type="image/png">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="/assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="/assets/libs/swiper/dist/css/swiper.min.css">
    <!-- Purpose CSS -->
    <link rel="stylesheet" href="/assets/css/purpose-dark.css" id="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Wetter für Wartenberg ☀</title>
</head>


<?php
//Wetterdaten abfragen
$Wetter = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Wartenberg&units=metric&appid=ca16610a67722dfea6459d7315bc5fee&lang=de");
$Wetter = json_decode($Wetter);

$Temperatur = $Wetter->main->temp;
$Stadt = $Wetter->name;


?>


<body style= "font-family: 'Nunito', sans-serif;" background="hintergrund.jpg">
<center>
    <h1 style="color:White">Wetter</h1>
    <br>
    <h2 style="color:White">Wetter für <?php echo $Stadt?></h2>
    <br>
    <br>
</center>
<section class="slice slice-lg bg-transparent">
    <div class= "container">
        <div class="row">
            <div class="col-lg-2 col-sm-4">
            </div>

            <!--middle card-->

            <div class="col-lg-4 col-sm-4">
                <div class="card text-center">
                    <div class="px-4 py-5">
                        <img alt="Image placeholder" src="https://www.vg-wartenberg.de/wp-content/uploads/2018/07/wartenberg.jpg" class="card-img-top">
                    </div>
                    <div class="px-4 pb-5">
                        <h1><?php echo $Temperatur?>°C</h1>
                        <p class="text-muted">Awesome collection of pages for any scenario.</p>
                    </div>
                </div>
            </div>

            <!--right card-->

            <div class="col-lg-4 col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fouth item</li>
                        <li class="list-group-item">A fifth item</li>
                        <li class="list-group-item">A sixth item</li>
                        <li class="list-group-item">A seventh item</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4">
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="footer p-0 footer-dark bg-transparent">
    <div class="container">
        <div class="py-4">
            <div class="row align-items-md-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="d-flex align-items-center">
                        <p class="text-sm mb-0" style="color: black">&copy;2021 Royal_Miner & TmNiklas - All rights reserved.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
                </div>
                <div class="col-sm-6 col-md-4">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/RoyalMiner/Wetter-Seite" target="_blank" style="color: black">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/assets/js/purpose.core.js"></script>
<!-- Page JS -->
<script src="/assets/libs/swiper/dist/js/swiper.min.js"></script>
<!-- Purpose JS -->
<script src="/assets/js/purpose.js"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="/assets/js/demo.js"></script>
</body>
</html>
