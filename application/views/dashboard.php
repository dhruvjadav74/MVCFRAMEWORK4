
<?php

    session_start();

    if(!isset($_SESSION['username'])){
        echo "you are logged out";
        header('location:http://localhost/MVCFramework/accountController/login');

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- BOOTSTRAP CSS AND PLUGINS-->
        <link rel="stylesheet"
              href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
              crossorigin="anonymous" />
              <?php linkCSS("assets/css/dashboard.css"); ?>
              <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    </head>
  
    <body>
      
    <?php include "components/headerlog.php"; ?>
    <div class="container-fluid welcome1">
        <div class="text-center">
          <span class="Welcome-Sandip">
           Welcome
          <span class="text-style-1"><?php echo $_SESSION['username'];?>!</span>
        </span>
        </div>
      </div>
    
        <div class="page-content page-container-fluid" id="page-content">
    <div class="padding">
        <div class="row d-flex justify-content-center">
            <div class="col-md-auto" style="width:150%;">
                <div class="card p-3 " style="background-color: transparent; border:none;width:150%;">
                    <div class="row">
                        <div class="col-md-2 text-center" >
                            <div class="nav flex-column nav-pills abc " id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color: #146371 !important;">
                            <a class="nav-link active" data-toggle="pill" href="#v-pills-home" role="tab"  style="color: white !important;">Dashboard</a> 
                                <a class="nav-link" data-toggle="pill" href="#v-pills-profile" role="tab" style="color: white !important;">Service History</a> 
                                <a class="nav-link" data-toggle="pill" href="#v-pills-messages" role="tab" style="color: white !important;">Service Schedule</a> 
                                <a class="nav-link" data-toggle="pill" href="#v-pills-settings" role="tab" style="color: white !important;">Faviourite Pros</a> 
                                <a class="nav-link" data-toggle="pill" href="#v-pills-payment" role="tab" style="color: white !important;">Invoices</a>
                                <a class="nav-link info" data-toggle="pill" href="#v-pills-account" role="tab" style="color: white !important;">My info</a></div>
                                
                        </div>
                        <div class="col-md-6" >
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    
                                     <table id="example" class="display" style="width:100%">
    <thead>
        <tr >
            <th>Service Id</th>
            <th>Service Date</th>
            <th>Service Provider</th>
            <th>Payment</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

<?php
$host='localhost';
    $username='root';
    $password='';
    $dbname = "company";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
$userid=$_SESSION['user_id'];
$query="select * from servicerequest where UserId='$userid'"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>



  <tr>
            <td class="a"><span class="serviceid"><?php echo $array[1];?></span></td>
            <td class="a" id="abc"><div class="chosendate"> 
                    <img src="<?=ROOT?>/assets/Images/userdashboard/calculator.png" alt=""  style="margin-right:0.5rem"><?php
                  $str=$array[4];
                  $a=explode(" ",$str);
                  echo $a[0];
                  ?>
                  </div>
                  <div  class="datevalue">
                  <img src="<?=ROOT?>/assets/Images/userdashboard/layer-712.jpg" alt="" style="margin-right:0.5rem"><?php
                  $str=$array[4];
                  $a=explode(" ",$str);
                  echo $a[1];
                  ?></div></td>
        <td class="a">
          
        <?php if($array[18]!=0) : ?>
  <div class="row">
             <div class="col-md-4">
              <img class="hat" src="<?=ROOT?>/assets/Images/userdashboard/hat.png" alt="">
             </div>
             
                 <div class="col-md-auto">
                  <div class="row" style="margin-top:5px;">
                   <span class="serpro h6" style=""> 
                   
                  <?php

                  $host='localhost';
                  $username='root';
                  $password='';
                  $dbname = "company";
                  $conn=mysqli_connect($host,$username,$password,"$dbname");
                  if(!$conn)
                      {
                        die('Could not Connect MySql Server:' .mysql_error());
                      }
              $id = $array[18];
              $query1="SELECT * FROM registration where user_id='$id'";
              $result1 = mysqli_query($conn,$query1);
              $cust = mysqli_fetch_array($result1);
              echo $cust['username'];              
                  
                   
                   ?>
                   </span> <br>
                </div>
    <div class="row" style="margin-top:-5px;">
      <fieldset class="rating" style="">
    <input type="radio" id="fstar5" name="ratingf" value="5"/><label class = "full" for="fstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="fstar4half" name="ratingf" value="4.5" /><label class="half" for="fstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="fstar4" name="ratingf" value="4" /><label class = "full" for="fstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="fstar3half" name="ratingf" value="3.5" /><label class="half" for="fstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="fstar3" name="ratingf" value="3" /><label class = "full" for="fstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="fstar2half" name="ratingf" value="2.5" /><label class="half" for="fstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="fstar2" name="ratingf" value="2" /><label class = "full" for="fstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="fstar1half" name="ratingf" value="1.5" /><label class="half" for="fstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="fstar1" name="ratingf" value="1" /><label class = "full" for="fstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="fstarhalf" name="ratingf" value="0.5" /><label class="half" for="fstarhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
<span id="ratefinal" class="h6" style="margin-top: 0.5rem;"></span>
    </div>
  </div>
</div> 
<?php else : ?>
  <?php endif; ?>
                </td>
      <td class="a text-center"><span class="dollar">€<?php echo $array[13];?></span></td>
      <td>
           <button type="button" class="btn btn-primary reschedule" data-toggle="modal" data-target="#exampleModal2" style="border-radius: 17px;background-color: #146371;border-color:#6da9b5">Reschedule</button>
           <buttontype="button" class="btn btn-primary cancelreq" data-toggle="modal" data-target="#exampleModal1" style=" border-radius: 17px;background-color: #FF7B6D;border-color:#6da9b5">Cancel</button>
    </td>
            
      

</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</tbody>
    </table>
    
                                 </div>
   
                                
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <table id="example1" class="display" style="width:100%">
    <thead>
        <tr >
            <th>Service Id</th>
            <th>Service Date</th>
            <th>Service Provider</th>
            <th>Status</th>
            <th>Rate SP</th>
        </tr>
    </thead>
    <tbody>

<?php
$host='localhost';
    $username='root';
    $password='';
    $dbname = "company";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    $userid=$_SESSION['user_id'];
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }

