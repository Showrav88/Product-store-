function fetchProduct()
{
        
var proid=document.getElementById("proid").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("message").innerHTML=this.responseText;
    }
};


xttp.open("POST","Easy Store/Admin/Controller/ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("proid="+proid);




}