<?php
  include '../dbh.php';

class authCode
{
    // property declaration

    public $creationtime =0;

    public $_LIFESPAN=600;
    
    public $codeLength=6;
    // method declaration
    
    
    

    public function generateCode() {
        $code=null;
        for ($i=0; $i<8;$i++){
        	$num=mt_rand(0,9);
        	$code .= $num;

        }
        
        $creationtime=time();
        $_LIFESPAN=$creationtime+$_LIFESPAN;
     	return $code;
    }

    public function sendCode($db, $username, $type) {
		
		if ($type=='employee'){
		    
		
		$result=mysqli_query($db, "SELECT e_Phone FROM employee WHERE e_Username='$username'");
		
    
        
        $obj=mysqli_fetch_object($result);
        
        $PhoneNum=$obj->e_Phone;
         $code=$this->generateCode();
        mysqli_query($db, "UPDATE employee SET e_AuthCode='$code' WHERE e_Username='$username'");
		}
		
		else{//admin
		    		
		$result=mysqli_query($db, "SELECT admin_Phone FROM admins WHERE admin_Username='$username'");
		
    
        
        $obj=mysqli_fetch_object($result);
        
        $PhoneNum=$obj->admin_Phone;
        
        
         $code=$this->generateCode();
         mysqli_query($db, "UPDATE admins SET admin_AuthCode='$code' WHERE admin_Username='$username'");
		}//end admin
		
		
		
		
        $carriers = array("@tmomail.net", "@messaging.sprintpcs.com", "txt.att.net","@vtext.com");
        
        if($PhoneNum=='6462991966'){
            $address=$PhoneNum.$carriers[1];

            
        }
        elseif($PhoneNum=='9082854869'){
            $address=$PhoneNum.$carriers[2];
        
            
        }
        elseif($PhoneNum=='2017254717'){
            $address=$PhoneNum.$carriers[3];
            
        }
        elseif($PhoneNUum=='9736521900') {
            $address=$PhoneNum.$carriers[0];
        }
        else{
            $address=$PhoneNum.$carriers[0];
        }
            
           
        
        
		$to      = $address;
		$subject = 'Authorization Code:';
		$message = $code;
		
		
		mail($to, $subject, $message);
		
	    print '<script>alert("Code Sent!");</script>';

    }

    public function verifyCode($db, $username, $userCode, $type) {
        
        if ($type=='employee'){
            
        
    	$result = mysqli_query($db, "SELECT e_AuthCode FROM employee WHERE e_Username='$username'");
    
    	if ($result->fetch_object()->e_AuthCode== $userCode){
    	mysqli_query($db, "UPDATE employee SET e_AuthCode='0' WHERE e_Username='$username'");
    	return 1;	
    	}
    	else{
    	return 0;
    	}
    	// admin 
        }
        
        
        
        else{
        $result = mysqli_query($db, "SELECT admin_AuthCode FROM admins WHERE admin_Username='$username'");
    
    	if ($result->fetch_object()->admin_AuthCode== $userCode){
    	
    	mysqli_query($db, "UPDATE admin SET admin_AuthCode='0' WHERE admin_Username='$username'");
    	
    	return 1;	
    	
    	    
    	}
    	else{
    	return 0;
    	}
    	
    
        }
    

    }
    
    
    public function passwordReset($db, $username){
        
		
		$result=mysqli_query($db, "SELECT e_Phone FROM employee WHERE e_Username='$username'");
		
    
        
        $obj=mysqli_fetch_object($result);
        
        $PhoneNum=$obj->e_Phone;
         $code=$this->generateCode();
        mysqli_query($db, "UPDATE employee SET e_Password='$code' WHERE e_Username='$username'");
		
		
	
        $carriers = array("@tmomail.net", "@messaging.sprintpcs.com", "txt.att.net","@vtext.com");
        
        if($PhoneNum=='6462991966'){
            $address=$PhoneNum.$carriers[1];

            
        }
        elseif($PhoneNum=='9082854869'){
            $address=$PhoneNum.$carriers[2];
        
            
        }
        elseif($PhoneNum=='2017254717'){
            $address=$PhoneNum.$carriers[3];
            
        }
        elseif($PhoneNUum=='9736521900') {
            $address=$PhoneNum.$carriers[0];
        }
        else{
            $address=$PhoneNum.$carriers[0];
        }
            
           
        
        
		$to      = $address;
		$subject = 'Temporary Password.';
		$message = "Please change your password upon login: ". $code;
		
		
		mail($to, $subject, $message);
		
	    print '<script>alert("Code Sent!");</script>';
    }
    
    public function sendMessage($db, $username, $adminmessage){
        
		
		$result=mysqli_query($db, "SELECT e_Phone FROM employee WHERE e_Username='$username'");
		
    
        
        $obj=mysqli_fetch_object($result);
        
        $PhoneNum=$obj->e_Phone;
        
       
		
		
	
        $carriers = array("@tmomail.net", "@messaging.sprintpcs.com", "txt.att.net","@vtext.com");
        
        if($PhoneNum=='6462991966'){
            $address=$PhoneNum.$carriers[1];

            
        }
        elseif($PhoneNum=='9082854869'){
            $address=$PhoneNum.$carriers[2];
        
            
        }
        elseif($PhoneNum=='2017254717'){
            $address=$PhoneNum.$carriers[3];
            
        }
        elseif($PhoneNUum=='9736521900') {
            $address=$PhoneNum.$carriers[0];
        }
        else{
            $address=$PhoneNum.$carriers[0];
        }
            
           
        
        
		$to      = $address;
		$subject = 'From Admin';
		$message = $adminmessage;
		
		
		mail($to, $subject, $message);
		
	    print '<script>alert("Message Sent!");</script>';
    }
    
    
    
    public function setLifeSpan($numOfMins) {
        $timespan=$numOfMins *60;    
        
        $_LIFESPAN=$creationtime+$timespan;
    }
    
    public function setCodeLength($newLength) {
  
        $codeLength=$newLength;
      
    }
    
    
    
            
}







