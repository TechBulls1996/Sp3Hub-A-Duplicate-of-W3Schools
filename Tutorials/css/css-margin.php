
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
  location.href = "css-text.php";
  }
   function prevpage(){
  location.href = "css-border.php";
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
$cssmargin = "active";
  
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
 
      <h3><a href="#">CSS Margin & Padding</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by Margin in CSS? </a></h4>
	  <p>The CSS margin properties are used to generate space around elements. The margin properties set the size of the white space outside the border. With CSS, you have full control over the margins. There are CSS properties for setting the margin for each side of an element <code>(top, right, bottom, and left).</code> </p>
	  <p><code>1. Margin-top</code></p>
	  <p><code>2. Margin-bottom</code></p>
	  <p><code>3. Margin-left</code></p>
	  <p><code>4. Margin-right</code></p>
	   <p><mark>Margin works to move from outside</mark> </p>
	   <p>
	   <div style="height:150px; background:lightgreen;" class="col-sm-5"><div class="row">
	     <div style="height:50px; width:50px; background:red;">margin  </div>
	   </div>
	   <h4> div { <br>
	   margin:0px; 
	   } 
	   </h4>
	   </div>
	    <div style="height:150px; background:lightgreen; border-left:4px solid black;" class="col-sm-5"><div class="row">
	     <div style="height:50px; width:50px; background:red; margin-left:20px; margin-top:10px;"> margin </div>
		
	   </div>
	    <h4> div { 
		<br>margin-top:10px; 
		<br>margin-left:20px; } 
		</h4>
	    </div>
	   
	  
	   </p>
	    </div>
	
		
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">What is Padding in CSS ? </a></h4>
	   <p>The CSS padding properties are used to generate space around content. The padding clears an area around the content (inside the border) of an element. With CSS, you have full control over the padding. There are CSS properties for setting the padding for each side of an element (top, right, bottom, and left). </p>     
	   <p><code>1. padding-top</code></p>
	  <p><code>2. Padding-bottom</code></p>
	  <p><code>3. Padding-left</code></p>
	  <p><code>4. Padding-right</code></p>
	   <p><mark>Padding works to increase size from inside and move inside the tag</mark> </p>
	   <p>
	   <div style="height:150px; background:lightgreen;" class="col-sm-5"><div class="row">
	     <div style="height:50px; width:50px; background:red;">padding  </div>
	   </div>
	   <h4> div { <br>
	   padding:0px; 
	   } 
	   </h4>
	   </div>
	    <div style="height:150px; background:lightgreen; border-left:4px solid black;" class="col-sm-5"><div class="row">
	     <div style="height:80px; width:80px; background:red; padding-left:30px; padding-top:30px; float:left;">padding </div>
		
	   </div>
	    <h4> div { 
		<br>padding-top:10px; 
		<br>padding-left:20px; } 
		</h4>
	    </div>
	   
	  
	   </p>
	  
	  <div class="col-sm-12"><br> </div>
	 
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">What is the Difference Between Margin And Padding ? </a></h4>
	  <p>As you can see the margin defines the space outside your border and between other elements, while the padding defines the space between your element and the elements border. Hopefully by understanding the difference you can more effectively utilize your CSS margin and CSS padding properties.</p>
	 
	
	  <br>
	  
	    </div>
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn"> 
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of Margin And Padding   </a></h4>
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:350px; width:100%; " class="family">   
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
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">How to use margin or padding in Shorthand method ? </a></h4>
	 <h4> margin</h4>
	  <pre> margin:top right bottom left;<h3>Example</h3>margin:10px 30px 20px 100px;	  
	  </pre>
	 
	<h4> Padding</h4>
	  <pre> padding:top right bottom left;<h3>Example</h3> padding:10px 30px 20px 100px;	  
	  </pre>
	 
	  <br>
	  
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