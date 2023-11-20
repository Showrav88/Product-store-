<?php
include "../Controller/ViewStockReportProcess.php";
?>
<html>  
        <head>
        <?php echo '<h2 align="center"><u> Stock Report</u></h2>'  ?>
</head>

<body>
<form action="../Controller/ViewStockReportProcess.php"  method="post" enctype="multipart/form-data">
   <pre>

                <input type="submit" name="View"  value="View All" class="button submitbutton" >               <input type="text"  name="search" id="proid" onkeyup="fetchProduct()" >   <input type="submit" name="Search"  value="Search" >  

            <p id="message"></p>                                              
                                 <?php  echo $searcherr; ?>




                                                                      <a href="AdminPage.php">Want to back?</a>
</form>
</body>
    </html>


    <script>

function fetchProduct()
{     
       
        
var proid=document.getElementById("proid").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        
        document.getElementById("message").innerHTML=this.responseText;
    }
    else
	{
		 document.getElementById("message").innerHTML = this.status;
                
	}
};


xttp.open("POST","/Easy Store/Admin/Controller/ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("proid="+proid);




}
            </script>