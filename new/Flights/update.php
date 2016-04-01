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
		
		$stmt = $db_con->prepare("UPDATE Flights SET AircrewID=:air, PreviousAirport=:prev, ArrivalDate=:arriv, TailNumber=:tail, AircraftType=:typ, DepartureDate=:dep, DestinationAirport=:des, Fuel=:fu, SkidID=:sk WHERE FlightNumber=:id");
		$stmt->bindParam(":air", $AircrewID);
		$stmt->bindParam(":prev", $PreviousAirport);
		$stmt->bindParam(":arriv", $ArrivalDate);
    $stmt->bindParam(":tail", $TailNumber);
		$stmt->bindParam(":typ", $AircraftType);
		$stmt->bindParam(":dep", $DepartureDate);
    $stmt->bindParam(":des", $DestinationAirport);
		$stmt->bindParam(":fu", $Fuel);
		$stmt->bindParam(":sk", $SkidID);
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