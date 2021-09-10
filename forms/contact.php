

<?php
$to      = 'chrborel@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: christopher.ortega-garcia7587@alumnos.udg.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>