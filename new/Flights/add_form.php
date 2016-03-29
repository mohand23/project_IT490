
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Flight Number</td>
            <td><input type='number' name='FlightNumber' class='form-control'   required /></td>
        </tr>
 
        <tr>
            <td>Aircrew ID</td>
            <td><input type='number' name='AircrewID' class='form-control'   required /></td>
       
                        <?php
                           mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
                           mysql_select_db('ap725');
                           
                           $sql = "SELECT AircrewID FROM Aircrew";
                           $result = mysql_query($sql);
                           
                           while ($row = mysql_fetch_array($result)) {
                               echo "<option value='" . $row['AircrewID'] . "'>" . $row['AircrewID'] . "</option>";
                           	}
                           
                                    ?>
                        </select>
       
       
       
       
       
      
       
       
       
       
        </tr>
        
 
        <tr>
            <td>Previous Airport</td>
            <td><input type='text' name='PreviousAirport' class='form-control'  required></td>
        </tr>
		
		<tr>
            <td>Arrival Date</td>
            <td><input type='date' name='ArrivalDate' class='form-control'  required></td>
        </tr>
		<tr>
            <td>Tail Number</td>
            <td><input type='number' name='Tail Number' class='form-control'   required /></td>
        </tr>
 
        <tr>
            <td>Aircraft Type</td>
            <td><input type='text' name='AircraftType' class='form-control'    required></td>
        </tr>
 
        <tr>
            <td>Departure Date</td>
            <td><input type='date' name='DepartureDate' class='form-control'  required></td>
        </tr>
		
		<tr>
            <td>Destination Airport</td>
            <td><input type='text' name='DestinationAirport' class='form-control'  required></td>
        </tr>
		<tr>
            <td>Fuel</td>
            <td><input type='number' name='Fuel' class='form-control'   required /></td>
        </tr>
 
        <tr>
            <td>SkidID</td>
            <td><input type='number' name='SkidID' class='form-control'    required></td>
        </tr>
 
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
