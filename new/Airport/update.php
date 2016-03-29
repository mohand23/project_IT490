<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$AirportName = $_POST['AirportName'];
		$City = $_POST['City'];
		$State = $_POST['State'];
		
		$stmt = $db_con->prepare("UPDATE Airport SET AirportName=:en, City=:ed, State=:es WHERE Title=:id");
		$stmt->bindParam(":en", $AirportName);
		$stmt->bindParam(":ed", $City);
		$stmt->bindParam(":es", $State);
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