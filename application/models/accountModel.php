<?php

class accountModel extends database {


    public function userSignup($username,$lastname,$email,$password,$phonenumber,$cpassword ){

        $server="localhost";
        $user="root";
        $password="";
        $db="company";

      $con =mysqli_connect($server,$user,$password,$db);

      if(isset($_POST['submit'])){
      $username = mysqli_real_escape_string($con,$_POST['firstname']);
      $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $phonenumber = mysqli_real_escape_string($con,$_POST['phonenumber']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

      $token=bin2hex(random_bytes(15));



    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

    $emailquery = "select * from registration where email='$email'";
    $query=mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount >0){
        echo "email already registered";
    }
    else{
        if($password==$cpassword){
                    $insertquery="INSERT INTO registration(username, lastname, email, mobile, password, cpassword,token,status,UserTypeId) VALUES ('$username','$lastname','$email','$phonenumber', '$pass', '$cpass','$token','inactive','0') ";
        
                    $iquery=mysqli_query($con,$insertquery);

                    if($iquery){
                       $last_id=mysqli_insert_id($con);
                       if($last_id){
                           $code=rand(1,99999);
                           $user_id=$code.$last_id;
                            $query2="UPDATE registration SET user_id='".$user_id."' WHERE id='".$last_id."'";
                            $res=mysqli_query($con,$query2);
                       }
                       $subject="sample mail";
                        $body="hey my name is dhruv http://localhost/MVCFramework/accountController/activate?token=$token";
                        $sender_email="From: jadav.dhruv.74@gmail.com";
                        if(mail($email,$subject,$body,$sender_email)){
                            $_SESSION['msg'] ="check you mail to activate your account $email";
                            header('location:http://localhost/MVCFramework/accountController/login');
                        }
                        else{
                            echo "email sending failed";
                        }
                    }
                    else{
                        ?>
                        <script>
                    
                    alert("no success");
                            </script>
                    
                            <?php
                    }
        
                }
        else{
            echo "password not matching";
        }
    }



    }
    }

    public function serviceSignUp($username,$lastname,$email,$password,$phonenumber,$cpassword ){

        $server="localhost";
        $user="root";
        $password="";
        $db="company";

      $con =mysqli_connect($server,$user,$password,$db);

      if(isset($_POST['submit'])){
      $username = mysqli_real_escape_string($con,$_POST['firstname']);
      $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $phonenumber = mysqli_real_escape_string($con,$_POST['phonenumber']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

      $token=bin2hex(random_bytes(15));



    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

    $emailquery = "select * from registration where email='$email'";
    $query=mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount >0){
        echo "email already registered";
    }
    else{
        if($password==$cpassword){
                    $insertquery="INSERT INTO registration(username, lastname, email, mobile, password, cpassword,token,status,UserTypeId) VALUES ('$username','$lastname','$email','$phonenumber', '$pass', '$cpass','$token','inactive','1') ";
        
                    $iquery=mysqli_query($con,$insertquery);

                    if($iquery){
                       
                       $subject="sample mail";
                        $body="hey my name is dhruv http://localhost/MVCFramework/accountController/activate?token=$token";
                        $sender_email="From: jadav.dhruv.74@gmail.com";
                        if(mail($email,$subject,$body,$sender_email)){
                            $_SESSION['msg'] ="check you mail to activate your account $email";
                            header('location:http://localhost/MVCFramework/accountController/login');
                        }
                        else{
                            echo "email sending failed";
                        }
                    }
                    else{
                        ?>
                        <script>
                    
                    alert("no success");
                            </script>
                    
                            <?php
                    }
        
                }
        else{
            echo "password not matching";
        }
    }



    }
    }


