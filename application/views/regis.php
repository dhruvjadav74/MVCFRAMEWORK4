<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php linkCSS("assets/css/contact.css"); ?>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  </head>
  <body>


	
  <?php include "components/header.php"; ?>
   <div>



  <section class="prices-section">
      <div class="container">
          <h2 class="text-center" style="margin-top: 39px;">Create an account</h2>
      </div>
      <div class="imgcont">
          <div class="line">
              <figure><img src="<?=ROOT?>/assets/Images/contact/star.png" alt=""></figure>
          </div>
      </div>
</section>




    
    
   <form action="http://localhost/MVCFramework/accountController/signup" method="POST" style="margin-top:2rem;">
      <div class="row d-flex justify-content-center">
          <div class="col-md-3 ">
            <input type="text" class="form-control" name="firstname"placeholder="First name">
            
          </div>
          
              <div class="col-md-3">
            <input type="text" class="form-control"name="lastname" placeholder="Last name">
          </div>
       </div>
       <div class="row d-flex justify-content-center" style="margin-top: 1rem;">
          
              <div class="col-md-3">
             <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
             
          </div>
          <div class="col-md-3">
                    <label class="sr-only" for="inlineFormInputGroup">Mobile number</label>
                     <div class="input-group mb-2">
                       <div class="input-group-prepend">
                         <div class="input-group-text">+49</div>
                   </div>
                    <input type="number" class="form-control" name="phonenumber" placeholder="Mobile number">
              </div>
         </div>
       </div>
       <div class="row d-flex justify-content-center" style="margin-top: 1rem;">
          <div class="col-md-3">
         <input type="password" class="form-control" name="password" id="inputEmail4" placeholder="Password">
      </div>
      <div class="col-md-3">
         <input type="password" class="form-control" name="cpassword" id="inputEmail4" placeholder="Confirm Password">
      </div>
     
   </div>
   <div class="row d-flex justify-content-center" style="margin-top: 1rem;">
   <div class="form-group form-check" style="margin-top: 0.5rem;">
                             <input type="checkbox" class="form-check-input" id="exampleCheck1">
                             <label class="form-check-label" for="exampleCheck1">I have read the <a href="#">privacy policy</a></label>
    </div>
</div>
  <div class="d-flex justify-content-center">
    <button class="btn btn-primary" style="width: 163px; border-radius: 23px;background-color: #1d7a8c;margin-bottom:20px;margin-top:20px" type="submit" name="submit" >Register</button>

</div>
<div class="row d-flex justify-content-center" style="margin-top: 1rem;">
<h5>Already registered?<a href="http://localhost/MVCFramework/accountController/login" >Login now</a></h5>
</div>

  </form>

  <?php include "components/footer.php"?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>