$query="select * from servicerequest where UserId='$userid'"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>



  <tr>
            <td class="a"><span class="serviceid"><?php echo $array[1];?></span></td>
            <td class="a" id="abc"><div class="chosendate"> 
                    <img src="<?=ROOT?>/assets/Images/userdashboard/calculator.png" alt=""  style="margin-right:0.5rem"><?php
                  $str=$array[4];
                  $a=explode(" ",$str);
                  echo $a[0];
                  ?>
                  </div>
                  <div  class="datevalue">
                  <img src="<?=ROOT?>/assets/Images/userdashboard/layer-712.jpg" alt="" style="margin-right:0.5rem"><?php
                  $str=$array[4];
                  $a=explode(" ",$str);
                  echo $a[1];
                  ?></div></td>
        <td class="a">
        <?php if($array[18]!=0) : ?>
  <div class="row">
             <div class="col-md-4">
              <img class="hat" src="<?=ROOT?>/assets/Images/userdashboard/hat.png" alt="">
             </div>
             
                 <div class="col-md-auto">
                  <div class="row" style="margin-top:5px;">
                   <span class="serpro h6" style=""> 
                   
                  <?php

                  $host='localhost';
                  $username='root';
                  $password='';
                  $dbname = "company";
                  $conn=mysqli_connect($host,$username,$password,"$dbname");
                  if(!$conn)
                      {
                        die('Could not Connect MySql Server:' .mysql_error());
                      }
              $id = $array[18];
              $query1="SELECT * FROM registration where user_id='$id'";
              $result1 = mysqli_query($conn,$query1);
              $cust = mysqli_fetch_array($result1);
              echo $cust['username'];              
                  
                   
                   ?>
                   </span> <br>
                </div>
    <div class="row" style="margin-top:-5px;">
      <fieldset class="rating" style="">
    <input type="radio" id="fstar5" name="ratingf" value="5"/><label class = "full" for="fstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="fstar4half" name="ratingf" value="4.5" /><label class="half" for="fstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="fstar4" name="ratingf" value="4" /><label class = "full" for="fstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="fstar3half" name="ratingf" value="3.5" /><label class="half" for="fstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="fstar3" name="ratingf" value="3" /><label class = "full" for="fstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="fstar2half" name="ratingf" value="2.5" /><label class="half" for="fstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="fstar2" name="ratingf" value="2" /><label class = "full" for="fstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="fstar1half" name="ratingf" value="1.5" /><label class="half" for="fstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="fstar1" name="ratingf" value="1" /><label class = "full" for="fstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="fstarhalf" name="ratingf" value="0.5" /><label class="half" for="fstarhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
