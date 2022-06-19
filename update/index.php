<?php

include '../include/header.php';

include '../dbh.php';

?>

<div class="row">
  <div class="col-sm-12">

<form class="form-horizontal" action="action_page.php" method='POST'>
    <div class="form-group">
      <label class="control-label col-sm-2" for="SupportName">Name of Service:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="SupportName" placeholder="Enter name of service" name="SupportName">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Service Type:</label>
      <div class="col-sm-10">          
        <select class="form-control" name='ServiceType'>
		
		<?php
		
		$sql = "SELECT * FROM support";
		$result = mysqli_query($conn, $sql);
		
		while ($row = mysqli_fetch_array($result)){
			
			$Support = $row['Support'];
			
			echo "<option>$Support</option>";
			
		}
		
		
		
		?>
		
		
		</select>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="SupportName">Part of Charity Membership:</label>
      <div class="col-sm-10">
        <select class="form-control" name='Charity'>
		   <option>Yes</option>
		   <option>No</option>
	   </select>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="SupportName">Part of Key Membership:</label>
      <div class="col-sm-10">
         <select class="form-control" name='Key'>
		   <option>Yes</option>
		   <option>No</option>
	   </select>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="SupportName">Part of Core Membership:</label>
      <div class="col-sm-10">
        <select class="form-control" name='Core'>
		   <option>Yes</option>
		   <option>No</option>
	   </select>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="SupportName">Part of Prime Membership:</label>
      <div class="col-sm-10">
       <select class="form-control" name='Prime'>
		   <option>Yes</option>
		   <option>No</option>
	   </select>
      </div>
    </div>
    
		<div class="form-group">
      <label class="control-label col-sm-2" for="SupportName">Description:</label>
      <div class="col-sm-10">
      <textarea name='Description' class="form-control" rows="5" placeholder='Description of the service provided'></textarea>
      </div>
    </div>
	
		<div class="form-group">
      <label class="control-label col-sm-2" for="Link">Link to website:</label>
      <div class="col-sm-10">
       <input type="text" class="form-control" id="Link" placeholder="Link to chamber website" name="Link">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
 </form>




</div>
</div>


<?php

include '../include/footer.php';

?>