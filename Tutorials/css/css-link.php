
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
  location.href = "css-position.php";
  }
   function prevpage(){
  location.href = "css-images.php";
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
   #trail:hover{ color:red;}
   #trail1:active{ color:blue;}
   #trail2:focus{color:green;}  </style>
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

$csslink = "active";
  
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
 
      <h3><a href="#">CSS Link [ Hover, Active & Focus ]</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by Link in CSS? </a></h4>
	  <p>The :link selector is used to select unvisited links. Note: The :link selector does not style links you have already visited. Tip: Use the :visited selector to style links to visited pages, the :hover selector to style links when you mouse over them, and the :active selector to style links when you click on them </p>
	  
	  
	    </div>
	
		
		
		
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Properties Of Css Link Are :- </a></h4>
	  <p><a href="#">1.Remove Underline of Link</a></p>
	  <p><a href="#">2.Link Hover</a></p>
	   <p><a href="#">3. Link Focus</a></p>
	    <p><a href="#">4. Link Active </a></p>
	 
	
	  <br>
	  
	    </div>
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#">Remove Underline of Link Tag </a></h3>
		
		
		<pre>
		--------------Before-----------------
		<a href="#" style=" text-decoration:underline; font-size:20px; " > click Here  </a>
		
		-----------------After----------------
		<a href="#" style="text-decoration:none;  font-size:20px; " > click Here  </a>
		
		a{ text-decoration:none;  font-size:20px; }
		
	  </pre>
	  
	   <h3><a href="#">Hover Link </a></h3>
		<p>he <code>:hover </code> selector is used to select elements when you mouse over them. Tip: The :hover selector can be used on all elements, not only on links. Tip: Use the :link selector to style links to unvisited pages, the :visited selector to style links to visited pages, and the :active selector to style the active link.</p>
		
		<pre>
		--------------Before-----------------
		<a href="#" style=" text-decoration:underline; font-size:20px; " > click Here  </a>
		
		-----------------After----------------
		<a href="#" id="trail" style="text-decoration:none;  font-size:20px;}"  > click Here  </a>
		
		a{ text-decoration:none;  font-size:20px; }
		a:hover{ color:red;}
		
	  </pre>
	  
	   <h3><a href="#">Active Link </a></h3>
		<p> The <code>:active </code>selector is used to select and style the active link. A link becomes active when you click on it. Tip: The :active selector can be used on all elements, not only links</p>
		
		<pre>
		--------------Before-----------------
		<a href="#" style=" text-decoration:underline; font-size:20px; " > click Here  </a>
		
		-----------------After----------------
		<a href="#" id="trail1" style="text-decoration:none;  font-size:20px;}"  > click Here  </a>
		
		a{ text-decoration:none;  font-size:20px; }
		a:active{ color:red;}
		
	  </pre>
	  
	  
	   <h3><a href="#">Focus Link </a></h3>
		<p> The <code>:focus </code> pseudo class in CSS is used for styling an element that is currently targeted by the keyboard, or activated by the mouse. Here is an example: a:focus { background:red; }</p>
		
		<pre>
		--------------Before-----------------
		<a href="#" style=" text-decoration:underline; font-size:20px; " > click Here  </a>
		
		-----------------After----------------
		<a href="#" id="trail2" style="text-decoration:none;  font-size:20px;}"  > click Here  </a>
		
		a{ text-decoration:none;  font-size:20px; }
		a:focus{ color:red;}
		
	  </pre>
	
	</div>
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn">  
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of Link Properties of CSS   </a></h4>
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>
h1 a:hover{ color:red;}
h2 a:active{ color:green;}
h3 a:focus{ color:pink;}
</style>
<body>   
      <p> click or hover on the below text </p>
	  <h1><a href="#"> Hover</a></h1> 
	  
	  <h2><a href="#"> Active</a></h2>
	  
	  <h3><a href="#">focus </a></h3>
	  
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