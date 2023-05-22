
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SP3hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css?<?php  echo 1; ?>">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
 <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .fa{ font-size:30px; margin:5px;}
  .fa:hover{ color:#09F;}
  
  .more1{ height:50px; background:#F63; border:1px solid #09F; color:white; font-size:25px; text-align:center; line-height:50px;}
  </style>
</head>
<body>
<?php
include('head.php');

?>

<div class="col-sm-12 bg-info ">   
<div class="col-sm-2">   
  <h2 class="text-left"> <small style="color:Black; "> Share us on</small></h2>
	    <span class="fa fa-facebook icon" alt="facebook" title="facebook"> </span> 
	    <span class="fa fa-youtube icon" title="you tube"> </span>
		<span class="fa fa-twitter icon" title="twitter"> </span>
		<span class="fa fa-google icon" title="google +"> </span>
	   
	  

</div>
<div class="col-sm-8" style="height:auto; background:white;"> 
   
  
   <table class="table table-bordered " style=" margin-top:50px;">
   <tr>
   <th colspan="3" class="text-center"> Your Project Is Here ready to Download Now .... </th>
   </tr>
   <tr style=" color:#F00;">
   <th>S no. </th><th>Topic   </th><th>Describe  </th>
   </tr>
   <tr>
  <th>1.</th> <th>Name   </th><th>PHP MAILBOX  </th>
   </tr>
   <tr>
  <th>2.</th> <th>Languages   </th><th>Html,css,js,Php & mysql etc  </th>
   </tr>
   <tr>
   <th> 3.</th><th>Price   </th><th>Free  </th>
   </tr>
   <tr>
  <th>4.</th> <th>Creator   </th><th>Sp Singh site admin  </th>
   </tr>
    <tr>
    <th colspan="3">
    <button class="but" style="width:100%;">Click To Download Here...  </button>
    <button class="but btn btn-success" style="width:100%;"> Find Out More Projects to go back page  </button>
    </th>
    </tr>
    
   </table>
   <table style="" class="table">
   <form method="post" >
   <tr>
   <th class="text-center">
   <textarea resize="none" style=" height:200px; width:50%; margin-top:20px; padding:5px;" > Write Your Comments Here About Project....    </textarea><br>
   <input type="submit" class="but" style="width:50%;  margin-bottom:20px;" value="Post Your Comment">
   </th>
   </tr>
   </form>
</table>

</div>
<div class="col-sm-2">  
   
  <h2 class="text-left"> <small style="color:black; "> Share us on</small></h2>
	    <span class="fa fa-facebook icon" alt="facebook" title="facebook"> </span> 
	    <span class="fa fa-youtube icon" title="you tube" > </span>
		<span class="fa fa-twitter icon" title="twitter"> </span>
		<span class="fa fa-google icon" title="google +"> </span>

 </div>



</div>








</body>
</html> 