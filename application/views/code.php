<?php
if(isset($_POST['postalcode'])){
	$postalcode = strip_tags($_POST['postalcode']);

	$con=mysqli_connect("localhost","root","","company");

	$sql="INSERT INTO registration(email) VALUES ('$postalcode')";
	$result=mysqli_query($con,$sql);

	if($result==TRUE){
		echo "success";
	}
	else{
		echo "noo";
	}

}
?>