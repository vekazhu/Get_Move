<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Right Shoes</title>

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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/colors.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .container {
            width: 60%;
            height:550px;
            margin: 0 auto;
        }

        .container2 {
            width: 80%;
            height: 1260px;
            margin: 0 auto;
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

<section class="site-section-small section-blog">

    <div class="text-center">

        <h1 class="section-title-big">Right Shoes</h1>
         <p class="section-text">Wearing comfortable shoes can effectively reduce the pressure on the feet and legs, slow down the fatigue of the lower limbs.</p>

    </div>
    <!-- /.breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="recommendation.php">Recommendations</a></li>
            <li class="active"></a>Right shoes</li>
        </ol>
        <h4 style="line-height: 1.6;color:#808080;  text-align: justify"> Do you know that having a pair of comfortable work shoes can take care of your feet both at work and
            after work. Taking care of your feet can extend your career if your job involves spending hours on your feet.</h4>
        <iframe width="800" height="415" src="https://www.youtube.com/embed/61nNacLMeO4" frameborder="0" allowfullscreen align=”middle” margin=”auto”></iframe>
        <p class="quote-owner orange-text">Standing all day for work? Here's how to avoid pain and injury (Wong, 2018)</p>
    </div>

</section>

<div class="container2">
    <h4 style="line-height: 1.6;color:#808080;  text-align: justify">Look at here, we have more to offer to you. Do you know that some occupations may
    have specific preferences for their work shoes? Feel free to check on them! </h4>
    <aside class="col-md-2">

        <div class="sidebar">

            <div>
                <h4 class="widget-title">Choose from:</h4>
                <div class="radio-btn">
                    <input type="radio" name="radio-btn" id="radio-btn1" value="Nurse" checked>
                    <label for="radio-btn1">Nurse</label>
                </div>
                <div class="radio-btn">
                    <input type="radio" name="radio-btn" id="radio-btn2"  value="Construction worker">
                    <label for="radio-btn2">Construction Worker</label>
                </div>
                <div class="radio-btn">
                    <input type="radio" name="radio-btn" id="radio-btn3" value="Hospitality Jobs">
                    <label for="radio-btn3">Hotel Porter</label>
                </div>
            </div>
            <script type="text/javascript">
                document.getElementById("radio-btn1").onclick = function() {
                    document.getElementById("Nurse").style.display = "block";
                    document.getElementById("Construction Worker").style.display = "none";
                    document.getElementById("Hospitality Jobs").style.display = "none";

                }

                document.getElementById("radio-btn2").onclick = function() {
                    document.getElementById("Nurse").style.display = "none";
                    document.getElementById("Construction Worker").style.display = "block";
                    document.getElementById("Hospitality Jobs").style.display = "none";

                }

                document.getElementById("radio-btn3").onclick = function() {
                        document.getElementById("Nurse").style.display = "none";
                        document.getElementById("Construction Worker").style.display = "none";
                        document.getElementById("Hospitality Jobs").style.display = "block";

                    }
            </script>
        </div>
    </aside>
    <div class="col-md-10" id="Nurse">
        <div ><h1 id="shoestitle" style="text-align: center">Nurse</h1></div>
        <div class="blog-post">
            <h3>Tennis Shoes</h3>
            <p class="post-author-position">It is the perfect combination of comfort and practicality. Tennis shoes are stable, non-slip and can
                protect the feet fully. They are very popular with nurses who work in fast-paced units like the ICU and ER.<p>
            <img class="img-carousel post-img" src="img/nurse1.jpg" style="width:500px;height:590px;" alt>
        </div>
        <div class="blog-post">
            <h3>Slip Shoes</h3>
            <p class="post-author-position">Slip shoes are very useful in operating rooms, as nurses need to make very quick changes to sterile
            footwear. However, slip shoes should still have closed toes and backs, low heels and non-skid soles.<p>
                <img class="img-carousel post-img" src="img/nurse2.jpg" style="width:500px;height:590px;" alt>
        </div>
        <p class="quote-owner orange-text">Nursing Shoes: What Every Nurse Needs to Know (LearningHouse, 2017)</p>
    </div>
    <div class="col-md-10" id="Construction Worker" style="display:none">
        <div ><h1 id="shoestitle" style="text-align: center">Construction Worker</h1></div>
        <div class="blog-post">
            <p class="post-author-position">We've all seen work boots that construction workers usually wear, but aren't you curious about how
                exactly can work boots protect their feet?<p>
            <h3>Toe Protection</h3>
            <p class="post-author-position">The black section at the very front of the boots is the composite toe cap. Nowadays toe cap is usually made of
            plastic, carbon fiber and Kevlar. Although composite toe cap is very light, but it is even thicker than the steel toe cap.<p>
                <img class="img-carousel post-img" src="img/construction1.jpg" style="width:500px;height:590px;" alt>
        </div>
        <div class="blog-post">
            <h3>Metatarsal Guard</h3>
            <p class="post-author-position">Metatarsal guard can protect the upper part of foot from nails or heavy objects. Work boots usually
            have an internal layer of metatarsal guard.<p>
                <img class="img-carousel post-img" src="img/construction2.jpg" style="width:500px;height:590px;" alt>
        </div>
        <p class="quote-owner orange-text">Choosing the Right Work Boots for Your Job (West, CEG & Mueller, 2018)</p>
    </div>
    <div class="col-md-10" id="Hospitality Jobs" style="display:none">
        <div ><h1 id="shoestitle" style="text-align: center">Hospitality Jobs</h1></div>
        <div class="blog-post">
            <h3>Hotel Porter</h3>
            <p class="post-author-position">Hotel porter is usually the first person that customer meet after arriving the hotel. This means what hotel porter
             wears can affect the image of the hotel. Therefore, hotel porter is better to wear shoes that look classy and professional.<p>
                <img class="img-carousel post-img" src="img/hotel1.jpg" style="width:500px;height:590px;" alt>
        </div>
        <div class="blog-post">
            <h3>Housekeeping Staff</h3>
            <p class="post-author-position">On average, housekeeping staffs need to clean 16 rooms per day, thus shoes they wear should have
             firm back to support their legs and ankles. Moreover, shoes should be slip resistant to prevent falling accidents during work. <p>
                <img class="img-carousel post-img" src="img/hotel2.jpg" style="width:500px;height:590px;" alt>
        </div>
        <p class="quote-owner orange-text">SHOE REQUIREMENTS FOR HOSPITALITY WORKERS (Max, 2017)</p>
    </div>
</div>

<footer id="colophon" class="site-footer" style="padding: 40px">

    <div class="copyright">
        <p>&copy; 2019 Get-Move | Made by Tech Chaser</p>
    </div><!-- /.copyright -->

</footer>
</body>