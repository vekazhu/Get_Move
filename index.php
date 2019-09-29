<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home</title>

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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/rsz_1gm.png">

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

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

        <nav id="primary-navigation" class="site-navigation">

            <div class="container-fluid">

                <div class="navbar-header">
                    <img src="assets/img/rsz_30_gm_nobg.png" alt=""/>
                    <a href="index.php" class="site-title yellow-text">Get<span class="white-text">-Move</span></a>

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="standing.php">Prolonged Standing</a></li>
                    <li class="dropdown">
                        <a href="recommendation.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Recommendations<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="workshoes.php">Right Shoes</a></li>
                            <li><a href="exercise.php">Exercise</a></li>
                            <li><a href="weightBMI.php">Healthy Weight</a></li>
                            <li><a href="underconstruction.php">Workplace Support</a></li>

                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.dropdown -->
                      <li class="navbar-nav dropdown">
                            <a href="underconstruction.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Get-Move Plan<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <?php if (empty($_SESSION['username']) === false) { ?>
                            <ul class="dropdown-menu">
                                <li><a href="breaktime.php">Break Time</a></li>
                                <li><a href="exerciseplan.php">Exercise Plan</a></li>
                                
                            </ul><!-- /.dropdown-menu -->
                            <?php }?>
                        </li><!-- /.dropdown -->
                        
                        <li class="navbar-nav dropdown">
                            <a href="login.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;&nbsp;Account<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <?php if (empty($_SESSION['username']) === false) { ?>
                            <ul class="dropdown-menu">
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'] ?></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul><!-- /.dropdown-menu -->
                             <?php } else {?>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">Log In</a></li>
                                <li><a href="register.php">Sign Up</a></li>
                            </ul><!-- /.dropdown-menu -->
                            <?php }?>
                        </li><!-- /.dropdown -->

                </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->
        
    </header><!-- /#masthead -->

    <div class="hero background-overlay">
    
        <div class="hero-text3">
            <h1 style="font-size:64px;color: white">Standing all day</h1>
            <h1 style="font-size:64px;color: white">at work?</h1>
            <div class="text-center">    

                    <h3 class="section-title" style="color: white">Let's beat the prolonged standing.</h3>

                </div>
             <div class="text-center">  
             <a class="btn btn-yellow" href="recommendation.php">GET STARTED</a>
             
             </div>
        </div> <!-- /.hero-text3 -->
        <div class="hero-arrow1">
            <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->

    <main id="main" class="site-main" >

        <section class="site-section-small section-services" style="border: 0px solid blue;padding:50px">

            <div class="container">

                <div class="text-center" >    

                    <h3 class="section-title">What we offer</h3>
                    <p class="section-text">Let us help you stand up for your health.</p> 

                </div>

                <div class="row">

                    <div class="col-sm-5 col-sm-offset-1 col-xs-6">

                        <div class="service">

                            <div class="service-icon">
                                <a href="workshoes.php"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title"><a href="workshoes.php">Choose Right Shoes</a></h4>
                                <p>Wearing comfortable shoes can effectively reduce the pressure on the feet and legs, slow down the fatigue of the lower limbs.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                        <div class="service">
                            <div class="service-icon">
                                <a href="weightBMI.html"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title"> <a href="weightBMI.php">Be Healthy Weight</a></h4>
                                <p>Obesity is one of the important reasons for increasing the burden on the body, especially for people who need to stand for a long time at work. </p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                        <div class="service">
                            <div class="service-icon">
                                <a href="breaktime.php"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title"> <a href="breaktime.php">Set your Break Time</a></h4>
                                <p>Taking rest breaks can help to prevent leg swelling or fatigue and also decrease the risks of long-term symptom such as varicose veins.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                    </div>

                    <div class="col-sm-5 col-xs-6">

                        <div class="service">

                            <div class="service-icon">
                                <a href="exercise.php"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title"><a href="exercise.php">Do Exercise</a></h4>
                                <p>Exercise is one of the best ways to reduce the physical harm caused by prolonged standing, and it can also play a good preventive role.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                        <div class="service">

                            <div class="service-icon">
                                <a href="underconstruction.php"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title"><a href="underconstruction.php">Workplace Support</a></h4>
                                <p>Organization of the work space is another important aspect. The worker should have the opportunity to change their body positions frequently.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                         <div class="service">

                            <div class="service-icon">
                                <a href="exerciseplan.php"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title"><a href="exerciseplan.php">Do Exercise Plan</a></h4>
                                <p>Record your break plan to measure your health improvement.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                        
                    </div>
                    
                    
                    
                </div>

            </div>
            
        </section><!-- /.section-services -->
        
         <section class="section-work-with-us yellow-bg text-center" style="border: 0px solid blue;padding:20 px">

            <div class="container">

                <p class="section-title-small white-text mb-50">Set your break time and do exercise plan</p>
                <div class="text-center">
                <a class="btn" href="login.php">LOG IN</a>
                <font class="section-title-small white-text">or</font> <a class="btn" href="register.php">REGISTER A NEW USER</a>
                </div>
                 <div class="text-center">
                     <label>&nbsp;</label>
                </div>

            </div>
            
        </section><!-- /.section-work-with-us -->
        <p> &nbsp;</p>
        <p> &nbsp;</p>

        <section class="site-section-small section-counters light-gray-bg text-center" style="padding: 10px">
            
             <div class="container">

                <div class="text-center">    

                    <h3 class="section-title">Standing-heavy Jobs (% of Workday Standing )</h3>
                    <p class="section-text">Estimates of the average time spent standing during the workday </p>

                </div>
              </div>

            <div class="container-fluid">
                
                <div class="row">
                
                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Sales Floor Stock Clerks</h4>
                        <p class="counter" data-to="98.8" data-speed="2000">98.8</p>  
                    </div><!-- /.counter-item -->
                    
                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Food Prep. and Serving Workers</h4>
                        <p class="counter" data-to="98.3" data-speed="2000">98.3</p>             
                    </div><!-- /.counter-item -->
                    
                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Construction Labors</h4>
                        <p class="counter" data-to="90.2" data-speed="2000">90.2</p>           
                    </div><!-- /.counter-item -->
                    
                      <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Nurses</h4>
                        <p class="counter" data-to="83.8" data-speed="2000">83.8</p>            
                    </div><!-- /.counter-item -->


                </div>

            </div>
            
        </section><!-- /.section-counters -->


    </main><!-- /.site-main -->

    <footer id="colophon" class="site-footer" style="border: 0px solid red;padding:40px">

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