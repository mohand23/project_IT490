 <script type="text/javascript" src="maxlength.js">
   </script>
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
            <td>TailNumber</td>
            <td><input type="number" data-maxsize="5" class="form-control" name="TailNumber" placeholder="Ex. 12345" required="required"></td>
        </tr>
 
        <tr>
            <td>Aircraft Type</td>
             
               <td><select id="AircraftType" name ="AircraftType" class="select form-control" required="required" onchange="showForm()">
               <option >Select Type</option>
               <option value='B737'>B737</option>
               <option value='B747'>B747</option>
               <option value='B767'>B767</option>
               <option value='B777'>B777</option>
               <option value='B787'>B787</option>
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
     
