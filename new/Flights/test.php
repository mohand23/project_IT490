     <td>
         <select name="AircraftType" id="selectType">
           <option value="0">Select</option>
           <option value='B737'>B737</option>
           <option value='B747'>B747</option>
           <option value='B767'>B767</option>
           <option value='B777'>B777</option>
           <option value='B787'>B787</option>
 
 

<script>
$("#selectType").change(function() {
    
      var selected = $(this).val();
      $("#f1, #f2, #f3, #f4, #f5, #f6").hide();
      console.log(selected);
      switch (selected) {
        case "B737":
          $("#f1").show();
          break;

        case "B747":
          $("#f2").show();
          break;    

        case "B767":
          $("#f3").show();
          break;

        case "B777":
          $("#f5").show();
          break;  

        case "B787":
          $("#f5").show();
          break;                           
      }            
});	
		
	
</script>

 
 
 
 
 
           
         </select> 

         <div id="f1" style="display:none">
			        <select id="TailNumber"  class="select form-control" onchange="showForm()">
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
			        <select id="TailNumber"  class="select form-control" onchange="showForm()">
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
			        <select id="TailNumber"  class="select form-control" onchange="showForm()">
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
			        <select id="TailNumber"  class="select form-control" onchange="showForm()">
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
			        <select id="TailNumber"  class="select form-control" onchange="showForm()">
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
