<?php
include "../Controller/AdminLoginCheck.php";
?>
<?php
setcookie("user_detected", "visited", time() + 86400*7, '/');

if(isset($_COOKIE["user_detected"])) {
  echo  "<strong>You have visited before.</strong>";
  
}else {
  echo "<strong>Wellcome! You are visiting for first time</strong>.";

}
?>

<html>
    <head>
    
    <img src="../Images/logo.png" width="100" height="80" >

    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    <?php echo '<h2 align="center"><u>Login</u></h2>'  ?> 
        <?php echo '<h4 align="center">All Values are Required(*)</h4>'?>
    </head>
    <body>
    <div id="box">
        <form action=""  method="post" enctype="multipart/form-data"  onsubmit="return myform2()">
        <?php echo '<table align="center" width="350" >'?>
              <tr>
                  <td> <label for="aid"><p id="labels" >Admin Id:</p></label> </td>
                  <td> <input type="text" id="aid" name="aid"value= "<?php  if(isset($_COOKIE["aid"])) {echo $_COOKIE["aid"];} else echo "";?> " onkeyup="onclicktext()"><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$aiderr."</strong>";
                  ?></td>
                  
              </tr> 

              <tr>
                  <td> <label for="pass"><p id="labels" >Password:</p></label></td>
                  <td> <input type="password" id="pass" name="pass"value= "<?php  if(isset($_COOKIE["password"])) {echo $_COOKIE["password"]; }else echo "";?> " onkeyup="onclicktext()"><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$passerr."</strong>";
                  ?></td>
                  
              </tr> 
              <tr>
             <td> </td>
</tr>
               <tr> <td> </td><td>
              <input type="checkbox" name="remember"  size="30"> 
               Remember me
          <br></td>
              
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

            
        <td><input type="submit" name="Login"  value="Login"  class="button submitbutton">
       
       </tr>
       <tr>  
           <td> </td>
</tr>

       <tr>
         <td></td>
         <td>
         <?php 
         echo "<strong>".$loginerr."</strong>"
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
             <td> <a href="AdminRegistrationPage1.php">Want to Resigter?</a>  </td></tr>
            </table>
        </form>
        </div>

    </body>
</html>

<script>
function myform2() {
    var aid = document.getElementById("aid").value;
    var pass = document.getElementById("pass").value;
   
  
    
    if ( aid<0 || pass == "" ) {
  alert("Please fill out all feild!!");
      return false;
    }
    

    
   

  }
  </script>