<span id="ratefinal" class="h6" style="margin-top: 0.5rem;"></span>
    </div>
  </div>
</div> 
<?php else : ?>
  <?php endif; ?>
                </td>
      <td class="a text-center"><span class="dollar"><?php if($array[21]==1){
        ?><button class="btn btn-success" >Completed</button><?php
      }
      elseif($array[21]==2){
        ?><button class="btn btn-danger" >Cancelled</button><?php
      }
      else{

      }?></span></td>
      <td>     
           <button type="button" class="btn btn-primary submitfeedback"data-toggle="modal" data-target="#exampleModal3" style=" border-radius: 17px;background-color: #6da9b5;border-color:#6da9b5 ">Rate SP</button>
    </td>
            
      

</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</tbody>
    </table>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <p>For what reason would it be advisable for me to think</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <p>For what reason would me to think about business content?</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <p>For what reason would me to think about business content?</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="container card shadow d-flex justify-content-center mycard">
     <!-- nav options -->
     <ul class="nav nav-pills1 shadow-sm mb-3" id="pills-tab" role="tablist">
         <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">My Details</a> </li>
         <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Address</a> </li>
         <li class="nav-item"> <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Change Password</a> </li>
     </ul> <!-- content -->
     <div class="tab-content" id="pills-tabContent p-3">
         <!-- 1st card -->
         <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
             <div class="row">
               <div class="col-md-4">

                 <div class="form-group">
                       <label for="exampleInputEmail1">First Name</label>
                          <input type="text" class="form-control" id="first">
                  </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label for="exampleInputEmail1">Last Name</label>
                          <input type="text" class="form-control" id="second">
                  </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label for="exampleInputEmail1">Email Address</label>
                          <input type="email" class="form-control" id="email1" disabled="">
                  </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-4">
                    <label for="examplephone">Phone Number</label>
                     <div class="input-group ">
                       <div class="input-group-prepend">
                         <div class="input-group-text">+49</div>
                   </div>
                    <input type="number" class="form-control" name="phonenumber" id="phone1"placeholder="Mobile number">
              </div>
                 </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label for="birthday">Date Of Birth</label>
                       <input type="date" class="form-control"id="birthday" name="birthday">
                  </div>
               </div>
               
             </div>
              <p><hr/></p>
              <div class="row">
                <div class="col-md-4">
              <div class="form-group">
                   <label for="exampleFormControlSelect1">My Preferred Language</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                     <option>English</option>
                       <option>Hindi</option>
      
    </select>
  </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
   <div class="form-group">
     <button class="btn" name="third"  type="submit" style="background-color:#1D7A8C;border-radius: 20px;border: 1px solid rgba(255, 255, 255, 0.5);height: 40px;width: 100px; color: aliceblue;">Save</button>
 </div>
 </div>
</div>

         </div> <!-- 2nd card -->
         <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
         <table id="example4"class="display" style="width:100%">
    <thead>
        <tr>
            <th>Addresses</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php
$host='localhost';
    $username='root';
    $password='';
    $dbname = "company";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
$userid=$_SESSION['user_id'];
$query="select * from useraddress where UserId='$userid'"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>



  <tr>
      <td><span class="h6">Address: </span><span class="addresss"><?php echo $array[2];?></span>
      <span ><?php echo $array[3];?></span> <br>
      <span class="h6">Phone Number: </span><span><?php echo $array[9];?></span>
    </td>      
      <td>
        <button class="btn editt"data-toggle="modal" data-target="#exampleModal5" ><img src="<?=ROOT?>/assets/Images/userdashboard/edit.png" style="height: 25px;"></button>
        <button class="btn deletee" data-toggle="modal" data-target="#exampleModal6"  ><img src="<?=ROOT?>/assets/Images/userdashboard/delete.png" style="height: 25px;"></button>
      </td>

