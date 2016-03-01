<?php
	$db = (object)array(
		"localhost"=>'localhost',
		"name"=>'taramigo_phonegap',
		"user"=>'taramigo_pg_user',
		"pass"=>'MvPv!3nF}b#F',
		"db_prefix"=>'tyf_');

	$con = mysql_connect($db->localhost,$db->user,$db->pass);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	  
	mysql_select_db($db->name, $con);
?>