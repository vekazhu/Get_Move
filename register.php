<?php include('serverregister.php')?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sign up</title>

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
                            <a href="getmove.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Get-Move Plan<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <?php if (empty($_SESSION['username']) === false) { ?>
                            <ul class="dropdown-menu">
                                <li><a href="breaktime.php">Break Time</a></li>
                                <li><a href="exerciseplan.php">Exercise Plan</a></li>
                                
                            </ul><!-- /.dropdown-menu -->
                            <?php }?>
                        </li><!-- /.dropdown -->
                        
                        <li class="navbar-nav dropdown">
                            <a href="login.php" class="active dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>&nbsp;&nbsp;User<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
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

        <section class="site-section section-quote text-center" style="border: 0px solid green">

            <div class="container" style="border: 0px solid blue"> 
                
                  <div class="text-center">

                    <h1 class="section-title-big">Sign Up</h1>

                    <p class="section-text">Create a new account and start your plan to get move.</p>

                </div>

                 <div class="row" style="border: 0px solid blue">

                    <div class="col-md-6 col-md-offset-3" style="border: 0px solid red">

                        <div class="site-section-small test-center" style="border: 0px solid red;padding: 10px;text-align: center">

                            <form class="form-horizontal contact-form text-left" action="register.php" method="post" >
                                <?php include('error.php')?>
                                <div>
                                    <label for="username">User Name: <font style="color:red">*</font> &nbsp;(1-8 characters)</label>
                                 <input class="form-control" type="text" name="username" placeholder="eg. you123" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" required>
                                </div>
                                <div>
                                 <label for="email">E-mail: <font style="color:red">*</font></label>
                                 <input class="form-control" type="email" name="email" placeholder="eg. you@email.com" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                                </div>
                                <div>
                                 <label for="password_1">Password: <font style="color:red">*</font> &nbsp;(8-20 characters with at least 1 digit and 1 alphabet)</label>
                                 <input class="form-control" type="password" name="password_1" placeholder="eg. ********" value="<?php echo isset($_POST['password_1']) ? $_POST['password_1'] : '' ?>" required>
                                </div>
                                <div>
                                 <label for="password_2">Confirm Password: <font style="color:red">*</font></label>
                                 <input class="form-control" type="password" name="password_2" placeholder="eg. ********" value="<?php echo isset($_POST['password_2']) ? $_POST['password_2'] : '' ?>" required>
                                </div>
                                 <button class="btn btn-yellow" type="submit" name="register_user">SIGN UP</button>
                            </form><!-- /.contact-form -->

                        </div>
                        <hr> 
                
                        <div class="text-left" style="padding:15px">

                            <label>Already a user?</label>
                            <p>&nbsp;</p>

                        <button class="btn btn-yellow" onclick="window.location.href='login.php'">LOG IN</button>
                        
                    </div>     
                
                </div>
            </div>
            
        </section><!-- /.section-quote -->
      
        
       
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