<?php

class accountController extends framework {


    public function __construct(){

        $this->helper("link");
        
    }

    public function index(){

        $this->view("homepage");
    }

    public function register(){

        $this->view("regis");
    }
    public function login(){

        $this->view("login");
    }
    
    public function profile(){

        $this->view("profile");
    }

    public function serviceProfile(){

        $this->view("serviceprofile");
    }

    public function logout(){

        $this->view("logout");
    }
    public function activate(){

        $this->view("activate");
    }

    public function resetpassword(){

        $this->view("reset_password");
    }
    public function recovermail(){

        $this->view("recover_email");
    }

    public function  pricesPage(){
        $this->view("prices");
    }

    public function contactUs(){
        $this->view('contact');
    }
    public function aboutPage(){
        $this->view('about');
    }
    public function faqPage(){
        $this->view('faq');
    }

    public function serviceSignUp(){
        $this->view('servicesignup');
    }

    public function Service_Book(){
        $this->view('servicebook');
    }

    public function Server_address(){
        $this->view('server');
    }

    public function User_dashboard(){
        $this->view('dashboard');
    }

  
    
    
   

    public function signup(){
        $accountModel= $this->model('accountModel');
        $username= $this->input('firstname');
         $lastname= $this->input('lastname');
         $email= $this->input('email');
         $password= $this->input('password');
         $cpassword = $this->input('cpassword');
         $phonenumber= $this->input('phonenumber');
                    if($accountModel->userSignup($username,$lastname,$email,$password,$phonenumber,$cpassword)){
                        echo "success";
                  } 
                  else{
                      "no success";
                  }
    
            } 
            public function serSignup(){
                $accountModel= $this->model('accountModel');
                $username= $this->input('firstname');
                 $lastname= $this->input('lastname');
                 $email= $this->input('email');
                 $password= $this->input('password');
                 $cpassword = $this->input('cpassword');
                 $phonenumber= $this->input('phonenumber');
                            if($accountModel->serviceSignUp($username,$lastname,$email,$password,$phonenumber,$cpassword)){
                                echo "success";
                          } 
                          else{
                              "no success";
                          }
            
                    } 
            public function userLogin(){
                $accountModel= $this->model('accountModel');
                 $email= $this->input('email');
                 $password= $this->input('password');
                            if($accountModel->userlogin($email,$password)){
                                echo "success";
                          } 
                          else{
                              "no success";
                          }
            
                    } 

                    public function repassword(){
                        $accountModel= $this->model('accountModel');
                         $email= $this->input('email');
                                    if($accountModel->Reset($email)){
                                        echo "success";
                                  } 
                                  else{
                                      "no success";
                                  }
                    
                            }
                            
                            public function rePass(){
                                $accountModel= $this->model('accountModel');
                                
                               $password= $this->input('password');
                                $cpassword = $this->input('cpassword');
                                           if($accountModel->Repass( $password, $cpassword)){
                                               echo "success";
                                         } 
                                         else{
                                             "no success";
                                         }
                            
                            }

                            public function hey(){
                                $userModel= $this->model('userModel');
                                 $file= $this->input('file');
                                 $name= $this->input('name');
                                 $email= $this->input('email');
                                 $message= $this->input('message');
                                 $phonenumber= $this->input('phonenumber');
                                            if($userModel->up($file,$name,$email,$phonenumber,$message)){
                                              echo "success";
                                          } 
                                
                                    } 

                                    public function PostalCode(){
                                        $accountModel= $this->model('accountModel');
                                        $postalcode= $this->input('postalcode');
                                    
                                         if($accountModel->pincode($postalcode)){
                                             
                                         }
                                          
                                    }

                                    public function Scplan(){
                                        $accountModel= $this->model('accountModel');
                                       $dateofservice  =$_POST['dateofservice'];
                                       $servicehours= $_POST['servicehours'];
                                      $comment= $_POST['comment'];
                                       $pets=$_POST['pets'];
                                     if($accountModel->plans($dateofservice,$servicehours,$comment,$pets)){
                                        
                                    }
                                    }

