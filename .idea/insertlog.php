<?php

 $servername = "127.0.0.1";
 $dbusername = "getmoveuser";
 $dbpassword = "1234";
 $dbname = "getmove";
 //$servername = "127.0.0.1";
 //$dbusername = "root";
 //$dbpassword = "2003";
 //$dbname = "GetMove";
 $alertdb= new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
 if ($alertdb->connect_error) {
    die("Connection failed: " . $alertdb->connect_error);
 }
 
 
 $alertdatetime = date("Y-m-d H:i:s");
 $insertlogstmt = $alertdb->prepare("INSERT INTO alertlog(email,datesent,jobname) VALUES (?, ?, ?)");
 $insertlogstmt->bind_param("sss", $em, $dt, $jn);
 // set parameters and execute
 $em = "panphen@hotmail.com";
 $dt = $alertdatetime;
 $jn = "sendalert1"; 
 $insertlogstmt->execute();
 $insertlogstmt->close();
$alertdb->close();
?>


