<?php



class userModel extends database {

    public function userSignup($firstname,$lastname,$email,$password,$phonenumber){


        if($this->Query("Insert INTO user(FirstName,LastName, Email, Password,Mobile) 
        VALUES (?,?,?,?,?)", [ $firstname,$lastname,$email,$password,$phonenumber])){
            return true;
        }
        else{
            return false;
        }
    }

    public function up($file,$name,$email,$phonenumber,$message){
            
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="C:/xampp/htdocs/MVCframework/upload/";
 
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 
 
 if(move_uploaded_file($file_loc,$folder.$final_file)){
 if($this->Query("INSERT INTO contactus(UploadFileName,file_type,file_size,Name, Email, PhoneNumber,Message) VALUES(?,?,?,?,?,?,?)" , [$final_file,$file_type,$new_size,$name,$email,$phonenumber,$message])){
 
  echo "File sucessfully upload";
        
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
}

}
?>
  
