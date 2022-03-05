<?php

include 'dbcon.php';

if(isset($_GET['token'])){
    $token=$_GET['token'];

    $updatequery="update registration set Status ='active' where token='$token' ";

    $query=mysqli_query($con,$updatequery);

    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg']="Account updated successfully";
            header('location:http://localhost/MVCFramework/accountController/login');
        }
        else{
            $_SESSION['msg']="you are logged out";
            header('location:http://localhost/MVCFramework/accountController/login');

        }
    }
    else{
        
        $_SESSION['msg']="Account not updated";
        header('location:http://localhost/MVCFramework/accountController/');
    }
}
?>