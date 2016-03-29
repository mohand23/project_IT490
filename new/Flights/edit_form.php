
<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM Flights WHERE FlightNumber=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['FlightNumber']; ?>' />
        <tr>
            <td>Aircrew ID</td>
            <td><input type='number' name='AircrewID' class='form-control'  placeholder='EX : 5000' value='<?php echo $row['AircrewID']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Previous Airport</td>
            <td><input type='text' name='PreviousAirport' class='form-control' placeholder='EX : All contents of Skid' value='<?php echo $row['PreviousAirport']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Arrival Date</td>
            <td><input type='date' name='ArrivalDate' class='form-control'  placeholder='EX : EWR' value='<?php echo $row['ArrivalDate']; ?>' required></td>
        </tr>
		<tr>
            <td>Tail Number</td>
            <td><input type='number' name='TailNumber' class='form-control'  placeholder='EX : 5000' value='<?php echo $row['TailNumber']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Aircraft Type</td>
            <td><input type='text' name='AircraftType' class='form-control' placeholder='EX : All contents of Skid' value='<?php echo $row['AircraftType']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Departure Date</td>
            <td><input type='date' name='DepartureDate' class='form-control'  placeholder='EX : EWR' value='<?php echo $row['DepartureDate']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Destination Airport</td>
            <td><input type='text' name='DestinationAirport' class='form-control'  placeholder='EX : 5000' value='<?php echo $row['DestinationAirport']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Fuel</td>
            <td><input type='number' name='Fuel' class='form-control' placeholder='EX : All contents of Skid' value='<?php echo $row['Fuel']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Skid ID</td>
            <td><input type='number' name='SkidID' class='form-control'  placeholder='EX : EWR' value='<?php echo $row['SkidID']; ?>' required></td>
        </tr>
		<tr>
            <td>Airport Name</td>
            <td><input type='text' name='AirportName' class='form-control'  placeholder='EX : 5000' value='<?php echo $row['AirportName']; ?>' required></td>
        </tr>
 
        
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
