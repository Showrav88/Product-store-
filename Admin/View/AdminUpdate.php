<?php
include "../Controller/AdminUpdateProcess.php";
?>
<html>  
        <head>
        <img src="../Images/logo.png" width="100" height="80" >

<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
        <?php echo '<h2 align="center"><u> Admin Information</u></h2>'  ?>
</head>

<body>
<form action=""  method="post">
<?php echo '<table align="center">'?>

                                                                                <tr> <td>  <input type="text" id="search" name="search"  >   <input type="submit" name="Search"  value="Search" >   <td>  </tr>
</table>
                                                                                   </form>
                                              <form action=""  method="post" enctype="multipart/form-data" onsubmit="return myform2()">
                                              <?php echo '<table align="center">'?>
           
              <tr>
                  <td> <label for="fname"><p id="labels" >First Name:</p></label></td>
                  <td> <input type="text" id="fname" name="fname"  placeholder="Enter your first name" onkeyup="onclicktext()" value="<?php echo $fname; ?>">  <sup><strong>*</strong></sup></td>
                 
                  
              </tr> 

              <tr>
                  <td> <label for="lname"><p id="labels" >Last Name:</p></label></td>
                  <td> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onkeyup="onclicktext()" value="<?php echo $lname; ?>"><sup><strong>*</strong></sup> </td>
                  <td> <?php
                
                  ?></td>
                  
              </tr> 
              
              <tr>
                <td> <label for="age"><p id="labels" >Age:</p></label> </td>
                <td> <input type="number" id="age" name="age"  min="1" placeholder="Enter your age" onkeyup="onclicktext()" value="<?php echo $age; ?>"> <sup><strong>*</strong></sup> </td>
                
            </tr>
            

            <tr>
                <td> <label for="contNo"><p id="labels" >Contact No:</p></label> </td>
                <td> <input type="number" id="contNo" name="contNo" min="0"  placeholder="Enter your contact number" onkeyup="onclicktext()" value="<?php echo $contNo; ?>"> <sup><strong>*</strong></sup> </td>
                <td><?php
                 
                  ?> </td>
            </tr>
            
            <tr>
                <td> <label for="email"><p id="labels" >Email:</p></label> </td>
                <td> <input type="text" id="email" name="email" placeholder="Enter your email" onkeyup="onclicktext()" value="<?php echo $email; ?>"> <sup><strong>*</strong></sup> </td>
                <td><?php
                
                  ?></td>
            </tr> 
            <tr>
                <td> <label for="aid"><p id="labels" >Admin Id:</p></label> </td>
                <td> <input type="number" id="aid" name="aid"  onkeyup="onclicktext()" value="<?php echo $aid; ?>"> <sup><strong>*</strong></sup> </td>
                <td><?php
                
                  ?></td>
            </tr> 

            <tr>
                <td>   </td> 
</tr> 
            <tr>
                <td>   </td>                                                                
                <td> <input type="submit" name="update" value="Update" class="button updatebutton">
                <input type="submit" name="delete" value="Delete" class="button deletebutton">  </td>   

                <tr><td>   </td>   </tr> 
                <tr><td>   </td>   </tr> 
                <tr><td>   </td>   </tr> 

            <tr>
                <td> </td>  
                <td>  
            <a href="AdminPage.php">Want to back?</a>

            </td>

            </tr> 
            <tr><td>   </td>   </tr> 

            <tr><td>   </td>   </tr> 
            <tr><td>   </td>   </tr> 
            <tr><td>   </td>  
                <td>
                <?php
                 echo $dataerr;
                 ?>
            </td>
            </tr>

</table>
                                                                    
</form>
                                                                                     
    
                                                                                                       


                                                                                                       


</body>
    </html>


    <script>
function myform2() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
   var age = document.getElementById("age").value;
   var contNo = document.getElementById("contNo").value;
  var email = document.getElementById("email").value;
  var aid = document.getElementById("aid").value;
 
  
    
    if ( fname=="" || lname == "" || age<1 || contNo<1 || email=="" || aid<0) {
  alert("Please fill out all feild!!");
      return false;
    }
    

    
   

  }
  </script>
