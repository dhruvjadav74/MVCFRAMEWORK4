<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php linkCSS("assets/css/service.css"); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    <title>Service Provider> Become a Service Provider</title>
  </head>
  <body>

    <section class="home">
        
      <?php include "components/nav.php"?>
  		
	  	<div class="row d-flex justify-content-center">
    	<div class="card text-center" style="width: 29rem;">
      <h2 class="Register-Now">
      	Register Now !
      </h2>
      <div class="card-body">
 		<form action="http://localhost/MVCFramework/accountController/serSignup" method="POST">
    	<input type="text" class="form-control ab"  placeholder="First Name" name="firstname">
    	<input type="text" class="form-control ab"  placeholder="Last Name"name="lastname">	   
    	<input type="email" class="form-control ab" placeholder="Email address" name="email">
        <div class="input-group mb-2 mr-sm-2">
    		<div class="input-group-prepend ab">
      			<div class="input-group-text">+49</div>
          </div>
           <input type="text" class="form-control ab" id="inlineFormInputGroupUsername2" placeholder="Phone number" name="phonenumber">
        </div>
        <input type="password" class="form-control ab" id="exampleInputPassword1" placeholder="Password"  name="password">
        <input type="password" class="form-control ab" id="exampleInputPassword2" placeholder="Confirm Password"  name="cpassword">
        <div class="form-check" style="margin-bottom: 4%;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                <span class="Send-me-newsletters-from-Helperland">Send me newsletters from Helperland </span>
              </label> 
        </div>
        <div class="form-check" style="margin-bottom: 6%;">
           <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
               <span class="I-accept-terms-and-conditions-privacy-policy">
                <span class="text-style-1">I accept </span>terms and conditions <span class="text-style-2">&</span>
               privacy policy
                </span>
              </label>
        </div>
        	<img src="<?=ROOT?>/assets/Images/service/layer-20.png" class="img-fluid" alt="Responsive image" style="margin-bottom: 3%;">
        	<button class="btn btn-primary" style="width: 166px; border-radius: 23px;background-color: #1d7a8c; margin-bottom: 6%;" type="submit" name="submit">Get Started</button>
    </form>
  </div>
</div>
</div>
</div>
	
		<div class="text-center" style="margin-top: 1%;">
	<img src="<?=ROOT?>/assets/Images/service/grouparrow.png" class="img-fluid" alt="Responsive image" style="margin-bottom: 3%;">
      </div>
        
    </section>
    
   	
     	 <section class="first-section">
        <div class="first">
            <div class="title1">
                   <h1>How it works</h1>
            </div>
            <div class="row rr">
                <div class="col-lg-6 item1">
                    <div class="head1">Register yourself</div>
                    <div class="para">
                        Provide your basic information to register
                        yourself as a service provider.
                    </div>
                    <div class=" work-link item1">
                        <span class="Read-more-copy-3">Read more <img src="<?=ROOT?>/assets/Images/service/shape-2.png" alt=""></span>
                    </div>
                </div>
                <div class="col-lg-6  image-div">
                    <img src="<?=ROOT?>/assets/Images/service/group-19.png" class="work-image" alt="">
                </div>
            </div>

            <div class="row rr">
                <div class="col-lg-6  image-div">
                    <img src="<?=ROOT?>/assets/Images/service/group-20.png" class="work-image-2" alt="">
                </div>
                <div class="col-lg-6 ">
                    <div class="head1">
                        Get service requests
                    </div>
                    <div class="para">
                        You will get service requests from
                        customes depend on service area and profile.
                    </div>
                    <div class="work-link">
                        <span class="Read-more-copy-3">Read more <img src="<?=ROOT?>/assets/Images/service/shape-2.png" alt=""></span>
                    </div>
                </div>

            </div>
            <div class="row  rr">
                <div class="col-lg-6 item2">
                    <div class="head1">
                        Complete service
                    </div>
                    <div class="para">
                        Accept service requests from your customers
                        and complete your work.
                    </div>
                    <div class="work-link">
                        <span class="Read-more-copy-3">Read more <img src="<?=ROOT?>/assets/Images/service/shape-2.png" alt=""></span>
                    </div>
                </div>
                <div class="col-lg-6 image-div item2" >
                    <img src="<?=ROOT?>/assets/Images/service/group-21.png" class="work-image" alt="">
                </div>
            </div>

        </div>

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
  <!-- FOOTER END -->
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>