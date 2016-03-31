<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$AircrewID = $_POST['AircrewID'];
		$PreviousAirport = $_POST['PreviousAirport'];
		$ArrivalDate = $_POST['ArrivalDate'];
		$TailNumber = $_POST['TailNumber'];
		$AircraftType = $_POST['AircraftType'];
		$DepartureDate = $_POST['DepartureDate'];
		$DestinationAirport = $_POST['DestinationAirport'];
		$Fuel = $_POST['Fuel'];
		$SkidID = $_POST['SkidID'];
		
		$stmt = $db_con->prepare("UPDATE Flights SET AircrewID=:en, PreviousAirport=:ed, ArrivalDate=:es, TailNumber=:eq, AircraftType=:ew, DepartureDate=:ee, DestinationAirport=:er, Fuel=:et, SkidID=:ey, WHERE FlightNumber=:id");
		$stmt->bindParam(":en", $AircrewID);
		$stmt->bindParam(":ed", $PreviousAirport);
		$stmt->bindParam(":es", $ArrivalDate);
		$stmt->bindParam(":eq", $TailNumber);
		$stmt->bindParam(":ew", $AircraftType);
		$stmt->bindParam(":ee", $DepartureDate);
		$stmt->bindParam(":er", $DestinationAirport);
		$stmt->bindParam(":et", $Fuel);
		$stmt->bindParam(":ey", $SkidID);
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