<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$TailNumber = $_POST['TailNumber'];
		$AircraftType = $_POST['AircraftType'];
		
		
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO Aircraft(TailNumber,AircraftType) VALUES(:TailNumber, :AircraftType)");
			$stmt->bindParam(":TailNumber", $TailNumber);
			$stmt->bindParam(":AircraftType", $AircraftType);
			
			
			
			
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