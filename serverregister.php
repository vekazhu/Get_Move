<?php
// creates a session or resumes the current one based on a session identifier passed via a GET or POST request
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//connect to database
//$servername = "127.0.0.1";
//$dbusername = "getmoveuser";
//$dbpassword = "1234";
//$dbname = "getmove";

 $servername = "127.0.0.1";
 $dbusername = "root";
 $dbpassword = "2003";
 $dbname = "GetMove";

$db= new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//Register users
//initialize variables 
$username = "";
$email = "";
$password_1 = "";
$password_2 = "";
$errors = array();

//assign variables
if (isset($_POST['username'])){
$username = trim(mysqli_real_escape_string($db, $_POST['username']));
$email = trim(mysqli_real_escape_string($db, $_POST['email']));
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
}
//form validation
//1. user name validation
if (empty($username)) {
    array_push($errors,"Username is required.");   
} elseif (strlen($username) > 8){
    array_push($errors,"Username is not longer than 8 characters.");
} 


//2. email validation
if (empty($email)) {
    array_push($errors,"email is required");   
}elseif (strlen($email) > 50){
    array_push($errors,"E-mail is not longer than 50 characters.");
}elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    array_push($errors,"Email is an invalid email address.");
}

// 3. password validation
if (empty(trim($password_1))) {
    array_push($errors,"Password is required.");   
}elseif (strlen($password_1) < 8){
    array_push($errors,"Password is not shorter than 8 characters.");
}elseif (strlen($password_1) > 20){
    array_push($errors,"Password is not longer than 20 characters.");
}elseif( !preg_match("#[a-zA-Z]+#", $password_1 ) ) {
  array_push($errors,"Password must containt atleast 1 character.");
}elseif(!preg_match("#[0-9]+#",$password_1)) {
  array_push($errors,"Password must contain atleast 1 number");
}


if (empty(trim($password_2))) {
    array_push($errors,"Confirm password is required.");   
}

if (trim($password_1) != trim($password_2)){
    array_push($errors,"Passwords do not match.");
}
// check db for existing user with same username
$username_check_query = $db->prepare('SELECT * FROM user WHERE username = ?');
$username_check_query->bind_param('s', $username);
$username_check_query->execute();
$usernameresult = $username_check_query->get_result();
$usernamerows = array();
while($r = $usernameresult->fetch_assoc())
    {$usernamerows[] = $r;}
if ($usernamerows) {
    array_push($errors,"UserName already exists.");   
}
$username_check_query->close();

// check db for existing user with same email
$email_check_query = $db->prepare('SELECT * FROM user WHERE email = ?');
$email_check_query->bind_param('s', $email);
$email_check_query->execute();
$emailresult = $email_check_query->get_result();
$emailrows = array();
while($emailr = $emailresult->fetch_assoc())
    {$emailrows[] = $emailr;}
if ($emailrows) {
    array_push($errors,"E-mail already exists.");   
}
$email_check_query->close();

if (count($errors) == 0) {   
    // prepare and bind
    $insertstmt = $db->prepare("INSERT INTO user(username,email,password,createddate) VALUES (?, ?, ?, ?)");
    $insertstmt->bind_param("ssss", $nm, $em, $pw,$dt);
    // set parameters and execute
    $nm = $username;
    $em = $email;
    $pw = md5($password_1); 
    $dt = date("Y-m-d H:i:s");
    
    if ($insertstmt->execute() === TRUE) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $insertstmt->close();
        $id_check_query = $db->prepare('SELECT * FROM user WHERE username = ?');
        $id_check_query->bind_param('s', $un);
        $un = $username;
        $id_check_query->execute();
        $idresult = $id_check_query->get_result();
            while($idr = $idresult->fetch_assoc())
                { $_SESSION['userid'] = $idr['id'];}
        $id_check_query->close();
        $db->close();
        header('location:getmove.php');
    } else {
        $insertstmt->close();
        $_SESSION['username'] = "";
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
$db->close();
}
?>



