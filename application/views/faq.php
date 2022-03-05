<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



    <?php linkCSS("assets/css/faq.css"); ?>

    <title>Prices</title>
</head>

<body>

    <?php include "components/header.php"; ?>
    
   
    <section>
        <div class="container-fluid" style="background-image: url(<?=ROOT?>/assets/Images/faq/faq-banner.png); height: 370px; width: 100%; overflow: hidden; background-size: cover;background-position: center;">

        </div>
    </section>
    <div class="container-fluid text-center">
        <p style="font-family: Roboto;font-size: 36px;">FAQs</p>
        <div class="imgcont">
            <div class="line">
                <figure><img src="<?=ROOT?>/assets/Images/faq/star.png" alt=""></figure>
            </div>
        </div>


        <section class="main-cont" style="max-width: 931px; height: auto;" >
            <div class="container-fluid">
                <p class="h5">Whether you are Customer or Service provider, We have tried our best to solve all your queries and questions.</p>
            </div>
            <div class="sec2-cont2">
                <div class="btn_cont">
                    <button class="selected">for customer</button>
                    <button class="" id="btn2">for service provider</button>
                </div>
            </div>
            <div class="container-fluid">
                <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button " data-bs-toggle="collapse" data-bs-target="#collapseOne"><img src="<?=ROOT?>/assets/Images/faq/right-arrow.png"
                                        class="img-fluid" style="padding-right: 10px;" 
                                        alt="">What's included in a cleaning?</button>                                  
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Bedroom, Living Room & Common Areas, Bathrooms, Kitchen, Extras.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"><img src="<?=ROOT?>/assets/Images/faq/right-arrow.png"
                                        class="img-fluid" style="padding-right: 10px;" 
                                        alt="">Which Helperland professional will come to my place?</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Helperland has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to assign the best professional available. Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all future bookings. You will receive an email with details about your professional prior to your appointment.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"><img src="<?=ROOT?>/assets/Images/faq/right-arrow.png"
                                        class="img-fluid" style="padding-right: 10px;" 
                                        alt="">Can I skip or reschedule bookings?</button>                   
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>You can reschedule any booking for free at least 24 hours in advance of the scheduled start time. If you need to skip a booking within the minimum commitment, we’ll credit the value of the booking to your account. You can use this credit on future cleanings and other Helperland services.</p>
                </div>
            </div>

        </div>
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"><img src="<?=ROOT?>/assets/Images/faq/right-arrow.png"
                                        class="img-fluid" style="padding-right: 10px;" 
                                        alt="">Do I need to be home for the booking?</button>                
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>We strongly recommend that you are home for the first clean of your booking to show your cleaner around. Some customers choose to give a spare key to their cleaner, but this decision is based on individual preferences.</p>
                </div>
            </div>

        </div> 
         
            
</div></div>
    </section>

   <section>
        <div class="row feed">
            <div class="col-2 feed1"><img src="<?=ROOT?>/assets/Images/prices/uparrow.png" alt="uparrow"></div>
            <div class="col-md-auto ">
          <h3 class="text-center" style="margin-top: 1rem;">GET OUR NEWSLETTER</h3>
                <div class="row">
                <input type="text" class="form-control" placeholder="Your email" style=" width: 233px;border-radius: 20px;border: solid 1px #565656;background-color: #f4f5f8;">

              <button class="btn btn-primary" style="width: 163px; border-radius: 20px;background-color: #ff7b6d;" type="submit">Submit</button>
               </div>
            </div>
            <div class="col-2 feed3"><img src="<?=ROOT?>/assets/Images/prices/layer-598.png" alt=""></div>
        </div>
    </section>
    
    <footer>
    <div class="row footer justify-content-between">
      
      <div class="col-12 col-md-1 text-center " style="padding-top: 20px;padding-left: 100px;" >
        <img src="<?=ROOT?>/assets/Images/homepage/logo-small.png">
      </div>
      <div class="col-md-auto my-auto">
        <ul >
          <li><a href="#" style="text-decoration: none;">HOME</a></li>
          <li><a href="<?php echo BASEURL; ?>/accountController/aboutPage" style="text-decoration: none;">ABOUT</a></li>
          <li><a href="#" style="text-decoration: none;">TESTIMONIALS</a></li>
          <li><a href="<?php echo BASEURL; ?>/accountController/faqPage"  style="text-decoration: none;">FAQS</a></li>
          <li><a href="#" style="text-decoration: none;">INSURANCE</a></li>
          <li><a href="#" style="text-decoration: none;">POLICY</a></li>
          <li><a href="#" style="text-decoration: none;">IMPRESSUM</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-1 my-auto">
        <div  class="social-media justify-content-center">
          <a class="nav-link"><img src="<?=ROOT?>/assets/images/homepage/facbook.png"></a>
          <a class="nav-link"><img src="<?=ROOT?>/assets/images/homepage/instagram.png"></a>
        </div>
      </div>
      
      <hr class="mx-auto "style="border:1px solid #424242;width:1320px;">
      <div class="row mx-auto">
        <div class="col text-center">
          <p style="color:#9BA0A3">©2018 Helperland. All rights reserved.   Terms and Conditions | Privacy Policy</p>
        </div>
        
      </div>
      
      
    </div>
  </footer>
    
   <script type="text/javascript" src="js/script.js"></script>
</body>


</html>