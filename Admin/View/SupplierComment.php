<?php
include "../Controller/SupplierCommentProcess.php";
?>
<html>  
        <head>
        <link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
        <?php echo '<h2 align="center"><u>Supplier Comments</u></h2>'  ?>
</head>

<body>
<form action="../Controller/SupplierCommentProcess.php"  method="post" enctype="multipart/form-data">
   <pre>

    <input type="submit" name="View"  value="View All" class="button submitbutton" >               <input type="text" id="search" name="search"  >   <input type="submit" name="Search"  value="Search" >  

                                                                                 
                                 <?php  echo $searcherr; ?>




                                                                      <a href="AdminPage.php">Want to back?</a>
</form>
</body>
    </html>