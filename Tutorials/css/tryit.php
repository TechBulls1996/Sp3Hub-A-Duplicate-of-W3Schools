<!DOCTYPE html>
<html lang="en">
<head>
  <title>Try it</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="html-main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
function tryit() {
    var x = document.getElementById("input").value;
    document.querySelector('iframe').srcdoc = x;
}

function hme(){

location.href='html-main.php';

}
function grid(){

document.getElementById("result").style="height:520px; width:100%; overflow:scroll;";
document.getElementById("input").style="height:410px; width:100%;";
document.getElementById("userin").style="height:420px; width:100%;";
}

function lst(){

document.getElementById("result").style="height:500px; width:50%;";
document.getElementById("input").style="height:500px; width:100%;";
document.getElementById("userin").style="height:500px; width:50%;";
}

window.onload = function() {
    if(!window.location.hash) 
	{
        window.location = window.location + '#?try';
        window.location.reload();
    }
}
</script>
  <style>
 
  .container{width:98%; max-width:1366px;}
  .head{ overflow:visible;}
  .top{height:100px; padding:10px; border-bottom:1px solid grey;}
  .top2{height:50px; }
  .but{position:relative;  }
  .but1{width:70px;}
  .left{height:500px;}
  .right{height:500px; padding-top:10px; padding-left:25px; border:1px solid grey; }
  textarea{height:500px; resize:none;  font-size:13px; font-family:"Courier New", Courier, monospace; width:100%;}
  
  @media (max-width:800px)
  {
  .but{position:relative; width:60px; height:30px; font-size:13px;  }
  .but1{width:40px; height:30px; font-size:13px; padding:0px;}
  
  .left{height:300px;}
  .right{height:300px; border:1px solid grey; }
  textarea{height:300px; resize:none; font-size:13px; font-family:"Courier New", Courier, monospace; width:100%;}
  }

  </style>
</head>
<body >

<div class="container" style="height:500px;  ">   
  <div class="row">   
  
     <div class="col-sm-12 top">  </div>
	 <div class="col-sm-12 top2 bg-danger"> 
	 <input type="submit" class="but but1" value="Home" onClick="hme()">
	 <input type="submit" class="but but1" value="Grid" onClick="grid()">
	 <input type="submit" class="but but1" value="List" onClick="lst()">
	 <input type="submit" class="but btn-warning " value="Try it" onClick="tryit()">
	  
	  
	 </div>
	 
	 <div class="col-sm-6  left"  id="userin">       
	   <div class="row"> 
	   <form method="post">  
	    <textarea class=" " name="txt" id="input" >     

<?php
error_reporting(0);
session_start();
$a =  $_SESSION['tryitt'];

if(empty($a))
{


$a="Please refrese Page";
}
else
{
echo $a;

}
?>

 
	     </textarea>
		 </form>
		    
	   </div>   
	 </div>   
	 <div class="col-sm-6  right" name="result" id="result" style=" overflow:scroll;"><div class="row">
	 <iframe style="width:100%; height:465px; border:none;">  </iframe>
	 </div> </div>
	
	<div class="col-sm-12 bg-info" style="height:50px;">  </div>
	
   </div>  
</div>  


</body>  
</html>  
