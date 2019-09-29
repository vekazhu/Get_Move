<?php include('serverbreaktime.php')?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Break Time</title>

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


    <main id="main" class="site-main">

        <section class="site-section-small section-blog" >
            <div class="container" >     
                <div class="text-center">
                    <h1 class="section-title-big">Break Time</h1>     
                     <p class="section-text">Taking rest breaks can help to prevent leg swelling or fatigue and also decrease the risks of long-term symptom such as varicose veins.</p>
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="timebreak.php">Get-Move Plan</a></li>
                    <li class="active">Break Time</li>
                </ol><!-- /.breadcrumb -->
               
                
                <div class="row"> <h4 style="padding: 20px;line-height: 1.6;color:#808080"> To control for the deleterious effects of prolonged standing, some researchers recommend standing no more than 30% of a typical eight-hour workday for any worker. The Occupational Health Centre for Ontario Workers recommends limiting prolonged standing for pregnant workers to two hours, and floor matting should be provided. </h4>

<h4 style="padding: 0px 22px  22px 22px;line-height: 1.6;color:#808080"> Seated breaks might reduce the potential for injury to the back from spinal loading. Besides, stretching and relaxing muscles hourly will facilitate reduction of stress and strain from awkward postures.
</h4></div>
                <div class="row"> 
                  
                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-12">
                                <section class="section-contact-us">

                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                    <div class="col-sm-8">
                                                            <img src="assets/img/takeabreak.png">
                                                        </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                       
                                                            <form class="form-horizontal my-90" action="breaktime.php" method="post">
                                                                <h3 class="section-title-small text-center ">Set  Break Time</h3>
                                                                 <p class="small-title mb-30">We will send E-mail to remind you to take a break from 9.00 AM to 05.00 PM as the specified interval.</p> 
                                                                 <?php include('error2.php')?>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="radio-btn">
                                                                            <?php if ($timebreak == 30) { ?>
                                                                            <input type="radio" name="radio-btn" id="radio-btn1" value ="30" checked>
                                                                            <?php } else { ?>
                                                                            <input type="radio" name="radio-btn" id="radio-btn1" value ="30" >
                                                                            <?php } ?>
                                                                            <label for="radio-btn1">30 minutes</label>
                                                                        </div>
                                                                        <div class="radio-btn">
                                                                            <?php if ($timebreak == 1) { ?>
                                                                            <input type="radio" name="radio-btn" id="radio-btn2" value ="1" checked>
                                                                            <?php } else { ?>
                                                                            <input type="radio" name="radio-btn" id="radio-btn2" value ="1" >
                                                                            <?php } ?>
                                                                            <label for="radio-btn2">1 hour</label>
                                                                        </div>
                                                                        <div class="radio-btn">
                                                                            <?php if ($timebreak == 2) { ?>
                                                                            <input type="radio" name="radio-btn" id="radio-btn3" value ="2" checked>
                                                                            <?php } else { ?>
                                                                            <input type="radio" name="radio-btn" id="radio-btn3" value ="2" >
                                                                            <?php } ?>
                                                                            <label for="radio-btn3">2 hours</label>
                                                                        </div>
                                                                        
                                                                    </div>
                                                
                                                                 </div>
                                                                 <div class="text-center">
                                                                    <button class="btn btn-yellow" name="set" value="set">SET</button>
                                                                </div>
                                                                 <?php include('showupdateresult.php')?>
                                                                 <HR  style="border-top: 1px solid #ffd500">
                                                                 <h3 class="section-title-small text-center ">The break requirements in your industry.</h3>
                                                                 <div class="text-center">
                                                                     <button class="btn btn-yellow" onclick="window.open('https://www.fairwork.gov.au/employee-entitlements/hours-of-work-breaks-and-rosters/breaks#')">CLICK HERE</button>
                                                                   </div>
                                                                                                                              
                                                                <HR style="border-top: 1px solid #ffd500">
                                                            </form><!-- form-horizontal -->
                                                        </div>
                                                          
                                                    </div> 
                                            </div>
                                        </div>     
                                    </div> <!-- content fluid -->
                                </section><!-- /.section-contact-us --><!--End -->
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->  
        </section><!-- /.section-blog -->
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