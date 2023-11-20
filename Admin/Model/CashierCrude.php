<?php

class DB
{
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="easystore";
      
        
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
        echo "cant create connection object".$conn->connect_error;
        }
        return $conn;
    }
function InsertData($fname,$lname,$age,$gender,$contNo,$email,$pass,$tablename,$conn)


{

  
    $sqlstr="INSERT INTO $tablename (fname,lname,age,gen,contNo,email,pass) VALUES 
    ('$fname','$lname',$age,'$gender',$contNo,'$email','$pass')";
    
    if($conn->query($sqlstr)===TRUE)
    {
    $dataerr= "Data Added";
    }
    else{
       $dataerr= "Data Can't Added".$conn->error;
    }
    return $dataerr;
}

function FetchData($conn,$tablename)
{
    $sqlstr="SELECT * FROM $tablename";
   $results= $conn->query($sqlstr);
return $results;

}




function searchCashier($conn,$tablename,$cid)
{
$sqlstr="SELECT * FROM $tablename WHERE cid='$cid'";
$results=$conn->query($sqlstr);
return $results;
}





function closecon($conn){
    $conn->close();
}

}



?>