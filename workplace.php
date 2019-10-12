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

    <title>Workplace support</title>

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
                            <li><a href="workplace.php">Support at Work</a></li>

                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.dropdown -->
                      <li class="navbar-nav dropdown">
                            <a href="login.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Get-Move Plan<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
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

        <section class="site-section-small portfolio">

            <div class="container">
                 <div class="text-center">

                    <h1 class="section-title-big">Support at Work</h1>

                    <p class="section-text">The most effective way to prevent occupational injuries caused by prolonged standing work is to start with personal protective measures and design of the workplace.  </p>
                     
                
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li href="recommenation.php">Recommendations</li>
                    <li class="active">Support at Work</li>
                </ol><!-- /.breadcrumb -->
            </div>
            
             <div class="row" style="padding:15px"> <h4 style="padding: 20px;line-height: 1.6;color:#808080;text-align: justify"> As for standing work, it can be divided into two categories, different is the professional requirements, one needs to be on your feet (such as service person), the other needs to keep stand still (such as cashier). In well-designed workplaces, they could greatly reduce the health damage from prolonged standing.</h4></div>
                

            <div class="container-fluid">

                <ul class="portfolio-sorting list-inline text-center">
                    <li><a href="#" class="bd btn btn-transparent active" data-group="all" style="font-family:Open Sans,sans-serif;font-size:14px">All</a></li>
                    <li><a href="#" class="bd btn btn-transparent" data-group="identity"  style="font-family:Open Sans,sans-serif;font-size:14px">On Your Feet</a></li>
                    <li><a href="#" class="bd btn btn-transparent" data-group="uiux"  style="font-family:Open Sans,sans-serif;font-size:14px">Stand Still</a></li>
                    <li><a href="#" class="bd btn btn-transparent" data-group="illustrations"  style="font-family:Open Sans,sans-serif;font-size:14px">Every Standing Work</a></li>
                    
                </ul><!-- /.portfolio-sorting  -->


            	<div class="row" id="grid">
            		
            		
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                       
                            <img src="img/picture7.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Standing Desk</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Leaning takes a lot of pressure off your feet, knees, and spine without the increased lower back stress of sitting. Changing positions frequently is one of the keys to avoiding soreness.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                    
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["identity"]'>
                       
                            <img src="img/picture4.jpeg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Avoid high heels</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>For office ladies, reducing the need to wear high heels will reduce the damage to the legs and feet. And most athletic or walking shoes with wide toe caps are good choices.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                      
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["identity"]'>
                       
                            <img src="img/picture5.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Compression Stockings</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Compression stockings provide support to muscles and blood vessels of the lower leg, which reduces edema / swelling and promotes better circulation.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                      
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["identity"]'>
                       
                            <img src="img/picture6.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Outside Work</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>If you work outside, find some grass to stand on while plying your trade or waiting for the next task. It also should provide a break room and other supporting facilities.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                 
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["identity"]'>
                        
                            <img src="img/picture1.jpeg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Sit down during breaks</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Providing the chairs in the workplace. Try to have a sit during the break, preferably with your legs up, which promotes better circulation because of reduced effects of gravity. </p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                      
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        
                            <img src="assets/img/portfolio-4.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Adjustable Work Surface</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>The height and angle of the table can be adjusted automatically or manually according to its own conditions and comfort. Working in that position could ease the pain of standing.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                       
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                        
                            <img src="img/picture14.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Workplace Floor</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Keep the work areas clean and ensure that the floors are level and non-slippery. Avoid concrete or metal floors. Recommended for wooden, cork or rubber covered floors.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["identity"]'>
                       
                            <img src="img/picture2.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Foot Relax</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Taking off your shoes while resting will also allow your feet to cool down by evaporation. While on your break, consider rolling your bare feet over a golf ball. </p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                  
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                       
                            <img src="img/picture9.jpeg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Stand on Carpeting</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Carpet (even the thin, cheap stuff) provides much more cushion than concrete and will help your feet and legs survive the long shifts at work. </p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                       
                    </div><!-- /.col-lg-fifth  -->
                    
                    
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        
                            <img src="img/picture10.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Work space</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>It should provide enough space for workers to change their body posture. Tools should be placed in the proper position so that workers can easily reach them without twisting or bending.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                       
                    </div><!-- /.col-lg-fifth  -->
                    
                   
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                        
                            <img src="img/picture15.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Anti-fatigue mat</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Anti-fatigue mats are designed to decrease the stress on your feet and legs by providing a cushioned surface to stand on over prolonged periods of time. </p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        
                    </div><!-- /.col-lg-fifth  -->
                    
                    
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                        
                            <img src="img/picture11.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Reasonable Timetable</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Employers should provide a reasonable timetable, which allow workers suitable rest periods to relax. Negotiate more rest breaks and reduce the time spent standing or walking.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                      
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        
                            <img src="img/picture3.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Sit down during lunch</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>When you take your lunch break, the company should provide the table and chairs or a lunchroom. When you have a lunch break, make sure to sit in your seat and lift your feet while eating.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                       
                            <img src="img/picture12.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Appropriate training</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Provision for worker training on proper work practices and use of rest breaks. And the right position to stand. Teaching the right standing posture which could reduce the damage.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
         
                    </div><!-- /.col-lg-fifth  -->
                    
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                       
                            <img src="img/picture13.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info portfolio-link">
                                <div class="portfolio-info-top">
                                    <h3>Regular exercise</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>A break room should be provided at the office, and employers should regularly organize employees to do some simple exercises during breaks which reduce the impacts</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
         
                    </div><!-- /.col-lg-fifth  -->

            	</div><!-- /#grid -->
            </div>
            
        </section><!-- /.portfolio -->

       

       

    </main><!-- /.site-main -->

 <footer id="colophon" class="site-footer" style="padding: 40px">

    <div class="copyright">
        <p>&copy; 2019 Get-Move | Made by Tech Chaser</p>
    </div><!-- /.copyright -->

