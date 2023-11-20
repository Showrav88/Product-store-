<?php 
include ("../Model/ManagerCrude.php");
echo '<img src="../Images/logo.png" width="100" height="80">';

   echo '<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">';
$searchInfo=$searcherr=$count=$count2="";
if(isset($_POST['View'])){
    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->fetchData($conobj, "managerinfo");


   
        echo '<h2 align="center"> Manager Information</h2>';
        echo '<table border="2" align="center"';
        if($mydata->num_rows > 0)
        {          while($row=$mydata->fetch_assoc())
            {
                    echo "<tr> <td>";
                
                   echo "Fisrt name         : ".$row["fname"]."</br>";
                   echo "Last name          : ".$row["lname"]."</br>";
                   echo "Age                : ".$row["age"]."</br>";
                   echo "Gender             : ".$row["gen"]."</br>";
                   echo "Contact No         : ".$row["contNo"]."</br>";
                   echo "Email              : ".$row["email"]."</br>";
                   echo "Education Level    : ".$row["edu"]."</br>";
                   echo "Experince          : ".$row["exp"]."</br>";
                   echo "Present Address    : ".$row["preadd"]."</br>";
                   echo "Permanent Address  : ".$row["peradd"]."</br>";
                   echo "Manager Id         : ".$row["mid"]."</br>";
                  

                echo "</td></tr>";
                    
            }
            echo "</table>";
           

    
    
}
    
    
}


if(isset($_POST["Search"])){
    $searchInfo=$_POST["search"];

   
if(empty($searchInfo)){
    echo '<h3 align="center"><strong>Nothing can found!</strong></h3>'; 
}
else{
    $count++;
}
    if($count==1){
        $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchManager($conobj, "managerinfo",$searchInfo);
    
    echo '<h2 align="center"> Manager Information</h2>';
    echo '<table border="2" align="center"';
    if($mydata->num_rows > 0)
        {         $count2++; 
            
            while($row=$mydata->fetch_assoc())
            {
                    echo "<tr> <td>";
                
                    echo "Fisrt name         : ".$row["fname"]."</br>";
                    echo "Last name          : ".$row["lname"]."</br>";
                    echo "Age                : ".$row["age"]."</br>";
                    echo "Gender             : ".$row["gen"]."</br>";
                    echo "Contact No         : ".$row["contNo"]."</br>";
                    echo "Email              : ".$row["email"]."</br>";
                    echo "Education Level    : ".$row["edu"]."</br>";
                    echo "Experince          : ".$row["exp"]."</br>";
                    echo "Present Address    : ".$row["preadd"]."</br>";
                    echo "Permanent Address  : ".$row["peradd"]."</br>";
                    echo "Manager Id         : ".$row["mid"]."</br>";

                echo "</td></tr>";
                    
            }
            echo "</table>";
           
            
        }
        echo "</table>";

        if($count2==0 ){
            echo '<h3 align="center"><strong>Nothing can found!</strong></h3>'; 
        }
    }

    
}



?>