                                    public function Add(){
                                        $accountModel= $this->model('accountModel');
                                         $street = $_POST['street'];
                                         $house =  $_POST['house'];
                                         $postal=$_POST['postal'];
                                        $mobile = $_POST['Mobile'];
                                        $city = $_POST['city'];
                                    
                                        if($accountModel->addressdetails($street,$house,$postal,$mobile,$city)){
                                          
                                        }
                                    }

                                    public function Mail(){
                                        $accountModel= $this->model('accountModel');
                                        $ch_address=$_POST['ch_address'];
                                        $ch_serviceprovider=$_POST['ch_serviceprovider'];
                                        $ch_dateofservice =$_POST['ch_dateofservice'];
                                        $ch_dateoftime =$_POST['ch_dateoftime'];
                                        $ch_servicehours=$_POST['ch_servicehours'];
                                        $ch_comment=$_POST['ch_comment'];
                                        $ch_pets=$_POST['ch_pets'];
                                        $ch_extraservices=$_POST['ch_extraservices'];
                                        $ch_extrahours=$_POST['ch_extrahours'];
                                        $ch_payment=$_POST['ch_payment'];
                                        $ch_postalcode=$_POST['ch_postalcode'];
                                        if($accountModel->MailBook($ch_address,$ch_serviceprovider, $ch_dateofservice,$ch_dateoftime, $ch_servicehours, $ch_comment,$ch_pets,$ch_extraservices, $ch_extrahours,$ch_payment,$ch_postalcode)){
                                          
                                        }
                                    
                                    }
                                    
                                    public function ajaxfetchrecorduser(){
                                        $accountModel= $this->model('accountModel');
                                        $id=$_POST['id'];
                                        if($accountModel->fetchuserrecord($id)){
                                          
                                        } 
                                    }

                                    public function ajaxdeleterecorduser(){
                                        $accountModel= $this->model('accountModel');
                                        $finalcancel=$_POST['finalcancel'];
                                        if($accountModel->cancelreq($finalcancel)){
                                          
                                        } 
                                    }

                                    public function ajaxresuser(){
                                        $accountModel= $this->model('accountModel');
                                        $dateofservice=$_POST['dateofservice'];
                                        $dateoftime=$_POST['dateoftime'];
                                        $ch_res=$_POST['ch_res'];
                                        if($accountModel->resrecord($dateofservice,$dateoftime,$ch_res)){
                                          
                                        }
                                    }

                                    public function fetchuserdata(){
                                        $accountModel= $this->model('accountModel');
                                        $id=$_POST['id'];
                                        if($accountModel->mydetails($id)){
                                          
                                        }
                                    }

                                    public function fetchuseraddressdata(){
                                        $accountModel= $this->model('accountModel');
                                        $address=$_POST['address'];
                                        if($accountModel->addressdetails1($address)){
                                          
                                        }
                                       
                                    }
                                    public function edit(){
                                        $accountModel= $this->model('accountModel');
                                        $add=$_POST['add'];
                                        $ch_address=$_POST['ch_address'];
                                     $ch_address1=$_POST['ch_address1'];
                                         $ch_po=$_POST['ch_po'];
                                      $ch_ci=$_POST['ch_ci'];
                                       $ch_mo=$_POST['ch_mo'];
                                        if($accountModel->editadd($add,$ch_address,$ch_address1,$ch_po,$ch_ci,$ch_mo)){
                                          
                                        }
                                       
                                    }


                                    public function delete_address(){
                                        $accountModel= $this->model('accountModel');
                                        $addressdeleted=$_POST['addressdeleted'];
                                        if($accountModel->addressdelete($addressdeleted)){
                                          
                                        }
                                    }

                                    public function change_pass(){
                                        $accountModel= $this->model('accountModel');
                                        $oldpass=$_POST['oldpass'];
                                        $newpass=$_POST['newpass'];
                                        $id = $_POST['id'];
                                        if($accountModel->ch_pass($oldpass,$newpass,$id)){
                                          
                                        }
                                    }

        }
?>