    public function userlogin($email,$password){
    
        
        $server="localhost";
        $user="root";
        $password="";
        $db="company";

      $con =mysqli_connect($server,$user,$password,$db);       
                            
        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
        
            $email_search="select * from registration where email='$email' and status='active' and UserTypeId='0'";
            $query=mysqli_query($con,$email_search);
        
            $email_count=mysqli_num_rows($query);

            $email_search1="select * from registration where email='$email' and status='active' and UserTypeId='1'";
            $query1=mysqli_query($con,$email_search1);
            $email_count1=mysqli_num_rows($query1);
        
            if($email_count){
                $email_pass= mysqli_fetch_assoc($query);
                $dbpass=$email_pass['password'];
                $_SESSION['username']=$email_pass['username'];
                $_SESSION['email']=$email_pass['email'];
                $_SESSION['user_id']=$email_pass['user_id'];
            
                $pass_decode=password_verify($password,$dbpass);
        
                if($pass_decode){
                    echo"login successful";
                    ?>
                
        
                    <script>
                        location.replace("<?php echo BASEURL; ?>/accountController/User_dashboard");
                    </script>
                    <?php
                }
                else{
                    echo "password incorrect";
                }
        
            }
            elseif($email_count1){
                $email_pass1= mysqli_fetch_assoc($query1);
                $dbpass1=$email_pass1['password'];
                $_SESSION['username']=$email_pass1['username'];
                $pass_decode1=password_verify($password,$dbpass1);
        
                if($pass_decode1){
                    echo"login successful";
                    ?>
                
        
                    <script>
                        location.replace("http://localhost/MVCFramework/accountController/serviceProfile");
                    </script>
                    <?php
                }
                else{
                    echo "password incorrect";
                }
        
            }
            
            else{
                echo "incorrect";
            }
        }
        
    }

    public function Reset($email){
    
    
        $server="localhost";
        $user="root";
        $password="";
        $db="company";

      $con =mysqli_connect($server,$user,$password,$db);    
if(isset($_POST['submit'])){
     $email = mysqli_real_escape_string($con,$_POST['email']);
     
   $emailquery = "select * from registration where email='$email'";
   $query=mysqli_query($con,$emailquery);

   $emailcount = mysqli_num_rows($query);

   if($emailcount){

       $userdata=mysqli_fetch_array($query);
       $username=$userdata['username'];
       $token=$userdata['token'];
                      $subject="Password reset";
                       $body="hi $username click here to reset password http://localhost/MVCFramework/accountController/resetpassword?token=$token";
                       $sender_email="From: jadav.dhruv.74@gmail.com";
                       if(mail($email,$subject,$body,$sender_email)){
                           $_SESSION['msg'] ="check you mail to reset your password $email";
                           header('location:http://localhost/MVCFramework/accountController/login');
                       }
                       else{
                           echo "email sending failed";
                       }
                   }
                   else{
                       echo "no email found";
                   }
    }


    
    }

    public function Repass($password,$cpassword){

        $server="localhost";
        $user="root";
        $password="";
        $db="company";

      $con =mysqli_connect($server,$user,$password,$db); 
        if(isset($_POST['submit'])){
            $newpassword = mysqli_real_escape_string($con,$_POST['password']);
            $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
         if(isset($_POST['submit'])){
             $token=$_GET['token'];
         
          $pass=password_hash($newpassword,PASSWORD_BCRYPT);
          $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
      
          
      
              if($newpassword==$cpassword){
      
                  $updatequery="update registration set password='$pass' where token='$token'";
          
                          $iquery=mysqli_query($con,$updatequery);
      
                          if($iquery){
                             
                           $_SESSION['msg'] ="Your Password has been updated";
                           header('location:http://localhost/MVCFramework/accountController/login');
                          }
                          else{
                              $_SESSION['passmsg'] ="Your Password has not updated";
                           header('location:http://localhost/MVCFramework/accountController/resetpassword');
                          }
              
                      }
                      else{
                          $_SESSION['passmsg'] ="password are not matching;";
                      }
      
          }else{
              echo "no token found";
          }
      }


    }
    
    public function pincode($postalcode){
        if(isset($_POST['postalcode'])){
            $postalcode = strip_tags($_POST['postalcode']);
        
            $con=mysqli_connect("localhost","root","","company");
        
            $sql="select * from registration where UserTypeId='1' and ZipCode='$postalcode'";
            $result=mysqli_query($con,$sql);
            $pincode_count1=mysqli_num_rows($result);
            if($pincode_count1){
                echo "success";
            }
            else{
                echo "failed";
            }
        
        }
           }
	
           public function plans($dateofservice, $servicehours,$comment, $pets){
            if(isset($_POST['dateofservice'])){
            $con=mysqli_connect("localhost","root","","company");
            $dateofservice=$_POST['dateofservice'];
            $user_id=$_SESSION['user_id'];
            $comment=$_POST['comment'];
            $servicehours=$_POST['servicehours'];
            $pets=$_POST['pets'];
            if($pets='on'){
                $pet='1';
              }
              else{
                $pet='0';
              }
            $sql="insert into servicerequest(UserId,ServiceStartDate,ServiceHours,Comments,HasPets) values('$user_id','$dateofservice','$servicehours','$comment','$pet')";
            $result=mysqli_query($con,$sql);
            if($result){
                echo"success";
            }
        }
           }


           public function addressdetails($street,$house,$postal,$mobile,$city){
               
            $con=mysqli_connect("localhost","root","","company");


            if(isset($_POST['addaddresss'])){
             $street = $_POST['street'];
             $house = $_POST['house'];
             $postal=$_POST['postal'];
             $mobile = $_POST['Mobile'];
             $city = $_POST['city'];
             $user_id=$_SESSION['user_id'];

  
             $sql="insert into useraddress(UserId,AddressLine1,City,PostalCode,Mobile) values('$user_id','$street','$city','$postal','$mobile')";
             $result=mysqli_query($con,$sql);
            
             if($result){
                 echo "success";
             }


           }
        
        }

        public function MailBook($ch_address,$ch_serviceprovider){

            $con=mysqli_connect("localhost","root","","company");
            $user_id=$_SESSION['user_id'];
            $ch_address=$_POST['ch_address'];
            $ch_serviceprovider=$_POST['ch_serviceprovider'];
            $ch_dateofservice =$_POST['ch_dateofservice'];
            $ch_dateoftime =$_POST['ch_dateoftime'];
            $ch_servicehours=$_POST['ch_servicehours'];
            $ch_comment=$_POST['ch_comment'];
            $ch_pets=$_POST['ch_pets'];
            $ch_extraservices=$_POST['ch_extraservices'];
            $ch_postalcode=$_POST['ch_postalcode'];
            $ch_extrahours=$_POST['ch_extrahours'];
            $ch_payment=$_POST['ch_payment'];
            $ch_servicestart=$ch_dateofservice." ".$ch_dateoftime;
            $status=0;
            $addressreqid='';
            
            
            $service="insert into servicerequest(UserId,ServiceStartDate,ServiceHours,Comments,HasPets,Extra,ExtraHours,SubTotal,TotalCost,ZipCode,ServiceProviderId,Status) values('$user_id','$ch_servicestart','$ch_servicehours','$ch_comment','$ch_pets','$ch_extraservices','$ch_extrahours',' $ch_payment','$ch_payment','$ch_postalcode','$ch_serviceprovider','$status')";
            $result1=mysqli_query($con,$service);
            if($result1){
                $last_id=mysqli_insert_id($con);
                       if($last_id){
                           $code=rand(1,99999);
                           $service_id=$code.$last_id;
                           $addressreqid=$service_id;
                            $query2="UPDATE servicerequest SET ServiceRequestId='".$service_id."' WHERE id='".$last_id."'";
                            $res=mysqli_query($con,$query2);       
                       }
            }
            $address="select * from useraddress where AddressId='$ch_address'";
            $addressresult=mysqli_query($con,$address);
            $address_count=mysqli_num_rows($addressresult);
            if($address_count){
                $address_pass= mysqli_fetch_assoc($addressresult);
                 $addressline1=$address_pass['AddressLine1'];
                $addressline2=$address_pass['AddressLine2'];
                $addresscity=$address_pass['City'];
                $addresspostal=$address_pass['PostalCode'];
                $addressmobile=$address_pass['Mobile'];
                $email=$_SESSION['email'];
                $seraddress="insert into servicerequestaddress(ServiceRequestId,AddressLine1,City,PostalCode,Mobile,Email) values('$addressreqid','$addressline1','$addresscity','$addresspostal','$addressmobile','$email')";
                $result0=mysqli_query($con,$seraddress);
            }
            if($ch_serviceprovider=='all'){

                $query = "SELECT * FROM registration where UserTypeId='1'"; 
                $result=mysqli_query($con,$query);
                $num=mysqli_num_rows($result);
                if($num>0){
                    while($data=mysqli_fetch_assoc($result)){
                        $email=$data['email'];
                        $subject="Service";
                      $body="One Service has been added";
                     $sender_email="From: jadav.dhruv.74@gmail.com";
                                           if(mail($email,$subject,$body,$sender_email)){
                                            
                                           }
                                           else{
                                               echo "email sending failed";
                                           }
                    }
                    echo $service_id;
                }
            }
                else{
                $query="select * from registration where user_id='$ch_serviceprovider'";
                $result=mysqli_query($con,$query);
    
                            if($result){
                           $email_pass= mysqli_fetch_assoc($result);
                           $email=$email_pass['email'];
                           $subject="Service";
                           $body="One Service has been added";
                           $sender_email="From: jadav.dhruv.74@gmail.com";
                           if(mail($email,$subject,$body,$sender_email)){
                            echo $service_id;
                           }
                           else{
                               echo "email sending failed";
                           }
                        }
                }
                    
    
            }

            public function fetchuserrecord($id){
                $host='localhost';
    $username='root';
    $password='';
    $dbname = "company";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
$id = $_POST['id'];
$query="SELECT *
FROM servicerequest
INNER JOIN servicerequestaddress
ON servicerequest.ServiceRequestId=servicerequestaddress.ServiceRequestId where servicerequestaddress.ServiceRequestId='$id'";
$result = mysqli_query($conn,$query);
$cust = mysqli_fetch_array($result);
if($cust) {
echo json_encode($cust);
}
            
            }

            public function cancelreq($finalcancel){
                $con=mysqli_connect("localhost","root","","company");
                $finalcancel=$_POST['finalcancel'];
              
              
                                  $email_search="select * from servicerequest where ServiceRequestId='$finalcancel'";
                                  $query=mysqli_query($con,$email_search);
                      
                           $email_count=mysqli_num_rows($query);
                                    if($email_count){
                                               $query="UPDATE servicerequest SET Status='2' WHERE ServiceRequestId='$finalcancel'";
                                               $result=mysqli_query($con,$query);
              
                                   if($result){
                                           echo "success";
                                       }
                                       else{
                                           echo "failed";
                                       }
                                   }
                                   else{
                                       echo "failed";
                                   }
            }

            public function resrecord($dateofservice,$dateoftime,$ch_res){
                $con=mysqli_connect("localhost","root","","company");
                $dateofservice=$_POST['dateofservice'];
                $dateoftime=$_POST['dateoftime'];
                $ch_res=$_POST['ch_res'];
                $ch_time=$dateofservice." ".$dateoftime;
                $email_search="select * from servicerequest where ServiceRequestId='$ch_res'";

                                  $query=mysqli_query($con,$email_search);
                      
                           $email_count=mysqli_num_rows($query);
                                    if($email_count){
                                               $query="UPDATE servicerequest SET ServiceStartDate='$ch_time' WHERE ServiceRequestId='$ch_res'";
                                               $result=mysqli_query($con,$query);
              
                                   if($result){
                                           echo "success";
                                       }
                                       else{
                                           echo "failed";
                                       }
                                   }
                                   else{
                                       echo "failed";
                                   }
                
            }

            public function mydetails($id){
                $host='localhost';
                $username='root';
                $password='';
                $dbname = "company";
                $conn=mysqli_connect($host,$username,$password,"$dbname");
                if(!$conn)
                {
                die('Could not Connect MySql Server:' .mysql_error());
                }
                $id = $_POST['id'];
                $query="select * from registration where user_id='$id'";
                $result = mysqli_query($conn,$query);
                $cust = mysqli_fetch_array($result);
                if($cust) {
                echo json_encode($cust);
                }

            }

                }
                

    

?>