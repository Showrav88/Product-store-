<?php
include ("../Model/OtherCrude.php");

if($_POST["proid"]=="")
{   
    
    echo "empty input";
}
else{
    

    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchRecord($conobj, "stockreport",$_POST["proid"]);
    echo '<table border="2" align="center"';
    if($mydata->num_rows > 0)
    {

    
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


    }
    else{
        echo "no data found";
    }
    

}


?>