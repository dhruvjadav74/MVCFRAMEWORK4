<?php

$server="localhost";
$user="root";
$password="";
$db="company";

$con =mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
    <script>

alert("success");
        </script>
        <?php
}
else{
    ?>
    <script>

alert("no success");
        </script>

        <?php
}

?>