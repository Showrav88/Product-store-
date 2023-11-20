<?php
include ("../Model/AdminCrude.php");
$aid=$pass=$welcomename="";
$aiderr=$passerr=$loginerr="";
$count=$count2=$flag=0;
session_start();
if(isset($_SESSION["uid"])){
    header("location: ../View/AdminPage.php");
}

if(isset($_POST["Login"])){
 
$aid=$_POST["aid"];

if(empty($aid) ){

$aiderr= " Please enter a valid Admin Id!";

}
else{
    $_SESSION["uid"]=$aid;
    $count++;
    
}

$pass=$_POST["pass"];

if(empty($pass)){

$passerr= " Please enter a valid Password!";

}
else{
    $_SESSION["pass"]=$pass;
  
    $count++;
    
}
echo $count;

       if($count==2){
        $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydata=$mydb->loginSearch("admininfo",$conobj,$aid,$pass);
    if($mydata->num_rows > 0)
    
    {
        $flag=1;
        while($row=$mydata->fetch_assoc())
        {
     
            $_SESSION["uname"] =$row["fname"];
           
         
        }
    }
}
        if($flag==1){
           
            
            if(!empty($_POST["remember"])) {
                setcookie ("aid",$_POST["aid"],time()+ 3600);
                setcookie ("password",$_POST["pass"],time()+ 3600);
                
            } 
    
            header("location: ../View/AdminPage.php");
            
          
        }
        else{
            $loginerr="Wrong User Id or Password!! Login Failed!!";
          
        }
        

           
       


}
?>