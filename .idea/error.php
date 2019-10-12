<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(count($errors) > 0) {?>
<div>
    <h3 style="color:red">Invalid Input:</h1>
    <?php  foreach($errors as $error) {?>
    <p><?php echo $error ?></p>
<?php } ?>
    
</div>
<?php  } }?>




