<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Skid ID Lookup</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
    $("#myTab li:eq(1) a").tab('show');
});
</script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
.sansserif {
    font-family: "Comic Sans MS", cursive, sans-serif;
}
th {

font-family: "Comic Sans MS", cursive, sans-serif; }

tbody {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif; }
</style>
</head>
<body>
<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
    <a href="index.html" class="btn btn-success btn pull-right"><span class="glyphicon glyphicon-home"></span> Homepage</a>
        <li><a data-toggle="tab" href="#sectionA">Location</a></li>
        <li><a data-toggle="tab" href="#sectionB">Mission</a></li>
    </ul>
    <div class="tab-content">
    
        <div id="sectionA" class="tab-pane fade in active">
	    <h3 class="sansserif"><center>All Skid ID that are stuck at a location</center></h3>
			<div class="container">
			    <table class="table table-striped" class="table">
			      <thead  class="thead-default">
			        <tr>
			          <th>Skid ID</th>
			 
			          <th>Skid Weight</th>
			 
			          <th>Skid Contents</th>
			 
			          <th>Location</th>
			         
			        </tr>
			      </thead>	 
			         <tbody>
			        <?php
			            
			            mysql_connect("sql1.njit.edu", "ap725", "goober83") or die(mysql_error());
			           
			            mysql_select_db("ap725") or die(mysql_error());

			            $result = mysql_query("SELECT * FROM Cargo Where Title is not NULL ") or die(mysql_error());
			 
			            while ($row = mysql_fetch_array($result)) {
			               
			                echo '<tr>';
			                echo '<td>' . $row['SkidID'] . '</td>';
			                echo '<td>' . $row['SkidWeight'] . '</td>';
			                echo '<td>' . $row['SkidContents'] . '</td>';
			                echo '<td>' . $row['Title'] . '</td>';
			            }
			            ?>      
			 
			      </tbody>
						 
			      <tbody></tbody>
			    </table>
			  </div><!-- /container -->
        </div>
        <div id="sectionB" class="tab-pane fade">
        		    <h3 class="sansserif"><center>All Skid ID that are set on a mission</center></h3>
			<div class="container">
			    <table class="table table-striped" class="table">
			      <thead  class="thead-default">
			        <tr>
			          <th>Flight Number</th>
			 
			          <th>Aircrew ID</th>
			 
			          <th>Previous Airport</th>
			 
			          <th>Arrival Date</th>
			         
			          <th>Tail Number</th>
			 
			          <th>Aircraft Type</th>
			          		          
			          <th>Departure Date</th>
			 
			          <th>Destination Airport</th>
			          			          
			          <th>Fuel</th>
			 
			          <th>SkidID</th>
			        </tr>
			      </thead>	 
			         <tbody>
			        <?php
$servername = "sql1.njit.edu";
$username = "ap725";
$password = "goober83";
$dbname = "ap725";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Flights AS f INNER JOIN Cargo AS c ON f.SkidID = c.SkidID WHERE c.Title is NULL ";
$result = $conn->query($sql);


     
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>". $row["FlightNumber"]. "</td><td>" . $row["AircrewID"]. "</td><td>" . $row["PreviousAirport"]. "</td><td>" . $row["ArrivalDate"]. "</td><td>" . $row["TailNumber"]. "</td><td>" . $row["AircraftType"]. "</td><td>" . $row["DepartureDate"]. "</td><td>" . $row["DestinationAirport"]. "</td><td>" . $row["Fuel"]. "</td><td>". $row["SkidID"]. "</td></tr>" ;
     }
     echo "</table>";





$conn->close();
?>   
			 
			      </tbody>
						 
			      <tbody></tbody>
			    </table>
			  </div><!-- /container -->
        </div>

    </div>
</div>
</body>
</html>                                		