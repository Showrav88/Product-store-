<?php
include "../Controller/ChangeAdminPasswordProcess.php";
?>


<html>
    <head>
    <img src="../Images/logo.png" width="100" height="80" >

<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
        <h2><u>Change Password</u></h2>  
        
    </head>
    <body>
        <form action=""  method="post" enctype="multipart/form-data" onsubmit="return myform2()">
        <?php echo '<table align="center">'?>
              <tr>
                  <td> <label for="tempPass"><p id="labels" >Re-enter your password:</p></label> </td>
                  <td> <input type="password" id="tempPass" name="tempPass" onkeyup="onclicktext()" ><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$tempPasserr."</strong>";
                  ?></td>
                  
              </tr> 

              <tr>
                  <td> <label for="newPass"><p id="labels" >New Password:</p></label></td>
                  <td> <input type="password" id="newPass" name="newPass" onkeyup="onclicktext()"><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$newPasserr."</strong>";
                  ?></td>
                  
              </tr> 
              
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

            
        <td><input type="submit" name="Submit"  value="Submit"  class="button submitbutton">
       
       </tr>
       <tr>  
           <td> </td>
</tr>

       <tr>
         <td></td>
         <td>
         <?php 
         echo "<strong>".$submiterr."</strong>"
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
             <td> </td>  
             <td> <a href="ViewMyAccount.php">Want to Back?</a>  </td></tr>
            </table>
        </form>

    </body>
</html>

<script>
function myform2() {
    var tempPass = document.getElementById("tempPass").value;
    var newPass = document.getElementById("newPass").value;
   
  
    
    if ( tempPass=="" || newPass == "" ) {
  alert("Please fill out all feild!!");
      return false;
    }
    

    
   

  }
  </script>