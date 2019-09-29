<?php
    session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$servername = "127.0.0.1";
    //$dbusername = "getmoveuser";
    //$dbpassword = "1234";
    //$dbname = "getmove";
    
    $servername = "127.0.0.1";
    $dbusername = "root";
    $dbpassword = "2003";
    $dbname = "GetMove";

    $logindb= new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($logindb->connect_error) {
        die("Connection failed: " . $logindb->connect_error);
    }
    
    //Login users

    //initialize variables 
    $loginusername = "";
    $loginpassword = "";
    $errors = array();
    
    //assign variables
    if (isset($_POST['loginusername'])){
    $loginusername = trim(mysqli_real_escape_string($logindb, $_POST['loginusername']));
    $loginpassword = mysqli_real_escape_string($logindb, $_POST['loginpassword']);
    }
    //form validation
    
    if (empty($loginusername)) {
        array_push($errors,"Username is required.");   
    } elseif (strlen($loginusername) > 8){
        array_push($errors,"Username is not longer than 8 characters.");
    }

    if (empty($loginpassword)) {
        array_push($errors,"Password is required.");        
    }  
    
    if (count($errors) == 0) {
         // prepare and bind
        $login_check_query = $logindb->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
        $login_check_query->bind_param("ss", $nm,$pw);
        $nm = $loginusername;
        $pw = md5($loginpassword);
        $login_check_query->execute();
        $loginresult = $login_check_query->get_result();
        $loginrows = array();
        while($loginr = $loginresult->fetch_assoc())
            {$loginrows[] = $loginr;}
         if (count($loginrows)== 0) {
            $login_check_query->close();
            array_push($errors,"Wrong username/password combination. Please try to login again.");  
        } else {
            $_SESSION['username'] = $loginusername;
            $login_check_query->close();
            $logindb->close();
            header('location:index.php');
        }
    }
$logindb->close();
}
?>




