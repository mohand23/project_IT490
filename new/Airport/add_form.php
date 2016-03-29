
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
            <td>Title</td>
            <td><input type='text' name='Title' class='form-control'   required /></td>
        </tr>
 
        <tr>
            <td>Airport Name</td>
            <td><input type='text' name='AirportName' class='form-control'    required></td>
        </tr>
 
        <tr>
            <td>City</td>
            <td><input type='text' name='City' class='form-control'  required></td>
        </tr>
		
		<tr>
            <td>State</td>
            <td><input type='text' name='State' class='form-control'  required></td>
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
     
