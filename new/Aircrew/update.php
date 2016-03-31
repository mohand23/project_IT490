<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$PilotName = $_POST['PilotName'];
		$NavigatorName = $_POST['NavigatorName'];
		
		
		$stmt = $db_con->prepare("UPDATE Aircrew SET PilotName=:lol, NavigatorName=:ed WHERE AircrewID=:id");
		$stmt->bindParam(":lol", $PilotName);
		$stmt->bindParam(":ed", $NavigatorName);
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