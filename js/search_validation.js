
function validateForm()
{
var x=document.forms["search"]["q"].value;
if(x==null||x=="")
{
document.getElementById("search1").style.visibility="visible";
tfq.focus();
var delay=4000;
setTimeout(function(){
document.getElementById("search1").style.visibility="hidden";

},delay);

return false;
}
// javascript:history.go(0);
else if(x!=null&&x!="")
{
//alert(x);
var delay=000;
setTimeout(function(){
document.getElementById("tfq").value="";
document.getElementById("search1").style.visibility="hidden";
},delay);

window.location.reload(true);
window.opener.location='http://www.google.com/?q='+x;
//return false;


}
}

function checkBox()
{
// var x=document.forms["search"]["q"].value;
// if(x!=null&&x!="")
// {
// //alert(x);
// window.location.reload(true);
// return true;

// var delay=1000;
// setTimeout(function(){
// return true;
// },delay);

//window.location.reload(false);
// javascript:history.go(0);

// window.location="home.html";
}