<?php
$to      = 'razielvalle@gambess.com';
$subject = 'Prueba';
$message = 'hello this is a test';
$headers = array(
    'From' => 'razielvalle@gmail.com',
    'Reply-To' => 'rvalle@gambess.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
?>