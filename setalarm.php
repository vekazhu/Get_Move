<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Set Alarm</title>

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
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">    

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/colors.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header site-header-fill">

        <nav id="primary-navigation" class="site-navigation">
            <div class="container-fluid">
                
                <div class="navbar-header">                   
                    <img src="assets/img/rsz_30_gm_nobg.png" alt=""/>
                    <a href="index.html" class="site-title yellow-text">Get<span class="white-text">-Move</span></a>
                    
                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.html">Home</a></li>
                        <li class="active"> <a href="standing.html">Prolonged standing</a></li>
                         <li class="dropdown">
                            <a href="recommendation.html" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Recommendations<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="workshoes.php">Right shoes</a></li>
                                <li><a href="exercise.html">Exercise</a></li>
                                <li><a href="weightBMI.html">Healthy weight</a></li>
                                 <li><a href="underconstruction.html">Workplace support</a></li>
                             </ul><!-- /.dropdown-menu -->
                        </li><!-- /.dropdown --> 
                         <li class="dropdown">
                        <a href="underconstruction.html" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Breaks at work<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="active">Break alert</a></li>
                            <li><a href="underconstruction.html">Break plan</a></li>
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.dropdown -->
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->
        
    </header><!-- /#masthead -->

    


    

    <main id="main" class="site-main">

        <section class="site-section-small section-who-we-are">

            <div class="container">
                 <div class="text-center">

                    <h1 class="section-title-big">Set Alarm</h1>

                    <!--<p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> <!-- /.section-text --> 
                
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="underconstruction.html">Breaks at work</a></li>
                    <li class="active">Set alarm</li>
                   
                </ol><!-- /.breadcrumb -->
                
                <script type="text/javascript"> 
                    var audio = new Audio('assets/sound/Loud_Alarm_Clock_Buzzer.mp3'); 
                    function start_countdown(){
                        callAlert(3000);
                    }
                    function callAlert(time){
                        //alert("The function called 'start_countdown1' has been called.");
                        var reverse_counter = time/100;
                        var downloadTimer = setInterval(function(){
                        document.getElementById("pbar").value = time/100 - --reverse_counter;
                        if(reverse_counter <= 0){
                            clearInterval(downloadTimer);
                            alert("Time to take a break!");
                            audio.play();
                        }
                        document.getElementById("counting").innerHTML= reverse_counter; 
                        },time);
                    }
                </script>

              <div class="buttons my-90">
                    <div class="row">
                        <div class="col-sm-6">
                            <progress value="0" max="30" id="pbar" ></progress>
                            <p id="counting"></p>
                            <button class="btn btn-yellow" onclick="start_countdown()">30 seconds</button>
                            <div class="clearfix mb-50"></div>

                        </div>
                        
                        <div class="col-sm-6">
                        </div>
                    </div>
              </div>

                
            </div>
            
        </section><!-- /.section-who-we-are -->

      

      

       

    </main><!-- /.site-main -->

      <footer id="colophon" class="site-footer">

        <div class="copyright">
            <p>&copy; 2019 Get-Move | Made by Tech Chaser</p>
        </div><!-- /.copyright -->
        
    </footer><!-- /.site-footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/touchswipe.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>