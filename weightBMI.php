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

    <title>BMI</title>

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
                    <h1 class="section-title-big">Healthy Weight</h1>     
                     <p class="section-text">Obesity is one of the important reasons for increasing the burden on the body, especially for people who need to stand for a long time at work.</p>
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="recommendation.php">Recommendations</a></li>
                    <li class="active">Healthy Weight</li>
                </ol><!-- /.breadcrumb -->
               
                <script type="text/javascript">
                    function calculateBMI1() {
                        document.getElementById("answer").innerHTML = "";
                        height = document.getElementById("height").value;
                        weight = document.getElementById("weight").value;
                        valid = true;
                        if(isNaN(height) || height.trim() === ""){
                            alert("Height: " + height + " is not a number.");
                            valid = false;
                        }
                        else {
                                if( height <= 0 || height > 200){
                                    alert("Height: " + height + " is not in the range (0-200 cm)");
                                    valid = false;
                                }
                        } 
                        
                        if(isNaN(weight) || weight.trim() === ""){
                            alert("Weight: " + weight + " is not a number.");
                            valid = false;
                        }
                        else {
                             if( weight <= 0 || weight > 150){
                                alert("Weight: " + weight + " is not in the range (0-150 kg)");
                                valid = false;
                              }
                        }
                        
                         if (valid) {
                            heightmetre = document.getElementById("height").value/100;
                            rawbmi = weight/(heightmetre*heightmetre);
                            bmi = Math.round( rawbmi  * 10 ) / 10;
                            if (bmi < 18.5) {
                                document.getElementById("answer").innerHTML = "Your BMI is <b>" + bmi + "</b>, <b>Underweight</b>" ;
                            } else if (bmi >= 18.5 && bmi <=24.9) {
                                document.getElementById("answer").innerHTML = "Your BMI is <b>" + bmi + "</b>, <b>Normal</b>" ;
                            } else if (bmi >= 25 && bmi <=29.9) {
                                document.getElementById("answer").innerHTML = "Your BMI is <b>" + bmi + "</b>, <b>Overweight</b>" ;
                            } else{
                                document.getElementById("answer").innerHTML = "Your BMI is <b>" + bmi + "</b>, <b>Obese</b>" ;
                            }                     
                         }               
                    }
                </script>
                <div class="row"> <h4 style="padding: 20px;line-height: 1.6;color:#808080"> Standing posture at work and overweight exacerbate varicose veins. It is important for people in standing jobs to realize that you are not overweight in order to reduce the chance of varicose veins.</h4></div>
                <div class="row"> 
                    <aside class="col-md-2">                                 
                         <div class="sidebar">                           
                            <div class="widget widget-categories">
                                <h4 class="widget-title">Healthy Weight</h4>
                                <ul class="list-unstyled">
                                    <li><a href="weightBMI.php">BMI Calculator</a></li>   
                                    <li><a href="underconstruction.php">Meal Plan</a></li>   
                                </ul><!-- /.list-unstyled -->   
                            </div><!-- /.widget-categories -->
                        </div><!-- /.sidebar -->
                    </aside>
                     
                    <div class="col-md-9">

                        <div class="row">

                            <div class="col-md-12">
                                <section class="section-contact-us">

                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                               
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>1. Height(cm)</label>
                                                           <input class="form-control" type="text" id="height" placeholder = "" required>
                                                           <label>2. Weight(kg)</label>
                                                           <input class="form-control" type="text" id="weight" placeholder ="" required>
                                                            <button class="btn btn-yellow" onclick="calculateBMI1()" >Calculate</button>
                                                            <div class="clearfix mb-50"></div>
                                                            <div id="answer"></div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                            <img src="assets/img/bmi_1.jpg" alt="BMI Scaling">
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