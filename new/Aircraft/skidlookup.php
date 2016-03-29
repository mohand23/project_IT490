<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Tabs Methods</title>
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
</style>
</head>
<body>
<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li><a data-toggle="tab" href="#sectionA">Location</a></li>
        <li><a data-toggle="tab" href="#sectionB">Mission</a></li>
    </ul>
    <div class="tab-content">
    <div><button class="float-right" type="button" class="btn btn-secondary btn-lg" onclick="window.location.href='welcome.html'">Return Home</button></div>
        <div id="sectionA" class="tab-pane fade in active">
	    <h3>All Skid ID that are stuck at a location</h3>
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
			            //set up mysql connection
			            mysql_connect("sql1.njit.edu", "ap725", "goober83") or die(mysql_error());
			            //select database
			            mysql_select_db("ap725") or die(mysql_error());

			            $result = mysql_query("SELECT * FROM Flights AS f INNER JOIN Cargo AS c ON f.SkidID = c.SkidID WHERE c.Title is NULL ") or die(mysql_error());
			 
			            while ($row = mysql_fetch_array($result)) {
			                // Print out the contents of the entry 
			                echo '<tr>';
			                echo '<td>' . $row['SkidID'] . '</td>';
			                echo '<td>' . $row['SkidWeight'] . '</td>';
			                echo '<td>' . $row['SkidContents'] . '</td>';
			                echo '<td>' . $row['Location'] . '</td>';
			            }
			            ?>      
			 
			      </tbody>
						 
			      <tbody></tbody>
			    </table>
			  </div><!-- /container -->
        </div>
        <div id="sectionB" class="tab-pane fade">
        		    <h3>All Skid ID that are set on a mission</h3>
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
			            //set up mysql connection
			            mysql_connect("sql1.njit.edu", "ap725", "goober83") or die(mysql_error());
			            //select database
			            mysql_select_db("ap725") or die(mysql_error());

						$sql = "SELECT * FROM Flights AS f INNER JOIN Cargo AS c ON f.SkidID = c.SkidID WHERE c.Title is NULL ";
						$result = $conn->query($sql);
			 
			            while ($row = mysql_fetch_array($result)) {
			                // Print out the contents of the entry 
			                echo '<tr>';
			                echo '<td>' . $row['FlightNumber'] . '</td>';
			                echo '<td>' . $row['AircrewID'] . '</td>';
			                echo '<td>' . $row['PreviousAirport'] . '</td>';
			                echo '<td>' . $row['ArrivalDate'] . '</td>';
			                echo '<td>' . $row['TailNumber'] . '</td>';
			                echo '<td>' . $row['AircraftType'] . '</td>';
			                echo '<td>' . $row['DepartureDate'] . '</td>';
			                echo '<td>' . $row['DestinationAirport'] . '</td>';
			                echo '<td>' . $row['Fuel'] . '</td>';
			                echo '<td>' . $row['SkidID'] . '</td>';
			            }
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