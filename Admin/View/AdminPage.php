<?php
include "../Controller/AdminPageProcess.php";


  ?>

<html>
    <head>
    <img src="../Images/logo.png" width="100" height="80" >

<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
<link rel="stylesheet" type="text/css" href="../CSS/Adminpage.css">
        <h3><?php 
        echo $wmsg ; 
        ?> 
        </h3>
        <body>
        
<pre>                                                                                                                                                                                           <a href="AdminUpdate.php">Edit Admin Information</a>
<a href="ViewAdmin.php">Admin</a><a href="ViewManager.php">Manager</a><a href="ViewCashier.php">Cashier</a><a href="ViewSupplier.php">Supplier</a><a href="ViewStockReport.php">Stock Report</a><a href="ViewSellRecord.php">Sell Record</a><a href="ViewPurchaseRecord.php">Purchase Record</a><a href="ViewTransections.php">Transections</a><a href="ManagerComment.php">Comment From Manager</a><a href="CashierComment.php">Comment From Cashier</a><a href="SupplierComment.php">Comment From Supplier</a>
<div id="box">
<a href="ViewMyAccount.php">  My Account</a>                                                                 
<a href="AddAdmin.php">  Add  Admin</a>                             
<a href="AddManager.php"> Add Manager</a>                         
<a href="AddCashier.php"> Add Cashier</a>                          
<a href="AddSupplier.php">Add Supplier</a>                          
<a href="../Controller/AdminLogoutProcess.php">   Logout   </a>                      

</div> 
</body>
</head>
    </html>