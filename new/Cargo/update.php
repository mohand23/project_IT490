<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$SkidWeight = $_POST['SkidWeight'];
		$SkidContents = $_POST['SkidContents'];
		$Title = $_POST['Title'];
		
		$stmt = $db_con->prepare("UPDATE Cargo SET SkidWeight=:en, SkidContents=:ed, Title=:es WHERE SkidID=:id");
		$stmt->bindParam(":en", $SkidWeight);
		$stmt->bindParam(":ed", $SkidContents);
		$stmt->bindParam(":es", $Title);
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