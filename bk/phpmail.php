<?php
$to      = 'panphen@hotmail.com,saikumar21194@gmail.com';
$subject = 'get-move break alert no 4';
$message = 'hello from get-move scheduled every 2 minutes';
$headers = 'From: getmove@get-move.tk' . "\r\n" .
    'Reply-To: getmove@get-move.tk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo 'the email message was sent';
?>



