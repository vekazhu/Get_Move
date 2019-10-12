<?php
function sendmail($rec,$usr)
{
    $to      = $rec;
    $data1 = "Hi";
    $data2 = "Please take a break. (every 30 minutes)";
    $sub = $data1 . ' ' . $usr. ', ' . $data2;
    $subject =  $sub ;
    $message = "It is a time to take a break. Please visit our website: http://get-move.tk";
    $headers = 'From: getmove@get-move.tk' . "\r\n" .
    'Reply-To: getmove@get-move.tk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
 //$servername = "127.0.0.1";
 //$dbusername = "getmoveuser";
 //$dbpassword = "1234";
 //$dbname = "getmove";
 $servername = "127.0.0.1";
 $dbusername = "root";
 $dbpassword = "2003";
 $dbname = "GetMove";
 $alertdb= new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
 if ($alertdb->connect_error) {
    die("Connection failed: " . $alertdb->connect_error);
 }
 
 $errors = array();
 $alert_check_query = $alertdb->prepare("SELECT * FROM user WHERE timebreak = ?");
 $alert_check_query->bind_param("d", $tm);
 $tm = 30; //30 minutes
 $alert_check_query->execute();
 $alertresult = $alert_check_query->get_result();
 $alertrows = array();
 $alertdatetime = date("Y-m-d H:i:s");
 while($alertr = $alertresult->fetch_assoc())
 {
    sendmail($alertr["email"],$alertr["username"]);
    $insertlogstmt = $alertdb->prepare("INSERT INTO alertlog(email,username,datesent,jobname) VALUES (?, ?, ?, ?)");
    $insertlogstmt->bind_param("ssss", $em, $nm, $ds, $jn);
    // set parameters and execute
    $em = $alertr["email"];
    $nm = $alertr["username"];
    $ds = $alertdatetime;
    $jn = "sendalert30mins"; 
    $insertlogstmt->execute();
    $insertlogstmt->close();
 }
 $alert_check_query->close(); 
 $alertdb->close();
 echo("job done!")
?>



