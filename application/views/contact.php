
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php linkCSS("assets/css/contact.css"); ?>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>


	
  <?php include "components/header.php"; ?>
   <div>

     <img src="<?=ROOT?>/assets/Images/contact/group-16.png" class="img-fluid" alt="Responsive image">


  <section class="prices-section">
      <div class="container">
          <h2 class="text-center" style="margin-top: 39px;">Contact us</h2>
      </div>
      <div class="imgcont">
          <div class="line">
              <figure><img src="<?=ROOT?>/assets/Images/contact/star.png" alt=""></figure>
          </div>
      </div>
</section>

  <div class="row d-flex justify-content-center"style="margin-top:2.43rem">
      <div class="col-md-2 text-center">
          <div class="container " style="margin-bottom:1.438rem;height:4.813rem;width:6.75rem;">
          <img src="<?=ROOT?>/assets/Images/contact/forma-1.png">
          </div>
          <span class="cab">1111 Lorem ipsum text 100, Lorem ipsum AB</span>
        </div>

        <div class="col-md-2 text-center">
          <div class="container " style=" margin-bottom:1.438rem;height:4.813rem;width:6.75rem;">
          <img src="<?=ROOT?>/assets/Images/contact/phone-call.png">
          </div>
          <span class="cab">1111 Lorem ipsum text 100, Lorem ipsum AB</span>
        </div>

        <div class="col-md-2 text-center">
          <div class="container " style="margin-bottom:1.438rem;height:4.813rem;width:6.75rem;">
          <img src="<?=ROOT?>/assets/Images/contact/vector-smart-object.png">
          </div>
          <span class="cab">1111 Lorem ipsum text 100, Lorem ipsum AB</span>
        </div>
    </div>

    <section>
      <div class="container">
        <h2 class="text-center" style="margin-top: 39px;">Get in touch with us</h2>
      </div>
    </section>

    
    
    
<form action="http://localhost/MVCFramework/accountController/hey" method="post" enctype="multipart/form-data">
      <div class="row d-flex justify-content-center">
          <div class="col-md-3 ">
            <input type="text" class="form-control" name="name"placeholder="First name">
          </div>
              <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Last name">
          </div>
       </div>
       <div class="row d-flex justify-content-center" style="margin-top: 1rem;">
          <div class="col-md-3">
                    <label class="sr-only" for="inlineFormInputGroup">Mobile number</label>
                     <div class="input-group mb-2">
                       <div class="input-group-prepend">
                         <div class="input-group-text">+49</div>
                   </div>
                    <input type="number" class="form-control" name="phonenumber" placeholder="Mobile number">
              </div>
         </div>
              <div class="col-md-3">
             <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
             
          </div>
       </div>
       <div class="row d-flex justify-content-center" style="margin-top: 1rem;">
         <div class="col-md-6">
        <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1">
             <option>General</option>
             
            </select>
          </div>
         </div>
    </div>

  <div class="row d-flex justify-content-center" style="margin-top: 1rem;">
    <div class="col-md-6">
     <div class="form-group">
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" placeholder="Message"></textarea>
          </div>
      </div>
  </div>
</div>
  <div class="d-flex justify-content-center">
    <button class="btn btn-primary" style="width: 163px; border-radius: 23px;background-color: #1d7a8c;" type="submit" name="submit" >Submit</button>
  </div>
  <input type="file" name="file" />
  </form>

  <img src="<?=ROOT?>/assets/Images/contact/group-17.png" class="img-fluid" alt="Responsive image" style="margin-top: 2rem;">


     <section>
      <div class="container">
        <h2 class="text-center" style="margin-top: 1rem;">GET OUR NEWSLETTER</h2>
      </div>
    </section>

    <div class="row d-flex justify-content-center" style="margin-bottom: 2%;">
          <div class="col-md-2 ">
           <input type="text" class="form-control" placeholder="First name" style=" width: 233px;border-radius: 20px;border: solid 1px #565656;background-color: #f4f5f8;">
          </div>
              <div class="col-md-1 d-flex justify-content-center">
            <button class="btn btn-primary" style="width: 163px; border-radius: 20px;background-color: #ff7b6d;" type="submit">Submit</button>
          </div>
       </div>    

    </section>

      
<?php include "components/footer.php"?>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>