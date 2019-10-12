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

    <title>Eat Well</title>

    <meta name="description" content="BusinessPerfect - Freebie HTML/CSS template based on Bootstrap">
    <meta name="author" content="Milan Savov">
    <meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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
<body id="portfolio">

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
                            <li><a href="workplace.php">Support at work</a></li>

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

        <section class="site-section-small section-blog-post">

            <div class="container">

                <div class="text-center">
                     <h1 class="section-title-big">Healthy Weight</h1>     
                     <p class="section-text">Obesity is one of the important reasons for increasing the burden on the body and exacerbate varicose veins, especially for people who stand for a long time at work.</p>
                   
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="recommendation.php">Recommendations</a></li>
                    <li class="active">Healthy Weight : Eat Well</li>
                </ol><!-- /.breadcrumb -->
                
                <div class="row"> <h4 style="padding: 20px;line-height: 1.6;color:#808080"> Add content for eat well xxxxxxxxxxxxxxxxxxxxxxxxx.</h4></div>

                <div class="row" style="border:0px solid pink;margin:0px">
                     <aside class="col-md-2" style="border:0px solid blue;margin:0px">

                        <div class="sidebar">
                            
                            <div class="widget widget-categories">
                                <h4 class="widget-title">Healthy Weight : Eat Well</h4>

                                <ul class="list-unstyled">
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<a href="weightBMI.php">BMI Calculator</a></li>
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<a href="eatwell.php">Eat Well</a></li>
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<a href="checknutrient.php">Nutrients Checker</a></li> 
                                    
                                </ul><!-- /.list-unstyled -->
                                
                            </div><!-- /.widget-categories -->


                            
                        </div><!-- /.sidebar -->
                        
                    </aside>
                    
                   


                    <div class="col-md-10" style="border:0px solid red;margin:0px">
                        
                        <H1 style="text-align: center">Eat Well</H1>

                        <div class="row">

                                <div class="col-md-12">
    
                                <div class="post-content" id="maincontent">
                                    <img class="img-carousel post-img" src="assets/img/1200_food.jpg" alt="latest-news-1">

                                    <h2 class="post-title">Nutritionally Balanced</h2>
                                    <h3 class="post-title">On average, our standard 1200 Calorie Meal Plan contains</h3>
                                    
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;5 serves of veggies</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;2 serves of fruit</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;Less than 2000mg of sodium</li></p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;Less than 10% of energy coming from saturated fat</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;&nbsp;And more than 25% of energy from protein</p>
                                    </div><!-- /.post-content -->
     
                                </div>                    
                        </div>

                    </div>

                </div>  

            </div>
            
        </section><!-- /.section-blog-post -->
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