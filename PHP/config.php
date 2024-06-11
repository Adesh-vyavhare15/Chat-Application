<?php
	$host="localhost";
	$usr="root";
	$pwd="adesh@123";
	$db="chatty";
	
	$conn = mysqli_connect($host,$usr,$pwd,$db);
	if($conn)
	{
		echo "connection successful";

	}
	else{
		echo "connection unsuccesful";
	}
	
	

?>