<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$FlightNumber = $_POST['FlightNumber'];
		$AircrewID = $_POST['AircrewID'];
		$PreviousAirport = $_POST['PreviousAirport'];
		$ArrivalDate = $_POST['ArrivalDate'];
		$TailNumber = $_POST['TailNumber'];
		$AircraftType = $_POST['AircraftType'];
		$DepartureDate = $_POST['DepartureDate'];
		$DestinationAirport = $_POST['DestinationAirport'];
		$Fuel = $_POST['Fuel'];
		$SkidID = $_POST['SkidID'];
		
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO Flights(FlightNumber,AircrewID,PreviousAirport,ArrivalDate,TailNumber,AircraftType,DepartureDate,DestinationAirport,Fuel,SkidID)
			VALUES(:FlightNumber, :AircrewID, :PreviousAirport, :ArrivalDate, :TailNumber, :AircraftType, :DepartureDate, :DestinationAirport, :Fuel, :SkidID )");
			$stmt->bindParam(":FlightNumber", $FlightNumber);
			$stmt->bindParam(":AircrewID", $AircrewID);
			$stmt->bindParam(":PreviousAirport", $PreviousAirport);
			$stmt->bindParam(":ArrivalDate", $ArrivalDate);
			$stmt->bindParam(":TailNumber", $TailNumber);
			$stmt->bindParam(":AircraftType", $AircraftType);
			$stmt->bindParam(":DepartureDate", $DepartureDate);
			$stmt->bindParam(":DestinationAirport", $DestinationAirport);
			$stmt->bindParam(":Fuel", $Fuel);
			$stmt->bindParam(":SkidID", $SkidID);
			
			
			
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