</footer><!-- /.site-footer -->

    <script>
        function showDivuiux() {
            document.getElementById('uiux1').style.display = "block";
            document.getElementById('uiux2').style.display = "block";
            document.getElementById('uiux3').style.display = "block";
            document.getElementById('uiux4').style.display = "block";
            document.getElementById('uiux5').style.display = "block";
            document.getElementById('identity1').style.display = "none";
            document.getElementById('identity2').style.display = "none";
            document.getElementById('identity3').style.display = "none";
            document.getElementById('identity4').style.display = "none";
            document.getElementById('identity5').style.display = "none";
            document.getElementById('illustrations1').style.display = "none";
            document.getElementById('illustrations2').style.display = "none";
            document.getElementById('illustrations3').style.display = "none";
            document.getElementById('illustrations4').style.display = "none";
            document.getElementById('illustrations5').style.display = "none";
        }

        function showDivIllu() {
            document.getElementById('illustrations1').style.display = "block";
            document.getElementById('illustrations2').style.display = "block";
            document.getElementById('illustrations3').style.display = "block";
            document.getElementById('illustrations4').style.display = "block";
            document.getElementById('illustrations5').style.display = "block";
            document.getElementById('uiux1').style.display = "none";
            document.getElementById('uiux2').style.display = "none";
            document.getElementById('uiux3').style.display = "none";
            document.getElementById('uiux4').style.display = "none";
            document.getElementById('uiux5').style.display = "none";
            document.getElementById('identity1').style.display = "none";
            document.getElementById('identity2').style.display = "none";
            document.getElementById('identity3').style.display = "none";
            document.getElementById('identity4').style.display = "none";
            document.getElementById('identity5').style.display = "none";
        }
        function showDividentity() {
            document.getElementById('illustrations1').style.display = "none";
            document.getElementById('illustrations2').style.display = "none";
            document.getElementById('illustrations3').style.display = "none";
            document.getElementById('illustrations4').style.display = "none";
            document.getElementById('illustrations5').style.display = "none";
             document.getElementById('uiux1').style.display = "none";
            document.getElementById('uiux2').style.display = "none";
            document.getElementById('uiux3').style.display = "none";
            document.getElementById('uiux4').style.display = "none";
            document.getElementById('uiux5').style.display = "none";
            document.getElementById('identity1').style.display = "block";
            document.getElementById('identity2').style.display = "block"";
            document.getElementById('identity3').style.display = "block";
            document.getElementById('identity4').style.display = "block";
            document.getElementById('identity5').style.display = "block";
        }

    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>