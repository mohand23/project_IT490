<?php
include_once 'dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM Cargo WHERE SkidID=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>