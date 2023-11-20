<?php
include ("../Model/AdminCrude.php");
session_start();

if(!isset($_SESSION["uid"])){
  header("location: ../View/AdminLogin.php");
}
  
$mydb=new DB();
$conobj=$mydb->opencon();

$mydata=$mydb->searchAdmin($conobj, "admininfo",$_SESSION["uid"]);


if($mydata->num_rows > 0)
    {        
        
        while($row=$mydata->fetch_assoc())
        {
               
            
          $_SESSION["fname"]=$row["fname"];
          $_SESSION["lname"]=$row["lname"];
          $_SESSION["age"]=$row["age"];
          $_SESSION["gen"]=$row["gen"];
          $_SESSION["contNo"]=$row["contNo"];
          $_SESSION["email"]=$row["email"];
              

            
                
        }
      
       
        
    }
    

$uname=$wmsg="";

     $wmsg="Hey ". $_SESSION["fname"]." Welcome!";
     



?>