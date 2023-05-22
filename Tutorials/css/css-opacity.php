
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
  location.href = "css-float.php";
  }
   function prevpage(){
  location.href = "css-display.php";
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

$cssopacity = "active";
  
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
 
      <h3><a href="#">CSS Opacity Tag</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by Opacity Property in CSS? </a></h4>
	  <p> <code>The opacity</code> property in CSS specifies how transparent an element is. Basic use: div { opacity: 0.5; } Opacity has a default initial value of 1 (100% opaque). Opacity is not inherited, but because the parent has opacity that applies to everything within it </p>
	  
	  
	    </div>
	
		
		
		
		
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn ret"> 
	  
	  <div class="col-sm-4 ">
       <h3> Opacity:0.8;</h3>	  
       <img src="Images/e (1).jpg" class="img img-responsive" style=" opacity:0.8"> 	  
	  </div>
	  <div class="col-sm-4"> 
	  <h3> Opacity:0.5;</h3>
	  <img src="Images/e (1).jpg" class="img img-responsive" style=" opacity:0.5"> 	
	  </div>
	  <div class="col-sm-4"> 
	  <h3> Opacity:0.2;</h3>
	  <img src="Images/e (1).jpg" class="img img-responsive" style=" opacity:0.2"> 	
	  </div>
	  
	  <h2>Hint:- </h2>
	  <p><code>For internet exploper use   filter: alpha(opacity=40); </code></p>
	</div>
	
	<div class="col-sm-12 bg-info column left_part question-box marginn">  
	
	<div class="col-sm-12" style=" background:url(Images/pexels-photo.jpeg); backround-size:cover;">   
	   <div class="col-sm-1" style=" background:white;">  </div>
	   <div class="col-sm-10 text-center" style=" background:white; height:auto; opacity:0.7; border:1px solid black; margin-top:10px; margin-bottom:10px; ">   
	    <h1> this is text with opacity </h1>
       </div>  
       <div class="col-sm-1" style=" background:white; ">  </div>
	</div>
	</div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn">  
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of Opacity Properties of CSS   </a></h4>
	  
	  
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>

img{ opacity:0.6;
     filter: alpha(opacity=60); // Internet Explorer
	  }
</style>
<body>  

<img src="Images/e (1).jpg">

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