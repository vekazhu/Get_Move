<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Places to exercise more | Get-Move</title>

    <meta name="description" content="BusinessPerfect - Freebie HTML/CSS template based on Bootstrap">
    <meta name="author" content="Milan Savov">
    <meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.png">
    
    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <link href="../assets/css/colors.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        #data, #allData, #aeroData, #cycData, #danData, #fitData, #tenData{
            display: none;
        }
    </style>

</head>
<body>

    <header id="masthead" class="site-header site-header-fill">

        <nav id="primary-navigation" class="site-navigation">

            <div class="container-fluid">

                <div class="navbar-header">                   
                    <a href="index.html" class="site-title yellow-text">Get<span class="white-text">-Move</span></a>
                    
                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Places to do exercise<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="sportmap.php">Exercise places in Melbourne</a></li>
                            </ul>                            
                            <!-- /.dropdown-menu -->
                        </li><!-- /.dropdown -->

                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->
        
    </header><!-- /#masthead -->

<!--    <main id="main" class="site-main">-->

        <section class="site-section-small section-blog">

<!--            <div class="container">-->

                <div class="text-center">

                    <h1 class="section-title-big">Exercise places in Melbourne</h1>
                    <!--<p class="section-text">Find Sport Places in Melbourne</p> -->
                
                </div>

                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Places to exercise more</li>


                </ol><!-- /.breadcrumb -->

    <div class="container">
            <H1>Chooe The Exercise You Love</H1>
         <div class="marker-filter">
<!--        <span class="filter-box">-->
<!--            <label for="All">-->
<!--                <input type="checkbox" name="All" value="All" id="All" onclick="addAllMarker()">-->
<!--                All-->
<!--            </label>-->
<!--        </span>-->
        <span class="filter-box">
            <label for="Aerobics">
                <input type="checkbox" name="Aerobics" value="Aerobics" id="Aerobics" onclick="addAerobicMarker()">
                Aerobics
            </label>
        </span>
        <span class="filter-box">
            <label for="Cycling">
                <input type="checkbox" name="Cycling" value="Cycling" id="Cycling"  onclick="addCyclingMarker()">
                Cycling
            </label>
        </span>
        <span class="filter-box">
            <label for="Dancing">
                <input type="checkbox" name="Dancing" value="Dancing" id="Dancing" onclick="addDancingMarker()">
                Dancing
            </label>
        </span>
        <span class="filter-box">
            <label for="Swimming">
                <input type="checkbox" name="Swimming" value="Swimming" id="Swimming"  onclick="addSwimmingMarker()">
                Swimming
            </label>
        </span>
         </div>
                        <div id="map"></div>
    </div>

        </section>

    <footer id="colophon" class="site-footer">

        <div class="copyright">
            <p>&copy; 2019 Get-Move | Made by <a href="#" class="yellow-text">Get-Move Project</a></p>
        </div>
        
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/touchswipe.min.js"></script>
    <script src="../assets/js/skrollr.min.js"></script>
    <script src="../assets/js/jquery.countTo.min.js"></script>
<!--    <script src="../assets/js/script.js"></script>-->

</body>
<?php include_once 'facility.php'?>
<script>

var map;
var marker;
var locations = [];
var aeroMarker = [];
var cycMarker = [];
var danMarker = [];
var swimMarker = [];
var aerobicsPin = "../img/aerobics.png";
var cyclingPin = "../img/cycling.png";
var dancingPin = "../img/dancing.png";
var swimmingPin = "../img/swim.png";
var currentPin = "../img/mapPin.png";

function loadMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    });

    infoWindow = new google.maps.InfoWindow;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var infowindow = new google.maps.InfoWindow({
                content: "Current Location"
            });
            var marker = new google.maps.Marker({
                //position: coordinates,
                position: pos,
                map: map,
                icon: currentPin
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });


        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);

}

    function addAerobicMarker() {
        locations = <?php getAllFacility() ?>;
        var checkBox = document.getElementById("Aerobics");
        /* var text = document.getElementById("text"); */
        if (checkBox.checked == true) {
            var markers = [];
            var i;
            for (i = 0; i < locations.length; i++) {
                // console.log(contentString);
                if (locations[i][3] == "Aerobics") {
                    var contentString = locations[i][0] + ", " + locations[i][5] + " "
                        + locations[i][6] + " " + locations[i][7];
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    var marker = new google.maps.Marker({
                        //position: coordinates,
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                        icon: aerobicsPin,
                        title: locations[i][0],
                        info: contentString
                    });
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.setContent(this.info);
                        infowindow.open(map, this);
                    });
                    markers.push(marker);
                }
                aeroMarker = markers;
            }
        }
            else
                {
                    for (var i = 0; i < aeroMarker.length; i++)
                    {
                        aeroMarker[i].setMap(null);
                    }
                }


    }



function addCyclingMarker()
{
    locations = <?php getAllFacility() ?>;
    var checkBox = document.getElementById("Cycling");
    /* var text = document.getElementById("text"); */
    if (checkBox.checked == true){
        var markers = [];
        var i;
        for (i = 0; i < locations.length; i++)
        {
            if (locations[i][3] == "Cycling" )
            {
                var contentString = locations[i][0] + ", " + locations[i][5] + " "
                    + locations[i][6] + " " + locations[i][7];
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });
                var marker = new google.maps.Marker({
                    //position: coordinates,
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: cyclingPin,
                    title: locations[i][0],
                    info: contentString
                });
                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.setContent(this.info);
                    infowindow.open(map, this);
                });
                markers.push(marker);

            }
        }
        cycMarker = markers;
        // var markerCluster = new MarkerClusterer(map, markers,
        //     {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    } else {
        for (var i = 0; i < cycMarker.length; i++)
        {
            cycMarker[i].setMap(null);
        }
    }
}
function addDancingMarker()
{
    locations = <?php getAllFacility() ?>;
    var checkBox = document.getElementById("Dancing");
    /* var text = document.getElementById("text"); */
    if (checkBox.checked == true){
        var markers = [];
        var i;
        for (i = 0; i < locations.length; i++)
        {
            if (locations[i][3] == "Dancing" )
            {
                var contentString = locations[i][0] + ", " + locations[i][5] + " "
                    + locations[i][6] + " " + locations[i][7];
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });
                var marker = new google.maps.Marker({
                    //position: coordinates,
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: dancingPin,
                    title: locations[i][0],
                    info: contentString
                });
                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.setContent(this.info);
                    infowindow.open(map, this);
                });
                markers.push(marker);
            }
        }
        danMarker = markers;
        // var markerCluster = new MarkerClusterer(map, markers,
        //     {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    } else {
        for (var i = 0; i < danMarker.length; i++)
        {
            danMarker[i].setMap(null);
        }
    }
}

    function addSwimmingMarker()
    {
        locations = <?php getAllFacility() ?>;
        var checkBox = document.getElementById("Swimming");
        /* var text = document.getElementById("text"); */
        if (checkBox.checked == true){
            var markers = [];
            var i;
            for (i = 0; i < locations.length; i++)
            {
                if (locations[i][3] == 'Swimming')
                {
                    var contentString = locations[i][0] + ", " + locations[i][5] + " "
                        + locations[i][6] + " " + locations[i][7];
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    var marker = new google.maps.Marker({
                        //position: coordinates,
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                        icon: swimmingPin,
                        title: locations[i][0],
                        info: contentString
                    });
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.setContent(this.info);
                        infowindow.open(map, this);
                    });
                    markers.push(marker);
                }
            }
            swimMarker = markers;
            // var markerCluster = new MarkerClusterer(map, markers,
            //     {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
        } else {
            for (var i = 0; i < swimMarker.length; i++)
            {
                swimMarker[i].setMap(null);
                // markerCluster.redraw(markerCluster.);
            }
        }
    }
</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFBcC-k-V5abg0sD4F257eSiFwl5CJnO8&callback=loadMap"
        async defer>
</script>

</html>