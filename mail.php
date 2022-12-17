<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$formcontent="From:$name \n Message : $message ";
$mailTo="rehanraza260@gmail.com";
$subject="contact Form Submission";
$mailheader="From: $email \r\n";
mail ($mailTo,$subject,$formcontent,$mailheader) or die ("Error!!");
echo "Thank You";

?>