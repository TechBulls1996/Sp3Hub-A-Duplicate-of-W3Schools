
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> SP3hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css ?<?php  ?>">
    <link rel="stylesheet" href="css-main.css ">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
   <script language="javascript" type="text/javascript">
  function tryit() {
    window.open('tryit.php');
}
  
  function nextpage(){
  location.href = "css-tag.php";
  }
   function prevpage(){
  location.href = "css-opacity.php";
  }
  </script>
  
  <style>
  #dem99{ color:red;}
  #dem99:hover{color:#00CCFF;}
  .head{ overflow:visible;}
  .but{position:relative; right:10px; margin:5px;}
  .col-sm-2{width:20.5%;}
  .col-sm-10{width:79.5%;}
   a:hover{ text-decoration:none;}
   @media (max-width:800px)
   {
  
   .center{width:100%;}
   }
   
   .ret h3{color:green; }
   </style>
</head>
<body>
<!--- nav ---------->




<!--   end nav ------->
  
 <?php
   include('head.php');
  ?>   
       
  
  <!-- left side nav ---------------------->
<?php

$cssmain = $cssselectors=$cssbackground=$cssborder=$cssmargin=$cssfont=$csstext=$cssimages=$csslink=$cssposition=$cssdisplay=$cssopacity=$cssfloat=$moretag=$cssdropdown = 0;

$cssfloat = "active";
  
include('css-sidenav.php');
  
  ?>
	<div class="container-fluid text-center">           
   <div class="row">  
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center ">     
    <div class="row">     
	
           <!--   center   ---------------------->
 <div class="col-sm-12 text-left center">     
      <h2><a href="#">CSS TUTORIALS</a></h2><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()" ><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->

  

	               
 
	   <div class="row">   
 <div class="col-sm-12">   
 
      <h3><a href="#">CSS Float Tag</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by Float Property in CSS? </a></h4>
	  <p> <code>The Float,</code> CSS Layout - float and clear. Previous Next The float property specifies whether or not an element should float. The clear property is used to control the behavior of floating elements. </p>
	  
	  <h4>Properties of float tag are: </h4>
	  <p>1. Left </p>
	  <p>2. Right </p>
	  <p>3. None </p>
	    </div>
	
		
		
		
		
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn ret"> 
	  <h3> Normal Div's without float </h3>
	  
	  
	  <div   style=" background:#FF6600; height:50px; width:30%;">
       	  <h4> div{ float: ;}</h4>
	  </div>
	  <div  style=" background:#00CC99; height:50px; width:30%;"> 
	  	 <h4> div{ float: ;}</h4>
	  </div>
	  <div  style=" background:#FFCC66; height:50px; width:30%;"> 
	 	 <h4> div{ float: ;}</h4>
	  </div>
	  
	  </div>
	  
	   <div class="col-sm-12 bg-info column left_part question-box marginn ret"> 
	   <h3> Div's with float : left; </h3>
	  <div   style=" background:#FF6600; height:50px; width:30%; float:left;">
       	  <h4> div{ float:left;}</h4>
	  </div>
	  <div  style=" background:#00CC99; height:50px; width:30%;  float:left;"> 
	  	<h4> div{ float:left;}</h4>
	  </div>
	  <div  style=" background:#FFCC66; height:50px; width:30%;  float:left;"> 
	 	<h4> div{ float:left;}</h4>
	  </div>
	  
	 
	</div>
	
	<div class="col-sm-12 bg-info column left_part question-box marginn ret"> 
	   <h3> Div's with float : left;  and float:right; </h3>
	  <div   style=" background:#FF6600; height:50px; width:30%; float:left;">
       	  <h4> div{ float:left;}</h4>
	  </div>
	   
	  	
	  
	  <div  style=" background:#FFCC66; height:50px; width:30%;  float:right;"> 
	 	       	  <h4> div{ float:right;}</h4>

	  </div>
	  
	 
	</div>
	
	
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn">  
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of Float Properties of CSS   </a></h4>
	  
	  
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>


	  }
</style>
<body>  
<div class="col-sm-12 bg-info column left_part question-box marginn ret"> 
	   <h3> Div's with float : left; </h3>
	  <div   style=" background:#FF6600; height:50px; width:30%; float:left;">
       	  <h4> div{ float:left;}</h4>
	  </div>
	  <div  style=" background:#00CC99; height:50px; width:30%;  float:left;"> 
	  	<h4> div{ float:left;}</h4>
	  </div>
	  <div  style=" background:#FFCC66; height:50px; width:30%;  float:left;"> 
	 	<h4> div{ float:left;}</h4>
	  </div>
	  
</body>
</html>	
      </textarea>  <br>
	  <input type="submit" name="trysub" class="but " onClick="tryit()" value="Try It Live"> 	  
	  </form> 
	  <?php
	 if(isset($_POST['trysub']))
	 {
	  $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 
	
	<div >   <br><br> </div>
	    </div>   
		
	
	
	
	<br>
	   <div class="col-sm-12">
	 <button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br><hr>
	   <div class="col-sm-12" style="height:50px;"> </div>
	   
	   
		<!--content div end -->
  
  
  
  
   </div>  
   </div>  
  <!-- end of center ---------------------->
    
	</div>  
	</div>  
	</div>  
	
  <!--right side nav ---------------------->
	</div> </div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body> 
</html> 