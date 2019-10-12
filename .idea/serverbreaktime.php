 <?php
 session_start();
 if (empty($_SESSION['username'])){
    $_SESSION['msg'] = "You  must login first to view this page";
    header("location: login.php");
 }else {
    //$servername = "127.0.0.1";
    //$dbusername = "getmoveuser";
   // $dbpassword = "1234";
   // $dbname = "getmove";
    $servername = "127.0.0.1";
    $dbusername = "root";
    $dbpassword = "2003";
    $dbname = "GetMove";
    
    $breakdb= new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($breakdb->connect_error) {
        die("Connection failed: " . $breakdb->connect_error);
    }
     $errors = array();
     $timebreak = ""; 
     $currentuseremail = "";
     $updateresult = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // update time break
        if (isset($_POST['radio-btn'])) {
              // prepare and bind
            $updatestmt = $breakdb->prepare("UPDATE user SET timebreak=?,modifieddate=?  WHERE username=?");
            $updatestmt->bind_param("dss", $bt,$dt, $nm);
            // set parameters and execute   
            $bt = $_POST['radio-btn'];
            $dt = date("Y-m-d H:i:s");
            $nm = $_SESSION['username']; 
            if ($updatestmt->execute() === TRUE) {
                $timebreak = $_POST['radio-btn'];
                if ($bt == 30) {
                    $updateresult = "Update your break time to every 30 minutes successfully";
                } elseif ($bt == 1){
                    $updateresult = "Update your break time to every 1 hour successfully";
                } else {
                    $updateresult = "Update your break time to every 2 hour successfully";
                }
                $updatestmt->close();
            } else {
                $updatestmt->close();
                echo "Error: " . $sql . "<br>" . $breakb->error; 
                $updateresult = "Unable to update your break time. Please contact an administrator";
            }     
        } else {
        //errors to choose radiobtn
            array_push($errors,"Please choose one choice of your break time!");
        }
    }else {
     //query time break
        $break_check_query = $breakdb->prepare("SELECT * FROM user WHERE username = ?");
        $break_check_query->bind_param("s", $nm);
        $nm = $_SESSION['username'];
        $break_check_query->execute();
        $breakresult = $break_check_query->get_result();
        $breakrows = array();
        while($breakr = $breakresult->fetch_assoc())
            {$breakrows[] = $breakr["timebreak"];
            }
         if (count($breakrows)== 1) {
            $timebreak = $breakrows[0];
        } elseif (count($breakrows)== 0) {       
            array_push($errors,"No user records.Plese contact an administrator");         
        }else {
            array_push($errors,"More than one user records.Plese contact an administrator");
        }
        $break_check_query->close();   
    }
   $breakdb->close();
 }// else user is login
?>

