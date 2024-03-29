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

    <title>Exercise</title>

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
    <style type="text/css">
        .container_map {
            height: 450px;
        }
        #map {
            width: 1110px;
            height: 100%;
            border: 1px solid lightyellow;
            shape-outside: ellipse();
            margin-left: 0;
            margin-right: 0;
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
                            
                            <?php if (empty($_SESSION['username']) === false) { ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;&nbsp;User<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'] ?></li>
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

        <section class="site-section-small section-blog" >

            <div class="container" >
                
                 <div class="text-center">

                    <h1 class="section-title-big">Exercise</h1>

                    <p class="section-text">Exercise is one of the best ways to reduce the physical harm caused by prolonged standing, and it can also play a good preventive role from symptoms of prolonged standing .</p>
                
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="recommendation.php">Recommendations</a></li>
                    <li class="active">Exercise</li>
                </ol><!-- /.breadcrumb -->
                
                
                <div class="row">

                            <ul class="nav nav-tabs tab-style" role="tablist">
                                <li class="active bd"><a aria-expanded="true" href="#htab1" role="tab" data-toggle="tab">At Home</a></li>
                                <li class="bd"><a aria-expanded="false" href="#htab2" role="tab" data-toggle="tab">At Work</a></li>
                                <li class="bd"><a aria-expanded="false" href="#htab3" role="tab" data-toggle="tab">On the Weekend</a></li>
                            </ul><!-- /.nav-tabs -->

                            <div class="tab-content" style="border: 1px solid #ffd500;background-color: #fff">
                                <div class="tab-pane fade active in" id="htab1">
                                    
                                     <!-- Main exercise at home content start -->
                
                <div class="row"> <h4 style="padding: 20px;line-height: 1.6;color:#808080"> According to the Canadian Center for Occupational Health and Safety (CCOHS), working in a standing position on a regular basis can lead not only to fatigue and lower back pain but can also cause other health problems such as feet pain, swollen legs, and varicose veins.
                    These recommended exercises can help you to release your pains, strengthen your lower body and build endurance.</h4></div>
                

                <!--<div class="row">
                    <h4 class="orange-text" style="padding: 15px"> If any of these exercises cause more pain, stop and take a break. If the problem persists, contact your doctor. </h4></div> -->
                <div class="row"> 

                    <aside class="col-md-2">
                        
                      

                        <div class="sidebar">
                             
                            <div>
                                   <h4 class="widget-title">Your problems:</h4>
                            <div class="radio-btn">
                                <input type="radio" name="radio-btn" id="radio-btn1" value="Back pain">
                                <label for="radio-btn1">Back Pain</label>
                            </div>
                            <div class="radio-btn">
                                <input type="radio" name="radio-btn" id="radio-btn2"  value="Knee pain">   
                                <label for="radio-btn2">Knee Pain</label>
                            </div>
                            <div class="radio-btn">
                                <input type="radio" name="radio-btn" id="radio-btn3" value="Leg pain">
                                <label for="radio-btn3">Leg Pain</label>
                            </div>
                            <div class="radio-btn">
                                <input type="radio" name="radio-btn" id="radio-btn4" value="Foot pain">
                                <label for="radio-btn4">Foot Pain</label>
                            </div>
                            <div class="radio-btn">
                                <input type="radio" name="radio-btn" id="radio-btn5" value="Vascular vein">
                                <label for="radio-btn5">Vascular Vein</label>
                            </div>
                                   
                            <div class="radio-btn">
                                <input type="radio" name="radio-btn" id="radio-btn6" value="No symptom" checked>
                                <label for="radio-btn6">No Symptoms</label>
                            </div>
                            
                        </div>
                           
                                   
                        </div><!-- /.sidebar -->
        <script type="text/javascript"> 
    document.getElementById("radio-btn1").onclick = function() { 
            document.getElementById("backpain").style.display = "block";
            document.getElementById("kneepain").style.display = "none"; 
            document.getElementById("legpain").style.display = "none"; 
            document.getElementById("footpain").style.display = "none";
            document.getElementById("vascularvein").style.display = "none";
            document.getElementById("nosymptom1").style.display = "none";

        } 
        
        document.getElementById("radio-btn2").onclick = function() { 
            document.getElementById("backpain").style.display = "none";
            document.getElementById("kneepain").style.display = "block"; 
            document.getElementById("legpain").style.display = "none"; 
            document.getElementById("footpain").style.display = "none";
            document.getElementById("vascularvein").style.display = "none";
            document.getElementById("nosymptom1").style.display = "none";
        } 
        
        document.getElementById("radio-btn3").onclick = function() { 
            document.getElementById("backpain").style.display = "none";
            document.getElementById("kneepain").style.display = "none"; 
            document.getElementById("legpain").style.display = "block";
            document.getElementById("footpain").style.display = "none";
            document.getElementById("vascularvein").style.display = "none";
            document.getElementById("nosymptom1").style.display = "none";
        } 
        
        document.getElementById("radio-btn4").onclick = function() { 
            document.getElementById("backpain").style.display = "none";
            document.getElementById("kneepain").style.display = "none"; 
            document.getElementById("legpain").style.display = "none"; 
            document.getElementById("footpain").style.display = "block";
            document.getElementById("vascularvein").style.display = "none";
            document.getElementById("nosymptom1").style.display = "none";
        } 
        
          document.getElementById("radio-btn5").onclick = function() { 
            document.getElementById("backpain").style.display = "none";
            document.getElementById("kneepain").style.display = "none"; 
            document.getElementById("legpain").style.display = "none"; 
            document.getElementById("footpain").style.display = "none";
            document.getElementById("vascularvein").style.display = "block";
            document.getElementById("nosymptom1").style.display = "none";
        }
        
           document.getElementById("radio-btn6").onclick = function() { 
            document.getElementById("backpain").style.display = "none";
            document.getElementById("kneepain").style.display = "none"; 
            document.getElementById("legpain").style.display = "none"; 
            document.getElementById("footpain").style.display = "none";
            document.getElementById("vascularvein").style.display = "none";
            document.getElementById("nosymptom1").style.display = "block";
        }

        </script>
        </aside>
                     <!-- Begin 1.Back pain -->
                    <div class="col-md-10" id="backpain" style="display:none">
                        <div ><h1 id="exercisetitle" style="text-align: center">Back Pain</h1></div>                     
                        <div class="blog-post" style="border: 0px solid blue;text-align: center">
                           
                             <h3>Exercise1 : Neck Rolls</h3>
                            
                            <img src="assets/img/exeneckroll1.gif">
                            <p class="post-author-position">Neck rolls: repeat 5 to 10 times in each direction, 3 sets)<p>
 
                              <div class="panel-group accordion mb-50" id="accordion-gray" style="border: 1px solid blue;text-align: center">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapseOne">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapseOne" class="panel-collapse collapse in" style="text-align: left">
                                                <div class="panel-body">
                                                    <ol>
                                                        <li>Begin by sitting upright, relaxing your shoulders, and placing your hands on your lap. Carefully lean your right ear over your right shoulder.</li>
                                                        <li>Slowly move your chin down and let it drop toward your chest while keeping your back straight.</li>
                                                        <li>Bring your head up until your left ear is over your left shoulder. Gently roll your head back and around to your right shoulder once more.</li>
                                                        <li>Even out the rhythm, keep your breathing calm and smooth, and repeat 5 to 10 times in each direction.</li>
                                                    </ol>
                                                 
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapseOne">
                                                        <b>Benefit</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapseOne" class="panel-collapse collapse in" style="text-align: left">
                                                <div class="panel-body">
                                                    <ol>
                                                        <li>The Exercise helps to relax and stretches the neck muscles and the cervical spine.</li>
                                                        <li>Helps to alleviate any discomfort associated with neck strain.</li>
                                                        
                                                    </ol>
                                                 
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group -->
                                

                        </div><!-- /.blog-post -->
                        
                        <div class="blog-post" style="border: 0px solid blue;text-align: center">
                        
                             <h3>Exercise2 : Shoulder Shrugs</h3>
                            
                           <img src="assets/img/exeshoulder2.gif">
                            
                            <p class="post-author-position">Shoulder shrugs: 30 seconds per direction, 3 sets<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapseTwo">
                                                       <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapseTwo" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <ol>
                                                        <li>Stand or sit up straight, keeping the arms down by the sides.</li>
                                                        <li>Gently roll the shoulders forward, lifting them up and down in a continuous circular motion. Try to keep the arms relaxed.</li>
                                                        <li>Do this for around 30 seconds, then repeat it in the opposite direction.</li>
                                                    </ol>
                                                   <p>
                                                 
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                             <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapseTwo">
                                                       <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapseTwo" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <ol>
                                                        <li>This Exercise is for removing the stress and tension in the shoulders.</li>
                                                        <li>Improve the circulation in the joints.</li>
                                                        <li>This Exercise warms up and stretches the muscles, tendons and maintain stiffness in the shoulder part.</li>
                                                    </ol>
                                                   <p>
                                                 
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->
                        
                        <div class="blog-post" style="border: 0px solid blue;text-align: center">
                        
                             <h3>Exercise3 : Overhead Arm Reach</h3>
                            
                           <img  src="assets/img/exeoverhead3.gif">
                            
                            <p class="post-author-position">Overhead arm reach: 10 repetitions per side, 3 sets(medicalnewtoday.com)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align:left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapseThree">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapseThree" class="panel-collapse collapse in" style="text-align:left">
                                                <div class="panel-body" style="text-align: left">
                                                    <ol><li>Begin in a sitting or standing position.</li>
                                                        <li>Stretch the arms above the head.</li>
                                                        <li>Lean to the right, keeping both arms stretched upward. To deepen the stretch, use the right hand to gently pull the left arm to the right.</li>
                                                        <li>Return to the starting position.</li>
                                                        <li>Repeat the stretch several times on both sides.</li>
                                                    </ol>
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align:left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapseThree">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapseThree" class="panel-collapse collapse in" style="text-align:left">
                                                <div class="panel-body" style="text-align: left">
                                                    <ol><li>The side stretching help to release the tension from the muscles that attached to ribs.</li>
                                                        <li>The chambers of the heart all get stretched as well, especially in postures such as reclined hero with arms reached overhead.</li>
                                                        
                                                        
                                                    </ol>
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->
                    </div>
                    <!-- End Backpain -->
                    
                     <!-- Begin 2.Knee pain -->
                    <div class="col-md-10" id="kneepain" style="display:none">
                        <div ><h1 id="exercisetitle" style="text-align: center">Knee Pain</h1></div>                     
                        <div class="blog-post" style="text-align: center">
                           
                             <h3>Exercise1 : Standing Hamstring Curls</h3>
                            
                            <img   src="assets/img/exestandingcurls4.gif">
                            <p class="post-author-position">Standing hamstring curls: 2 minutes, 3 sets (medicalnewtoday.com)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab1_2_1">
                                                       <b>Steps</b>
                                                    </a>
                                                    
                                                    
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab1_2_1" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <p>
                                                    Muscles involved: Hamstrings (back of the thigh) and gluteal (buttock) muscles.
                                                    </p>
                                                    <ol>
                                                        <li>Stand straight with the knees only 1–2 inches apart. Hold on to a stable chair, the countertop, or another object for balance.</li>
                                                        <li>Slowly bend one knee behind the body, lifting the heel off the floor while keeping the thighs aligned. Continue to lift the heel in a smooth motion until the knee bend reaches a 90-degree angle. Keep the straight leg slightly bent to avoid locking it.</li>
                                                        <li>Hold the bent leg up for 5 seconds and then slowly lower it to the floor.</li>
                                                        <li>Repeat two more times with the same leg.</li>
                                                        <li>Switch sides and repeat.</li>
                                                    </ol>
                                                  
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab1_2_1">
                                                       <b>Benefits</b>
                                                    </a>
                                                    
                                                    
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab1_2_1" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <p>
                                                    Muscles involved: Hamstrings (back of the thigh) and gluteal (buttock) muscles.
                                                    </p>
                                                    <ol>
                                                        <li>During this exercise, the back thigh muscles work is to lift your lower leg this motion will make your hamstrings stronger.</li>
                                                        <li>Strong hamstrings will improve stability in your knees and you can prevent injury and pain.</li>
                                                        <li>Helps to relieve quad tightness and back pain.</li>
                                                        
                                                    </ol>
                                                  
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->

                        </div><!-- /.blog-post -->
                        
                        <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise2 : Chair Dips</h3>
                            
                            <img   src="assets/img/exechairdips5.gif" >
                            <p class="post-author-position">Chair dips: 10 repetitions, 3 sets(medicalnewtoday.com)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab1_2_2">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab1_2_2" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                        <p>
                                                    Muscles involved: Quadriceps, hamstrings, hip flexors, and gluteal muscles.
                                                    </p>
                                                    <ol>
                                                        <li>Use two high-backed, stable chairs, placing one on either side of the body with the chair backs next to the arms. Place a hand on the back of each chair for balance.</li>
                                                        <li>Bend both legs at the knee, being careful not to let the knees extend past the toes.</li>
                                                        <li>Extend the right leg out in front of the body in a slow kicking motion. Focus on keeping the weight balanced on the left foot.</li>
                                                        <li>Bring the right leg down slightly, holding it just a few inches off the floor for 5 seconds while continuing to balance on the left leg.</li>
                                                        <li>Slowly lower the right leg completely to the floor.</li>
                                                        <li>Stand up straight on both feet.</li>
                                                        <li>Switch sides and repeat.</li>
                                                        
                                                    </ol>
                                                    
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel --><div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab1_2_2">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab1_2_2" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                        <p>
                                                    Muscles involved: Quadriceps, hamstrings, hip flexors, and gluteal muscles.
                                                    </p>
                                                    <ol>
                                                        
                                                        <li>When you are engaging in this exercise, you will find that tension in your shoulders are eliminated.</li>
                                                        <li>This helps to lose weight because this burns more calories.</li>
                                                        
                                                        
                                                    </ol>
                                                    
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->
                    </div>
                    <!-- End Kneepain -->
                    
                    <!-- Begin 3.Leg pain -->
                    <div class="col-md-10" id="legpain" style="display:none">
                        <div ><h1 id="exercisetitle" style="text-align: center">Leg Pain</h1></div>                     
                            <div class="blog-post" style="text-align: center">
                           
                             <h3>Exercise1 : Calf Front Side Relax</h3>
                            
                            <img   src="assets/img/execalf6.gif">
                           
                           <!--<img src="https://cdn-prod.medicalnewstoday.com/content/images/articles/321/321446/woman-sitting-on-ground-outdoors-touching-toes-performing-foot-flexion-calf-stretch.jpg" alt="Woman sitting on ground outdoors touching toes performing foot flexion calf stretch" style="display: block; float: none;"-->
                            
                            <p class="post-author-position">Calf front side relax: 3 minutes each side(Sohu/sport)<p>       
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align:left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapseFive">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapseFive" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align:left">
                                            
                                                   
                                                    <ol>
                                                        <li>Lie down like a bed to stretch your legs forward.</li>
                                                        <li>Follow the instructions to bend the leg </li>
                                                        <li>Use your fist to gently rub your leg muscles from top to bottom.</li>
                                                       
                                                    </ol>
                                                   
                                          </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        
                                         <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align:left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapseFive">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapseFive" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align:left">
                                            
                                                   
                                                    <ol>
                                                        <li>Improves Circulation in your systemic.</li>
                                                        <li>Increase the vital oxygen needed to keep the tissue in your leg from deteriorating.</li>
                                                       
                                                    </ol>
                                                   
                                          </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->

                        </div><!-- /.blog-post -->
                        
                        <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise2 : Massage on Both Sides of the Calf</h3>
                            
                            <img    src="assets/img/exebothside7.gif">
                     
                            <p class="post-author-position">Massage on both sides of the calf: 3 minutes each side(Sohu/sport)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align:left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapseSix">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapseSix" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align:left">
                                                    
                                                    
                                                    <ol>
                                                        <li>lie down somewhere like a bed which could let your legs stretched forward.</li>
                                                        <li>Bent your leg like the instructions</li>
                                                        <li>Make scooping passes with your hands on the outside and inside of the leg to stimulate the different muscles in the upper leg.</li>
                                                       
                                                      
                                                    </ol>
                                                   
                                             
                                        
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align:left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapseSix">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapseSix" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align:left">
                                                    
                                                    
                                                    <ol>
                                                        <li>Enhance blood flow.</li>
                                                        <li>Reduce scar Tissue</li>
                                                        <li>Improves Circulation in your systemic.</li>
                                                       
                                                      
                                                    </ol>
                                                   
                                             
                                        
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->
                        
                         <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise3 : Calf Massage</h3>
                            
                           <img  src="assets/img/execalfmassage8.gif" >
                            
                            <p class="post-author-position">Calf massage: 3 minutes each side(Sohu/sport)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab1_3_3">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab1_3_3" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                 
                                                    <ol>
                                                        <li>lie down somewhere like a bed which could let your legs stretched forward.</li>
                                                        <li>Bent your leg like the instructions</li>
                                                        <li>
                                                            Massage by palm squeezing can achieve a deeper relaxation than stretching.
                                                        </li>
                                                       
                                                            
                                                      
                                                    </ol>
                                                   
                                                
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab1_3_3">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab1_3_3" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                 
                                                    <ol>
                                                        <li>Reduce Pain.</li>
                                                        <li>Increase the vital oxygen needed to keep the tissue in your leg from deteriorating.</li>
                                                        
                                                    </ol>
                                                   
                                                
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                                   
                        </div><!-- /.blog-post -->
                    </div>
                    <!-- End 3. Legpain -->


                    
                     <!-- Begin 4.Foot pain -->
                    <div class="col-md-10" id="footpain" style="display:none">
                        <div ><h1 id="exercisetitle" style="text-align: center">Foot Pain</h1></div>                     
                        <div class="blog-post" style="text-align: center">
                           
                             <h3>Exercise1 : Tennis Ball Roll</h3>
                            
                            <img   src="assets/img/exetennisball9.gif">
                            <p class="post-author-position">Ball roll: 2 minutes, 3 sets (medicalnewtoday.com)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapse7">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapse7" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    
                                                     <p>
                                                   Rolling a golf ball under the feet can help to relieve discomfort in the arches and ease pain associated with plantar fasciitis.
                                                    </p>
                                                   <ol>
                                                        <li>Sit up straight in a chair, with the feet flat on the floor.</li>
                                                        <li>Place a golf ball — or another hard, small ball — on the floor next to the feet.</li>
                                                        <li>Lay one foot on the ball and move it around, pressing down as hard as is comfortable. The ball should be massaging the bottom of the foot.</li>
                                                        <li>Continue for 2 minutes, then repeat on the other foot.</li>
                                                        
                                                    </ol>
                                                    <p>Note: A frozen bottle of water can be a soothing alternative if no suitable balls are available.</p>
                                                     
                                                  
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                         <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapse7">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapse7" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    
                                                     <p>
                                                   Rolling a golf ball under the feet can help to relieve discomfort in the arches and ease pain associated with plantar fasciitis.
                                                    </p>
                                                   <ol>
                                                        <li>This is self-care exercise, which release tension in feet. Allows superficial muscles of feet to relax.</li>
                                                        <li>There are thousands of nerves in the feet this exercise is very beneficial to the brain and nervous system as it has sensory connections from feet.</li>
                                                        
                                                        
                                                    </ol>                                                     
                                                  
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->

                        </div><!-- /.blog-post -->
                 
                        
                        <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise2 : Toe Splay</h3>
                            
                            <img   src="assets/img/exetoesplay10.gif"  >
                            <p class="post-author-position">Toe splay: 10 repetitions, 3 sets(medicalnewtoday.com)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapse8">
                                                       <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapse8" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                     <p>
                                                   The following exercise can help to enhance the strength of the feet.The toe splay was developed to improve control over the toe muscles. It can be done on both feet at once, or on alternate feet, depending on comfort.
                                                    </p>
                                                    <ol>
                                                        <li>Sit in a straight-backed chair with the feet gently resting on the floor.</li>
                                                        <li>Spread the toes apart as far as possible without straining. Hold the position for 5 seconds.</li>
                                                        <li>Repeat this motion 10 times.</li>
                                                        <li>Once some strength has been built up, try looping a rubber band around the toes. This will provide resistance and make the exercise more challenging.</li>
                                                    </ol>
                                                    
                                                  
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapse8">
                                                       <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapse8" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                     <p>
                                                   The following exercise can help to enhance the strength of the feet.The toe splay was developed to improve control over the toe muscles. It can be done on both feet at once, or on alternate feet, depending on comfort.
                                                    </p>
                                                    <ol>
                                                        <li>Improve control over the toe muscles and strengthen all parts of feet.</li>
                                                        <li>Realigned, relaxed, very less pain, great flexible, no tiredness.</li>
                                                        <li>Increase blood flow to your toes, relieve pain and swelling.</li>
                                                    </ol>
                                                    
                                                  
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group -->
                                    <!-- /.post-content -->
                        </div><!-- /.blog-post -->
                    </div>
                    <!-- End 4. Foot pain -->
                    
                    <!-- Begin 5.Vascular vein -->
                    <div class="col-md-10" id="vascularvein" style="display:none">
                        <div ><h1 id="exercisetitle" style="text-align: center">Vascular Vein</h1></div>                     
                        <div class="blog-post" style="text-align: center">
                           
                             <h3>Exercise1 : Vascular Vein</h3>
                            
                            <img   src="assets/img/exevascularvein.gif" web_uri="113ea0004b767f60281d8">
                            
                            <p class="post-author-position">3-5 times in a row,2-3 times a day(Wukong.com/question)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapse9">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapse9" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <p>Doing this exercise can exercise the leg muscles and promote blood circulation in the lower limbs. </p>
                                                    <ol>
                                                        <li>Supine on the bed, bend your knees, hold your knees with your hands, think of yourself as a tumbler. </li>
                                                        <li>Keep rolling.</li>                                                     
                                                        
                                                    </ol>
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapse9">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapse9" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <p>Doing this exercise can exercise the leg muscles and promote blood circulation in the lower limbs. </p>
                                                    <ol>
                                                        <li>Eliminates the core factor.</li>
                                                        <li>Eliminates the balance factor.</li>                                                     
                                                        <li>Eliminates the Stabilizers factor.</li>                                                     

                                                    </ol>
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->

                        </div><!-- /.blog-post -->
                        
                        <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise2 : Star Jump</h3>
                            
                           <img  src="assets/img/exestarjump12.gif" >
                            
                            <p class="post-author-width="60%" height = "400px"position">Star jump: 100-140 per group repetitions, the rest interval is 3 minutes, 4 groups a day (dnycwh.com/news)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#collapse10">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="collapse10" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <ol>
                                                        <li>Keep your body upright, with your feet and shoulders wide, and put your hands on your sides.</li>
                                                        <li>When both feet are leaping and landing, the hands are opened to the top of the head.</li>
                                                        <li>Return to the starting position after landing on both feet and put your hands on your sides.</li>
                                                    </ol>
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_collapse10">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_collapse10" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <ol>
                                                        <li>Increase the heart rate by jumping.</li>
                                                        <li>Increase the blood flow and the oxygen level for the muscles</li>
                                                        <li>Strengthen your deltoids and leg muscles.</li>
                                                        <li>Helps you to run faster and jump higher.</li>

                                                    </ol>
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->
                    </div>
                    <!-- End 5. Vascular vein -->
                    
                     <!-- Begin 6.No Symptom -->
                
                    <div class="col-md-10" id="nosymptom1">
                        <div ><h1 id="exercisetitle" style="text-align: center">Strengthen your Lower Body</h1></div>                     
                        <div class="blog-post" style="text-align:center">
                           
                             <h3>Exercise1 : Lunges</h3>
                            
                            <img src="assets/img/exelunges13.gif" alt="Man demonstrating lunge exercise to strengthen his muscles for standing up for long periods." class="_1z778" >
                            <p class="post-author-position">Lunges: 10 repetitions,3 sets(medicalnewtoday.com)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab1_6_1">
                                                       <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab1_6_1" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                     <p>This exercise uses your gluteal muscles (sometimes referred to as glutes), quadriceps and hamstrings.
                                                     </p>
                                                    <ol>
                                                        <li>From a standing position, take a large step forward with one leg, bending your other knee and keeping your balance.</li>
                                                        <li>Return to the starting position and repeat the movement with the other leg.</li>
                                                         
                                                    </ol>
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab1_6_1">
                                                       <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab1_6_1" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                     <p>This exercise uses your gluteal muscles (sometimes referred to as glutes), quadriceps and hamstrings.
                                                     </p>
                                                    <ol>
                                                        <li>A proper lunge posture can help you achieve a stronger and more stable core.</li>
                                                        <li>Lunges train one part of your body independently from the other at a time.</li>
                                                        <li>Lunges are quite effective in terms of strengthening legs and buttocks.</li>
                                                        <li>Better spinal health and hip flexibility</li>
                                                         
                                                    </ol>
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->

                        </div><!-- /.blog-post -->
                        
                        <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise2 : Heel Raises</h3>
                            
                          <!--  <img class="img-carousel post-img" src="assets/img/portfolio-1.jpg" alt=""> -->
                          
                             <img src="assets/img/vv.gif" alt="A man standing with a chair demonstrating heel raise exercises to strengthen his muscles for standing up for long periods." class="_1z778" >
                              <p class="post-author-position">Heel raises: 60 repetitions, 5 sets(medicalnewtoday.com)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab1_6_2">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab1_6_2" class="panel-collapse collapse in">
                                                 <div class="panel-body" style="text-align: left">
                                                     <p>This will train the muscles in your lower legs or calves (the gastrocnemius and soleus muscles, to be specific)</p>
                                                     <ol>
                                                         <li>Hold onto a solid object, such as a chair, in front of you for balance. Stand with your legs at hip-width apart, feet flat on the floor.</li>
                                                         <li>Keep your knees straight and rise up onto your toes. Slowly lower yourself back to the starting position.</li>
                                                         <li>Doing the same movement with your knees slightly bent will make your soleus muscles, on the lower part of your calves, more active.</li>
                                                       
                                                         
                                                     </ol>
                                                  
                        </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab1_6_2">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab1_6_2" class="panel-collapse collapse in">
                                                 <div class="panel-body" style="text-align: left">
                                                     <p>This will train the muscles in your lower legs or calves (the gastrocnemius and soleus muscles, to be specific)</p>
                                                     <ol>
                                                         <li>Ankle Strength and Stability.</li>
                                                         <li>Lower body performance.</li>
                                                         <li>Injury prevention.</li>
                                                        
                                                         
                                                     </ol>
                                                  
                        </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->
                        <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise3 : Squats</h3>
                            
                          <!--  <img class="img-carousel post-img" src="assets/img/portfolio-1.jpg" alt=""> -->
                          
                               <img src="assets/img/exequatsside15.gif"  class="_1z778" >
                             <p class="post-author-position">Squats: 15 repetitions. 3 sets(medicalnewtoday.com)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab1_6_3">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab1_6_3" class="panel-collapse collapse in">
                                                 <div class="panel-body" style="text-align: left">
                                            <p>
                                            This exercise uses your quadriceps, hamstrings and gluteal muscles.
                                            </p>
                                            <ol>
                                                
                                                <li>Stand with your feet shoulder-width apart. Bend from your hips and squat down.</li>
                                                <li>Be sure to keep your back straight and feet flat on the ground. Distribute your weight on your heels.</li>
                                                <li>Straighten and return to the starting position.</li>
                                            </ol>
                                                  
                                            </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab1_6_3">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab1_6_3" class="panel-collapse collapse in">
                                                 <div class="panel-body" style="text-align: left">
                                            <p>
                                            This exercise uses your quadriceps, hamstrings and gluteal muscles.
                                            </p>
                                            <ol>
                                                
                                                <li>Increase entire body strength and muscle.</li>
                                                <li>Burn fat.</li>
                                                <li>Improve Circulation.</li>
                                            </ol>
                                                  
                                            </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->


                    </div>






                    <!-- End 6.No Symptom -->


                </div>  <!-- End exercise at home content -->

            </div><!-- /.tab-pane  -->
            
            <div class="tab-pane fade" id="htab2">
              <div class="row"> <h4 style="padding: 20px;line-height: 1.6;color:#808080">Build in a pattern of creating greater movement variety in the workplace. Muscles can become stiff and painful as you stand or walk all day. Movement is important to get blood circulation through the muscles.</h4></div>
              <div>
                    <!-- Begin 1. Exercise at work -->
                     <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise1 : Standing Knee Lift</h3>
                            
                          <!--  <img class="img-carousel post-img" src="assets/img/portfolio-1.jpg" alt=""> -->
                          
                             
                                
                            <img  src="img/Exercise%20V2.gif"  hight="400">
                            <p class="post-author-position">Standing knee lift: repeat the exercise 3-5 times.(Tech )<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab2_1">
                                                       <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab2_1" class="panel-collapse collapse in">
                                                 <div class="panel-body" style="text-align: left">
                                                     <ol>
                                                         <li>Stand up straight with your feet together and your hands on your hips.</li>
                                                         <li>Lift your left knee toward the ceiling as high as is comfortable or until your thigh is parallel to the floor. Hold, then slowly lower your knee to the starting position.</li>
                                                         <li>Then perform the exercise 3-5 times with your right leg.</li>
                                                     </ol>
                                                   
                                                     <p>Tips and techniques</p>
                                                     <ul>
                                                         <li>Keep your chest lifted and your shoulders down and back.</li>
                                                         <li>Lift your arms out to your sides to help you balance if needed.</li>
                                                         <li>Tighten your abdominal muscles throughout.</li>
                                                     </ul>
                                                      
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab2_1">
                                                       <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab2_1" class="panel-collapse collapse in">
                                                 <div class="panel-body" style="text-align: left">
                                                     <ol>
                                                         <li>Midline stability.</li>
                                                         <li>Abnorminal development.</li>
                                                         <li>Bracing Capacities</li>
                                                     </ol>
                                                   
                                                    
                                                      
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->

                    
                    <!-- End 1. Exercise at work -->
                    
                    <!-- Begin 2. Exercise at work -->
                    
                    
                     <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise2 : Squat</h3>
                            
                          
                          <img  src="img/Exercise%20Strength%20Exercise.gif"  hight="400">
                          
                            <p class="post-author-position">Squat: repeat 8-12 times.(ABC Life: Luke Wong/Luke Tribe)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab2_2">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab2_2" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <ol>
                                                        <li>Stand with your feet shoulder-width apart, arms at your front.</li>
                                                        <li>lowly bend your knees and hip straight, lowering your buttocks about eight inches, as if you're sitting back into a chair. Let your arms move as your body goes down to help you balance. Keep your back straight. Slowly return to the starting position. </li>
                                                       
                                                    </ol>
                                                    <p>Tips and techniques:</p>
                                                    <ul>
                                                        <li>Shift your weight into your heels.</li>
                                                        <li>Squeeze your buttocks as you stand to help you balance.</li>
                                                    </ul>
                                                        
                                                      
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                         <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab2_2">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab2_2" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align: left">
                                                    <ol>
                                                        <li>Increase entire body strength and muscle.</li>
                                                        <li>Burn fat. </li>
                                                        <li>Improve Blood Circulation. </li>

                                                       
                                                    </ol>
                                                   
                                                      
                                                   
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->
                     <!-- End 2. Exercise at work -->
                     
                      <!-- Begin 3. Exercise at work -->
                      
                      
                     <div class="blog-post" style="text-align: center">
                        
                             <h3>Exercise3 : Arms Swing</h3>
                            
                          
                           <img  src="assets/img/exearmswing.gif"  hight="400">

                            <p class="post-author-position">Heel raises: 10 repetitions, 3 sets(ABC Life: Luke Wong/Luke Tribe)<p>
                              <div class="panel-group accordion mb-50" id="accordion-gray">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#tab2_3">
                                                        <b>Steps</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="tab2_3" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align:left">
                                                    <ol>
                                                        <li>Stand with your feet shoulder-width apart, arms at your front.</li>
                                                        <li>lowly bend your knees and hip straight, lowering your buttocks about eight inches, as if you're sitting back into a chair. Let your arms move as your body goes down to help you balance. Keep your back straight. Slowly return to the starting position. </li>
                                                       
                                                    </ol>
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                         <div class="panel panel-default">
                                            <div class="panel-heading" style="text-align: left">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion-gray" href="#b_tab2_3">
                                                        <b>Benefits</b>
                                                    </a>
                                                </h4><!-- /.panel-title -->
                                            </div><!-- /.panel-heading -->
                                            <div aria-expanded="false" id="b_tab2_3" class="panel-collapse collapse in">
                                                <div class="panel-body" style="text-align:left">
                                                    <ol>
                                                        <li>This exercise target the muscle core of shoulders and lats.</li>
                                                        <li>Stength arm Muscle </li>
                                                       
                                                    </ol>
                                                </div><!-- /.panel-body -->
                                            </div><!-- /.panel-collapse -->
                                        </div><!-- /.panel -->
                                    </div><!-- /.panel-group --><!-- /.post-content -->
                        </div><!-- /.blog-post -->
                      
                     <!-- End 3. Exercise at work -->
                </div> <!-- /symptom -->
            </div><!-- /.tab2-pane -->
            
            
            <div class="tab-pane fade" id="htab3" style="height: 1800px">
               <!-- Main exercise at home content start -->
                <div class="row"> <h4 style="padding: 20px;line-height: 1.6;color:#808080">Strengthening your body with specific exercises is significant for a job that requires long periods of standing. The suggested exercises also suit with people who have the problem of varicose veins in legs and feet commonly induced by excessive standing.</h4></div>
                          <div class="container">

     
                                    
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel carousel-sync one-slide-slider slide" id="oneSlideSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="assets/img/ex_walking.jpg" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                               
                                                <h3 >Walking</h3>
                                                <p class="team-member-text">Going for a walk is highly beneficial and usually safe for people of all ages and fitness levels. Regular walks can help you lose weight, maintain a healthy blood pressure, and strengthen your bones and muscles.</p>
                                              
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                             
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.carousel -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel carousel-sync one-slide-slider slide" id="oneSlideSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="assets/img/ex_cycling.jpg" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h3>Bicycling</h3>
                                               
                                                <p class="team-member-text">Bicycling is a low-impact exercise. Like walking, it can increase circulation while still protecting your joints. Regular cycling can strengthen your calf muscles and promote healthy blood flow. Both traditional and stationary bikes can be used.</p>
                                              
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                             
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.carousel -->
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel carousel-sync one-slide-slider slide" id="oneSlideSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="assets/img/ex_swimming.jpg" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                
                                                <h3>Swimming</h3>
                                                <p class="team-member-text">Getting into the water is often a good way of offloading all the bones and muscles, so going for a swim or even just walking in water would be beneficial.</p>
                                              
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                             
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.carousel -->
                    </div>
                </div>
             <div class="container_map">
             <H1>Choose the exercise you like</H1>
             <div class="marker-filter">
            <span class="filter-box">
            <label for="Aerobics">
                <input type="checkbox" name="Aerobics" value="Aerobics" id="Aerobics" onclick="addAerobicMarker()">
                Walking
            </label>
        </span>
                                      <span class="filter-box">
            <label for="Cycling">
                <input type="checkbox" name="Cycling" value="Cycling" id="Cycling"  onclick="addCyclingMarker()">
                Bicycling
            </label>
        </span>
                                      <span class="filter-box">
            <label for="Swimming">
                <input type="checkbox" name="Swimming" value="Swimming" id="Swimming"  onclick="addSwimmingMarker()">
                Swimming
            </label>
        </span>
                                  </div>
                                  <div id="map"></div>
                              </div>
            </div>

            



