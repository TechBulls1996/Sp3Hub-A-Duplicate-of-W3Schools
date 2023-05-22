
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
    <link rel="stylesheet" href="js-main.css? <?php  echo 1; ?>">
 
 
 
    <script language="javascript" type="text/javascript">
  function tryit() {
    window.open('tryit.php');
}
  
  function nextpage(){
  location.href = "js-output.php";
  }
   function prevpage(){
  location.href = "js-main.php";
  }
 
  </script>
  
  <style>
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

$js2 = "active";
  
include('js-sidenav.php');
  
  ?>
	<div class="container-fluid text-center">           
   <div class="row">  
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center ">     
    <div class="row">     
	
           <!--   center   ---------------------->
 <div class="col-sm-12 text-left center">     
      <a href="#"><h2>JAVASCRIPT TUTORIALS</h2></a><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()" ><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">NEXT <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->

  

	               
 
	   <div class="row">   
 <div class="col-sm-12">   
 
      <a href="#"><h3>Js Syntax && Comments</h3></a><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by Javascript syntax ? </a></h4>
	  <p>JavaScript is most commonly used as a client side scripting language And Its starts from its own script syntax <code><<span>script> javascript coding <<span>/script></code></p><br>
	 
	    </div>
		
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">What is javascript comment and how we use them ? </a></h4>
	  <p>Creating Single Line Comments. To create a single line comment in JavaScript, you place two slashes "//" in front of the code or text you wish to have the JavaScript interpreter ignore. When you place these two slashes, all text to the right of them will be ignored, until the next line.
      
      </p>
	 
	<div class="col-sm-12"> <br> </div>
	  
	    </div>
      <script>
	
	  </script>  
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Javascript Variables syntax</a></h4>
      <div class="col-sm-12 example">
      <span style="color:blue;">var</span> zz =<span style="color:red;"> 1;</span> <br>
      <span style="color:blue;">var</span> x = <span style="color:red;">"ram";</span>
      <br>
	 </div>
	<div class="col-sm-12"> <br> </div>
	  
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Javascript Operators syntax</a></h4>
	 <div class="col-sm-12 example">
      <span style="color:blue;">var</span> zz =<span style="color:red;"> 1;</span> <br>
      <span style="color:blue;">var</span> x = <span style="color:red;">"ram";</span>
      <br><br>	
      
      <span style="color:blue;"> var zz + var x </span><span style="color:green;">// "+" is operator </span>
      <br>
	 </div>	  
	    </div>
		
        
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Javascript single line comments </a></h4>
	 <div class="col-sm-12 example">
     <<span>script>
	 <br>
	 <span style=" color:blue;">var zz </span>= <span style="color:red;">1;</span><br><br>
    <span style="color:green;"> // this is a variable in javascript</span>
	 <br>
	 <</span>/script>
      
      <br>
	 </div>	  
	    </div>
        
        
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Javascript Multiple  line comments </a></h4>
	 <div class="col-sm-12 example">
     <<span>script>
	 <br>
	 <span style=" color:blue;">var zz </span>= <span style="color:red;">1;</span><br><br>
    <span style="color:green;"> /* <br>
    this is a variable in javascript<br>
    variable use syntax " var "<br>
    */
    
    </span>
	 <br>
	 <</span>/script>
      
      <br>
	 </div>	  
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

<footer class="container-fluid">
  <?php  include('footer.php');  ?>
</footer>
</body> 
</html> 