
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
              <?php linkCSS("assets/css/servicehistory.css"); ?>

    </head>
  
    <body>
    
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

$query="select * from servicerequest "; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>



  <tr>
            <td class="a"><span class="serviceid"><?php echo $array[1];?></span></td>
            <td class="a" id="abc"><div class="chosendate"> 
                    <img src="<?=ROOT?>/assets/Images/userdashboard/calculator.png" alt=""> 31/03/2018 
                  </div>
                  <div  class="datevalue"><?php echo $array[4];?></div></td>
        <td class="a"><span>
                    <img class="hat" src="<?=ROOT?>/assets/Images/userdashboard/hat.png" alt="">
                  </span> 
                  <span class="serpro" ><?php if($array[18]=="0"){
                   }
                  else{
                    ?> 
                      <?php echo $array[18];  ?>
                    <?php 
                  }
                  ?></span> 
                  
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
      <td><span><?php echo $array[2];?></span> </td>      
      <td>
        <button class="btn"data-toggle="modal" data-target="#exampleModal5" ><img src="<?=ROOT?>/assets/Images/userdashboard/edit.png" style="height: 25px;"></button>
        <button class="btn" ><img src="<?=ROOT?>/assets/Images/userdashboard/delete.png" style="height: 25px;"></button>
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
         </div> <!-- 3nd card -->
         <div class="tab-pane fade third" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            
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
        
        <p class="h7">Service Id: <span id="serviceid"></span></p>
        <p class="h7">Extras: <span id="extras"></span></p>
        <p class="h7">Net Amount: <span id="totalcost"></span></p>
        <p class="h7">Service Address: <span id="seradd"></span></p>
        <p class="h7">Billing Address: <span id="billing"></span></p>
        <p class="h7">Phone number: <span id="phone"></span></p>
        <p class="h7">Email-Address: <span id="email"></span></p>
        <p class="h7">Comments</p>
        <p class="h7">I have pets</p>
          
    </div>
    
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
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
      <input type="text" class="form-control"id="streetname" placeholder="First name">
    </div>
    <div class="col">
      <label for="house">House Number</label>
      <input type="text" class="form-control" id="house" placeholder="Last name">
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <label for="postal">Postal Code</label>
      <input type="number" class="form-control" id="postal" placeholder="Last name">
    </div>
    <div class="col">
      <label for="city">City</label>
      <input type="text" class="form-control" id="house" placeholder="Last name">
    </div>
  </div>
    


  
 <label class="mt-3" for="phonee" style="margin-bottom: -10px;">Phone Number</label>
<div class="row mt-3" id="phonee">

  <div class="col-md-3">

    <input type="text" name=""  class="form-control"disabled="" placeholder="+49">
  </div>

  <div class="col" style="margin-left: -29px;">
    <input type="number" name=""  class="form-control"placeholder="Phone number">
  </div>
</div>


  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-primary cancelrequest" style="width: 100%;background-color: #146371;">Edit</button>
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
  

});

</script>
    </body>
</html>
