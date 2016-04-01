  <script type="text/javascript" src="maxlength.js"></script>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Skid ID</td>
            <td><input type='number' data-maxsize="4" name='SkidID' class='form-control'   placeholder='EX : 1234' required /></td>
        </tr>
 
        <tr>
            <td>Skid Weight</td>
            <td><input type='number' data-maxsize="4" name='SkidWeight' class='form-control'  placeholder='EX : 5000' required></td>
        </tr>
 
        <tr>
            <td>Skid Contents</td>
            <td><input type='text' name='SkidContents' class='form-control' placeholder='EX : All contents of Skid' required></td>
        </tr>
		
		<tr>
            <td>Location</td>
            <td><select class="select form-control" name="Title">
            <option> Select Location</option>
                        <?php
                           mysql_connect('sql1.njit.edu', 'ap725', 'goober83');
                           mysql_select_db('ap725');
                           
                           $sql = "SELECT Title FROM Airport";
                           $result = mysql_query($sql);
                           
                           while ($row = mysql_fetch_array($result)) {
                               echo "<option value='" . $row['Title'] . "'>" . $row['Title'] . "</option>";
                           	}
                           
                                    ?>
                        </select></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
