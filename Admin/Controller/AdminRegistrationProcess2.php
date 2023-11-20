<?php
include ("../Model/AdminCrude.php");
$aid=$pass=$conPass="";
$aiderr=$passerr=$conPasserr=$dataerr="";

$count=$count2=0;

session_start();


if(isset($_POST["Add"])){
 



    $pass=$_POST["password"];
    $uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

    if(empty($pass) || !$uppercase || !$lowercase || !$number  || strlen($pass) < 8 ){

        $passerr= "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character!";
        
        }
        else{
            $count++;
           
        }

        $conPass=$_POST["conPass"];
        if($conPass != $pass  || empty($conPass)){
            $conPasserr="Confirm Password have not matched!";
            $count++;
        }
        else{
            $count++; 
        }
   
        if($count==2){
        
            $mydb=new DB();
            $conobj=$mydb->opencon();
           $dataerr= $mydb->InsertData($_SESSION["fname"],$_SESSION["lname"],$_SESSION["age"],$_SESSION["gender"],$_SESSION["contNo"],$_SESSION["email"],$pass,"admininfo",$conobj);
            $mydb->closecon($conobj);
    
         
            
           }


}
