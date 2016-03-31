<script type="text/javascript" src="maxlength.js"></script>
<style type="text/css">
<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM Airport WHERE Title=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['Title']; ?>' />
        <tr>
            <td>Airport Name</td>
            <td><input type='text' name='AirportName' class='form-control'  placeholder="Ex. Newark Liberty International Airport" value='<?php echo $row['AirportName']; ?>' required></td>
        </tr>
 
        <tr>
            <td>City</td>
            <td><input type='text' name='City' class='form-control' placeholder="Ex. Newark" value='<?php echo $row['City']; ?>' required></td>
        </tr>
 
        <tr>
            <td>State</td>
            <td><input type='text' name='State' class='form-control'  data-maxsize="2" placeholder="Ex. NJ" value='<?php echo $row['State']; ?>' required></td>
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
     
