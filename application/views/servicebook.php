
<?php
    session_start();

    if(!isset($_SESSION['username'])){
        echo "you are logged out";
        header('location:http://localhost/MVCFramework/accountController/login');

    }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php linkCSS("assets/css/booknoww.css"); ?>
    <link rel="stylesheet" type="text/css" href="dcodes/payment_icons/dc_payment_icons.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/payment_icons/dc_payment_icons.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
     
  </head>
  <title>Contact Us</title>
</head>
<body>
		
<?php include "components/headerlog.php"; ?>




     	<img src="<?=ROOT?>/assets/Images/booknow/book-service-banner.jpg" class="img-fluid" alt="Responsive image">

       
    

       
 	 <section class="prices-section">
        <div class="container">
        <div class="d-flex justify-content-center" style="margin-top: 20px;">
    <h1>Hello <?php echo $_SESSION['username']; ?></h1>
    
</div>
            <h2 class="text-center" >Set up your cleaning service</h2>
        </div>
        <div class="imgcont">
            <div class="line">
                <figure><img src="<?=ROOT?>/assets/Images/booknow/star.png" alt=""></figure>
            </div>
        </div>
</section>
    <div class="row justify-content-center" >
      <div class="container-fluid w-50" style="margin-right: 0px;" id="house">
      <div class="tab-regular">
            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><img
                                    src="<?=ROOT?>/assets/Images/booknow/setup-service.png"
                                    alt="">Setup Service</a> </li>
                <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><img
                                    src="<?=ROOT?>/assets/Images/booknow/schedule.png"
                                    alt="">Schedule & Plan</a> </li>
                <li class="nav-item"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><img
                                    src="<?=ROOT?>/assets/Images/booknow/Details.png"
                                    alt="">Your Details</a> </li>
                <li class="nav-item"> <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false"><img
                                    src="<?=ROOT?>/assets/Images/booknow/payment.png"
                                    alt="">Make Payment</a> </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container-fluid"  style="margin-top: 10px;" id="div1">
            <div class="row">
        <div class="col-md-auto">
           <p class="h5">Enter your postal code</p>
           <form method="post" id="postalcodecheck">
           <div class="row">
             <div class="col-md-auto">
                  <div class="form-group">
                      <input type="number" class="form-control postalcode" placeholder="Postal Code">
                      <span id="pincode_error" class="error_field" style="color:red;"></span>
                   </div>
            </div>
             <div class="col-md-auto">
              <button type="submit" id="submit"  class="btn abcabc" style="background-color:#1D7A8C;border-radius: 20px;border: 1px solid rgba(255, 255, 255, 0.5);height: 40px;width: auto; color: aliceblue;">Check Availability</button>
             </div>
