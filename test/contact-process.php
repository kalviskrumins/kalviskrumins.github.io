<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$message = $_POST ['message'];

mail("s.aldums@inbox.lv","Message from the site", $message, "From: $email\r\n");
echo "Your message has been sent";


 ?>
