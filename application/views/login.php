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
          <h2 class="text-center" style="margin-top: 39px;">Login in to your account</h2>
      </div>
</section>


                  
                    
                  <form action="http://localhost/MVCFramework/accountController/userLogin" method="POST">
                          
                
                    <div class="row d-flex justify-content-center">
                  <div class="col-md-3 ">
                  <p class="bg-success text-white px-4"><?php 
                    if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  }
                  else{
                    echo $_SESSION['msg'] ="you are logged out please login again";
                  }
                  ?>
                   </div>
                </div>
                  <div class="row d-flex justify-content-center">
                  <div class="col-md-3 ">
                  <div class="form-group" style="margin-top: 1rem;">
                             <input type="email" name="email"class="form-control"  placeholder="Enter email">
                         </div>
                </div>
                </div>
                <div class="row d-flex justify-content-center">
                  <div class="col-md-3 ">
                         <div class="form-group" style="margin-top: 0.5rem;">
                             <input type="password"  name="password" class="form-control" placeholder="Password">
                        </div>
                        </div>
                </div>
                <div class="row d-flex justify-content-center">
                  <div class="col-md-3 ">
                            <button type="submit" class="btn btn-success" name="submit" style="width:150px;color: white;text-align: center;border-radius: 27px;  background-color: #006072;margin-top: 1rem;">Login</button><br>
                              <a href="http://localhost/MVCFramework/accountController/recovermail" >Forgot Password?</a>
                              <h5>Don't have an account?<a href="http://localhost/MVCFramework/accountController/register" >Create and account</a></h5>
                              </div>
                        </div>
                            </form>
  



                
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>