<?php

$mailTo="rehanraza260@gmail.com";
$subject="About Email Tutorial";
$message="Hello this is email for tutorial";
$headers="From:raza12540@gmail.com";

if(mail($mailTo,$subject,$message,$headers)){
	echo "Email delivered";
}
else{
	echo "The eamil is not delivered";
}


?>