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

    <title>Nutrients Checker</title>

    <meta name="description" content="BusinessPerfect - Freebie HTML/CSS template based on Bootstrap">
    <meta name="author" content="Milan Savov">
    <meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
            #id_food_table {
                border-collapse: collapse;
                width: 100%;
            }
            #id_food_table td, #id_food_table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #id_food_table tr:nth-child(even){background-color: #f2f2f2;}
            #id_food_table tr:hover {background-color: #ddd;}
            #id_food_table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #ffd500;
                color: white;
            }
        </style>

</head>
<body id="portfolio" >

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

        <section class="site-section-small section-blog-post">

            <div class="container">

                <div class="text-center">
                     <h1 class="section-title-big">Healthy Weight</h1>     
                     <p class="section-text">Obesity is one of the important reasons for increasing the burden on the body and exacerbate varicose veins, especially for people who stand for a long time at work.</p>
                   
                </div><!-- /.text-center -->

                <ol class="breadcrumb" style="padding: 0px">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="recommendation.php">Recommendations</a></li>
                    <li class="active">Healthy Weight : Nutrients Checker</li>
                </ol><!-- /.breadcrumb -->
                
                <div class="row"> <h4 style="padding: 20px;line-height: 1.6;color:#808080"> Good nutrition is an important part of leading a healthy lifestyle. Combined with physical activity, your diet can help you to reach and maintain a healthy weight, reduce your risk of chronic diseases and promote your overall health.</h4></div>

                <div class="row" style="border:0px solid pink;margin:0px">
                     <aside class="col-md-2" style="border:0px solid blue;margin:0px">

                        <div class="sidebar">
                            
                            <div class="widget widget-categories">
                                 <h4 class="widget-title">Healthy Weight</h4>     

                                <ul class="list-unstyled">
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<a href="weightBMI.php">BMI Calculator</a></li>
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<a href="eatwell.php">Eat Well</a></li>
                                    <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<a href="checknutrient.php">Nutrients Checker</a></li> 
                                    
                                </ul><!-- /.list-unstyled -->
                                
                            </div><!-- /.widget-categories -->


                            
                        </div><!-- /.sidebar -->
                        
                    </aside>
                    
                 

                <h1 style="text-align: center">Nutrients Checker</h1>
                <div class="col-md-10" style="border:0px solid blue;margin:0px;" >
                <div class="container">
                <div class="row">
                <div class="form-inline" style="margin: 50px">
                    <label for="username">Food: </label><BR>
                    <input class="form-control mr-sm-2" type="text" id="foodname" placeholder="Enter the food you like"> <BR>
                    <button class="btn btn-success btn-yellow" type="submit" onclick="output()">Search</button>
                </div>
        </div>
    </div>
                    
      <div class="container">
        <table class="table table-bordered" id="id_food_table"  style="overflow-y: scroll; background-color:white; max-width:800px"> </table>
    </div>               
    
    <script>
        var data_table = "";
        function output(){
            var x;
            x = document.getElementById('foodname').value;
            var column = document.getElementById('foods');
            
            //get access to API
            $.getJSON("https://api.nal.usda.gov/ndb/search/?format=json&q="+x+"&max=20&offset=0&api_key=YqdebmGRYk6LXKc2QGQfG9gkizulZduL9xt7RlKU", function(data){               
                //get food name and number
                var items = data.list.item;
                console.log(data);
                var i = 0;
                data_table = "<thead> <tr> <th>Food</th> <th>Brand</th><th>Vitamin</th><th>Fiber</th><th>Sugar</th><th>Fat</th><th>Carbohydrates</th> </tr></thead><tbody>";

                items.forEach(function(f){
                    var foodlist = [];
                    var oneFood = {};
                    oneFood["manu"] = f.manu;
                    oneFood["foodname"] = f.name;
                    oneFood["foodId"] = f.ndbno;                    
                    $.getJSON("https://api.nal.usda.gov/ndb/nutrients/?format=json&api_key=YqdebmGRYk6LXKc2QGQfG9gkizulZduL9xt7RlKU&nutrients=205&nutrients=204&nutrients=208&nutrients=203&nutrients=291&ndbno="+ f.ndbno, function(unit){
                        var energy = unit.report.foods[0].nutrients[0].value,
                        fiber = unit.report.foods[0].nutrients[1].value,
                        sugar = unit.report.foods[0].nutrients[2].value,
                        fat = unit.report.foods[0].nutrients[3].value,
                        carb = unit.report.foods[0].nutrients[4].value;
                        oneFood["energy"] =energy;
                        oneFood["fiber"] = fiber;
                        oneFood["sugar"] =sugar;
                        oneFood["fat"] = fat;
                        oneFood["carb"] = carb;
                        foodlist.push(oneFood);     
                        addtable(foodlist);  
                    });                                 
                });
            })
        }

        function addtable(foodlist){  
            for(var i=0; i< foodlist.length; i++){
                data_table = data_table+ "<tr><td style='pointer: curser;' id='"+foodlist[i].foodid+"'onclick=''>"+foodlist[i].foodname+"</td><td>"+foodlist[i].manu;
                data_table = data_table+ "<td>"+foodlist[i].energy+"</td><td>"+foodlist[i].fiber+"</td><td>"+foodlist[i].sugar+"</td><td>"+foodlist[i].fat+"</td><td>"+foodlist[i].carb+"</td></tr>";
                console.log(foodlist[i]);
                document.getElementById("id_food_table").innerHTML = data_table;
            }            
            document.getElementById("id_food_table").style.height="600px";
        }
        //Code to add the food from the food list
        function addFood(id) {
    
            var quantity = document.getElementById("quantity-"+ id).value;
            var table = document.getElementById("foods2");
            var rows = table.rows.length;
            //console.log(rows);
    
            $.getJSON("https://api.nal.usda.gov/ndb/nutrients/?format=json&api_key=YqdebmGRYk6LXKc2QGQfG9gkizulZduL9xt7RlKU&nutrients=205&nutrients=204&nutrients=208&nutrients=203&nutrients=291&ndbno="+ id, function(unit){
    
                //console.log(unit.report.foods[0]);
                var name = unit.report.foods[0].name;
    
                var regexFoodName = /(.+?)(, UPC.+)/i;
                var upc = name.match(regexFoodName);
                if(upc !== null){
                    name = upc[1];
                }
                var serving = unit.report.foods[0].measure;
                var energy = unit.report.foods[0].nutrients[0].value,
                    fiber = unit.report.foods[0].nutrients[1].value,
                    sugar = unit.report.foods[0].nutrients[2].value,
                    fat = unit.report.foods[0].nutrients[3].value,
                    carb = unit.report.foods[0].nutrients[4].value;
    
                var regex = /(\S+) (oz|OZA)/i;
                var found = serving.match(regex);
                if (found !== null){
                    serving = "100.0 g";
    
                    energy = unit.report.foods[0].nutrients[0].gm;
                    fiber = unit.report.foods[0].nutrients[1].gm;
                    sugar = unit.report.foods[0].nutrients[2].gm;
                    fat = unit.report.foods[0].nutrients[3].gm;
                    carb = unit.report.foods[0].nutrients[4].gm;
    
                    energy = energy.toString();
                    fiber = fiber.toString();
                    sugar = sugar.toString();
                    fat = fat.toString();
                    carb = carb.toString();
    
                }
    
                energy = energy.replace("--", "0.0");
                fiber = fiber.replace("--", "0.0");
                sugar = sugar.replace("--", "0.0");
                fat = fat.replace("--", "0.0");
                carb = carb.replace("--", "0.0");
    
    
    
                energy = (parseFloat(energy) * quantity).toFixed(2).toString();
                fiber = (parseFloat(fiber) * quantity).toFixed(2).toString();
                sugar = (parseFloat(sugar) * quantity).toFixed(2).toString();
                fat = (parseFloat(fat) * quantity).toFixed(2).toString();
                carb = (parseFloat(carb) * quantity).toFixed(2).toString();
    
    
    
                var row = table.insertRow(-1);
                var cell1 = row.insertCell(0),
                    cell2 = row.insertCell(1),
                    cell3 = row.insertCell(2),
                    cell4 = row.insertCell(3),
                    cell5 = row.insertCell(4),
                    cell6 = row.insertCell(5),
                    cell7 = row.insertCell(6),
                    cell8 = row.insertCell(7),
                    cell9 = row.insertCell(8);
    
                cell1.innerHTML = name;
                cell2.innerHTML = quantity;
                cell3.innerHTML = serving;
                cell4.innerHTML = energy;
                cell5.innerHTML = fiber;
                cell6.innerHTML = sugar;
                cell7.innerHTML = fat;
                cell8.innerHTML = carb;
                cell9.innerHTML = `<button name="removebutton" type="button" onclick="remove(${rows})">Remove</button>`;
    
                var energySum = 0,
                    fiberSum = 0,
                    sugarSum = 0,
                    fatSum = 0,
                    carbSum = 0;
    
                //create rows based on the item selected by user
                for (var i = 0, row; row = table.rows[i]; i++){
                    //console.log(i);
                    energySum += parseFloat(table.rows[i].cells[3].innerHTML);
                    //console.log(energySum);
                    fiberSum += parseFloat(table.rows[i].cells[4].innerHTML);
                    sugarSum += parseFloat(table.rows[i].cells[5].innerHTML);
                    fatSum += parseFloat(table.rows[i].cells[6].innerHTML);
                    carbSum += parseFloat(table.rows[i].cells[7].innerHTML);
                }
    
                energySum = energySum.toFixed(2);
                fiberSum = fiberSum.toFixed(2);
                sugarSum = sugarSum.toFixed(2);
                fatSum = fatSum.toFixed(2);
                carbSum = carbSum.toFixed(2);
    
                var eng = document.getElementById("eng"),
                    fib = document.getElementById("fib"),
                    sug = document.getElementById("sug"),
                    fat = document.getElementById("fat"),
                    carb = document.getElementById("carb");
    
                eng.innerHTML = energySum;
                fib.innerHTML = fiberSum;
                sug.innerHTML = sugarSum;
                fat.innerHTML = fatSum;
                carb.innerHTML = carbSum;
    
           
                console.log(eng);
                
            });
    
    
    
        }
        
                // remove the food from user table
