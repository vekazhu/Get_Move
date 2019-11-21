<?php
session_start();
if (empty($_SESSION['username'])){
    $_SESSION['msg'] = "You  must login first to view this page";
    $_SESSION['msg2'] = $_SESSION['username'];
    header("location: login.php");
} else {
    $_SESSION['msg'] = "You have successfully login!";
    $_SESSION['msg2'] = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
    <header>
        <title>home</title>
    </header>
    <body>
        Hello, <?php echo $_SESSION['msg'] ?>, <?php echo $_SESSION['msg2'] ?>
   
    </body>
</html>    



