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
                            <li><a href="workplace.php">Workplace Support</a></li>

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

                    <h1 class="section-title-big">Workplace Support</h1>

                    <p class="section-text">Max add short content .....</p>
                
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li href="recommenation.php">Recommendations</li>
                    <li class="active">Workplace Support</li>         
                </ol><!-- /.breadcrumb -->
            </div>

            <div class="container-fluid">

                <ul class="portfolio-sorting list-inline text-center">
                    <li><a href="#" class="btn btn-transparent active" data-group="all">All</a></li>
                    <li><a href="#" class="btn btn-transparent" data-group="identity">Identity</a></li>
                    <li><a href="#" class="btn btn-transparent" data-group="uiux">UI/UX</a></li>
                    <li><a href="#" class="btn btn-transparent" data-group="illustrations">Illustrations</a></li>
                    <li><a href="#" class="btn btn-transparent" data-group="branding">Branding</a></li>
                </ul><!-- /.portfolio-sorting  -->

            	<div class="row" id="grid">
            		
            		<div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-1.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["branding"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-2.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["identity"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-3.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-4.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-5.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["identity"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-6.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-7.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["branding"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-8.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-9.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["branding"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-10.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-2.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-9.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["identity"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-5.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["branding"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-6.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
                    </div><!-- /.col-lg-fifth  -->
                    <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                        <a class="portfolio-link" href="portfolio-item.html">
                            <img src="assets/img/portfolio-3.jpg" alt="" class="img-carousel">
                            <div class="portfolio-info">
                                <div class="portfolio-info-top">
                                    <h3>Business Perfect item</h3>
                                </div><!-- /.portfolio-info-top -->
                                <div class="portfolio-info-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                                </div><!-- /.portfolio-info-bottom -->
                            </div><!-- /.portfolio-info  -->
                        </a>
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