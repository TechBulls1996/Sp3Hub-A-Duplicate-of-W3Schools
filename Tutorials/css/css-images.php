
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HTML TUTORIALS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="css-main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
   <script language="javascript" type="text/javascript">
  function tryit() {
    window.open('tryit.php');
}
  
  function nextpage(){
  location.href = "css-link.php";
  }
   function prevpage(){
  location.href = "css-font.php";
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

$cssimages = "active";
  
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
 
      <h3><a href="#">CSS Images</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by images in CSS? </a></h4>
	  <p>CSS Images is a module of CSS that defines what types of images can be used (the <<span>image> type, containing URLs, gradients and other types of images), how to resize them and how they, and other replaced content, interact with the different layout models </p>
	  
	  
	    </div>
	
		
		
		
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Properties Of Css Images Are :- </a></h4>
	  <p><a href="#">1. Image Border</a></p>
	  <p><a href="#">2. Image Height, Width</a></p>
	   <p><a href="#">3. Image Position</a></p>
	    <p><a href="#">4. Image hover </a></p>
	 
	
	  <br>
	  
	    </div>
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#">Image Border </a></h3>
		<p> <code>Image Border </code> Works to set border on image .</p>
		
		<pre>
		<div style="height:200px; width:250px; background-image:url(Images/flower2.jpeg); background-size:cover; border: 5px solid #00CCFF;">  </div>
		div { height:200px; width:250px;
		 background-image:url(Images/flower2.jpeg); background-size:cover;
		  border: 5px solid #00CCFF;}
	  </pre>
	
	</div>
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn">  
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of Image Properties of CSS   </a></h4>
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<body>   
      
	  <div style="height:50px; width:50px; background:red; margin-left:20px; margin-top:10px;"> margin </div>
	  <p>margin works outside the tag. here margin moves the div from outside</p>
	  <br><br>
	   
	    <div style="height:80px; width:80px; background:red; padding-left:30px; padding-top:30px; float:left;">padding </div>
		
		<p>padding works inside the tag. here padding moves the text inside the div</p>
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