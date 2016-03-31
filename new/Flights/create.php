<?php

include ("account.php") ;
( $dbh = mysql_connect ( $hostname, $username, $password ) )
	        or    die ( "Unable to connect to MySQL database" );
mysql_select_db( $project ); 

$FlightNumber         = $_REQUEST [ "FlightNumber"] ;
$AircrewID            = $_REQUEST [ "AircrewID"] ;
$PreviousAirport      = $_REQUEST [ "PreviousAirport"] ;
$ArrivalDate          = $_REQUEST [ "ArrivalDate"] ;
$TailNumber           = $_REQUEST [ "TailNumber"] ;
$AircraftType         = $_REQUEST [ "AircraftType"] ;
$DepartureDate        = $_REQUEST [ "DepartureDate"] ;
$DestinationAirport   = $_REQUEST [ "DestinationAirport"] ;
$Fuel                 = $_REQUEST [ "Fuel"] ;
$SkidID               = $_REQUEST [ "SkidID"] ;
$Title         = $_REQUEST [ "Title"] ;

$sql="insert into Flights values ('$FlightNumber', '$AircrewID', '$PreviousAirport', '$ArrivalDate', '$TailNumber', '$AircraftType', '$DepartureDate', '$DestinationAirport', '$Fuel', '$SkidID')";

$p="UPDATE Cargo SET Title= NULL WHERE SkidID='$SkidID'";
mysql_query($p);

echo "Successfully Added.";
      

if (!mysql_query($sql))
  {
  die('Query Problem: ' . mysql_error());
  }

mysql_close();

?>
