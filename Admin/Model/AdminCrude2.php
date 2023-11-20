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


function searchAdmin($conn,$tablename,$aid)
{
$sqlstr="SELECT * FROM $tablename WHERE aid=$aid";
$results=$conn->query($sqlstr);
return $results;
}
function updateData($fname,$lname,$age,$contNo,$email,$aid,$tablename,$conn)
{

    $sqlstr="UPDATE $tablename SET fname='$fname', lname='$lname', age=$age, contNo=$contNo,email='$email' WHERE aid=$aid";
    
    if($conn->query($sqlstr))

    {
       
       
        $dataerr= "Updated!";
        return $dataerr;
    }
    else
    {
        $dataerr= "Not updated!".$conn->error;
        return $dataerr;
    }

}

function changePassword($aid,$pass,$tablename,$conn)
{

    $sqlstr="UPDATE $tablename SET pass='$pass'  WHERE aid=$aid";
    
    if($conn->query($sqlstr))

    {
       
       
        $dataerr= " Password Updated!";
        return $dataerr;
    }
    else
    {
        $dataerr= " Password Not updated!".$conn->error;
        return $dataerr;
    }

}


function deleteData($tablename,$aid,$conn)
{
    $sqlstr="DELETE FROM $tablename WHERE aid=$aid";
    if($conn->query($sqlstr))
    {
        $dataerr="Deleted";
        return $dataerr;
    }
    else{
        $dataerr ="Not deleted".$conn->error;
        return $dataerr;
    }
}



function closecon($conn){
    $conn->close();
}

}



?>