</form>
            
           </div>
        </div>
      </div>
        </div>
                    </div>



                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  
        <div class="container-fluid" style="margin-top: 10px;">
       
        
      <div class="row">
        <div class="col-md-auto">
           <p class="h6">When do you need the cleaner?</p>
           <div class="row">
             <div class="col-md-auto">
                <div class="form-group" style="width: 140px;">
                <input type="date" name="dateofservice" id="dateofservice" style="height:38px;">
                <span id="date_error" class="error_field" style="color:red;"></span>
                </div>
                
                
            </div>
            <div class="col-md-auto">
            <div class="form-group" style="width: 140px;">
                <input type="time" id="dateoftime" name="dateoftime" style="height:38px;">
                </div>
           </div>
           </div>
        </div>
        <div class="col-md-auto">
           <p class="h6">How long do you need your cleaner to stay?</p>
           <div class="form-group" style="width: 140px;">
           <select class="form-control" id="hours" name="hours"style="padding-left: 2px;">
           <option id="0" value="Option 1">Select Hrs</option>
           <option id="3" value="3.0">3.0 Hrs</option>
                <option id="4" value="4.0">4.0 Hrs</option>
                <option id="5" value="5.0">5.0 Hrs</option>
                </select>
                </div>
                <span id="service_error" class="error_field" style="color:red;"></span>
        </div>
        
      </div>
       <p><hr/></p>
       <p class="h5">Extra Services</p>
       <ul style="margin-right: -10px;">
  <li class="text-center" ><input class="get_value"type="checkbox" id="cb1" value="Inside cabinets" >
  
    <label for="cb1"  ><img src="<?=ROOT?>/assets/Images/booknow/cabbinet.png" style="height: 50px;max-width: 40px;" /></label>
       <p>Inside cabinets</p>
  </li>
  <li class="text-center"><input type="checkbox"  class="get_value" id="cb2"value="Inside fridge" >
    <label for="cb2" style="padding: 30px;"> <img src="<?=ROOT?>/assets/Images/booknow/fridge.png"  style="height: 50px;width: 30px;" /> </label>
    <p>Inside fridge</p>
  </li>
  <li class="text-center"><input type="checkbox" class="get_value" id="cb3"value="Inside oven" >
    <label for="cb3"><img src="<?=ROOT?>/assets/Images/booknow/oven.png" style="height: 50px;max-width: 40px;" /></label>
        <p>Inside oven </p>
  </li>
 <li class="text-center"><input type="checkbox" class="get_value"id="cb4"value="Laundry wash & dry" >
    <label for="cb4"><img src="<?=ROOT?>/assets/Images/booknow/washing_machine.png" style="height: 50px;max-width: 40px;" /></label>
    <p>Laundry wash & dry</p>
  </li>
   <li class="text-center"><input type="checkbox"class="get_value" id="cb5" value="Interiror windows">
    <label for="cb5"><img src="<?=ROOT?>/assets/Images/booknow/window.png" style="height: 50px;max-width: 40px;" /></label>
        <p>Interiror windows</p>
  </li>
</ul>
         <p><hr/></p>
           <div class="form-group">
             <p class="h5">Comment</p>
                <textarea class="form-control"name="comment" id="comment" rows="3"></textarea>
           </div>
             <div class="form-group form-check">
               <input type="checkbox" name="pets" class="form-check-input" id="pets">
               <p class="h6">I have pets at home.</p>
            </div>
            <p><hr/></p>
            <div class="d-flex justify-content-end">
            
            <button class="btn plan" name="submit" type="submit"  style="background-color:#1D7A8C;border-radius: 20px;border: 1px solid rgba(255, 255, 255, 0.5);height: 40px;width: 100px; color: aliceblue;">Continue</button>
            </div>
     </div>
                   </div>

	
	

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container-fluid" style="margin-top: 10px;max-width: 900px;">
        <p class="h5">Enter your contact details,so we can surve you in better way!</p>
        <span id="chose_error" class="error_field" style="color:red;"></span>
        <form method="POST" id="3rdtab">
    <div class="myine" id="addtablee">    
<?php 
include("connection.php");
 ?>

 
<?php

$user_id=$_SESSION['user_id']; 
	$query = mysqli_query($db, "SELECT * FROM useraddress where UserId='$user_id'");

  

	while($row = mysqli_fetch_array($query)){
    $addressid=$row['AddressId'];
		$address1 = $row['AddressLine1'];
		$phonenumber = $row['Mobile'];
 ?>
	
			

	<div class="row">
              <div class="col-md-7" style="border: 1px solid gray;height: auto;margin-top: 1rem;"  >
          <div class="form-check" >
            <input class="form-check-input mineradio" type="radio"  name="radiobutton" value="<?php echo $addressid; ?>" id="radiobutton">
                  <p>  Address: <?php echo $address1; ?></p>
                    <p>Phonenumber: <?php echo $phonenumber; ?></p>
              
             </div>
      </div>
    </div>
<?php 	} 