function remove(index) {

    var table = document.getElementById("foods2");
    table.deleteRow(index);
    //console.log(table);


    for (var i = 0, row; row = table.rows[i]; i++) {
        //console.log(row.rowIndex);
        //console.log(i);
        //var fun = "remove(" + i + ")";
        //row.cells[8].firstChild.onclick = remove(i);
        // var clickfun = row.cells[8].firstChild.getAttribute("onclick");
        // var funname = clickfun.substring(0,clickfun.indexOf("("));
        // document.getElementById("button1").setAttribute("onclick",funname+"("+i+")");
        var child = row.cells[8].firstChild;
        var td = row.cells[8];
        td.removeChild(child);

        row.cells[8].innerHTML = `<button name="removebutton" type="button" onclick="remove(${i})">Remove</button>`;

    }

    var energySum = 0,
        fiberSum = 0,
        sugarSum = 0,
        fatSum = 0,
        carbSum = 0;

    for (var i = 0, row; row = table.rows[i]; i++){
        //console.log(i);
        energySum += parseFloat(table.rows[i].cells[3].innerHTML);
        //console.log(energySum);
        fiberSum += parseFloat(table.rows[i].cells[4].innerHTML);
        sugarSum += parseFloat(table.rows[i].cells[5].innerHTML);
        fatSum += parseFloat(table.rows[i].cells[6].innerHTML);
        carbSum += parseFloat(table.rows[i].cells[7].innerHTML);
    }

    energySum = energySum.toFixed(2);
    fiberSum = fiberSum.toFixed(2);
    sugarSum = sugarSum.toFixed(2);
    fatSum = fatSum.toFixed(2);
    carbSum = carbSum.toFixed(2);

    // var total = document.getElementById("subtotal");
    // var addtotal = `<tr><td>${energySum}</td><td>${fiberSum}</td><td>${sugarSum}</td><td>${fatSum}</td><td>${carbSum}</td></tr>`
    // total.innerHTML = addtotal;

    var eng = document.getElementById("eng"),
        fib = document.getElementById("fib"),
        sug = document.getElementById("sug"),
        fat = document.getElementById("fat"),
        carb = document.getElementById("carb");

    eng.innerHTML = energySum;
    fib.innerHTML = fiberSum;
    sug.innerHTML = sugarSum;
    fat.innerHTML = fatSum;
    carb.innerHTML = carbSum;

    pie();

}
        //code to hide and show the the added item
function addCustomerFoodButton() {
    let display = document.getElementsByClassName("customize-food");
    // var style = window.getComputedStyle(display,null);
    //  var   dis = style.getPropertyValue('display');
    console.log(display);
    for (var i = 0; i != display.length; i++) {
        if (display[i].style.display == "none")
            display[i].style.display = "block";
        else
            display[i].style.display = "none";
    }
}
        
       
    </script>
                    </div>
                        
                       
                       

                    </div>  

            </div>
            
        </section><!-- /.section-blog-post -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</body>
</html>