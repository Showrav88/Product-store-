<?php 
include ("../Model/OtherCrude.php");
echo '<img src="../Images/logo.png" width="100" height="80">';

   echo '<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">';
$searchInfo=$searcherr=$count=$count2="";
if(isset($_POST['View'])){


    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->fetchData($conobj, "stockreport");


   
        echo '<h2 align="center"> Stock Report</h2>';
        echo '<table border="2" align="center"';
        if($mydata->num_rows > 0)
        {          while($row=$mydata->fetch_assoc())
            {
                    echo "<tr> <td>";
                
                   echo "Product name    : ".$row["proname"]."</br>";
                   echo "Quantity        : ".$row["quantity"]."</br>";
                   echo "Price           : ".$row["price"]."</br>";
                   echo "Catagory        : ".$row["catagory"]."</br>";
                   echo "Product Id      : ".$row["proid"]."</br>";
                  
                 

                  

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
    
    $mydata=$mydb->searchRecord($conobj, "stockreport",$searchInfo);
    
    echo '<h2 align="center"> Stock Report</h2>';
    echo '<table border="2" align="center"';
    if($mydata->num_rows > 0)
        {         $count2++; 
            
            while($row=$mydata->fetch_assoc())
            {
                    echo "<tr> <td>";
                
                    echo "Product name    : ".$row["proname"]."</br>";
                    echo "Quantity        : ".$row["quantity"]."</br>";
                    echo "Price           : ".$row["price"]."</br>";
                    echo "Catagory        : ".$row["catagory"]."</br>";
                    echo "Product Id      : ".$row["proid"]."</br>";
                  

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