<?php
$fname=$lname=$age=$pass=$gender=$contNo=$email="";
$fnameerr=$lnameerr=$ageerr=$passerr=$gendererr=$contNoerr=$emailerr=$fileerr=$dataerr="";
$count=0;
session_start();

if(isset($_POST["Next"])){
 
$fname=$_POST["fname"];

if(empty($fname)|| !preg_match ("/^[a-zA-z]*$/", $fname) || strlen($fname)<3){

$fnameerr= " Please enter a valid name!";

}
else{
    $_SESSION["fname"]=$fname;
    $count++;
    
}
$lname=$_POST["lname"];

if(empty($lname)|| !preg_match ("/^[a-zA-z]*$/", $lname) || strlen($lname)<3){

$lnameerr= " Please enter a valid name!";

}
else{
    $_SESSION["lname"]=$lname;
    $count++;
    
}


$age=$_POST["age"];
if(empty("$age")){

    $ageerr= " Please enter age!";
    
    }
    else{
        $_SESSION["age"]=$age;
        $count++;
        
    }

   
    
    if(isset($_POST["gender"])){
       
        $_SESSION["gender"]=$_POST["gender"];
        $count++;
    }
    else{
       
        $gendererr=" Please select gender!";
    }


    $contNo=$_POST["contNo"];
if(empty("$contNo")){

    $contNoerr= " Please enter Contact No!";
    
    }
    else if(strlen($contNo)!=11){
        $contNoerr= " Please enter Valid Contact No!";
    }
    else{
        $_SESSION["contNo"]=$contNo;
        $count++;
        
    }


    $email=$_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr="Please enter a valid email!";
}
else{
    $count++;
    $_SESSION["email"]=$email;
}
if ($_FILES["myfile"]["type"]=="image/jpeg" ){
    
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Images/".$fname.$lname."Admin".date("Y-m-d").".jpg")){
    $count++;
    
}
else{
    $fileerr="Please choose a jpg file!";
}
}
else{
    $fileerr="Please choose a jpg file!";
}

       if($count==7){
           header("location: ../View/AdminRegistrationPage2.php");
       }


}