</tr>
<?php endwhile; ?>

<?php endif; ?>
<?php mysqli_free_result($result); ?>
</tbody>
    </table>
         </div> <!-- 3nd card -->
         <div class="tab-pane fade third" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div class = "alert alert-success passwordchange col-md-4">
         <p>Password has been updated</p>
      </div>
      <div class = "alert alert-danger passwordnotmatching col-md-4">
         <p>Incorrect Password</p>
      </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPass">Old Password</label>
    <input type="password" class="form-control" id="exampleInputPass" placeholder="Old Password">
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPass1">New Password</label>
    <input type="password" class="form-control" id="exampleInputPass1" placeholder="New Password">
  </div>
  <div class="form-group col-md-4">
    <label for="exampleInputPass2">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPass2" placeholder="Confirm Password">
  </div>
  
  <div class="row">
  <div class="col-md-4">
   <div class="form-group">
     <button class="btn save_pass" type="submit" style="background-color:#1D7A8C;border-radius: 20px;border: 1px solid rgba(255, 255, 255, 0.5);height: 40px;width: 100px; color: aliceblue;">Save</button>
 </div>
 </div>
</div>
</form>
         </div>
     </div>
 </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title h5">Service Details</h4>
    </div>
    <div class="modal-body">
        <span class="h5"id="service"></span>
        <p class="h6">Duration: <span id="hours"></span> Hrs</p>
        <p><hr/></p>
        <p class="h7">Service Id: <span id="serviceid"></span></p>
        <p class="h7">Extras: <span id="extras"></span></p>
        <p class="h7">Net Amount: <span id="totalcost"></span></p>
        <p><hr/></p>
        <p class="h7">Service Address: <span id="seradd"></span></p>
        <p class="h7">Billing Address: <span id="billing"></span></p>
        <p class="h7">Phone number: <span id="phone"></span></p>
        <p class="h7">Email-Address: <span id="email"></span></p>
        <p><hr/></p>
        <p class="h7">Comments</p>
        <p class="h7 notpet">
        <img class="img-fluid" src="<?=ROOT?>/assets/Images/userdashboard/cancel.png" alt="" style="width:30px;height:30px;">  
        I have pets</p>
        <p class="h7 haspet">
        <img class="img-fluid" src="<?=ROOT?>/assets/Images/userdashboard/checked.png" alt="" style="width:30px;height:30px;">  
        I have pets</p>
    </div>
    
    <div class="modal-footer justify-content-start">
    <button type="button" class="btn btn-primary reschedule" data-toggle="modal" data-target="#exampleModal2" style="border-radius: 17px;background-color: #146371;border-color:#6da9b5">Reschedule</button>
      <button type="button" class="btn btn-primary" data-dismiss="modal"style=" border-radius: 17px;background-color: #FF7B6D;border-color:#6da9b5">Close</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Service Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
        <p class="h5">Why you want to cancel the service request?</p>
      <div class="form-group purple-border">
         <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
</div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary cancelrequest" style="width: 100%;background-color: #146371;">Cancel Now</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reschedule Service & Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
        <p class="h5">Select New Date & Time</p>
        <div class="row">
             <div class="col-md-6">
                <div class="form-group">
                <input type="date" name="dateofservice" id="dateofservice" style="height:38px;">
                </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <input type="time" id="dateoftime" name="dateoftime" style="height:38px;">
                </div>
           </div>
          </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary reschedulerequest" style="width: 100%;background-color: #146371;">Update</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" >Edit Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
  <div class="row">
    <div class="col">
       <label for="streetname">Street Name</label>
      <input type="text" class="form-control"id="AddressLine1" placeholder="Street name">
    </div>
    <div class="col">
      <label for="house">House Number</label>
      <input type="text" class="form-control" id="AddressLine2" placeholder="House number">
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <label for="postal">Postal Code</label>
      <input type="number" class="form-control" id="po" placeholder="Postal Code">
    </div>
    <div class="col">
      <label for="city">City</label>
      <input type="text" class="form-control" id="ci" placeholder="City">
    </div>
  </div>
    


  
 <label class="mt-3" for="phonee" style="margin-bottom: -10px;">Phone Number</label>
