
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
  location.href = "css-selectors.php";
  }
   function prevpage(){
  location.href = "css-main.php";
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

$cssmain = $cssselectors =$cssbackground=$cssborder=$cssmargin=$cssfont=$csstext=$cssimages=$csslink=$cssposition=$cssdisplay=$cssopacity=$cssfloat=$moretag=$cssdropdown= 0;

$cssmain = "active";
  
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
      <a href="#"><h2>CSS TUTORIALS</h2></a><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()" ><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->

  

	               
 
	   <div class="row">   
 <div class="col-sm-12">   
 
      <a href="#"><h3>Introduction</h3></a><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by CSS? </a></h4>
	  <p>CSS stands for Cascading Style Sheets. CSS describes how HTML elements are to be displayed on screen, paper, or in other media. CSS saves a lot of work. It can control the layout of multiple web pages all at once.</p><br>
	 
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#"> What is the difference between HTML and CSS ?</a> </h4>
	  <p>Quite simply, <code>HTML (Hypertext Markup Language) </code>is used to create the actual content of the page, such as written text, and <code>CSS (Cascade Styling Sheets)</code> is responsible for the design or style of the website, including the layout, visual effects and background color.</p><br>
	 
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">What is CSS in it? </a></h4>
	  <p>CSS is the language for describing the presentation of Web pages, including colors, layout, and fonts. It allows one to adapt the presentation to different types of devices, such as large screens, small screens, or printers. CSS is independent of HTML and can be used with any XML-based markup language.</p><br>
	  
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">How many types Of CSS ?</a></h4>
	  <p>There are three types of CSS are:   </p>
	  <p>1.Inline CSS</p>
	  <p>2.Internal CSS</p>
	  <p>3.External CSS</p>
	  
	  <br>
	  
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn"> 
		<h3>Examples </h3><br> 
      <h4><a href="#"> Format of Internal and Inline CSS ?</a> </h4>
	  <form method="post" >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>  /*-------Internal css ----------------- */
#z9{color:red; font-size:40px; }  
#z9:hover{ color:#00CCFF;}
</style>  
<body>   
      <h1 id="z9"> Internal CSS </h1>  
	  
	  
	  <p style="color:red; font-size:30px;"> Inline CSS </p> <!-- inline css -->
		   
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
	
	 <h4><a href="#"> Format of External CSS ?</a> </h4>
     <h4> Step 1:</h4>
	<p> Create a new HTML page  <code>demo.html</code></p>
	<pre>
	<<span>html>
	< </span>head>
	 <<span>title> sp3hub</</span>title>
	</<span>head>
	<</span>body>
	 <<span>h1 id="demo99"> this is External Css </</span>h1>
	 
	 </<span>body>
	 </<span>html></pre>
	<h5>Result :</h5>
	<h1> This is External Css</h1><hr>

	<h4>Step 2: </h4>
	<p><a href="#"> Create a CSS page </a><code>"Style.css"</code> </p>
	<mark> CSS Page create with  Pagename.css Extension </mark>
	<div class="col-sm-12" style="height:20px;"> </div>
	 <pre>
	  #demo99{ color:red; }
	  #demo99:hover{ color:#00CCFF;}
	  
	 </pre> 
	 <mark> Id(#) And Class(.) are used to connect html and css tags </mark>
	 <h4>Step 3: </h4>
	 <p>Now Connect Or Link Both Pages In Head Section Of HTML Page  <code>"demo.html"</code> </p>
	  <<span>head><br><code> < </span>link rel="stylesheet" type="text/css" href="style.css"> </code><br> <<span>/head> </span> <div>  </br> </div>
	  
	  <mark>Then Save Both pages And Check be you were be used <code>Link Tag</code> in Head section HTML Page </mark>
	  <div>  </br> </div>
	  
	  <h4> Final Result : </h4>
	  <h1 id="dem99">  This is External Css </h1>
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