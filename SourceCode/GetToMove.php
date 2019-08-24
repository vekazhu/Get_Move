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
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h1>Get to move in Melbourne!</h1></center>
        <?php
            require 'facility.php';
            $faci = new facility;
            $coll = $faci->getFacilityCoordinates();
            print_r($coll); exit;
         ?>
        <div id="map"></div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFBcC-k-V5abg0sD4F257eSiFwl5CJnO8&callback=loadMap"
            async defer>
    </script>
</body>
</html>