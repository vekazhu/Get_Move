<?php
session_start();
if (empty($_SESSION['username'])){
    $_SESSION['msg'] = "You  must login first to view this page";
    header("location: login.php");
} 
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Exercise Plan</title>
    </header>
    <body>
        Hello, <?php echo $_SESSION['username'] ?>
    </body>
</html>    

