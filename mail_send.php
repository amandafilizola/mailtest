<?php
$to='renanalbuquerque@polijuniorengenharia.com.br';
$subject='Contato por email';
$message=$_POST['mensagem'];
$headers='From: '.$_POST['email'].';';
mail($to, $subject, $message, $headers);
?>