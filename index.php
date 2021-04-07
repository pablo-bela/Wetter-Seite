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
    <!-- Bootstrap CSS -->
    <link rel="icon" href="/assets/img/brand/favicon.png" type="image/png">
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
<section class="slice slice-lg">
    <div class= "container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <!--left card-->

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">Danke dass du diese Seite verwendest</h4>
                        <p font-size="13px"; class="card-text">Diese Seite wurde von <a href="https://github.com/tmniklas" target="_blank">TmNiklas </a> und <a href="https://github.com/royalminer" target="_blank"> Royal_Miner </a> erstellt.</p>
                        <a href="https://github.com/RoyalMiner/Wetter-Seite"; target="_blank"; class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>

            <!--middle card-->

            <div class="col-lg-4 col-sm-4">
                <div class="card" style="width: 18rem;">
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
                <div class="card" style="width: 18rem;">
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
        </div>
    </div>
</section>
<script src="/assets/js/purpose.core.js"></script>
<!-- Page JS -->
<script src="/assets/libs/swiper/dist/js/swiper.min.js"></script>
<!-- Purpose JS -->
<script src="/assets/js/purpose.js"></script>
<!-- Demo JS - remove it when starting your project -->
<script src="/assets/js/demo.js"></script>
</body>
</html>