?>

 
  </div>
          <div class="row d-flex justify-content-start">
           <button  type="button" class="addingtheaddress"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="background-color:white;border-radius: 20px;border: 2px solid #1D7A8C;;height: 40px;width: 300px; color: ;margin-top: 1rem;color: #1D7A8C;font-weight: bold;">
                  + Add new address
            </button>
          </div>

            <div class="collapse" id="collapseExample" style="margin-top: 1rem;background-color:#F3F3F3;max-width: 900px;">
            <div class="row d-flex justify-content-center" > <span id="street_error" class="error_field" style="color:red;"></span></div>
      <div class="row d-flex justify-content-center" >
     
        <div class="col-md-auto" style="margin-top: 0.2rem;">
           <p class="h5">Street name</p>
           <div class="row">
             <div class="col-md-auto">
                <div class="form-group" >
                <input type="text" name="street" class="form-control street" placeholder="Street name">
                
                </div>
            </div>
           </div>
        </div>
        <div class="col-md-auto" style="margin-top: 0.2rem;">
           <p class="h5">House number</p>
           <div class="form-group" >
                <input type="text" name="house"class="form-control house" placeholder="House number">
                </div>
        </div>
      </div>
       <div class="row d-flex justify-content-center">
        <div class="col-md-auto">
           <p class="h5">Postal Code</p>
           <div class="row">
             <div class="col-md-auto">
                <div class="form-group" >
                <input type="number" name="postal" class="form-control postal" placeholder="Postal code">
                </div>
            </div>
           </div>
        </div>
        <div class="col-md-auto">
           <p class="h5">City</p>
           <div class="form-group" >
                <input type="text" name="city" class="form-control city" placeholder="City">
                </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-auto">
           <p class="h5">Phone number</p>
           <div class="row">
             <div class="col-md-auto">
                <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend ab">
            <div class="input-group-text">+91</div>
          </div>
           <input type="text" class="form-control Mobile" name="Mobile" id="inlineFormInputGroupUsername2" placeholder="Phone number">
        </div>
            </div>
           </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center" style="margin-top: 0.5rem;">
        <div class="col-md-auto" >
           <button name="submit1" type="button"  class="btn addaddress" style="background-color:#1D7A8C;border-radius: 20px;border: 1px solid rgba(255, 255, 255, 0.5);height: 40px;width: 100px; color: aliceblue;">Save</button>
        </div>
        <div class="col-md-auto" style="margin-bottom: 1rem;">
           <button type="button" class="btn1" style="background-color:transparent;border-radius: 40px;border: 1px solid gray;;height: 40px;width: 100px;" data-target="#collapseExample" data-toggle="collapse">Cancel</button>
        </div>
      </div>

           </div>
    
    

           <p class="h5" style="margin-top: 0.7rem;margin-bottom: 0px;">Your Favourite Service Providers<hr/></p>
            
                <p class="h6">You can choose your favorite service provider from the below list</p>

                 <div class="row d-flex" style="margin-top: 1rem;">
                   
<?php 
include("connection.php");
 ?>

<?php

	$query = mysqli_query($db, "SELECT * FROM registration where UserTypeId='1' and status='active'");

  

	while($row = mysqli_fetch_array($query)){
    $service_id=$row['user_id'];
		$service = $row['username'];
 ?>
	
			
  <div class="col-md-2  justify-content-center">
                     <div class="row d-flex justify-content-center">
                     <img class="hat" src="<?=ROOT?>/assets/Images/booknow/hat.png" alt="">
                   </div>
                   <div class="row d-flex justify-content-center" style="margin-top: 0.7rem;">
                     <p class="h6"><?php echo $service;?></p>
                   </div>
                   <div class="row d-flex justify-content-center">
                     <button type="button" class="btn btn-success serr" value="<?php echo $service_id;?>">Select</button>
                   </div>
                 </div>
<?php 	} 


