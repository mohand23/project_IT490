<?php

	$db_host = "sql1.njit.edu";
	$db_name = "ap725";
	$db_user = "ap725";
	$db_pass = "goober83";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>