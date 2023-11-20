<?php
include "../Controller/AdminRegistrationProcess2.php";

?>



<html>
    <head>
    <img src="../Images/logo.png" width="100" height="80" >

<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">

    <?php echo '<h2 align="center"><u>Admin Registration</u></h2>'  ?>
        <?php echo '<h4 align="center">All Values are Required(*)</h4>'?>
    </head>
    <body>
    <div id="box">
        <form action=""  method="post" enctype="multipart/form-data" onsubmit="return myform2()">
        <?php echo '<table align="center">'?>

              
              
            <tr>
              <td> <label for="password"><p id="labels" >Password:</p></label> </td>
              <td> <input type="password" id="password" name="password" placeholder="Enter an strong password" onkeyup="onclicktext()"><sup><strong>*</strong></sup> 
              <?php
                   echo "<strong>".$passerr."</strong>";
                  ?></td>
          </tr>
          <tr>
              <td> <label for="conPass"><p id="labels" >Confirm Password:</p></label> </td>
              <td> <input type="password" id="conPass" name="conPass" placeholder="Confirm your password" onkeyup="onclicktext()"><sup><strong>*</strong></sup> 
              <?php
                   echo "<strong>".$conPasserr."</strong>";
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
         
            
        
             <td><input type="submit" name="Add" value="Add" class="button submitbutton">
       <input type="reset" name="Reset"class="button resetbutton"></td>
       </tr>
       <tr>
           <td></td>
           <td><?php
                   echo "<strong>".$dataerr."</strong>";
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
             <td> </td>  
             <td> <a href="AdminLogin.php">Want to back?</a>  </td></tr>

            </table>
        </form>
        </div>
    </body>
</html>
<script>
function myform2() {
   
  var pass = document.getElementById("password").value;
  var conPass = document.getElementById("conPass").value;
  
    
    if (  pass == "" || conPass == "") {
  alert("Please fill out all feild!!");
      return false;
    }
    

    
   

  }
  </script>