?>
                  
                 </div>
                    <p><hr/></p>
                    <div class="d-flex justify-content-end">
            <button class="btn adding" name="third"  type="submit" style="background-color:#1D7A8C;border-radius: 20px;border: 1px solid rgba(255, 255, 255, 0.5);height: 40px;width: 100px; color: aliceblue;">Continue</button>
            </div>
     </form>
           
     
     </div>
    
 
                   </div>
                    
     <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
     <p class="h5" style="margin-top: 0.7rem;margin-bottom: 0px;">Pay Securely with Helperland Payment gateway.</p>
            <p class="h6" style="margin-top:1rem;">Promo Code(optional)</p>

            <div class="row">
                <div class="col-md-5"> <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Promo Code(optional)"></div>
                <div class="col-md-5"> <button class="btn btn-success" type="submit" style="background-color:white;border-radius: 20px;border: 1px solid #1D7A8C;height: 40px;width: 100px; color:#1D7A8C;">Apply</button></div>
            </div>
     <p><hr/></p>

     <p class="dis fw-bold mb-2">Card details</p>
     <div class="row d-flex justify-content-start">
       <div class="col-md-10" >
                    <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                        <div class="fa fa-credit-card-alt"></div> <input type="text" class="form-control" placeholder="Card Details">
                        <div class="d-flex w-50"> <input type="text" class="form-control px-0" placeholder="MM/YY"> <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV"> </div>
                    </div>
                    </div>
  </div> 
  <p><hr/></p>
  
  <div class="row d-flex justify-content-end"><p class="h9">Accepted cards</p>
  </div>
  <div class="row d-flex justify-content-end">
    
  <span class="dc_payment_icons_glossy_50 dc_visa_glossy" title="Visa"></span>
<span class="dc_payment_icons_glossy_50 dc_mastercard_glossy" title="Mastercard"></span>
<span class="dc_payment_icons_glossy_50 dc_americanexpress_glossy" title="American Express"></span>
<span class="dc_payment_icons_glossy_50 dc_discover_glossy" title="Discover"></span>
<span class="dc_payment_icons_glossy_50 dc_paypal_glossy" title="PayPal"></span>
<span class="dc_payment_icons_glossy_50 dc_maestro_glossy" title="Maestro"></span>
<span class="dc_payment_icons_glossy_50 dc_cirrus_glossy" title="Cirrus"></span>
<span class="dc_payment_icons_glossy_50 dc_visaelectron_glossy" title="Visa Electron"></span>
  </div>
  <p><hr/></p>
  <div class="form-group form-check">
               <input type="checkbox" name="pets" class="form-check-input" id="exampleCheck1">
               <p class="h6">I have accepted the terms and conditions the cancellation policy and the privacy police. i confirm that Helperland starts to execture the contract before the expiry of the withdrawl period and I lose my right of withdrawal as a consumer with full performance of the contract.</p>
            </div>

            <p><hr/></p>

            <div class="d-flex justify-content-end">
            <button class="btn completebook" type="submit" style="background-color:#1D7A8C;border-radius: 20px;border: 1px solid rgba(255, 255, 255, 0.5);height: 40px; color: aliceblue;">Complete Booking</button>
            </div>


                  </div>
            </div>
        </div>
