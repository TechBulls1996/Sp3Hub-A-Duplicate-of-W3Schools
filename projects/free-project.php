<?php
include("../head.php");

?>

<html>
<head>
<title>SP3hub.com</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../stylesheet.css?<?php echo 1;  ?>">
  <link rel="stylesheet" href="../css/bootstrap.css">
 
  <script language="javascript" type="text/javascript" src="../jquery/jquery-3.2.0.js"></script>
  <script language="javascript" type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script>
 
 
  
  
  </script>
  <style>
  .cat{ height:50px;  background:#00CCFF; border:2px solid yellow; margin:5px;}
	.cat:hover{  background:#FF6600 ; }	
	.cat:hover a{ color:white;}		  
   .cat a{ font-size:20px; line-height:50px;}
   #upldproj{width:90%; height:50px; margin-left:5%; padding-top:10px; border:1px solid lightgrey;}
 </style>
  
  

 
</head>

<body>

<div class="col-sm-12 proj1 ">
    <div class="col-sm-2"> </div>
    <div class="col-sm-8  proj1a text-center">  
      
	  <h3 id="ani3"> Select Your Project Catagories </h3>
	 <div class="input-group col-sm-12">
            <input type="text" class="form-control input-lg">
            <span class="input-group-btn">
               <button class="btn btn-default btn-lg" type="button">Search</button>
             </span>
    </div>
	  
    </div>
    <div class="col-sm-2">   </div>
	
	<!-- first div -------------------------->
	
	<div class="col-sm-12  proj1b text-center" >
	<div class="col-sm-1"> </div>
	     <div class="col-sm-3 cat "><a href="php-projects.php">PHP PROJECT  </a>   </div> 
		 <div class="col-sm-3 cat"><a href="#">WORDPRESS   </a>   </div>
		 <div class="col-sm-3 cat"><a href="#"> JOOMLA</a>   </div>
		 </div>
		 
  <div class="col-sm-12  proj1b text-center" > 
  <div class="col-sm-1"> </div>
		 <div class="col-sm-3 cat"> <a href="#"> BOOTSTRAP </a>  </div>
		 <div class="col-sm-3 cat"> <a href="#"> Comming </a>  </div>
		 <div class="col-sm-3 cat "><a href="#"> Soon...... </a>   </div>
		</div> 
		 
			  
			<div class="col-sm-6 text-center  demand bg-info" style="border-left:4px solid #09F;">
			      <h1><code>Demand a New Project Free :- </code></h1>
			<form>
			<input type="text" name="ques" Placeholder="What type of Project You Want ?"><br>
			<textarea name="que2"  resize="none" >  More Details About Project You Want  </textarea><br>
			<input type="number" placeholder="How Many Days You Have ?"> <br>
			<input type="submit" name="que3" class="but">
			<br><br>
			</form>
			
			</div>
            <div class="col-sm-6 text-center demand bg-info" style="border-left:4px solid #09F;">
               <h1><code> Uploading New Project Free :- </code></h1>
			<form>
			<input type="text" name="ques" Placeholder="Project Name [Ex: php mailbox]"><br>
			<input type="text" name="ques" Placeholder="Languages used in it [Ex: php,html css etc]"><br>
			<input type="text" placeholder="Who Made This ? [Ex: Sp Singh]">
            
			<input type="file" placeholder="Who Made This ?" id="upldproj"> <br>
			<textarea name="que2"  resize="none" style=" height:158px; margin-bottom:5px;" >  More Details About Project You Are Uploading  </textarea><br>
            <input type="submit" name="que3" class="but" value=" Upload">
			<br><br>
			</form>
            
            
            
            
            
            </div>
	 
	<!---- second div --=--------------------->
	
	<div class="col-sm-12 bg-info proj1c text-center"> 
	  <br>
	  <h2 > <code>Latest Updated Projects :-</code></h2>
	   <div class="col-sm-6    thumbnail" style=" "> 
	   <div class="row"><div class="container  col-xs-12">   
		<table class="table table-striped table-hover" width="">
		<tr>
		  <th>S.no</th>  <th>PHP Coding <code>[with Source Code ]</code></th>  <th>Go!</th>
		</tr>
		<tr>
		<td>1</td> <td> PHP Mailbox   <code> New*</code></td> <td><input type="button" class="btn btn-md btn-warning " value="click"></td>
		</tr>
		<tr>
		<td>2</td> <td>PHP Hotel Management <code> New*</code></td> <td><input type="button" class="btn btn-md btn-warning " value="click"></td>
		</tr>
		<tr>
		<td>3</td> <td>PHP School Management System  <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-warning" value="click"></td>
		</tr>
		<tr>
		<td>4</td> <td>PHP Online Shoping  <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-warning" value="click"></td>
		</tr>
		
	
		</table>
	  </div></div>
	  </div>
	 
	  
	  <div class="col-sm-6    thumbnail" style=" "> 
	   <div class="row"><div class="container  col-xs-12">   
		<table class="table table-striped table-hover" width="">
		<tr>
		  <th>S.no</th>  <th>Web Desgining <code>[with Source Code ]</code></th>  <th>Go!</th>
		</tr>
		<tr>
		<td>1</td> <td>Responsive Education  <code> New*</code></td> <td><input type="button" class="btn btn-md btn-success " value="click"></td>
		</tr>
		<tr>
		<td>2</td> <td>Cooming Soon <code> New*</code></td> <td><input type="button" class="btn btn-md btn-success " value="click"></td>
		</tr>
		<tr>
		<td>3</td> <td> Cooming Soon <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-success" value="click"></td>
		</tr>
		<tr>
		<td>4</td> <td>Cooming Soon  <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-success" value="click"></td>
		</tr>
	
	
		</table>
	  </div></div>  </div>
	   
	 <div class="col-sm-6    thumbnail" style=" "> 
	   <div class="row"><div class="container  col-xs-12">   
		<table class="table table-striped table-hover" width="">
		<tr>
		  <th>S.no</th>  <th>Java Projects <code>[with Source Code ]</code></th>  <th>Go!</th>
		</tr>
		<tr>
		<td>1</td> <td> Cooming Soon   <code> New*</code></td> <td><input type="button" class="btn btn-md btn-danger " value="click"></td>
		</tr>
		<tr>
		<td>2</td> <td>Cooming Soon <code> New*</code></td> <td><input type="button" class="btn btn-md btn-danger " value="click"></td>
		</tr>
		<tr>
		<td>3</td> <td>Cooming Soon <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-danger" value="click"></td>
		</tr>
		<tr>
		<td>4</td> <td>Cooming Soon  <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-danger" value="click"></td>
		</tr>
		
	
		</table>
	  </div></div>
	  </div>
	
	
	 <div class="col-sm-6    thumbnail" style=" "> 
	   <div class="row"><div class="container  col-xs-12">   
		<table class="table table-striped table-hover" width="">
		<tr>
		  <th>S.no</th>  <th>ASP Dot NET Projects <code>[with Source Code ]</code></th>  <th>Go!</th>
		</tr>
		<tr>
		<td>1</td> <td> Cooming Soon   <code> New*</code></td> <td><input type="button" class="btn btn-md btn-Info " value="click"></td>
		</tr>
		<tr>
		<td>2</td> <td>Cooming Soon <code> New*</code></td> <td><input type="button" class="btn btn-md btn-Info " value="click"></td>
		</tr>
		<tr>
		<td>3</td> <td>Cooming Soon  <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-Info" value="click"></td>
		</tr>
		<tr>
		<td>4</td> <td>Cooming Soon  <code> New*</code></td> <td><input type="button" class="btn btn-md  btn-Info" value="click"></td>
		</tr>
		
	
		</table>
	  </div></div>
	  </div>
	
	
	 </div>


</div>

