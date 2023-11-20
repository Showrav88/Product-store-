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

function FetchData($conn,$tablename)
{
    $sqlstr="SELECT * FROM $tablename";
   $results= $conn->query($sqlstr);
return $results;

}





function searchRecord($conn,$tablename,$proid)
{
$sqlstr="SELECT * FROM $tablename WHERE proid='$proid'";
$results=$conn->query($sqlstr);
return $results;
}

function searchTransections($conn,$tablename,$id)
{
$sqlstr="SELECT * FROM $tablename WHERE id='$id'";
$results=$conn->query($sqlstr);
return $results;
}






function closecon($conn){
    $conn->close();
}

}



?>