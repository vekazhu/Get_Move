<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET TO MOVE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script type="text/javascript" src="GoogleMap.js"></script>
    <link href="WebsiteLayout.css" rel="stylesheet">
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <style type="text/css">
        .container {
            height: 450px;
        }
        #map {
            width: 100%;
            height: 100%;
            border: 1px solid lightyellow;
            shape-outside: ellipse();
        }
        #data, #allData{
            display: none;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../img/logo-navbar.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" active>
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WHAT IS IT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GET TO MOVE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <center><h1>Get to move in Melbourne!</h1></center>
        <div class="marker-filter">
        <span class="filter-box">
            <label for="Aerobics">
                <input type="checkbox" name="Aerobics" value="Aerobics" id="Aerobics" onclick="aerobicCheck()";">
                Aerobics
            </label>
        </span>
            <span class="filter-box">
            <label for="Cycling">
                <input type="checkbox" name="Cycling" value="Cycling" id="Cycling"  onclick="cyclingCheck()";">
                Cycling
            </label>
        </span>
            <span class="filter-box">
            <label for="Dancing">
                <input type="checkbox" name="Dancing" value="Dancing" id="Dancing" onclick="dancingCheck()";">
                Dancing
            </label>
        </span>
            <span class="filter-box">
            <label for="Fitness">
                <input type="checkbox" name="Fitness" value="Fitness" id="Fitness"  onclick="fitnessCheck()";">
                Fitness
            </label>
        </span>
        <span class="filter-box">
            <label for="Tennis">
                <input type="checkbox" name="Tennis" value="Tennis" id="Tennis" checked  onclick="tennisCheck()";">
               Tennis
            </label>
        </span>
        </div>
        <?php
            require 'facility.php';
            $faci = new facility;
            $coll = $faci->getFacilityCoordinates();
            $coll = json_encode($coll, true);
            echo '<div id="data">' . $coll . '</div>';

            $allData = $faci->getFacilityCoordinates();
            $allData = json_encode($allData, true);
            echo '<div id="allData">' . $allData . '</div>';
         ?>
<div id="map"></div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFBcC-k-V5abg0sD4F257eSiFwl5CJnO8&callback=loadMap"
            async defer>
    </script>
</body>
</html>