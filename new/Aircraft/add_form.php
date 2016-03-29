 <script type="text/javascript" src="maxlength.js">
   </script>
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
            <td>TailNumber</td>
            <td><input type="number" data-maxsize="5" class="form-control" name="TailNumber" placeholder="Ex. 12345" required="required"></td>
        </tr>
 
        <tr>
            <td>Aircraft Type</td>
             <td><select class="select form-control" name="AircraftType">
                        <?php
                           mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
                           mysql_select_db('ap725');
                           
                           $sql = "SELECT AircraftType FROM Aircraft Group by AircraftType";
                           $result = mysql_query($sql);
                           
                           while ($row = mysql_fetch_array($result)) {
                               echo "<option value='" . $row['AircraftType'] . "'>" . $row['AircraftType'] . "</option>";
                           	}
                           
                                    ?>
                     </select></td>
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
     
