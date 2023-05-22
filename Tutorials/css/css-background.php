
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
  location.href = "css-border.php";
  }
   function prevpage(){
  location.href = "css-selectors.php";
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

$cssmain = $cssselectors = $cssbackground=$cssborder=$cssmargin=$cssfont=$csstext=$cssimages=$csslink=$cssposition=$cssdisplay=$cssopacity=$cssfloat=$moretag=$cssdropdown = 0;

$cssbackground = "active";
  
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
      <h2>CSS TUTORIALS</h2><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()" ><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->

  

	               
 
	   <div class="row">    
 <div class="col-sm-12">    
 
      <h3><a href="#">Background Tag Of CSS</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What is CSS Background? </a></h4>
	  <p>Definition and Usage. The background shorthand property sets all the background properties in one declaration. The properties that can be set, are: background-color, background-image, background-position, background-size, background-repeat, background-origin, background-clip, and background-attachment</p>
	  <h3> <a href="#">Background Properties :</a></h3>
	  <p>1. background-color</p>
   <p>2. background-image</p>
   <p>3. background-repeat</p>
   <p>4. background-size</p>
   <p>5. background-attachment</p>
    <p>6. background-position</p>
	  
	  <br>
	 
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#"> Examples</a></h4>
	  
	  <h3><a href="#">Backround-color</a></h3>
	  <pre>
	  <<span>h1 style="background-color:red;"> this is heading <<span>/h1>
	  
	  ------------RESULT---------------
	  <h1 style="background-color:red;"> this is heading </h1></pre>
	  
	  
	   <h3><a href="#">Backround-Image</a></h3>
	  <pre><<span>div style="background-image:url(images/flower.jpeg);
	   background-size:cover; height:200px; width:300px;"><<span>/div>
	  
	  ------------RESULT---------------
	  <div style="background-image:url(images/flower.jpeg); background-size:cover; height:200px; width:300px;"> </div></pre>
	  
	   <h3><a href="#">Backround-repeat</a></h3>
	  <pre>
	  ------------------------BEFORE---------------------
	  <div style="background-image:url(images/flower1.jpeg); height:200px; width:300px;"> </div>
	  
	<<span>div style="background-image:url(images/flower.jpeg);
	   background-repeat:no-repeat; height:200px; width:300px;"><<span>/div>
	  
	  
	  ------------RESULT---------------
	   <div style="background-image:url(images/flower.jpeg); background-repeat:no-repeat; height:200px; width:300px;"> </div></pre>
	   
	  
	   
	  
	   <h3><a href="#">Backround-Size</a></h3>
	  <pre>
	  ------------------------BEFORE---------------------
	  <div style="background-image:url(images/flower1.jpeg); height:200px; width:300px;"> </div>
	  
	<<span>div style="background-image:url(images/flower.jpeg);
	   background-size:cover; height:200px; width:300px;"><<span>/div>
	  
	  
	  ------------RESULT---------------
	   <div style="background-image:url(images/flower.jpeg); background-size:cover; height:200px; width:300px;"> </div></pre>
	    
		
		
		
		<h3><a href="#">Backround-attachment</a></h3>
	  <pre>
	  <<span>div style="background-image:url(images/flower.jpeg);
	   background-size:cover; height:200px; width:300px;
	   background-attachment:fixed;"><<span>/div>
	  
	  -----------RESULT---------------
	   <div style="background-image:url(images/flower.jpeg); background-size:cover; height:200px; width:300px; background-attachment:fixed;"> </div></pre>
	  
		
		
		<h3><a href="#">Backround-position</a></h3>
	  <pre>
	  <<span>div style="background-image:url(images/flower2.jpeg); 
	   background-size:300px 200px;
	   background-repeat:no-repeat;
    background-position:right ;
    background-attachment: fixed;
	height:300px; width:100%""><<span>/div>
	  
	  ------------RESULT---------------
	  <div style="background-image:url(images/flower2.jpeg); 
	   background-size:300px 200px;
	   background-repeat:no-repeat;
    background-position:right ;
    background-attachment: fixed;
	height:300px; width:100%"> </div></pre>
	  
	  
	  
	  
	   <h3><a href="#">Shortly Use Background Tag </a></h3>
	  <pre>
	  <<span>div style=" background: #ffffff url('images/flower.jpeg') no-repeat right top;">  <<span>/div>
	  
	  ------------RESULT---------------
	  <div style=" height:100px; width:300px; 
	    background: #ffffff url('images/flower1.jpeg') no-repeat right top;
    margin-right: 200px; "> </div></pre>
	  
	</div>
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn"> 
		<h3>Examples </h3><br> 
      <h4><a href="#"> Format of Internal and Inline CSS ?</a> </h4>
	  <form method="post" >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:340px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>  

#z9{ background:url(Images/flower2.jpeg);
   background-size:cover;
 height:300px; width:300px;  }  
#z9:hover{ background:url(Images/pexels-photo.jpeg);}

h2{ color:#FFFF33;}
</style>  
<body>   
      <div id="z9"> <h2>background images</h2></div>  
	  		   
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
