
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
  location.href = "css-dropdown.php";
  }
   function prevpage(){
  location.href = "css-tag.php";
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
   
   .demonav li{ height:40px; width:100px; background:black; display:block; 
   float:left; text-align:center; border:1px solid white;
   
   }
   .demonav li:hover{ background:red;}
      .demonav li a{ line-height:40px; color:white; }
	  
	  /*    submenu or dropdown            */
   .demonav li ul li{ float:none; position:relative; z-index:99; display:none;}
   .demonav li:hover ul li { display:block; }

   
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

$cssdropdown = "active";
  
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
 
      <h3><a href="#">CSS Dropdown Navigation</a></h3><br>
	  
	  
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#">How to Create Simple css navigation menu? </a></h4>
      <div class="col-sm-12" style=" margin-bottom: 10px;">
	  <ul class="demonav">
	   <li><a href="#"> Home    </a></li>
	   <li><a href="#"> About    </a></li>
	   <li><a href="#"> Service    </a></li>
	   <li><a href="#"> Contact    </a></li>
	  
	  </ul> 
	 
	  </div>
	  
	  <div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left " >    
		 <h3>Html Code</h3>
		 <br>
		 <br> <br><br>
		<span>   <<span>ul ><br>
	   <<span>li><<span>a href="#"> Home    <<span>/a><<span>/li><br>
	   <<span>li><<span>a href="#"> About    <<span>/a><<span>/li><br>
	   <<span>li><<span>a href="#"> Service    <<span>/a><<span>/li><br>
	   <<span>li><<span>a href="#"> Contact    <<span>/a><<span>/li><br>
	  
	  <<span>/ul> </span> <br><br>
		</div>
		<div class="col-sm-6 pre-right" >
		    
		 <h3>Css Code</h3>
		<h4> ul li </h4>{ height:40px; width:100px; background:black; display:block; float:left; text-align:center; border:1px solid white;
   
   }
   <h4>ul li:hover </h4>{ background:red;}
   <h4>ul li a</h4>{ line-height:40px; color:white; text-decoration:none;}<br><br>
	</div>
	 
		</div>
		
	       </div></div>
	    </div>
	
		
		
		<div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#">How to Create Dropdown css navigation menu? </a></h4>
      <div class="col-sm-12" style=" margin-bottom: 10px;">
	  <ul class="demonav">
	   <li><a href="#"> Home    </a>
	   <ul>
	   <li><a href="#">1    </a></li>
	   <li><a href="#"> 2    </a></li>
	   <li><a href="#"> 3   </a></li>
	   </ul>
	   </li>
	   
	   <li><a href="#"> About    </a>
	   
	   </li>
	   <li><a href="#"> Service    </a></li>
	   <li><a href="#"> Contact    </a></li>
	  
	  </ul> 
	 
	  </div>
	  
	  <div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left " >    
		 <h3>Html Code</h3>
		 <br>
		 <br> 
		<span>   <<span>ul ><br>
	   <<span>li><<span>a href="#"> Home    <<span>/a><br>
	    &nbsp;&nbsp;<<span>ul><br>
	   &nbsp;&nbsp;<<span>li>< <span>a href="#">1    <<span>/a><<span>/li><br>
	   &nbsp;&nbsp;<<span>li><<span>a href="#"> 2    <<span>/a><<span>/li><br>
	  &nbsp;&nbsp; <<span>li><<span>a href="#"> 3   <<span>/a><<span>/li><br>
	   &nbsp;&nbsp;<<span>/ul><br>
	   
	   <<span>/li><br>
	   <<span>li><<span>a href="#"> About    <<span>/a><<span>/li><br>
	   <<span>li><<span>a href="#"> Service    <<span>/a><<span>/li><br>
	   <<span>li><<span>a href="#"> Contact    <<span>/a><<span>/li><br>
	  
	  <<span>/ul> </span> <br><br><br><br>
		</div>
		<div class="col-sm-6 pre-right" >
		    
		 <h3>Css Code</h3>
		 <h4>.ul li</h4>{ height:40px; width:100px; background:black; display:block; 
   float:left; text-align:center; border:1px solid white;
   
   }
   <span>.ul li:hover</span>{ background:red;}
      <h4>ul li a</h4>{ line-height:40px; color:white; text-decoration:none; }<br>
	  
	<span style="color:green;">  /*    submenu or dropdown            */</span>
   <h4>ul li ul li</h4>{ float:none; position:relative; z-index:99; display:none;}
   <h4>ul li:hover ul li</h4> { display:block; }
	</div>
	 
		</div>
		
	       
	    </div>
	
		
	
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn">  
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of navigation of CSS   </a></h4>
	  
	  
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:800px; width:100%; " class="family"><html>   
<head>   
   <title> SP3hub</title>
 <style>
   .demo99 li{ height:40px; width:100px; background:black; display:block; 
   float:left; text-align:center; border:1px solid white;
   
   }
   .demo99 li:hover{ background:red;}
      .demo99 li a{ line-height:40px; color:white;  text-decoration:none;}
	  
	  /*    submenu or dropdown            */
   .demo99 li ul li{ float:none; position:relative; z-index:99; display:none;
   right:40px;}
   .demo99 li:hover ul li { display:block; }

   
</style>   
</head> 

<body>  

  <ul class="demo99">
	   <li><a href="#"> Home    </a>
	   <ul>
	   <li><a href="#">1    </a></li>
	   <li><a href="#"> 2    </a></li>
	   <li><a href="#"> 3   </a></li>
	   </ul>
	   </li>
	   
	   <li><a href="#"> About    </a>
	   
	   </li>
	   <li><a href="#"> Service    </a></li>
	   <li><a href="#"> Contact    </a></li>
	  
	  </ul></textarea>  <br>
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
