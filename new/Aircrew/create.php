<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$AircrewID = $_POST['AircrewID'];
		$PilotName = $_POST['PilotName'];
		$NavigatorName = $_POST['NavigatorName'];
		
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO Aircrew(AircrewID,PilotName,NavigatorName) VALUES(:AircrewID, :PilotName, :NavigatorName)");
			$stmt->bindParam(":AircrewID", $AircrewID);
			$stmt->bindParam(":PilotName", $PilotName);
			$stmt->bindParam(":NavigatorName", $NavigatorName);
			
			
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>