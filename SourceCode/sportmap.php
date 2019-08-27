<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Places to move more | Get-Move</title>

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
    <script type="text/javascript" src="GoogleMap.js"></script>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Places to move more<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="sportmap.php">Sport places in Melbourne</a></li>
                                <li><a href="#">Interesting places near your office</a></li>
                            </ul>                            
                            <!-- /.dropdown-menu -->
                        </li><!-- /.dropdown -->
                        <li><a href="#">Exercise at your desk</a></li> 
                        <li><a href="#">Exercise records</a></li>                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->
        
    </header><!-- /#masthead -->

<!--    <main id="main" class="site-main">-->

        <section class="site-section-small section-blog">

<!--            <div class="container">-->

                <div class="text-center">

                    <h1 class="section-title-big">Sport places in Melbourne</h1>
                    <!--<p class="section-text">Find Sport Places in Melbourne</p> -->
                
                </div>

                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Places to move more</li>
                    <li class="active">Sport places in Melbourne</li>
                    
                </ol><!-- /.breadcrumb -->

    <div class="container">
            <H1>Insert Map Here</H1>
         <div class="marker-filter">
        <span class="filter-box">
            <label for="Aerobics">
                <input type="checkbox" name="Aerobics" value="Aerobics" id="Aerobics" onclick="aerobicCheck()">
                Aerobics
            </label>
        </span>
        <span class="filter-box">
            <label for="Cycling">
                <input type="checkbox" name="Cycling" value="Cycling" id="Cycling"  onclick="cyclingCheck()">
                Cycling
            </label>
        </span>
        <span class="filter-box">
            <label for="Dancing">
                <input type="checkbox" name="Dancing" value="Dancing" id="Dancing" onclick="dancingCheck()">
                Dancing
            </label>
        </span>
        <span class="filter-box">
            <label for="Fitness">
                <input type="checkbox" name="Fitness" value="Fitness" id="Fitness"  onclick="fitnessCheck()">
                Fitness
            </label>
        </span>
        <span class="filter-box">
            <label for="Tennis">
                <input type="checkbox" name="Tennis" value="Tennis" id="Tennis" checked  onclick="tennisCheck()">
               Tennis
            </label>
        </span>
         </div>
                        <?php
                        require 'facility.php';
                        $faci = new facility;
                        $coll = $faci->getAllFacilities();
                        $coll = json_encode($coll, true);
                        echo '<div id="data">' . $coll . '</div>';

                        $allData = $faci->getAllFacilities();
                        $allData = json_encode($allData, true);
                        echo '<div id="allData">' . $allData . '</div>';

                        $aeroData = $faci->getAerobics();
                        $aeroData = json_encode($aeroData, true);
                        echo '<div id="aeroData">' . $aeroData . '</div>';

                        $cycData = $faci->getCycling();
                        $cycData = json_encode($cycData, true);
                        echo '<div id="cycData">' . $cycData . '</div>';

                        $danData = $faci->getDancing();
                        $danData = json_encode($danData, true);
                        echo '<div id="danData">' . $danData . '</div>';

                        $fitData = $faci->getFitness();
                        $fitData = json_encode($fitData, true);
                        echo '<div id="fitData">' . $fitData . '</div>';

                        $tenData = $faci->getTennis();
                        $tenData = json_encode($tenData, true);
                        echo '<div id="tenData">' . $tenData . '</div>';
    ?>
                        <div id="map"></div>
    </div>

        </section><!-- /.section-blog -->

<!--    </main><!-- /.site-main -->-->

    <footer id="colophon" class="site-footer">

        <div class="copyright">
            <p>&copy; 2019 Get-Move | Made by <a href="#" class="yellow-text">Get-Move Project</a></p>
        </div><!-- /.copyright -->
        
    </footer><!-- /.site-footer -->

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFBcC-k-V5abg0sD4F257eSiFwl5CJnO8&callback=loadMap"
            async defer>
    </script>
</body>
</html>