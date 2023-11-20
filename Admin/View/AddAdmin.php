<?php
include "../Controller/AddAdminProcess.php";

?>


<html>
    <head>
    
        
    
    <img src="../Images/logo.png" width="100" height="80" >

    <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
    
        <?php echo '<h2 align="center"><u>Add Admin</u></h2>'  ?>
        <?php echo '<h4 align="center">All Values are Required(*)</h4>'?>
    </head>
    <body>
    <div id="box">
    
    
    
        <form action=""  method="post" enctype="multipart/form-data"  onsubmit="return myform2()">
       
        

        <?php echo '<table align="center">'?>
              <tr>
                  <td> <label for="fname"><p id="labels" >First Name:</p></label></td>
                  <td> <input type="text" id="fname" name="fname" placeholder="Enter your first name"onkeyup="onclicktext()"><sup><strong>*</strong></sup></td>

                  </br>
                 <td> <?php
                  echo "<strong>".$fnameerr."</strong>";
                  ?></td>
                  
              </tr> 

              <tr>
                  <td> <label for="lname"><p id="labels" >Last Name:</p></label></td>
                  <td> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onkeyup="onclicktext()"><sup><strong>*</strong></sup> </td>
                  <td> <?php
                  echo "<strong>".$lnameerr."</strong>";
                  ?></td>
                  
              </tr> 
              
              <tr>
                <td> <label for="age"><p id="labels" >Age:</p></label> </td>
                <td> <input type="number" id="age" name="age"  min="1" placeholder="Enter your age"onkeyup="onclicktext()"> <sup><strong>*</strong></sup> </td>
                <td><?php
                  echo "<strong>".$ageerr."</strong>";
                  ?></td>
            </tr>
            <tr>
                <td> <label for="gender"><p id="labels" >Gender:</p></label> </td>
                <td><input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male:</label>
                <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female:</label>
                <input type="radio" id="others" name="gender" value="Others">
                    <label for="others">Others:</label><sup><strong>*</strong></sup> </td>
                    <td> <?php
                  echo "<strong>".$gendererr."</strong>";
                  ?></td>
            </tr>

            <tr>
                <td> <label for="contNo"><p id="labels" >Contact No:</p></label> </td>
                <td> <input type="number" id="contNo" name="contNo" min="0"  placeholder="Enter your contact number" onkeyup="onclicktext()"> <sup><strong>*</strong></sup> </td>
                <td><?php
                  echo "<strong>".$contNoerr."</strong>";
                  ?></td>
            </tr>
            
            <tr>
                <td> <label for="email"><p id="labels" >Email:</p></label> </td>
                <td> <input type="text" id="email" name="email" placeholder="Enter your email"onkeyup="onclicktext()" > <sup><strong>*</strong></sup> </td>
                <td><?php
                  echo "<strong>".$emailerr."</strong>";
                  ?></td>
            </tr> 
            
              
              
            <tr>
              <td> <label for="password"><p id="labels" >Password:</p></label> </td>
              <td> <input type="password" id="password" name="password" placeholder="Enter an strong password"onkeyup="onclicktext()"><sup><strong>*</strong></sup>  </td>
              <td><?php
                   echo "<strong>".$passerr."</strong>";
                  ?></td>
          </tr>
          <tr>
              <td> <label for="conPass"><p id="labels" >Confirm Password:</p></label> </td>
              <td> <input type="password" id="conPass" name="conPass" placeholder="Confirm your password"onkeyup="onclicktext()"><sup><strong>*</strong></sup>  </td>
              <td><?php
                   echo "<strong>".$conPasserr."</strong>";
                  ?></td>
          </tr>
            
    
          <tr>
          
          <td><p id="labels" >Please choose a file :</p>
         <td><input type="file" name="myfile" > </td>
         <td><?php
                   echo "<strong>".$fileerr."</strong>";
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
             <td> </td>
         </tr>
         <tr>
             <td> </td>
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
             <td> <a href="AdminPage.php">Want to back?</a>  </td>

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
  var email = document.getElementById("email").value;
  var pass = document.getElementById("password").value;
  var conPass = document.getElementById("conPass").value;
  
    
    if ( fname=="" || lname == "" || age<1 || contNo<1 || email=="" || pass == "" || conPass == "") {
  alert("Please fill out all feild!!");
      return false;
    }
    

    
   

  }
  </script>