<div class="row mt-3" id="phonee">

  <div class="col-md-3">

    <input type="text" name=""  class="form-control"disabled="" placeholder="+49">
  </div>

  <div class="col" style="margin-left: -29px;">
    <input type="number" name=""  class="form-control"placeholder="Phone number" id="mo">
  </div>
</div>


  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-primary editaddressuser" style="width: 100%;background-color: #146371;">Edit</button>
</div>
    </div>
  </div>
</div>

 
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">Delete Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

      <p>Do you really want to delete these record? This process cannot be undone.</p>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger deleteaddressuser">Delete</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate Service Provider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="row">
  <div class="col-md-2">
    <img class="hat" src="<?=ROOT?>/assets/Images/userdashboard/hat.png" alt="">
  </div>
  <div class="col">
    <div class="row">
      <span class="serprooo h5" style=""> Sandip Patel
                  </span> <br>
    </div>
    <div class="row">
      <fieldset class="rating">
    <input type="radio" id="fstar5" name="ratingf" value="5" /><label class = "full" for="fstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="fstar4half" name="ratingf" value="4.5" /><label class="half" for="fstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="fstar4" name="ratingf" value="4" /><label class = "full" for="fstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="fstar3half" name="ratingf" value="3.5" /><label class="half" for="fstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="fstar3" name="ratingf" value="3" /><label class = "full" for="fstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="fstar2half" name="ratingf" value="2.5" /><label class="half" for="fstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="fstar2" name="ratingf" value="2" /><label class = "full" for="fstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="fstar1half" name="ratingf" value="1.5" /><label class="half" for="fstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="fstar1" name="ratingf" value="1" /><label class = "full" for="fstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="fstarhalf" name="ratingf" value="0.5" /><label class="half" for="fstarhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
<span id="ratefinal" class="h6" style="margin-top: 0.5rem;margin-left:0.5rem;"></span>
    </div>
  </div>
</div>
                  

        <p class="h5">Rate your service provider</p>

<p><hr/></p>
   <div class="row">
    <div class="col">
    
  <p class="h6" style="margin-top: 0.5rem;">On time arrival:</p>
<fieldset class="rating">

    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>

</div>
</div>
<div class="row">
    <div class="col">
    
  <p class="h6" style="margin-top: 0.5rem;">Friendly:</p>
<fieldset class="rating1">
    <input type="radio" id="1star5" name="rating1" value="5" /><label class = "full" for="1star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="1star4half" name="rating1" value="4.5" /><label class="half" for="1star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="1star4" name="rating1" value="4" /><label class = "full" for="1star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="1star3half" name="rating1" value="3.5" /><label class="half" for="1star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="1star3" name="rating1" value="3" /><label class = "full" for="1star3" title="Meh - 3 stars"></label>
    <input type="radio" id="1star2half" name="rating1" value="2.5" /><label class="half" for="1star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="1star2" name="rating1" value="2" /><label class = "full" for="1star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="1star1half" name="rating1" value="1.5" /><label class="half" for="1star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="1star1" name="rating1" value="1" /><label class = "full" for="1star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="1starhalf" name="rating1" value="0.5" /><label class="half" for="1starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>

</div>
</div>
<div class="row">
    <div class="col">
    
  <p class="h6" style="margin-top: 0.5rem;">Quality of Service:</p>
<fieldset class="rating2">
    <input type="radio" id="11star5" name="rating2" value="5" /><label class = "full" for="11star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="11star4half" name="rating2" value="4.5" /><label class="half" for="11star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="11star4" name="rating2" value="4" /><label class = "full" for="11star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="11star3half" name="rating2" value="3.5" /><label class="half" for="11star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="11star3" name="rating2" value="3" /><label class = "full" for="11star3" title="Meh - 3 stars"></label>
    <input type="radio" id="11star2half" name="rating2" value="2.5" /><label class="half" for="11star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="11star2" name="rating2" value="2" /><label class = "full" for="11star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="11star1half" name="rating2" value="1.5" /><label class="half" for="11star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="11star1" name="rating2" value="1" /><label class = "full" for="11star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="11starhalf" name="rating2" value="0.5" /><label class="half" for="11starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
</div>
</div>





    <form method="post">
        <p class="h5" style="margin-top: 1rem;">Feedback on service provider</p>
      <div class="form-group purple-border">
         <textarea class="form-control" id="feedback" rows="3"></textarea>
