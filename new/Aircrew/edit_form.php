
<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM Aircrew WHERE AircrewID=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['AircrewID']; ?>' />
        <tr>
            <td>Pilot Name</td>
            <td><input type='text' name='PilotName' class='form-control'  value='<?php echo $row['PilotName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Navigator Name</td>
            <td><input type='text' name='NavigatorName' class='form-control' value='<?php echo $row['NavigatorName']; ?>' required></td>
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
     