</div>
        </section>
        <footer id="colophon" class="site-footer" style="padding: 40px">
 
            <div class="copyright">
                <p>&copy; 2019 Get-Move | Made by Tech Chaser</p>
            </div><!-- /.copyright -->

        </footer>

    </main><!-- /.site-main -->

<!-- /.site-footer -->

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

<?php include_once 'facility.php'?>
<script>

    var map;
    var marker;
    var locations = [];
    var aeroMarker = [];
    var cycMarker = [];
    // var danMarker = [];
    var swimMarker = [];
    var aerobicsPin = "img/aerobics.png";
    var cyclingPin = "img/cycling.png";
    // var dancingPin = "img/dancing.png";
    var swimmingPin = "img/swim.png";
    var currentPin = "img/mapPin.png";

    function loadMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -37.813, lng: 144.963},
            zoom: 12,
            mapTypeControl: true,
            mapTypeControlOptions:
                {
                    mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                        'styled_map'],
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                }
        });

        // get current location and load the Google map
        // if (navigator.geolocation) {
        //     navigator.geolocation.getCurrentPosition(function (position) {
        //
        //         var pos = {
        //             lat: position.coords.latitude,
        //             lng: position.coords.longitude
        //         };
        //         map = new google.maps.Map(document.getElementById('map'), {
        //             center: pos,
        //             zoom: 12,
        //             mapTypeControl: true,
        //             mapTypeControlOptions:
        //                 {
        //                     mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
        //                         'styled_map'],
        //                     style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
        //                 }
        //         });
        //         var infowindow = new google.maps.InfoWindow({
        //             content: "Current Location"
        //         });
        //         var marker = new google.maps.Marker({
        //             //position: coordinates,
        //             position: pos,
        //             map: map,
        //             icon: currentPin
        //         });
        //         google.maps.event.addListener(marker, 'click', function() {
        //             infowindow.open(map,marker);
        //         });
        //         infowindow.open(map,marker);
        //     }, function () {
        //         handleLocationError(true, infoWindow, map.getCenter());
        //     });
        // } else {
        //     // Browser doesn't support Geolocation
        //     handleLocationError(false, infoWindow, map.getCenter());
        // }
    }
    //
    // function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    //     infoWindow.setPosition(pos);
    //     infoWindow.setContent(browserHasGeolocation ?
    //         'Error: The Geolocation service failed.' :
    //         'Error: Your browser doesn\'t support geolocation.');
    //     infoWindow.open(map);
    //
    // }

    //Functions to add markers for aerobic exercises
    function addAerobicMarker() {
        locations = <?php getAllFacility() ?>;
        var checkBox = document.getElementById("Aerobics");
        /* var text = document.getElementById("text"); */
        //if users
        if (checkBox.checked == true) {
            var markers = [];
            var i;
            for (i = 0; i < locations.length; i++) {
                // console.log(contentString);
                if (locations[i][3] == "Aerobics") {
                    var contentString = locations[i][0] + ", " + locations[i][5] + " "
                        + locations[i][6] + " " + locations[i][7];
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    var marker = new google.maps.Marker({
                        //position: coordinates,
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                        icon: aerobicsPin,
                        title: locations[i][0],
                        info: contentString
                    });
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.setContent(this.info);
                        infowindow.open(map, this);
                    });
                    markers.push(marker);
                }
                aeroMarker = markers;
            }
        }
        else
        {
            for (var i = 0; i < aeroMarker.length; i++)
            {
                aeroMarker[i].setMap(null);
            }
        }


    }

    function addSwimmingMarker()
    {
        locations = <?php getAllFacility() ?>;
        var checkBox = document.getElementById("Swimming");
        /* var text = document.getElementById("text"); */
        if (checkBox.checked == true){
            var markers = [];
            var i;
            for (i = 0; i < locations.length; i++)
            {
                if (locations[i][3] == 'Swimming')
                {
                    var contentString = locations[i][0] + ", " + locations[i][5] + " "
                        + locations[i][6] + " " + locations[i][7];
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    var marker = new google.maps.Marker({
                        //position: coordinates,
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                        icon: swimmingPin,
                        title: locations[i][0],
                        info: contentString
                    });
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.setContent(this.info);
                        infowindow.open(map, this);
                    });
                    markers.push(marker);
                }
            }
            swimMarker = markers;
            // var markerCluster = new MarkerClusterer(map, markers,
            //     {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
        } else {
            for (var i = 0; i < swimMarker.length; i++)
            {
                swimMarker[i].setMap(null);
                // markerCluster.redraw(markerCluster.);
            }
        }
    }

    function addCyclingMarker() {
        locations = <?php getAllFacility() ?>;
        var checkBox = document.getElementById("Cycling");
        /* var text = document.getElementById("text"); */
        if (checkBox.checked == true) {
            var markers = [];
            var i;
            for (i = 0; i < locations.length; i++) {
                if (locations[i][3] == "Cycling") {
                    var contentString = locations[i][0] + ", " + locations[i][5] + " "
                        + locations[i][6] + " " + locations[i][7];
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    var marker = new google.maps.Marker({
                        //position: coordinates,
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                        icon: cyclingPin,
                        title: locations[i][0],
                        info: contentString
                    });
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.setContent(this.info);
                        infowindow.open(map, this);
                    });
                    markers.push(marker);
                }
            }
            cycMarker = markers;
            // var markerCluster = new MarkerClusterer(map, cycMarker,
            //     {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
        } else {
            for (var i = 0; i < cycMarker.length; i++) {
                cycMarker[i].setMap(null);
            }
        }
    }

</script>
<script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFBcC-k-V5abg0sD4F257eSiFwl5CJnO8&callback=loadMap"
        async defer>
</script>

</html>