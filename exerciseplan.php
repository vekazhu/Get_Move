<?php
session_start();
if (empty($_SESSION['username'])){
    $_SESSION['msg'] = "You  must login first to view this page";
    header("location: login.php");
}
?>
<?php
// include config with database definition
include('config_mysqli.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Exercise Plan</title>

    <link rel="stylesheet" href="style_ep.css" type="text/css" media="screen"/>
    <script type="text/javascript">
        var redipsURL = '/javascript/drag-and-drop-example-3/';
    </script>

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
<!--    <script type="text/javascript" src="header.js"></script>-->
    <script type="text/javascript">
        var redipsURL = '/javascript/drag-and-drop-example-3/';
    </script>
    <script type="text/javascript" src="redips-drag-min.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <style type="text/css">
        .center {
            text-align: center;
            list-style-position: inside;
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
                            <a href="recommendation.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Recommendations<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="workshoes.php">Right Shoes</a></li>
                                <li><a href="exercise.php">Exercise</a></li>
                                <li><a href="weightBMI.php">Healthy Weight</a></li>
                                <li><a href="workplace.php">Support at Work</a></li>

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

        <div id="main_container" style="height: 835px">
            <div class="text-center">

                <h1 class="section-title-big">Exercise Plan</h1>

                <p style="line-height: 1.6; text-align: justify">Are you too lazy to do exercise? Maybe a weekly exercise plan can help you. We have selected exercises that can reduce
                     symptoms of prolonged standing for you, all you have to do is to fill them to the time table and try to follow your plan. It's also recommended that
                 people who face impacts brought by prolonged standing should not do exercise intensively :) </p>
            </div><!-- /.text-center -->
            <div class="text-center" style="text-align: left">
                <ol class="breadcrumb" style="display: inline-block">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="getmove.php">Get-Move Plan</a></li>
                    <li class="active"></a>Exercise Plan</li>
                </ol>
            </div>
                <ol class="center" style="font-size: larger; color: grey">
                    <p style="object-position: bottom; color: orangered; bold">How to use the exercise plan:</p>
                    <li>Add an exercise to the plan by dragging it from the exercise list on the left and drop it to your preferred time slot.</li>
                    <li>Remove an exercise from the exercise plan by dragging it to the 'Trash'. </li>
                    <li>Save your weekly exercise plan by clicking the 'Save' button.</li>
                    <li>After the plan is saved, you will be redirected to your updated plan.</li>
                </ol>


            <!-- tables inside this DIV could have draggable content -->
            <div id="redips-drag">

                <!-- left container -->
                <div id="left">
                    <table id="table1" style="width: 150px; align-items: center">
                        <colgroup style="alignment: center">
                            <col width="250"/>
                        </colgroup>
                        <tbody style="text-align: center">
                        <?php exercise() ?>
                        <tr><td class="redips-trash" title="Trash">Trash</td></tr>
                        </tbody>
                    </table>
                </div><!-- left container -->

                <!-- right container -->
                <div id="right">
                    <table id="table2">
                        <colgroup>
                            <col class="redips-mark blank" width="50"/>
                            <col width="200"/>
                            <col width="200"/>
                            <col width="200"/>
                            <col width="200"/>
                            <col width="200"/>
                            <col width="200"/>
                            <col width="200"/>
                        </colgroup>
                        <tbody>
                        <tr>
                            <!-- if checkbox is checked, clone school subjects to the whole table row  -->
                            <td class="redips-mark blank">Time</td>
                            <td class="redips-mark dark">Monday</td>
                            <td class="redips-mark dark">Tuesday</td>
                            <td class="redips-mark dark">Wednesday</td>
                            <td class="redips-mark dark">Thursday</td>
                            <td class="redips-mark dark">Friday</td>
                            <td class="redips-mark dark">Saturday</td>
                            <td class="redips-mark dark">Sunday</td>
                        </tr>

                        <?php exercisePlan('08:00', 1) ?>
                        <?php exercisePlan('09:00', 2) ?>
                        <?php exercisePlan('10:00', 3) ?>
                        <?php exercisePlan('11:00', 4) ?>
                        <?php exercisePlan('12:00', 5) ?>
                        <?php exercisePlan('13:00', 6) ?>
                        <?php exercisePlan('14:00', 7) ?>
                        <?php exercisePlan('15:00', 8) ?>
                        <?php exercisePlan('16:00', 9) ?>
                        <?php exercisePlan('17:00', 10) ?>
                        <?php exercisePlan('18:00', 11) ?>
                        <?php exercisePlan('19:00', 12) ?>
                        <?php exercisePlan('20:00', 13) ?>
                        </tbody>
                    </table>
                    <div id="message" style="width:fit-content; object-position: center" >Click 'Save' to save your exercise plan.</div>
                </div><!-- right container -->
            </div><!-- drag container -->
            <br/>

            <div class="button_container">
                <input type="button" value="Save" class="button" onclick="redips.save()" title="Save Exercise Plan"/>
            </div>
        </div><!-- main container -->
        </section>


    <footer id="colophon" class="site-footer" style="padding: 40px">

        <div class="copyright">
            <p>&copy; 2019 Get-Move | Made by Tech Chaser</p>
        </div><!-- /.copyright -->
    </footer>
    </main>
    <script>
        function printDiv(right){
            var printContents = document.getElementById(right).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

    </script>

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

