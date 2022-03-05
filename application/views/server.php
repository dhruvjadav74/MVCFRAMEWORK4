
<?php 
include("connection.php");
 ?>

<?php

	$query = mysqli_query($db, "SELECT * FROM registration where UserTypeId='1' and status='active'");

  

	while($row = mysqli_fetch_array($query)){

		$service = $row['username'];
 ?>
	
			
  <div class="col-md-2  justify-content-center">
                     <div class="row d-flex justify-content-center">
                     <img class="hat" src="<?=ROOT?>/assets/Images/booknow/hat.png" alt="">
                   </div>
                   <div class="row d-flex justify-content-center" style="margin-top: 0.7rem;">
                     <p class="h6">Sandip Patel</p>
                   </div>
                   <div class="row d-flex justify-content-center">
                     <button type="button" class="btn btn-light">Select</button>
                   </div>
                 </div>
<?php 	} 


?>
</div>
 