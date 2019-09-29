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

    <title>Prolonged Standing</title>

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
                    <li class="active"><a href="standing.php">Prolonged Standing</a></li>
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
                        
                    </ul><!-- /.navbar-nav -->
                     

                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->
        
    </header><!-- /#masthead -->

    

    <main id="main" class="site-main">

        <section class="site-section section-quote text-center">

            <div class="container">
                
                  <div class="text-center">

                    <h1 class="section-title-big">Prolong Standing</h1>

                   <!-- <p class="section-text">Standing is a natural human posture and by itself poses no particular health hazard. However, working in a standing position on a regular basis can cause sore feet, swelling of the legs, varicose veins, general muscular fatigue, low back pain, stiffness in the neck and shoulders, and other health problems. These are common complaints among sales people, machine operators, assembly-line workers and others whose jobs require prolonged standing.

        </p> <!-- /.section-text --> 
                
                </div><!-- /.text-center -->
                <h3 class="section-title">Who's affected?</h3>
                <p class="section-text">
                Those employees who have to stand at work are often work in food service,retail,manufacturing,construction,security,healthcare, etc. Among them are retail staff, assembly line workers, construction labors, security staff, engineers, catering staff, nurses and laboratory technicians.
                </p>
                
                
            </div>
        <p>&nbsp  
            &nbsp 
            &nbsp 
        </p>  
        
        <div class="col-md-12" style="border: 0px solid red;text-align: left;">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                <div class="iframe-container"> 
                    <iframe src="https://www.youtube.com/embed/5FvxHsts3vQ"  frameborder="0" width="800" height="415" allowfullscreen></iframe>
                </div> 
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>
        
        </section><!-- /.section-quote -->
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
       <h3 class="section-title text-center" >Do you know prolonged standing may cause these?</h3>
       <section class="site-section-small2 section-clients light-gray-bg">

            <div class="container" style="border: 0px solid orange;text-align: left">
                <div class="row" style="border: 0px solid red;text-align: left">

                        <div class="col-md-6" style="border: 0px solid black;text-align: center; padding:20px 0px 10px 10px"> 

                            <div class="testimonial" style="border: 0px solid red;text-align: left">
                                <div class="testimonial-content testimonial-1" style="border: 0px solid black;text-align: left"> 
                              
                                    <p class="orange-text bold-text">Heart Disease</p>
                                    <p class="testimonial-text">Research suggests standing at work increases the greater risk of heart disease. That is because standing too long can result in blood pooling in the legs, increased pressure in the veins and increased oxidative stress, all of which can contribute to an increased risk.</p>                              
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6" style="border: 0px solid black;text-align: center; padding:20px 0px 10px 10px"> 

                            <div class="testimonial" style="border: 0px solid red;text-align: left">
                                <div class="testimonial-content testimonial-2">
                                    <p class="orange-text bold-text">Varicose Veins</p>
                                    <p class="testimonial-text">Prolonged standing at work is associated with the development of varicose veins. When standing occurs continually over prolonged periods, it can result in inflammation of the veins. This inflammation may progress over time to chronic and painful varicose veins.</p> 
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6" style="border: 0px solid black;text-align: center; padding:20px 0px 10px 10px"> 

                            <div class="testimonial" style="border: 0px solid red;text-align: left">
                                <div class="testimonial-content testimonial-3">
                                      <p class="orange-text bold-text">Pain and Fatigue in the Muscles</p>
                                      <p class="testimonial-text">Keeping the body in an upright position requires considerable muscular effort.Insufficient blood flow accelerates the onset of fatigue and causes pain in the muscles of the legs, back and neck. </p>    
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6" style="border: 0px solid black;text-align: center; padding:20px 0px 10px 10px"> 

                            <div class="testimonial" style="border: 0px solid red;text-align: left">
                                <div class="testimonial-content testimonial-4">
                                    <p class="orange-text bold-text">Rheumatic Diseases</p>
                                    <p class="testimonial-text">Excessive standing also causes the joints in the spine, hips, knees and feet to become temporarily immobilized or locked. This immobility can later lead to rheumatic diseases.</p> 
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>
                </div>

            </div>
            
        </section><!-- /.section-clients -->

            
        <section class="site-section-small section-work-with-us yellow-bg text-center">


            <div class="container" style="padding: 25px">

                <p class="section-title-small white-text mb-50">No worries! Let us help you.</p>
                <a class="btn" href="recommendation.php">GET STARTED</a>

            </div>
            
        </section>
          
        
       
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