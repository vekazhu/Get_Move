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

    <title>Get-Move Plan</title>

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
                        <a href="recommendation.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Recommendations<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="workshoes.php">Right Shoes</a></li>
                            <li><a href="exercise.php">Exercise</a></li>
                            <li><a href="weightBMI.php">Healthy Weight</a></li>
                            <li><a href="workplace.php">Support at work</a></li>

                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.dropdown -->
                      <li class="navbar-nav dropdown">
                            <a href="getmove.php" class="active dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Get-Move Plan<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <?php if (empty($_SESSION['username']) === false) { ?>
                            <ul class="dropdown-menu">
                                 <li><a href="breaktime.php">Break Time</a></li>
                                 <li><a href="exerciseplan.php">Exercise Plan</a></li>
                            </ul><!-- /.dropdown-menu -->
                            <?php }?>
                        </li><!-- /.dropdown -->
                        
                        <li class="navbar-nav dropdown">
                            
                            <?php if (empty($_SESSION['username']) === false) { ?>  
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;&nbsp;User<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;Hello&nbsp;<?php echo $_SESSION['username'] ?></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul><!-- /.dropdown-menu -->
                             <?php } else {?>
                             <a href="login.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;&nbsp;User<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
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

            <div class="container" style="border: 0px solid red">
                 <div class="text-center">

                    <h1 class="section-title-big">Get-Move Plan</h1>

                    <p class="section-text">We will support you to move more.</p> 
                
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Get-Move plan</li>
                   
                </ol><!-- /.breadcrumb -->

               

                <div class="row" style="background:#f5f5f0">

                       <div class="col-sm-6" style="border: 0px solid red"> 
                        <img  src="assets/img/breaktime.jpg" alt="" style="padding:10px" width="100%">
                    </div>

                    <div class="col-sm-6">
                        <h2 class="section-title text-left">Break Time</h2>
                        <p class="section-text" style="line-height: 1.6;text-align: justify">Taking rest breaks during work can help to prevent leg swelling or fatigue and also decrease the risks of long-term symptom such as varicose veins.</p> 
                        <a href="breaktime.php" class="btn btn-yellow" >BREAK TIME</a>                 </div>

                </div>
                
               

                <div class="row">

                    <div class="col-sm-6" >
                        <h2 class="section-title text-left">Exercise Plan</h2>
                        <p class="section-text" style="line-height: 1.6;text-align: justify">Are you too lazy to do exercise? A weekly exercise plan can help you to be more disciplined. We have selected exercises that can reduce symptoms of prolonged standing for you, all you have to do is to fill them to the time table and try to follow your plan. It’s also recommended that people who face impacts brought by prolonged standing should not do exercise intensively.</p> 
                         <a href="exerciseplan.php" class="btn btn-yellow">EXERCISE PLAN</a>
                    </div>
                     <div class="col-sm-6" style="border: 0px solid blue;text-align: right"> 
                        <img  src="assets/img/exerciseplan1.jpeg" alt="" style="padding:10px" width="100%">
                            
                    </div>

                </div>
                <br>
                <br>
                <div class="row">
                    
                    <div class='tableauPlaceholder' id='viz1569823612595' style='position: relative;border: 0px solid blue'>
                        <noscript>
                        <a href='#'>
                        <img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ca&#47;calories_15698235983350&#47;Dashboard1&#47;1_rss.png' style='border: none;' />
                        </a>
                        </noscript>
                        <object class='tableauViz' style='display:none'  >
                                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
                                <param name='embed_code_version' value='3' /> 
                                <param name='site_root' value='' />
                                <param name='name' value='calories_15698235983350&#47;Dashboard1' />
                                <param name='tabs' value='no' />
                                <param name='toolbar' value='yes' />
                                <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ca&#47;calories_15698235983350&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' />
                                <param name='display_static_image' value='yes' />
                                <param name='display_spinner' value='yes' />
                                <param name='display_overlay' value='yes' />
                                <param name='display_count' value='yes' />
                                <param name='filter' value='publish=yes' />
                        </object>
                    </div>
                        <script type='text/javascript'>                    
                        var divElement = document.getElementById('viz1569823612595');                    
                        var vizElement = divElement.getElementsByTagName('object')[0];                    
                        vizElement.style.width='1200px';vizElement.style.height='627px';                    
                        var scriptElement = document.createElement('script');                    
                        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
                        vizElement.parentNode.insertBefore(scriptElement, vizElement);                
                        </script>
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