
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
 
 
 <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <style>
  .cat{ height:50px;  background:#00CCFF; border:2px solid yellow; margin-top:5px; 
   margin-bottom:5px;}
	.cat:hover{  background:#FF6600 ; }	
	.cat:hover a{ color:white;}		  
   .cat a{ font-size:20px; line-height:50px;}
 </style>
  
</head>
<body>
<?php
include('head.php');

?>

<div class="col-sm-12 bg-info">   
<div class="col-sm-2">   </div>
<div class="col-sm-8" style="height:auto; background:white;"> 
   
   <button class="but" style="width:100%; height:50px; margin-bottom:50px; margin-top:50px; font-size:25px; ">PHP PROJECTS  </button>  
      
    <div class="col-sm-2">   </div>
     <div class="input-group col-sm-7">
            <input type="text" class="form-control input-md">
            <span class="input-group-btn">
               <button class="btn btn-default btn-md" type="button">Search</button>
             </span>
     </div>
   
     <div class="col-sm-2">   </div>


    <table class="table table-striped table-hover" width="" style="margin-top:30px;">
		<tr>
		  <th>S.no</th>  <th>PHP projects <code>[with Source Code ]</code></th>  <th>Go!</th>
		</tr>
		<tr>
		<td>1</td> <td> PHP Mailbox   <code> New*</code></td> <td><a href="download-projects.php"><input type="button" class="btn btn-md btn-warning " value="Download" ></a></td>
		</tr>
		<tr>
		<td>2</td> <td>PHP Hotel Management <code> New*</code></td> <td><input type="button" class="btn btn-md btn-warning " value="Download"></td>
		</tr>
		<tr>
		<td>3</td> <td>PHP School Management System  <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-warning" value="Download"></td>
		</tr>
		<tr>
		<td>4</td> <td>PHP Online Shoping  <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-warning" value="Download"></td>
		</tr>
		
	
		</table>



</div>
<div class="col-sm-2">   </div>




<div class="col-sm-12  proj1b text-center" >
	
	     <div class="col-sm-4 cat "><a href="php-projects.php">PHP PROJECT  </a>   </div> 
		 <div class="col-sm-4 cat"><a href="#">WORDPRESS   </a>   </div>
		 <div class="col-sm-4 cat"><a href="#"> JOOMLA</a>   </div>
		  <div class="col-sm-4 cat "><a href="#">WEB DESIGNS  </a>   </div> 
		 <div class="col-sm-4 cat"><a href="#">comming   </a>   </div>
		 <div class="col-sm-4 cat"><a href="#"> soon</a>   </div>
		 
         
         </div>
		 


</div>








</body>
</html> 