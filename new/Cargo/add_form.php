
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
            <td><input type='number' name='SkidID' class='form-control'   placeholder='EX : 1234' required /></td>
        </tr>
 
        <tr>
            <td>Skid Weight</td>
            <td><input type='number' name='SkidWeight' class='form-control'  placeholder='EX : 5000' required></td>
        </tr>
 
        <tr>
            <td>Skid Contents</td>
            <td><input type='text' name='SkidContents' class='form-control' placeholder='EX : All contents of Skid' required></td>
        </tr>
		
		<tr>
            <td>Location</td>
            <td><input type='text' name='Title' class='form-control'  placeholder='EX : EWR' required></td>
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
     
