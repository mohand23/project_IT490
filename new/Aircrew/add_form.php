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
            <td>Aircrew ID</td>
            <td><input type='number' data-maxsize="4" name='AircrewID' class='form-control'  placeholder='EX : 1234' required /></td>
        </tr>
 
        <tr>
            <td>Pilot Name</td>
            <td><input type='text' name='PilotName' class='form-control'   required></td>
        </tr>
 
        <tr>
            <td>Navigator Name</td>
            <td><input type='text' name='NavigatorName' class='form-control'  required></td>
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
     
