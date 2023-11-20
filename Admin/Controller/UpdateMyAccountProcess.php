<?php
include ("../Model/AdminCrude2.php");
$fname=$lname=$age=$gender=$contNo=$email="";
$fnameerr=$lnameerr=$ageerr=$gendererr=$contNoerr=$emailerr=$dataerr="";
$tempFname=$tempLname=$tempAge=$tempGender=$tempContNo=$tempEmail="";
$count=$count2=$count3=0;
session_start();


if(isset($_POST["Update"])){



   
 
$fname=$_POST["fname"];

if(empty($fname)|| !preg_match ("/^[a-zA-z]*$/", $fname) || strlen($fname)<3){

$fnameerr= " Please enter a valid name!";

}
else{
    
    $count++;
    
}
$lname=$_POST["lname"];

if(empty($lname)|| !preg_match ("/^[a-zA-z]*$/", $lname) || strlen($lname)<3){

$lnameerr= " Please enter a valid name!";

}
else{
    
    $count++;
    
}


$age=$_POST["age"];
if(empty("$age")){

    $ageerr= " Please enter age!";
    
    }
    else{
       
        $count++;
        
    }

   
    
    


    $contNo=$_POST["contNo"];
if(empty("$contNo")){

    $contNoerr= " Please enter Contact No!";
    
    }
    else if(strlen($contNo)!=11){
        $contNoerr= " Please enter Valid Contact No!";
    }
    else{
        
        $count++;
        
    }


    $email=$_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr="Please enter a valid email!";
}
else{
    $count++;
    
}


       if($count==5){
        $mydb=new DB();
    $conobj=$mydb->opencon();
  
    $dataerr=$mydb->updateData($_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["contNo"],$_POST["email"],  $_SESSION["uid"],"admininfo",$conobj);

     $_SESSION["fname"]=$_POST["fname"];
    $_SESSION["lname"]=$_POST["lname"];
  $_SESSION["age"]=$_POST["age"];
     
    $_SESSION["contNo"]=$_POST["contNo"];
   $_SESSION["email"]=$_SESSION["email"];
   

            


        }
       
       


}
