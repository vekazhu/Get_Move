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

    <title>Recommendations</title>

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

    <header id="masthead" class="site-header site-header-fill">

        <nav id="primary-navigation" class="site-navigation">
            <div class="container-fluid">
                
                <div class="navbar-header">                   
                    <img src="assets/img/rsz_30_gm_nobg.png" alt=""/>
                    <a href="index.php" class="site-title yellow-text">Get<span class="white-text">-Move</span></a>
                    
                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.php">Home</a></li>
                    <li><a href="standing.php">Prolonged Standing</a></li>
                    <li class="dropdown">
                        <a href="recommendation.php" class="active dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Recommendations<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="workshoes.php">Right Shoes</a></li>
                            <li><a href="exercise.php">Exercise</a></li>
                            <li><a href="weightBMI.php">Healthy Weight</a></li>
                            <li><a href="workplace.php">Workplace Support</a></li>

                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.dropdown -->
                      <li class="navbar-nav dropdown">
                            <a href="getmove.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Get-Move Plan<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <?php if (empty($_SESSION['username']) === false) { ?>
                            <ul class="dropdown-menu">
                                 <li><a href="breaktime.php">Break Time</a></li>
                                 <li><a href="exerciseplan.php">Exercise Plan</a></li>
                            </ul><!-- /.dropdown-menu -->
                            <?php }?>
                        </li><!-- /.dropdown -->
                        
                        <li class="navbar-nav dropdown">
                             <a href="login.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;&nbsp;User<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <?php if (empty($_SESSION['username']) === false) { ?>  
                            <ul class="dropdown-menu">
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;Hello&nbsp;<?php echo $_SESSION['username'] ?></li>
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

    


    

    <main id="main" class="site-main">

        <section class="site-section-small section-who-we-are">

            <div class="container">
                 <div class="text-center">

                    <h1 class="section-title-big">Recommendations</h1>

                    <p class="section-text">Let us help you stand up for your health.</p> <!-- /.section-text --> 
                
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Recommendations</li>
                   
                </ol><!-- /.breadcrumb -->

               

                <div class="row" style="background:#f5f5f0">

                       <div class="col-sm-6" style="border: 0px solid red"> 
                        <img  src="assets/img/shoes_2.jpg" alt="" style="padding:10px" width="100%">
                    </div>

                    <div class="col-sm-6">
                        <h2 class="section-title text-left">Right Shoes</h2>
                        <p class="section-text" style="line-height: 1.6;text-align: justify">For those who need to stay standing for a long time during work hours, it is important to choose a suitable work shoe. Wearing comfortable shoes can effectively reduce the pressure on the feet and legs, slow down the fatigue ofthe lower limbs, and thus reduce the physical harm caused by prolonged standing.</p> 
                        <a href="workshoes.php" class="btn btn-yellow" >CHOOSE SHOES</a>                 </div>

                </div>
                
               

                <div class="row">
                    <div class="col-sm-6" >
                        <h2 class="section-title text-left">Exercise</h2>
                        <p class="section-text" style="line-height: 1.6;text-align: justify">Exercise is one of the best ways to reduce the physical harm caused by prolonged standing, and it can also play a good preventive role. Employees can do some outdoor exercises on weekends and perform light exercises indoor during the rest time of the work to improve their health.</p> 
                         <a href="exercise.php" class="btn btn-yellow">DO EXERCISE</a>
                    </div>
                    <div class="col-sm-6" style="border: 0px solid blue;text-align: right"> 
                        <img  src="assets/img/exercise_2.jpg" alt="" style="padding:10px" width="100%">
                            
                    </div>

                    

                </div>
                
               

                <div class="row" style="background:#f5f5f0">

                    <div class="col-sm-6" style="border: 0px solid blue">
                        <img  src="assets/img/bmi_2.jpg" alt="" style="padding:10px" width="100%">
                        
                    </div>

                    <div class="col-sm-6">
                        <h2 class="section-title text-left">Healthy Weight</h2>
                        <p class="section-text" style="line-height: 1.6;text-align: justify">Obesity is one of the important reasons for increasing the burden on the body, especially for people who need to stand for a long time at work. If your BMI index is high, then it is time for you to manage your weight.</p> 
                         <a href="weightBMI.php" class="btn btn-yellow">HEALTHY WEIGHT</a>
                    </div>

                </div>
                
                 <div class="row">
                    <div class="col-sm-6" >
                        <h2 class="section-title text-left">Support at Work</h2>
                        <p class="section-text" style="line-height: 1.6;text-align: justify">The most effective way to prevent occupational injuries caused by prolonged standing work is to start with personal protective measures and design of the workplace.</p> 
                         <a href="workplace.php" class="btn btn-yellow">SUPPORT AT WORK</a>
                    </div>
                    <div class="col-sm-6" style="border: 0px solid blue;text-align: right"> 
                        <img  src="assets/img/picture15.jpg" alt="" style="padding:10px" width="100%">
                            
                    </div>

                    

                </div>


                
            </div>
            
        </section><!-- /.section-who-we-are -->

      

      

       

    </main><!-- /.site-main -->

      <footer id="colophon" class="site-footer" style="padding: 40px">

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