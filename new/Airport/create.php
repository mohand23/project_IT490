<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$Title = $_POST['Title'];
		$AirportName = $_POST['AirportName'];
		$City = $_POST['City'];
		$State = $_POST['State'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO Airport(Title,AirportName,City,State) VALUES(:Title, :AirportName, :City, :State)");
			$stmt->bindParam(":Title", $Title);
			$stmt->bindParam(":AirportName", $AirportName);
			$stmt->bindParam(":City", $City);
			$stmt->bindParam(":State", $State);
			
			
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