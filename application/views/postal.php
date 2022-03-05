<?php	

echo '<script>alert("success")</script>';
$server="localhost";
$user="root";
$password="";
$db="company";

$con =mysqli_connect($server,$user,$password,$db); 
	$postalcode=$_POST['postalcode'];
	

	$sql="INSERT INTO registration(email) VALUES ('$postalcode)";
	$result=mysqli_query($con,$sql);
	if($con){
		echo '<script>alert("success")</script>';
	}
	


?>