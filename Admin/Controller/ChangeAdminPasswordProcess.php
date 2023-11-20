<?php
include ("../Model/AdminCrude2.php");
$tempPass=$newPass=$pass="";
$tempPasserr=$newPasserr=$submiterr="";
$count=0;
session_start();


if(isset($_POST["Submit"])){

    
   
 
$tempPass=$_POST["tempPass"];

if(empty($tempPass)){

$tempPasserr= " Please enter Password!";

}


else{
    
    $count++;
    
}
$newPass=$_POST["newPass"];

$uppercase = preg_match('@[A-Z]@', $newPass);
$lowercase = preg_match('@[a-z]@', $newPass);
$number    = preg_match('@[0-9]@', $newPass);

    if(empty($newPass) || !$uppercase || !$lowercase || !$number  || strlen($newPass) < 8 ){

        $newPasserr= "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character!";
        
        }
        else{
            $count++;
           
        }


       if($count==2){
        $mydb=new DB();
        $conobj=$mydb->opencon();
      
        $submiterr=$mydb->changePassword( $_SESSION["uid"],$newPass,"admininfo",$conobj);
    


     
        
       }


}
