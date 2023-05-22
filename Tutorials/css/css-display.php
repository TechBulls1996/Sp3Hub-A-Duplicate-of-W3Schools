
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
  location.href = "css-opacity.php";
  }
   function prevpage(){
  location.href = "css-position.php";
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
   
   .rediv{ display:none;}
   .rediv2:hover .rediv{ display:block;}
   
   #appe li{ height:20px; width:70px; background:#00CCFF; border:1px solid;
		text-align:center; line-height:20px; list-style:none; }
		
		#appe2{ display:block; margin:0px; padding:0px;}
		#appe2 li{ height:50px; width:160px; background:#00CCFF; border:1px solid;
		text-align:center; line-height:40px;   display:inline;}
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

$cssdisplay = "active";
  
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
 
      <h3><a href="#">CSS Display Tag</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by Display Property in CSS? </a></h4>
	  <p> <code>Display </code>is CSS's most important property for controlling layout. Every element has a default display value depending on what type of element it is. The default for most elements is usually block or inline . A block element is often called a block-level element. An inline element is always just called an inline element </p>
	  
	  
	    </div>
	
		
		
		
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Properties Of Css Display are :- </a></h4>
	  <p><a href="#">1.Display Block</a></p>
	  
	   <p><a href="#">2.Display None</a></p>
	   <p><a href="#">3.Display Inline</a></p>
	    
		
	  <br>
	  
	    </div>
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#"> What Is Display Block Property In CSS ? </a></h3>
		<p> <code>Display Block</code> is CSS's most important property for controlling layout. Every element has a default display value depending on what type of element it is. The default for most elements is usually block or inline . A block element is often called a block-level element. An inline element is always just called an inline element. </p>
		 <h3><a href="#"> What Is Display None Property In CSS ? </a></h3>
		<p> <code>Dispaly Block ,</code> The default display value for most elements is block or inline . Click to show panel. This panel contains a < <span>div> element, which is hidden by default ( display: none ). It is styled with CSS, and we use JavaScript to show it (change it to ( display: block )</p>
		
		<h4><a href="#"> Example of Dispaly Block  And Display None Property</a></h4>
		<p> <mark><code>Dispaly none</code> hide elements and <code>diplplay block</code> work to unhide mostly we use with <code>javascript </code></mark></p>
		<div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left " >    
		 <h3>Display None</h3>
		<div style="height:100px; width:100px; background:red; display:none;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br><p> Hide red div </p><br>
		<br><br><br><br>
		<p><h4> red </h4>{ height:100px; width:100px; background:red; <code>display:none;</code>}</p>
		<p><h4> yellow</h4> { height:100px; width:100px; background:yellow; }</p>
		</div>
		<div class="col-sm-6 pre-right" >
		    
		 <h3>Display Block</h3>
		<div style="height:100px; width:100px; background:red; display:block;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		
		
		<p><h4> red</h4>{ height:100px; width:100px; background:red; <code>display:block;</code> } </p>
		<p> <h4>yellow </h4>{ height:100px; width:100px; background:yellow; }</p>
			
			
	</div>
	 
		</div>
		
		</div>
	
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#"> What Is display Inline In CSS ? </a></h3>
		<p> <code>Dispaly Inline ,</code>  is CSS's most important property for controlling layout. Every element has a default display value depending on what type of element it is. The default for most elements is usually block or inline . A block element is often called a block-level element. An inline element is always just called an inline element.</p>
		
		<h4><a href="#"> Example Display none </a></h4>
		<div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left " > 
		<h3>Before</h3>
		
		 <ul id="appe">
		 <li> apple </li> 
		 <li> mango</li>

		  
		 </ul>  
		
		
		<p><h4>ul li </h4>{height:20px; width:70px;
		 background:#0CF; border:1px solid;
		text-align:center; line-height:20px; list-style:none;
		} </p>
		</div>
		
		<div class="col-sm-6 pre-right" >    
		<h3>After</h3>
		
		 <ul id="appe2">
		 <li > apple </li> 
		 <li> mango</li>
         
		 </ul>  
		
		
		<p><h4>ul li </h4>{ height:20px; width:70px; background:#0CF; border:1px solid;
		text-align:center; line-height:20px; list-style:none; <code>display:inline;</code>
		} </p>
		</div>
	</div></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn">  
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of Display  Properties of CSS   </a></h4>
	  
	  
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>
a {
    display: block;
}

li {
    display: inline;
}

h2{ display:none;}
</style>
<body>  
<a href="#"> click </a> 
<a href="#"> click 1 </a> 
<a href="#"> click 2</a>

<ul>
  <li>click</li>
  <li>clcik 1</li>
  <li>clcik 2</li>
</ul>

<h2> this is heading </h2>
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