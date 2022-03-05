<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  </head>
  <body>


   <div>




   <div class="container">
          <h2 class="text-center" style="margin-top: 39px;">Enter your new password</h2>
      </div>
    
    
   <form action="http://localhost/MVCFramework/accountController/rePass" method="POST" style="margin-top:2rem;">
      <p class="bg-info text-white px-5" ><?php
       if(isset($_SESSION['passmsg'])){
      
      echo $_SESSION['passmsg']; 
      }else{
        echo $_SESSION['passmsg']="";
      }
      ?></p>
      
       <div class="row d-flex justify-content-center" style="margin-top: 1rem;">
          <div class="col-md-3">
         <input type="password" class="form-control" name="password" id="inputEmail4" placeholder=" New Password">
      </div>
    </div>
      <div class="row d-flex justify-content-center" style="margin-top: 1rem;">
      <div class="col-md-3">
         <input type="password" class="form-control" name="cpassword" id="inputEmail4" placeholder="Confirm Password">
      </div>
     
   </div>
  
</div>
  <div class="d-flex justify-content-center">
    <button class="btn btn-primary" style="width: 163px; border-radius: 23px;background-color: #1d7a8c;margin-bottom:20px;margin-top:20px" type="submit" name="submit" >Update Password</button>

</div>
<div class="row d-flex justify-content-center" style="margin-top: 1rem;">
<h5>Already registered?<a href="login.php" >Login now</a></h5>
</div>

  </form>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>