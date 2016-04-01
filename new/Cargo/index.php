<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.sansserif {
    font-family: "Comic Sans MS", cursive, sans-serif;
}
th {

font-family: "Comic Sans MS", cursive, sans-serif; }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert, Update, Delete</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});
	
});
</script>

</head>
<body>
    


	<div class="container">
      
        <h1 class="sansserif">Skid ID</h1><hr />
        <h5 class="form-signin-heading" style="color: red;"> ***   Please note if a SkidId does  not have a Title it is attached to a Flightnumber and on a Mission   *** </h5><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Skid ID</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Skid ID</button>
        <a href="../../index.html" class="btn btn-success btn pull-right"><span class="glyphicon glyphicon-home"></span> Homepage</a>
        <a href="../new.html" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>SkidID</th>
        <th>SkidWeight</th>
        <th>SkidContents</th>
        <th>Title</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM Cargo");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
			<td><?php echo $row['SkidID']; ?></td>
			<td><?php echo $row['SkidWeight']; ?></td>
			<td><?php echo $row['SkidContents']; ?></td>
			<td><?php echo $row['Title']; ?></td>
      
      
			<td align="center">
			<a href="#" id="<?php echo $row['SkidID']; ?>"  class="btn btn-primary btn-xs edit-link"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
			
            
            <a href="#" id="<?php echo $row['SkidID']; ?>" class="btn btn-danger btn-xs delete-link"><span class="glyphicon glyphicon-trash"></span> Delete</a>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>