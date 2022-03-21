<!DOCTYPE html>
<html lang="en">

<head>
    <title>cani!!!!!!!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        html,
        body {
            background-image: url("img/istockphoto-1189999011-612x612.jpg");
        }

        img {
            margin: auto;

        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            height: 100px;
            width: 100px;
            outline: black;
            background-color: black;
            background-size: 100%, 100%;
            border-radius: 50%;
            border: 1px solid black;
        }
        h3,p{
            text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/maggie1.jpeg" class="d-block" width="1000" height="1500">
                    <div class="carousel-caption" style="color:black">
                        <h3>MAGGIE</h3>
                        <p><b>just Maggie</b></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/maggie2.jpeg" class="d-block" width="1000" height="1500">
                </div>
                <div class="carousel-item">
                    <img src="img/happy1.jpeg" class="d-block" width="1000" height="1500">
                    <div class="carousel-caption" style="color:black">
                        <h3>HAPPY</h3>
                        <p><b>Jacky Jack Happyness</b></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/happy2.jpeg" class="d-block" width="1000" height="1500">
                </div>
                <div class="carousel-item">
                    <img src="img/sasha1.jpeg" class="d-block" width=" 100%">
                    <div class="carousel-caption" style="color:black">
                        <h3>SASHA</h3>
                        <p><b>dei tre laghi</b></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sasha2.jpeg" class="d-block" width=" 100%">
                </div>
                <div class="carousel-item">
                    <img src="img/vicky1.jpeg" class="d-block" width="1000" height="1500">
                    <div class="carousel-caption" style="color:black">
                        <h3>VICTORIA</h3>
                        <p><b>aka vicky</b></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/vicky2.jpeg" class="d-block" width="1000" height="1500">
                </div>
            </div>

        </div>


        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    </div>
</body>

</html>