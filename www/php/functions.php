<?php
	include('db.php');
	
	if(isset($_POST["send_form"])){
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		
		$ok = mysql_query("INSERT INTO form_conts (fname,lname) VALUES ('$fname','$lname')");
		
		if($ok){
			echo '1';
		}else{
			echo '0';
		}
	}
?>