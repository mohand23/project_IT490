
<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM Aircraft WHERE TailNumber=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['TailNumber']; ?>' />
        <tr>
            <td>Aircraft Type</td>
            <td>
            		<select class="select form-control" name="AircraftType">
                        <?php
                           mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
                           mysql_select_db('ap725');
                           
                           $sql = "SELECT AircraftType FROM Aircraft Group by AircraftType";
                           $result = mysql_query($sql);
                           
                           while ($row = mysql_fetch_array($result)) {
                               echo "<option value='" . $row['AircraftType'] . "'>" . $row['AircraftType'] . "</option>";
                           	}
                           
                                    ?>
                     </select>
            
            </td>
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
     
