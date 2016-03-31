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
            <td>Title</td>
            <td><input type='text' name='Title' data-maxsize="3" class='form-control'  placeholder="Ex. EWR" required /></td>
        </tr>
 
        <tr>
            <td>Airport Name</td>
            <td><input type='text' name='AirportName' class='form-control' placeholder="Ex. Newark Liberty International Airport"   required></td>
        </tr>
 
        <tr>
            <td>City</td>
            <td><input type='text' name='City' class='form-control'  placeholder="Ex. Newark"required></td>
        </tr>
		
		<tr>
            <td>State</td>
            <td><input type='text' name='State' data-maxsize="2" class='form-control' placeholder="Ex. NJ" required></td>
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
     
     
