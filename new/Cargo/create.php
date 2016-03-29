<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$SkidID = $_POST['SkidID'];
		$SkidWeight = $_POST['SkidWeight'];
		$SkidContents = $_POST['SkidContents'];
		$Title = $_POST['Title'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO Cargo(SkidID,SkidWeight,SkidContents,Title) VALUES(:SkidID, :SkidWeight, :SkidContents, :Title)");
			$stmt->bindParam(":SkidID", $SkidID);
			$stmt->bindParam(":SkidWeight", $SkidWeight);
			$stmt->bindParam(":SkidContents", $SkidContents);
			$stmt->bindParam(":Title", $Title);
			
			
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