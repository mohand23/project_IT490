<script type="text/javascript" src="maxlength.js"></script>
<?php
   include_once 'dbconfig.php';
   
   if($_GET['edit_id'])
   {
   	$id = $_GET['edit_id'];	
   	$stmt=$db_con->prepare("SELECT * FROM Flights WHERE FlightNumber=:id");
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
      <input type='hidden' name='id' value='<?php echo $row['FlightNumber']; ?>' />
      <tr>
         <td>Aircrew ID</td>
         <td><select class="select form-control" id="AircrewID" name="AircrewID" value='<?php echo $row['AircrewID']; ?>' required>
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
         </td>
      </tr>
      <tr>
         <td>Previous Airport</td>
         <td><select class="select form-control" id="PreviousAirport" name="PreviousAirport" value='<?php echo $row['PreviousAirport']; ?>' required>
            <?php
               mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
               mysql_select_db('ap725');
               
               $sql = "SELECT Title FROM Airport";
               $result = mysql_query($sql);
               
               while ($row = mysql_fetch_array($result)) {
                   echo "<option value='" . $row['Title'] . "'>" . $row['Title'] . "</option>";
               	}
               
                        ?>
            </select>
         </td>
      </tr>
      <tr>
         <td>Destination Airport</td>
         <td><select class="select form-control" id="DestinationAirport" name="DestinationAirport" value='<?php echo $row['DestinationAirport']; ?>' required>
            <?php
               mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
               mysql_select_db('ap725');
               
               $sql = "SELECT Title FROM Airport";
               $result = mysql_query($sql);
               
               while ($row = mysql_fetch_array($result)) {
                   echo "<option value='" . $row['Title'] . "'>" . $row['Title'] . "</option>";
               	}
               
                        ?>
            </select>
         </td>
      </tr>
      <tr>
         <td>Arrival Date</td>
         <td><input type='date' name='ArrivalDate' class='form-control'  value='<?php echo $row['ArrivalDate']; ?>' required></td>
      </tr>
      <tr>
         <td>Departure Date</td>
         <td><input type='date' name='DepartureDate' class='form-control' value='<?php echo $row['DepartureDate']; ?>' required></td>
      </tr>
      <tr>
         <td>Aircraft Type</td>
         <td>
            <select id="AircraftType" name ="AircraftType" class="select form-control"  value='<?php echo $row['AircraftType']; ?>' required="required" onchange="showForm()">
               <option value='B737'>B737</option>
               <option value='B747'>B747</option>
               <option value='B767'>B767</option>
               <option value='B777'>B777</option>
               <option value='B787'>B787</option>
            </select>
            </div>	
         </td>
      </tr>
      <tr>
         <td>Tail Number</td>
         <td>
            <div id="f1" style="display:none">
            <select name="TailNumber" id="TailNumber" class="select form-control" required="required" onchange="showForm()">
            <?php
               mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
               mysql_select_db('ap725');
               
               $sql = "SELECT TailNumber FROM Aircraft Where AircraftType='B737'";
               $result = mysql_query($sql);
               
               while ($row = mysql_fetch_array($result)) {
                   echo "<option value='" . $row['TailNumber'] . "'>" . $row['TailNumber'] . "</option>";
               	}
               
                        ?>
            </select>
            </div>
            <div id="f2" style="display:none">
               <select name="TailNumber" id="TailNumber"  class="select form-control" required="required" onchange="showForm()">
               <?php
                  mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
                  mysql_select_db('ap725');
                  
                  $sql = "SELECT TailNumber FROM Aircraft Where AircraftType='B747'";
                  $result = mysql_query($sql);
                  
                  while ($row = mysql_fetch_array($result)) {
                      echo "<option value='" . $row['TailNumber'] . "'>" . $row['TailNumber'] . "</option>";
                  	}
                  
                           ?>
               </select>
            </div>
            <div id="f3" style="display:none">
               <select name="TailNumber" id="TailNumber"  class="select form-control" required="required" onchange="showForm()">
               <?php
                  mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
                  mysql_select_db('ap725');
                  
                  $sql = "SELECT TailNumber FROM Aircraft Where AircraftType='B767'";
                  $result = mysql_query($sql);
                  
                  while ($row = mysql_fetch_array($result)) {
                      echo "<option value='" . $row['TailNumber'] . "'>" . $row['TailNumber'] . "</option>";
                  	}
                  
                           ?>
               </select>
            </div>
            <div id="f4" style="display:none">
               <select name="TailNumber" id="TailNumber"  class="select form-control" required="required" onchange="showForm()">
               <?php
                  mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
                  mysql_select_db('ap725');
                  
                  $sql = "SELECT TailNumber FROM Aircraft Where AircraftType='B777'";
                  $result = mysql_query($sql);
                  
                  while ($row = mysql_fetch_array($result)) {
                      echo "<option value='" . $row['TailNumber'] . "'>" . $row['TailNumber'] . "</option>";
                  	}
                  
                           ?>
               </select>
            </div>
            <div id="f5" style="display:none">
               <select id="TailNumber"  class="select form-control" required="required" onchange="showForm()">
               <?php
                  mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
                  mysql_select_db('ap725');
                  
                  $sql = "SELECT TailNumber FROM Aircraft Where AircraftType='B787'";
                  $result = mysql_query($sql);
                  
                  while ($row = mysql_fetch_array($result)) {
                      echo "<option value='" . $row['TailNumber'] . "'>" . $row['TailNumber'] . "</option>";
                  	}
                  
                           ?>
               </select>
            </div>
            
            <script type="text/javascript">
               function showForm() {
               var selopt = document.getElementById("AircraftType").value;
               if (selopt == 'B737') {
                document.getElementById("f1").style.display = "block";
                document.getElementById("f2").style.display = "none";
                document.getElementById("f3").style.display = "none";
                document.getElementById("f4").style.display = "none";
               document.getElementById("f5").style.display = "none";
               
               }
               if (selopt == 'B747') {
                document.getElementById("f1").style.display = "none";
                document.getElementById("f2").style.display = "block";
                document.getElementById("f3").style.display = "none";
                document.getElementById("f4").style.display = "none";
               document.getElementById("f5").style.display = "none";
                
               
               }
               if (selopt == 'B767') {
                document.getElementById("f1").style.display = "none";
                document.getElementById("f2").style.display = "none";
                document.getElementById("f3").style.display = "block";
                document.getElementById("f4").style.display = "none";
               document.getElementById("f5").style.display = "none";
                
               
               }
               if (selopt == 'B777') {
                document.getElementById("f1").style.display = "none";
                document.getElementById("f2").style.display = "none";
                document.getElementById("f3").style.display = "none";
                document.getElementById("f4").style.display = "block";
               document.getElementById("f5").style.display = "none";
                
               
               }
               if (selopt == 'B787') {
                document.getElementById("f1").style.display = "none";
                document.getElementById("f2").style.display = "none";
                document.getElementById("f3").style.display = "none";
                document.getElementById("f4").style.display = "none";
               document.getElementById("f5").style.display = "block";
                
               
               }
               
               }
            </script>			        			        			        
         </td>
      </tr>
      <tr>
         <td>Fuel</td>
         <td><input type='number' data-maxsize="5" name='Fuel' class='form-control' placeholder='EX : 50000' value='<?php echo $row['Fuel']; ?>' required></td>
         
      </tr>
      <tr>
         <td>SkidID</td>
         <td><select class="select form-control" id="SkidID" name="SkidID" value='<?php echo $row['SkidID']; ?>' required>
            <?php
               mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
               mysql_select_db('ap725');
               
               $sql = "SELECT SkidID FROM Cargo where Title is not NULL";
               $result = mysql_query($sql);
               
               while ($row = mysql_fetch_array($result)) {
                   echo "<option value='" . $row['SkidID'] . "'>" . $row['SkidID'] . "</option>";
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