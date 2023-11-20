<?php 
include ("../Model/CommentCrude.php");

echo '<img src="../Images/logo.png" width="100" height="80">';

   echo '<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">';

$searchInfo=$searcherr=$count=$count2="";
if(isset($_POST['View'])){


    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->fetchData($conobj, "cashiertoadmin");


   
        echo '<h2 align="center">Cashier Comment</h2>';
        echo '<table border="2" align="center"';
        if($mydata->num_rows > 0)
        {          while($row=$mydata->fetch_assoc())
            {
                    echo "<tr> <td>";
                
                   echo "Name        : ".$row["name"]."</br>";
                   echo "Email       : ".$row["email"]."</br>";
                   echo "Comment     : ".$row["comment"]."</br>";
                   
                  

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
    
    $mydata=$mydb->searchComment($conobj, "cashiertoadmin",$searchInfo);
    
    echo '<h2 align="center"> Cashier Comment</h2>';
    echo '<table border="2" align="center"';
    if($mydata->num_rows > 0)
        {         $count2++; 
            
            while($row=$mydata->fetch_assoc())
            {
                    echo "<tr> <td>";
                
                    echo "Name        : ".$row["name"]."</br>";
                    echo "Email       : ".$row["email"]."</br>";
                    echo "Comment     : ".$row["comment"]."</br>";
                    

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