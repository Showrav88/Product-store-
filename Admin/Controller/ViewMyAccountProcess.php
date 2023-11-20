<?php
echo '<img src="../Images/logo.png" width="100" height="80">';

echo '<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">';
session_start();


        echo '<h2 align="center">Account Information</h2>';
        echo '<table border="2" align="center"';
        
                        echo "<tr> <td>";     
                   echo "Fisrt name: ".  $_SESSION["fname"]."</br>";
                   echo "Last name : ". $_SESSION["lname"]."</br>";
                   echo "Age       : ". $_SESSION["age"]."</br>";
                   echo "Gender    : ". $_SESSION["gen"]."</br>";
                   echo "Contact No: ". $_SESSION["contNo"]."</br>";
                   echo "Email     : ". $_SESSION["email"]."</br>";
                   echo "Admin id  : ". $_SESSION["uid"]."</br>";

                  

                   echo "</td></td>";
                
            
            echo "</table>";

?>