</div>

      <div class="container-fluid w-25" style="margin-left: 0px;" id="total">
        
      <div class="card mb-3 " style="max-width: 34.56rem;" id="div1">
  <div class="card-header text-white text-left" style=" background-color: #1d7a8c;">Payment Summary</div>
  <div class="card-body text-black ">
    <h5 class="card-title"><div class="col mx-auto text-left">
            <div class="row">
            <p class="word" id="Time"> </p>
            <p class="word"  id="tm"></p>
             </div>
            <p class="word"></p>
            <p class="h6">Duration</p>
            <div class="row">
              <div class="col d-flex justify-content-start">
                <p class="word">Basic</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="word" id="totally">0 Hrs</p>
              </div>
            </div>
            <div class="row" style="margin-top:0rem;">
              <div class="col-md-auto d-flex justify-content-start">
              <p id="extra" style="display:none">Inside Cabinets</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="word" id="extime"  style="display:none">30 Mins</p>
              </div>
            </div>
            <div class="row" style="margin-top:0rem;">
              <div class="col-md-auto d-flex justify-content-start">
              <p id="extra1" style="display:none">Inside Fridge</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="word" id="extime1"  style="display:none">30 Mins</p>
              </div>
            </div>
            <div class="row" style="margin-top:0rem;">
              <div class="col-md-auto d-flex justify-content-start">
              <p id="extra2" style="display:none">Inside Oven</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="word" id="extime2"  style="display:none">30 Mins</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-auto d-flex justify-content-start">
              <p id="extra3" style="display:none">Laundry wash & dry</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="word" id="extime3"  style="display:none">30 Mins</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-auto d-flex justify-content-start">
              <p id="extra4" style="display:none">Interiror windows</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="word" id="extime4"  style="display:none">30 Mins</p>
              </div>
            </div>
          
            <p style="margin-top: -20px;"><hr/></p>
             <div class="row">
              <div class="col-md-auto d-flex justify-content-start">
                <p class="finalword">Total Service Time</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="finalword" id="ttime">0 Hrs</p>
              </div>

            </div>
             <p style="margin-top: -20px;"><hr/></p>
            
             <div class="row">
              <div class="col-md-auto d-flex justify-content-start">
                <p class="word">Per Cleaning</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="word" id="amount">$0</p>
              </div>
            </div>
             <div class="row">
              <div class="col d-flex justify-content-start">
                <p class="word">Discount</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="word" id="discount">-$0</p>
              </div>
              </div>
             <p style="margin-top: -20px;"><hr/></p>

               <div class="row">
              <div class="col-md-auto d-flex justify-content-start">
                <p class="payments">Total Payment</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="dolr" id="demototal">0</p>
              </div>
              </div>

              <div class="row">
              <div class="col d-flex justify-content-start">
                <p class="word">Effective Price</p>
              </div>
              <div class="col d-flex justify-content-end">
                <p class="finalprice" id="e">$0</p>
              </div>
              </div>

              <p class="word">*You will save 20% according to §35a EStG.</p>


          </div>

          </div>
            <div class="card-footer text-left" style=" background-color: #F3F3F3;padding-bottom: 0px;color:#8D8D8D; ">
           <p>See what is always included</p>
          </div>
  </div>



          <div class="container-fluid">
            <h2 class="text-center">Questions?</h2>
             <button class="accordion">Which Helperland professional will come to my place?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, </p>
                 </div>

               <button class="accordion">Which Helperland professional will come to my place?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, </p>
                 </div>

                 <button class="accordion">Which Helperland professional will come to my place?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, </p>
                 </div>

               <button class="accordion">Which Helperland professional will come to my place?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, </p>
                 </div>

                 <button class="accordion">Which Helperland professional will come to my place?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, </p>
                 </div>

               <button class="accordion">Which Helperland professional will come to my place?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, </p>
                 </div>

                 <button class="accordion">Which Helperland professional will come to my place?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, </p>
                 </div>

                 <div class="d-flex justify-content-start">
                  <p style="color: #1D7A8C;font-weight: bold;opacity: 1;margin-top: 10px;">For more help</p>
            </div>
          </div>
</div> 
      </div>
	   </div>
       <?php include "components/footer.php"?>
       

  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>	
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  
$('#dateofservice').on('change', function() {
    var b = $(this).val();
    $('#Time').text(b+" ");
  });
  $('#dateoftime').on('change', function() {
    var c = $(this).val();
    $('#tm').text("  "+c);
  });




  </script>
  <script type="text/javascript">

