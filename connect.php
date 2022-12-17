<?php
	mysqli_connect("sql311.ultimatefreehost.in","ltm_32999050","raza786921");
	
	if(mysqli_connect_error()){
		
		echo "There was an error connecting to the database";
		
		
	}else {
		
		echo "Database Connected";
		
	}


?>