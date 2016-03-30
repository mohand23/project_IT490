<!DOCTYPE html>

<html>

<body bgcolor="#66CDAA">

<center>

<h1>Welcome to Slow-to Arrive Inc.</h1>

<img src="customer.jpg"  style="width:400px;height:400px"><br><br>

<form  action="customer.php"><br>

<h2>Enter New Flight Information</h2><br>

 Flight Number: <input  type="number"       required="required" name="FlightNumber"       class="butone"          placeholder="Flight Number"><br><br>
 Aircrew ID:
			 <select name="AircrewID" required="required">
			  <option value="1111">1111</option>
			  <option value="1112">1112</option>
			  <option value="1113">1113</option>
			  <option value="1114">1114</option>
			  <option value="1115">1115</option>
			 </select><br>
 Previous Airport:  
       <select name="PreviousAirport" required="required">
			  <option value="CLT">CLT</option>
			  <option value="DTW">DTW</option>
			  <option value="EWR">EWR</option>
			  <option value="HNL">HNL</option>
			  <option value="JFK">JFK</option>
        <option value="LAX">LAX</option>
			  <option value="LGA">LGA</option>
			  <option value="MDW">MDW</option>
			  <option value="PHL">PHL</option>
			  <option value="PHX">PHX</option>         
			 </select><br>
 Arrival Date:  <input type="date"          required="required" name="ArrivalDate"        class="butone"          placeholder="Arrival Date"><br><br>
 Tail Number:  <input type="number"         required="required" name="TailNumber"         class="butone"          placeholder="Tail Number"><br><br>
 Aircraft Type:  <input type="text"         required="required" name="AircraftType"       class="butone"          placeholder="Aircraft Type"><br><br>
 Departure Date:  <input type="date"        required="required" name="DepartureDate"      class="butone"          placeholder="Departure Date"><br><br> 
 Destination Airport:  
       <select name="DestinationAirport" required="required">
			  <option value="CLT">CLT</option>
			  <option value="DTW">DTW</option>
			  <option value="EWR">EWR</option>
			  <option value="HNL">HNL</option>
			  <option value="JFK">JFK</option>
        <option value="LAX">LAX</option>
			  <option value="LGA">LGA</option>
			  <option value="MDW">MDW</option>
			  <option value="PHL">PHL</option>
			  <option value="PHX">PHX</option>         
			 </select><br>
 Fuel:  <input type="number"                required="required" name="Fuel"               class="butone"          placeholder="Fuel"><br><br>   
Skid ID:
<?php

mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
mysql_select_db('ap725');

$sql = "SELECT SkidID FROM Cargo";
$result = mysql_query($sql);

echo "<select name='SkidID'>";
while ($row = mysql_fetch_array($result)) {
    echo "Skid ID: <option value='" . $row['SkidID'] . "'>" . $row['SkidID'] . "</option>";
}
echo "</select>";

?>
 
<input type="submit"                     name="submitinfo"        class="butone"          value="CLICK TO REGISTER"><br><br>
<input type="submit"	value="Go back to the Homepage"           class="butone"          onclick="window.location.href='welcome.html'"><br>


 </form>
 
</center>

</body>	
	
</html>

