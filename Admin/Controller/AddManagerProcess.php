<?php
include ("../Model/ManagerCrude.php");
$fname=$lname=$age=$gender=$contNo=$email=$pass=$conPass=$edu=$exp=$preadd=$peradd="";
$fnameerr=$lnameerr=$ageerr=$gendererr=$contNoerr=$emailerr=$fileerr=$miderr=$passerr=$conPasserr=$eduerr=$experr=$preadderr=$peradderr=$dataerr="";
$count=$count2=0;


if(isset($_POST["Add"])){
 
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

$edu=$_POST["edu"];

if(empty($edu) || strlen($edu)<3){

$eduerr= " Please enter a valid Education Level!";

}
else{
    
    $count++;
    
}

$exp=$_POST["exp"];
if(empty("$exp")){

    $experr= " Please enter  your Experience Year!";
    
    }
    else{
       
        $count++;
        
    }

    $preadd=$_POST["preadd"];

if(empty($preadd) || strlen($preadd)<3){

$preadderr= " Please enter a valid Present Address!";

}
else{
    
    $count++;
    
}

$peradd=$_POST["peradd"];

if(empty($peradd) || strlen($peradd)<3){

$peradderr= " Please enter a valid Permanent Address!";

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

   
    
    if(isset($_POST["gender"])){
       
       
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
            
        }
        else{
            $count++; 
        }



if ($_FILES["myfile"]["type"]=="image/jpeg" ){
    
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Images/".$fname.$lname."Manager".date("Y-m-d").".jpg")){
    $count++;
    
}
else{
    $fileerr="Please choose a jpg file!";
}
}
else{
    $fileerr="Please choose a jpg file!";
}


       if($count==13){
        $mydb=new DB();
        $conobj=$mydb->opencon();
       $dataerr= $mydb->InsertData($fname,$lname,$age, $_POST["gender"],$contNo,$email,$pass,$edu,$exp,$preadd,$peradd,"managerinfo",$conobj);
        $mydb->closecon($conobj);



     
        
       }


}