$(document).ready(function(){
   
   var postalcode=0;

  $('.abcabc').click(function(e){
    e.preventDefault();
    postalcode=$('.postalcode').val();
    $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/PostalCode",
     data:{
       'postalcode':postalcode,
     },
     success:function(response){
        if(jQuery.trim(response)=="success"){
          $("#profile-tab").tab("show");
        }
        else{
          $('#pincode_error').html("We are not providing service in this area");
        }
     }
   });
  })


  $('.addaddress').click(function(e){
    e.preventDefault();
    var street=$('.street').val();
    var house=$('.house').val();
    var Mobile=$('.Mobile').val();
    var postal=$('.postal').val();
    var city=$('.city').val();
    var error=""

    if(street==""){
      $('#street_error').html("Enter valid Details")
      error="yes";
    }
    if(house==""){
      $('#street_error').html("Enter valid Details")
      error="yes";
    }
    if(Mobile==""){
      $('#street_error').html("Enter valid Details")
      error="yes";
    }
    if(postal==""){
      $('#street_error').html("Enter valid Details")
      error="yes";
    }


    

    if(error==""){
      $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/Add",
     data:{
       'addaddresss':true,
       'street':street,
       'house':house,
       'Mobile':Mobile,
       'postal':postal,
       'city':city,
     },
     success:function(response){
      if(jQuery.trim(response)=="success"){
          $("#collapseExample").collapse("hide");
        }
     }
   });
  }
  })
  
  var raaa='';
  var servicebtn='';
  var chosenaddress='';
  var chosenservicepro='';
  var dateofservice  = '';
  var dateoftime='';
    var servicehours='';
    var comment= '';
    var pets= '';
    var timeextra=0;
    var timeextra1=0;
    var timeextra2=0;
    var timeextra3=0;
    var timeextra4=0;
    var totaltime=0;
    var basichour=0;
    var payment=0;
    var a=$(this).is(':checked');
    var b=$(this).is(':checked');
    var c=$(this).is(':checked');
    var d=$(this).is(':checked');
    var extraservices='';
    $('#hours').on('change', function() {
     
     var hourss = $(this).children(":selected").attr("id");
     var iNum = parseInt(hourss);
     basichour=iNum;
     
        $('#totally').text(basichour + ' Hrs');
       totaltime=timeextra+timeextra1+timeextra2+timeextra3+timeextra4+basichour;
        $('#ttime').text(totaltime + " Hrs");
        payment=20*totaltime;
        $('#amount').text("$ "+payment);
        $('#demototal').text("$ "+payment);
});

     $('#cb1').change(function() {
        var a=$(this).is(':checked');
        if(a==true){
           timeextra=0.5;
           $('#extra').show();
           $('#extime').show();
        }
        else{
          timeextra=0;
          $('#extra').hide();
          $('#extime').hide();
        }
        totaltime=timeextra+timeextra1+timeextra2+timeextra3+timeextra4+basichour;
        $('#ttime').text(totaltime + " Hrs");
        payment=20*totaltime;
        $('#amount').text("$ "+payment);
        $('#demototal').text("$ "+payment);
     });
     $('#cb2').change(function() {
  
        var b=$(this).is(':checked');
        if(b==true){
           timeextra1=0.5;
           $('#extra1').show();
           $('#extime1').show();
        }
        else{
          timeextra1=0;
          $('#extra1').hide();
          $('#extime1').hide();
        }
        totaltime=timeextra+timeextra1+timeextra2+timeextra3+timeextra4+basichour;
        $('#ttime').text(totaltime + " Hrs");
        payment=20*totaltime;
        $('#amount').text("$ "+payment);
        $('#demototal').text("$ "+payment);
     });
     $('#cb3').change(function() {
        var c=$(this).is(':checked');
        if(c==true){
           timeextra2=0.5;
           $('#extra2').show();
           $('#extime2').show();
        }
        else{
          timeextra2=0;
          $('#extra2').hide();
          $('#extime2').hide();
        }
        totaltime=timeextra+timeextra1+timeextra2+timeextra3+timeextra4+basichour;
        $('#ttime').text(totaltime + " Hrs");
        payment=20*totaltime;
        $('#amount').text("$ "+payment);
        $('#demototal').text("$ "+payment);
     });
     $('#cb4').change(function() {
        var d=$(this).is(':checked');
        if(d==true){
           timeextra3=0.5;
           $('#extra3').show();
           $('#extime3').show();
        }
        else{
          timeextra3=0;
          $('#extra3').hide();
          $('#extime3').hide();
        }
        totaltime=timeextra+timeextra1+timeextra2+timeextra3+timeextra4+basichour;
        $('#ttime').text(totaltime + " Hrs");
        payment=20*totaltime;
        $('#amount').text("$ "+payment);
        $('#demototal').text("$ "+payment);
     });
     $('#cb5').change(function() {
        var e=$(this).is(':checked');
        if(e==true){
           timeextra4=0.5;
           $('#extra4').show();
           $('#extime4').show();
        }
        else{
          timeextra4=0;
          $('#extra4').hide();
          $('#extime4').hide();
        }
        totaltime=timeextra+timeextra1+timeextra2+timeextra3+timeextra4+basichour;
        $('#ttime').text(totaltime + " Hrs");
        payment=20*totaltime;
        $('#amount').text("$ "+payment);
        $('#demototal').text("$ "+payment);
     });
          
    
    
    
    

    
  $('input[type="radio"]').click(function(){
         raaa=$(this).val();
     })

     

     $('.serr').click(function(){
         servicebtn=$(this).val();
         $(this).css('background-color', 'green');
         
     })
     
  $("#3rdtab").submit(function(event){
    event.preventDefault();
    
      chosenaddress=raaa;
      chosenservicepro=servicebtn;
      var error="";
      if(chosenservicepro==""){
        chosenservicepro="all";
      }

      if(chosenaddress==""){
        $('#chose_error').html("Please choose address");
         error="yes";
      }


      if(error==""){
        $("#payment-tab").tab("show");   
      }


    })
   

    $(".plan").click(function(event){
    event.preventDefault()
   
    dateofservice  = document.getElementById("dateofservice").value
    dateoftime=document.getElementById("dateoftime").value
    servicehours= document.getElementById("hours").value
    comment= document.getElementById("comment").value
    pets= document.getElementById("pets").value
    var languages = [];  
    $('.get_value').each(function(){  
                if($(this).is(":checked"))  
                {  
                     languages.push($(this).val());  
                }  
           });  
           languages = languages.toString();  
           

    var error=""
    if(dateofservice==""){
      $('#date_error').html("Please choose date and time")
      error="yes";
    }
    if(servicehours=="Option 1"){
      $('#service_error').html("Please choose service hours")
      error="yes";
    }

    if(error==""){
      $("#contact-tab").tab("show");  
    }

    
    extraservices=languages;
    
  })

    $('.completebook').click(function(e){
    e.preventDefault();
    var ch_address=chosenaddress;
    var ch_postalcode=postalcode;
    var ch_serviceprovider= chosenservicepro;
    var ch_dateofservice = dateofservice;
    var ch_dateoftime=dateoftime;
    var ch_servicehours= servicehours;
    var ch_comment=comment;
    var ch_pets= pets;
    var ch_extraservices=extraservices;
    var basicss=totaltime-basichour;
    var ch_extrahours=basicss;
    var ch_payment=payment;
    
    $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/Mail",
     data:{
       'ch_address':ch_address,
       'ch_serviceprovider':ch_serviceprovider,
       'ch_dateofservice':dateofservice,
       'ch_dateoftime':dateoftime,
        'ch_servicehours':servicehours,
       'ch_comment':comment,
         'ch_pets':pets,
        'ch_extraservices':extraservices,
        'ch_extrahours':basicss,
        'ch_payment':payment,
        'ch_postalcode':postalcode,
     },
     success:function(response){
       var a=jQuery.trim(response)
      
swal("Booking has been successfully submitted", "Service Id: "+ a, "success", {
  button: "Aww yiss!",
});
        }

     });
   })

   
        
    
  



 

  
});
</script>
