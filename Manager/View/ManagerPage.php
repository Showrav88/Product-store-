<?php
include "../Control/Manager_Page_Verify.php";
//include "../Control/LogOut.php";
session_start();
if(empty($_SESSION["mid"]))
{
    header("Location: LogIn.php"); 

}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/ManagerPageDesign.css">
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
    <table id="table1" align="center" >
        <tr  height="80px" bgcolor="#102a4f">
    <td id="logo" align="center" width="550">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Easy Store</td>
    <td width="400" align="center" ><font size="5" face="Lucida Console" color=white ><strong>Wellcome <?php echo $_SESSION["lname"] ?>, <?php echo $_SESSION["fname"] ?></td>
    <td align="right">
    <input type="submit" class="button" name="myaccount" value="My Account" >&nbsp;&nbsp;&nbsp;
    <input type="submit" class="button" name="contoadmin" value="Contact to Admin" >&nbsp;&nbsp;&nbsp;
</td></tr>
</table>

<table >
<tr  bgcolor="#ffffff"> 
    <td>
        <!--- Profile Table  --->

        <table id="table2" cellspacing="4" cellpadding="5" width="300"align="center" >
    <tr height="50px"  align="center" >
            <td width="250"><img id="userimg" src="../Image/logicon1.png">
            <br><br>
            <font size="4" face="Lucida Console" color=black ><?php echo $_SESSION["fname"] ?> <?php echo $_SESSION["lname"] ?></font><br>
            <br>Easy Store is a wholesale store that where you can find all products. This is the manager portal to manage all datas.<br><br>
            <br><input type="submit" class="button" name="edit" value="Edit Profile" ><br>
            <br><input type="submit" class="button" name="logout" value="Log Out" >
           </td>
        </tr> 
       
        
        
    </table></td>

        <td>
            <!--- Manager Page Table  --->

        <table id="table3"  cellspacing="3" cellpadding="4" align="center" >
    <tr height="20px"  align="center" bgcolor="#ebebeb">

            <td width="250"><p id="paragraph"><img id="img" src="../Image/purchaseproduct.gif">
            <br><input type="submit" class="button1" name="pp" value="Purchase Product" ></p>
           </td>
           <td width="200"><p id="paragraph"><img id="img" src="../Image/purchaserecord.gif">
            <br><input type="submit" class="button1" name="pr" value="Purchase Record" ></p>
           </td>
           <td width="200"><p id="paragraph"><img id="img" src="../Image/searchrecord.gif">
            <br><input type="submit" class="button1" name="spr" value="Search Record" ></p>
           </td>
           <td width="250"><p id="paragraph"><img id="img" src="../Image/Order.gif">
            <br><input type="submit"class="button1" name="on" value="Order Now" ></p>
           </td>
        </tr>  
            <tr height="20px" align="center" bgcolor="#ebebeb">
            <td width="250"><p id="paragraph"><img id="img" src="../Image/product.gif">
            <br><input type="submit" class="button1" name="p" value="Add Product" ></p>
           </td>
           <td width="250"><p id="paragraph"><img id="img" src="../Image/search.gif">
            <br><input type="submit"class="button1" name="sp" value="Delete Product" ></p>
           </td>
           <td width="250"><p id="paragraph"><img id="img" src="../Image/stockreport.gif">
            <br><input type="submit"class="button1" name="sr" value="Search Product" ></p>
           </td>
           <td width="200"><p id="paragraph"><img id="img" src="../Image/due.gif">
            <br><input type="submit" class="button1" name="t" value="Stock Report" ></p>
           </td>
        </tr>
        <tr height="20px" align="center" bgcolor="#ebebeb">
        <td width="250"><p id="paragraph"><img id="img" src="../Image/sellrecord.gif">
        <br><input type="submit" class="button1" name="ser" value="Sell Record" ></p>
            </td>
            <td width="250"><p id="paragraph"><img id="img" src="../Image/searchsell.gif">
            <br><input type="submit" class="button1" name="ssr" value="Search sell Record" ></p>
           </td >
           <td width="250"><p id="paragraph"><img id="img" src="../Image/transection.gif">
            <br><input type="submit" class="button1" name="dr" value="Transections" ></p>
           </td>
           <td width="250"><p id="paragraph"><img id="img" src="../Image/payment.gif">
            <br><input type="submit"class="button1"  name="pay" value="Payment" ></p>
           </td>
        </tr>
        
        </table>
</td>
</tr></table>


</form>

</body>
</html>