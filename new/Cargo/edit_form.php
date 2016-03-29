
<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM Cargo WHERE SkidID=:id");
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
 		<input type='hidden' name='id' value='<?php echo $row['SkidID']; ?>' />
        <tr>
            <td>Skid Weight</td>
            <td><input type='number' name='SkidWeight' class='form-control'  placeholder='EX : 5000' value='<?php echo $row['SkidWeight']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Skid Contents</td>
            <td><input type='text' name='SkidContents' class='form-control' placeholder='EX : All contents of Skid' value='<?php echo $row['SkidContents']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Location</td>
            <td><input type='text' name='Title' class='form-control'  placeholder='EX : EWR' value='<?php echo $row['Title']; ?>' required></td>
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
     
