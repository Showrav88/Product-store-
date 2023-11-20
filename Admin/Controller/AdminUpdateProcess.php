<?php 
include ("../Model/AdminCrude2.php");
$fname=$lname=$age=$gender=$contNo=$email=$dataerr=$searchinfo="";


if(isset($_POST["search"]))
{


    
    if(empty($_POST["search"])){
        $dataerr= "No data found!";
    }
    else{
       
       $searchinfo=$_POST["search"];
        $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydata=$mydb->searchAdmin($conobj, "admininfo",$_POST["search"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
           $fname=$row["fname"];
            $lname=$row["lname"];
            $age=$row["age"];
           
            $contNo="0".$row["contNo"];
            $email=$row["email"];
            $aid=$row["aid"];
         
        }
    

    }
    else{
        $dataerr= "No data found!";
    }
}
    


}



if(isset($_POST["update"]))

{
  
    $mydb=new DB();
    $conobj=$mydb->opencon();
  
    $dataerr=$mydb->updateData($_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["contNo"],$_POST["email"], $_POST["aid"],"admininfo",$conobj);
    
}

if(isset($_POST["delete"]))
{
    

    $mydb=new DB();
    $conobj=$mydb->opencon();
    $dataerr=$mydb->deleteData("admininfo", $_POST["aid"],$conobj);


}

?>