<?php

include "../Controller/UpdateMyAccountProcess.php";



?>

<html>
    <head>
    <img src="../Images/logo.png" width="100" height="80" >

<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
<?php echo '<h2 align="center"><u>Update Account</u></h2>'  ?>
        <?php echo '<h4 align="center">All Values are Required(*)</h4>'?>
    </head>
    <body>
    <div id="box">
        <form action=""  method="post" enctype="multipart/form-data" onsubmit="return myform2()">
        <?php echo '<table align="center">'?>
              <tr>
                  <td> <label for="fname"><p id="labels" >First Name:</p></label></td>
                  <td> <input type="text" id="fname" name="fname"  placeholder="Enter your first name" onkeyup="onclicktext()" value="<?php echo  $_SESSION["fname"]; ?>" ><sup><strong>*</strong></sup></td>
                 <td> <?php
                  echo "<strong>".$fnameerr."</strong>";
                  ?></td>
                  
              </tr> 

              <tr>
                  <td> <label for="lname"><p id="labels" >Last Name:</p></label></td>
                  <td> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onkeyup="onclicktext()" value="<?php echo  $_SESSION["lname"]; ?>"><sup><strong>*</strong></sup> </td>
                  <td> <?php
                  echo "<strong>".$lnameerr."</strong>";
                  ?></td>
                  
              </tr> 
              
              <tr>
                <td> <label for="age"><p id="labels" >Age:</p></label> </td>
                <td> <input type="number" id="age" name="age"  min="1" placeholder="Enter your age" onkeyup="onclicktext()" value="<?php echo  $_SESSION["age"]; ?>"> <sup><strong>*</strong></sup> </td>
                <td><?php
                  echo "<strong>".$ageerr."</strong>";
                  ?></td>
            </tr>
            

            <tr>
                <td> <label for="contNo"><p id="labels" >Contact No:</p></label> </td>
                <td> <input type="number" id="contNo" name="contNo" min="0"  placeholder="Enter your contact number" onkeyup="onclicktext()" value="<?php echo  "0".$_SESSION["contNo"]; ?>" > <sup><strong>*</strong></sup> </td>
                <td><?php
                  echo "<strong>".$contNoerr."</strong>";
                  ?></td>
            </tr>
            
            <tr>
                <td> <label for="email"><p id="labels" >Email:</p></label> </td>
                <td> <input type="text" id="email" name="email" placeholder="Enter your email" onkeyup="onclicktext()"  value="<?php echo  $_SESSION["email"]; ?>"> <sup><strong>*</strong></sup> </td>
                <td><?php
                  echo "<strong>".$emailerr."</strong>";
                  ?></td>
            </tr> 
           
         <tr>
             <td> </td>
         </tr>
         <tr>
             <td> </td>
         </tr>
         <tr>
             <td> </td>
         </tr>
         
         
         <tr>
             <td></td>

            
             <td><input type="submit" name="Update" value="Update" class="button updatebutton">
       <input type="reset" name="Reset" class="button resetbutton"></td>
       </tr>

       <tr>
         <td></td>
         <td>
         <?php
                 echo "<strong>".$dataerr."</strong>";
                  ?>

         </td>



       </tr>

       <tr>
             <td> </td>
         </tr>
         <tr>
             <td> </td>
         </tr>
         <tr>
             <td> </td>
         </tr>
         
         
         <tr>
             <td> </td>   <td> </td>
             <td> <a href="ViewMyAccount.php">Want to back?</a>  </td>

            </table>
        </form>
        </div>

    </body>
</html>

<script>
function myform2() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
   var age = document.getElementById("age").value;
   var contNo = document.getElementById("contNo").value;
  
    
    if ( fname=="" || lname == "" || age<1 || contNo<1 || email=="" ) {
  alert("Please fill out all feild!!");
      return false;
    }
    

    
   

  }
  </script>