</div>
    </form>
          </div>
       
      <div class="modal-footer justify-content-start">
        <button type="button" class="btn btn-primary feedbacksub" style="background-color: #146371;color: white;">Submit</button>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>
    jQuery(document).ready(function($) {

    $(".passwordchange").hide();
    $(".notpet").hide();
    $(".haspet").hide();
    $(".passwordnotmatching").hide();
    $('#example').DataTable({
        searching: false,
        responsive: true,
        "autoWidth": false,
    });
    $('#example1').DataTable({
        searching: false,
        responsive: true,
        "autoWidth": false,
    });
    $('#example4').DataTable({
        searching: false,
        responsive: true,
        "autoWidth": false,
    });
    var table = $('#example').DataTable();
    $('#example tbody').on('click', '.a', function () {
        
        var currentRow=$(this).closest("tr");
        var col1=currentRow.find(".serviceid").text();
        
        $(".username span").text(col1);
     
        $("#myModal").modal("show");

          var id = col1;
// ajax
$.ajax({
type:"POST",
url: "http://localhost/MVCFramework/accountController/ajaxfetchrecorduser",
data: { id: id },
dataType: 'json',
success: function(res){
  console.log(res);
$('#service').html(res.ServiceStartDate);
$('#hours').html(res.ServiceHours);
$('#serviceid').html(res.ServiceRequestId);
$('#extras').html(res.Extra);
$('#totalcost').html(res.TotalCost);
$('#seradd').html(res.AddressLine1);
$('#billing').html(res.AddressLine1);
$('#phone').html(res.Mobile);
$('#email').html(res.Email);
if(res.HasPets==0){
  $(".notpet").show();
  $(".haspet").hide();
}
else{
  $(".notpet").hide();
  $(".haspet").show();
}
    
}
});
       
  
});


    var cancelreqid='';
    var reschedulereqid='';
$('#example tbody').on('click', '.cancelreq', function () {       
     var currentRow=$(this).closest("tr");
     var col1=currentRow.find(".serviceid").text();
     cancelreqid=col1;
    });


$('#example tbody').on('click', '.reschedule', function () {       
     var currentRow=$(this).closest("tr");
     var col1=currentRow.find(".serviceid").text();
     reschedulereqid=col1;
     var col2=currentRow.find(".datevalue").text();
     var d =col2;
     var dateofservice = d.split(' ')[0];
     var dateoftime=d.split(' ')[1];
     $("input[type=date]").val(dateofservice);
     $("input[type=time]").val(dateoftime);
    });
    
    $('.info').click(function(e){
    e.preventDefault();
    var id=<?php echo $_SESSION['user_id']; ?>;
    
    $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/fetchuserdata",
     data:{
      'id':id,
     },
     dataType: 'json',
     success:function(response){
      
      $("#first").val(response.username);
      $("#second").val(response.lastname);
      $("#email1").val(response.email);
      $("#phone1").val(response.mobile);
      $("#birthday").val(response.dateofbirth);
     }
   });
   
    })
    var address='';
    var deleteaddress='';
    $('#example4 tbody').on('click', '.editt', function () { 
      var currentRow=$(this).closest("tr");
     var col1=currentRow.find(".addresss").text();
     address=col1;

     
     $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/fetchuseraddressdata",
     data:{
      'address':address,
     },
     dataType: 'json',
     success:function(response){
       
      $("#AddressLine1").val(response.AddressLine1);
      $("#AddressLine2").val(response.AddressLine2);
      $("#po").val(response.PostalCode);
      $("#ci").val(response.City);
      $("#mo").val(response.Mobile);
      deleteaddress=response.AddressId;
    
     }
   });
    })
    var serpro1='';
    
    $('#example1 tbody').on('click', '.submitfeedback', function () { 
      var currentRow=$(this).closest("tr");
     var col1=currentRow.find(".serpro").text();
     serpro1=jQuery.trim(col1);
     $('.serprooo').text(serpro1); 
    })
  
    $('.editaddressuser').click(function(e){
    e.preventDefault();
    var add=deleteaddress;
    var ch_address=document.getElementById("AddressLine1").value
    var ch_address1=document.getElementById("AddressLine2").value
    var ch_po=document.getElementById("po").value
    var ch_ci=document.getElementById("ci").value
    var ch_mo=document.getElementById("mo").value
  
    $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/edit",
     data:{
      'add':add,
      'ch_address':ch_address,
      'ch_address1':ch_address1,
      'ch_po':ch_po,
      'ch_ci':ch_ci,
      'ch_mo':ch_mo,
     },
     success:function(response){
      if(jQuery.trim(response)=="success"){
          $("#exampleModal5").modal("hide");
      }
     }
   });
    })

     var delete_add='';
    $('#example4 tbody').on('click', '.deletee', function () { 
      var currentRow=$(this).closest("tr");
     var col1=currentRow.find(".addresss").text();
     delete_add=col1;
    })

    $('.deleteaddressuser').click(function(e){
    e.preventDefault();
    var addressdeleted=delete_add;
    $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/delete_address",
     data:{
      'addressdeleted':addressdeleted,
     },
     success:function(response){
      if(jQuery.trim(response)=="success"){
          $("#exampleModal6").modal("hide");
      }
     }
   });
    })
    $('.save_pass').click(function(e){
    e.preventDefault();
    oldpass  = document.getElementById("exampleInputPass").value
    newpass  = document.getElementById("exampleInputPass1").value
    conpass=document.getElementById("exampleInputPass2").value
    var id=<?php echo $_SESSION['user_id']; ?>;
    if(newpass==conpass){
      $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/change_pass",
     data:{
      'oldpass':oldpass,
      'newpass':newpass,
      'id':id
     },
     success:function(response){
      if(jQuery.trim(response)=="success"){
        $(".passwordchange").show();
        $(".passwordnotmatching").hide();
      }
      else{
        $(".passwordnotmatching").show();
      }
     }
   });
    }
    else{
      $(".passwordnotmatching").show();
    }
    })

    $('.reschedulerequest').click(function(e){
    e.preventDefault();
    dateofservice  = document.getElementById("dateofservice").value
    dateoftime  = document.getElementById("dateoftime").value
    ch_res=reschedulereqid;
    
    $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/ajaxresuser",
     data:{
      'ch_res':ch_res,
       'dateofservice':dateofservice,
       'dateoftime':dateoftime,
     },
     success:function(response){
        if(jQuery.trim(response)=="success"){
          $("#exampleModal2").modal("hide");
      }
     else{
         alert("Request Already Cancelled");
     }
     }
   });
    })

 $('.cancelrequest').click(function(e){
    e.preventDefault();
    var finalcancel=jQuery.trim(cancelreqid);
      $.ajax({
     type:"POST",
     url:"http://localhost/MVCFramework/accountController/ajaxdeleterecorduser",
     data:{
       'cancel':true,
       'finalcancel':finalcancel,
     },
     success:function(response){
      console.log(response);
      if(jQuery.trim(response)=="success"){
          $("#exampleModal1").modal("hide");
      }
     else{
         alert("Request Already Cancelled");
     }


     }
   });
})
var ontime=0;
  var friendly=0;
  var quality=0;
  var totalrate='';
        var total='';
         $('.rating').change(function() {
            var a=$("input[type='radio'][name='rating']:checked").val();
            ontime=parseFloat(a);
            total=(ontime+friendly+quality)/3;
            totalrate=parseInt(total);
                       $("input[name=ratingf][value=" + totalrate + "]").prop('checked', true);
                       $('#ratefinal').html(totalrate);
          
       });
        $('.rating1').change(function() {
          var b=$("input[type='radio'][name='rating1']:checked").val();
               friendly=parseFloat(b);
                total=(ontime+friendly+quality)/3;
                totalrate=parseInt(total);
                       $("input[name=ratingf][value=" + totalrate + "]").prop('checked', true);
                $('#ratefinal').html(totalrate);
        });
         $('.rating2').change(function() {
          var c=$("input[type='radio'][name='rating2']:checked").val();
                  quality=parseFloat(c);
                   total=(ontime+friendly+quality)/3;
                   totalrate=parseInt(total);
                       $("input[name=ratingf][value=" + totalrate + "]").prop('checked', true);
                       $('#ratefinal').html(totalrate);
            })

});

</script>
    </body>
</html>
