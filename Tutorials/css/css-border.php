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
  
   <script language="javascript"  type="text/javascript">
  function tryit() {
    window.open('tryit.php');
}
  
  function nextpage(){
  location.href = "css-margin.php";
  }
   function prevpage(){
  location.href = "css-background.php";
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

$cssborder = "active";
  
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
 
      <h3><a href="#">CSS Border</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by CSS Border? </a></h4>
	  <p>The border CSS property is a shorthand property for setting the individual border property values in a single place in the style sheet. border can be used to set the values for one or more of: border-width , border-style , border-color </p>
	  <p><strong>1. Border Style</strong></p>
	 <p><strong>2. Border Width</strong></p>
	 <p><strong>3. Border color</strong></p>
	 <p><strong>4. Border radius</strong></p>
	 <p><strong>5. Border Shorthand</strong></p>
	 
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Examples of css Border  </a></h4>
	  <p style="border:1px solid black; padding:5px;"> This is <code>simple border </code>of css <code>style="border:1px solid black;"</code> </p>
	   <p style="border:1px solid red; padding:5px; border-radius:10px;"> This is <code>rounded border</code> of css <code>style="border:1px solid red; border-radius:10px;"</code> </p>
	    <p style="border-left:4px solid green; padding:5px;"> this is <code>One sided border eg:-left,right,bottom & top etc</code> of css <code>style="border-left:4px solid green;"</code> </p>
	  
	  <br>
	 
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">1. Border Style </a></h4>
	  <p>CSS Property: border-style. The style of the border of a box. The border style, combined with border width and border color, can also be specified with the border shorthand property. With one value, the border-style property can be used to specify a uniform style border around a box.</p>
	  <p><a href="#">1. Dotted </a>- Defines a dotted border </p>
     <p><a href="#">2. Dashed </a>- Defines a dashed border</p>
     <p><a href="#">3. Solid </a>- Defines a solid border</p>
      <p><a href="#">4. Double </a>- Defines a double border</p>
      <p><a href="#">5. Groove</a> - Defines a 3D grooved border. The effect depends on the border-color value</p>
       <p><a href="#">6. Ridge</a> - Defines a 3D ridged border. The effect depends on the border-color value</p>
     <p><a href="#">7. Inset</a> - Defines a 3D inset border. The effect depends on the border-color value</p>
     <p><a href="#">8. Outset</a> - Defines a 3D outset border. The effect depends on the border-color value</p>
    <p><a href="#">9. None</a> - Defines no border</p>
    <p> <a href="#">10. Hidden</a> - Defines a hidden border</p>
	  <pre>
	  <h4 style="border:2px dotted black;"> This is Dotted Border       Style="border:2px dotted black;"  </h4>
	  <h4 style="border:2px dashed black;"> This is Dashedd Border       Style="border:2px dashed black;"  </h4>
	  <h4 style="border:2px solid black;"> This is Solid Border       Style="border:2px solid;"  </h4>
	 
	 <h4 style="border: double black;"> This is Double Border       Style="border:double black;"  </h4>
	  <h4 style="border:groove black;"> This is Groove Border       Style="border:groove black;"  </h4>
	  
	   <h4 style="border: ridge;"> This is Ridge Border       Style="border:Ridge;"  </h4>
	   <h4 style="border:inset;"> This is Inset Border       Style="border:Inset;"  </h4>
	  
	  <h4 style="border:outset;"> This is Outset Border       Style="border:outset;"  </h4>
     <h4 style="border:none;"> This is None Border       Style="border:None;"  </h4>
    <h4 style="border:Hidden;"> This is Hidden Border       Style="border:hidden;"  </h4>
	  </pre>
	  <br>
	  
	    </div>
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn"> 
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of Border </a></h4>
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:650px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<body>   
      <h4 style="border:2px dotted black;"> This is Dotted Border       Style="border:2px dotted black;"  </h4>
	  <h4 style="border:2px dashed black;"> This is Dashedd Border       Style="border:2px dashed black;"  </h4>
	  <h4 style="border:2px solid black;"> This is Solid Border       Style="border:2px solid;"  </h4>
	 
	 <h4 style="border: double black;"> This is Double Border       Style="border:double black;"  </h4>
	  <h4 style="border:groove black;"> This is Groove Border       Style="border:groove black;"  </h4>
	  
	   <h4 style="border: ridge;"> This is Ridge Border       Style="border:Ridge;"  </h4>
	   <h4 style="border:inset;"> This is Inset Border       Style="border:Inset;"  </h4>
	  
	  <h4 style="border:outset;"> This is Outset Border       Style="border:outset;"  </h4>
     <h4 style="border:none;"> This is None Border       Style="border:None;"  </h4>
    <h4 style="border:Hidden;"> This is Hidden Border       Style="border:hidden;"  </h4>
	     
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