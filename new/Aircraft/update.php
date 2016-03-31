<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$AircraftType = $_POST['AircraftType'];
		
		
		$stmt = $db_con->prepare("UPDATE Aircraft SET AircraftType=:en WHERE TailNumber=:id");
		$stmt->bindParam(":en", $AircraftType);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>