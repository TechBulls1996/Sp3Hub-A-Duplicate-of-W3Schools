
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
    <link rel="stylesheet" href="css-main.css ?<?php  ?>">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
   <script language="javascript" type="text/javascript">
  function tryit() {
    window.open('tryit.php');
}
  
  function nextpage(){
  location.href = "css-display.php";
  }
   function prevpage(){
  location.href = "css-link.php";
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

$cssposition = "active";
  
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
 
      <h3><a href="#">CSS Position Tag</a></h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by Position in CSS? </a></h4>
	  <p> Position properties defines the positioning of elements in for methods fixed , absolute ,relative & static etc . </p>
	  
	  
	    </div>
	
		
		
		
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Properties Of Css Postion are :- </a></h4>
	  <p><a href="#">1. Absolute Position</a></p>
	  <p><a href="#">2. Relative Position</a></p>
	   <p><a href="#">3. Fixed Position</a></p>
	    <p><a href="#">4. Static Position</a></p>
		 <p><a href="#">5. Top , Left , Right & bottom <Code>(These Tags are used after using position tag .)</Code></a></p>
		 <p><a href="#">6. Z-Index</a></p>
	 
	
	  <br>
	  
	    </div>
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#"> What Is Absolute Position In CSS ? </a></h3>
		<p> <code>Absolute Position</code> used to specify element upward from its original location and adjust by using top,bottom ,left & right tags </p>
		
		<h4><a href="#"> Example of Absolute Position </a></h4>
		<div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left " >    
		 <h3>Before</h3>
		<div style="height:100px; width:100px; background:red;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		<p><h4> red </h4>{ height:100px; width:100px; background:red;}</p>
		<p><h4> yellow</h4> { height:100px; width:100px; background:yellow; }</p>
		
		</div>
		
		
		<div class="col-sm-6 pre-right" >    
		 <h3>After</h3>
		<div style="height:100px; width:100px; background:red; position:absolute;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		<br>
		<br><br><br>
		<p><h4> red</h4>{ height:100px; width:100px; background:red; <code>position:absolute;</code> } </p>
		<p> <h4>yellow </h4> { height:100px; width:100px; background:yellow; }</p>
		
	
		</div>
		
		

		</div>
	</div>
	
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#"> What Is Relative Position In CSS ? </a></h3>
		<p> <code>Relative Position</code> is a point established with reference to another position that is either moving or fixed. The coordinates of this point are usually true or bearing and are a distance away from the point of reference. </p>
		
		<h4><a href="#"> Example Relative Position </a></h4>
		<div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left " >    
		 <h3>Before</h3>
		<div style="height:100px; width:100px; background:red;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		<p><h4> red </h4>{ height:100px; width:100px; background:red;}</p>
		<p><h4> yellow</h4> { height:100px; width:100px; background:yellow; }</p>
		</div>
		<div class="col-sm-6 pre-right" >    
		 <h3>After</h3>
		<div style="height:100px; width:100px; background:red; position:relative;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		
		
		<p><h4> red</h4>{ height:100px; width:100px; background:red; <code>position:relative;</code> } </p>
		<p> <h4>yellow </h4>{ height:100px; width:100px; background:yellow; }</p>
		
		</div>
		<div class="col-sm-12 " >    
		
		<div style="height:100px; width:100px; background:red; position:relative;
		left:30%; top:20px;" > </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
	
		<p><h4> red</h4>{ height:100px; width:100px; background:red; <code>position:reative; top:20px; left:300px; </code> } </p>
		<p> <h4>yellow </h4>{ height:100px; width:100px; background:yellow; }</p>
		</code>
		</div>
	 
		
	 </div>
	
<h3>Hint:-</h3><h5><mark> Reative cannot change anything without condition but you can use top,left,bottom & right tags with position: relative;</mark> </h5>
	</div>
	
	
	
	
	
	<div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#"> What Is Fixed Position In CSS ? </a></h3>
		<p> <code>Fixed Position</code> , An element with position: fixed; is positioned relative to the viewport, which means it always stays in the same place even if the page is scrolled. The top, right, bottom, and left properties are used to position the element. </p>
		
		<h4><a href="#"> Example of fixed Position </a></h4>
		<div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left " >    
		 <h3>Before</h3>
		<div style="height:100px; width:100px; background:red;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		<p><h4> red </h4>{ height:100px; width:100px; background:red;}</p>
		<p><h4> yellow</h4> { height:100px; width:100px; background:yellow; }</p>
		
		</div>
		
		
		<div class="col-sm-6 pre-right" >    
		 <h3>After using Fixed Position</h3>
		 <form method="post"  >  
	   <textarea name="trytext1" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>
#z99{ height:1000px;}
</style>
<body>
<div id="z99">
   
    <div style="height:100px; width:100px; background:red; position:fixed; right:100px; "> </div>
	
	<div style="height:100px; width:150px; background:yellow;"> </div><br>
		</div> 
</body>
</html>	
      </textarea>  <br>
	  <input type="submit" name="trysub1" class="but " onClick="tryit()" value="Try It Live"> 	  
	  </form> 
	  <?php
	 if(isset($_POST['trysub1']))
	 {
	  $_SESSION['tryitt']=$_POST['trytext1'];
	  }
	  ?> 
	
		
		

		</div>
	</div>
	</div>
	
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#"> What Is Static Position In CSS ? </a></h3>
		<p> <code>Static Position</code> is not positioned in any special way; it is always positioned according to the normal flow of the page</p>
		<h5><mark> It doesnot support<code> top, left ,right & bottom </code>tags </mark> </h5>
		
		<h4><a href="#"> Example Static Position </a></h4>
		<div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left " >    
		 <h3>Before</h3>
		<div style="height:100px; width:100px; background:red;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		<p><h4> red </h4>{ height:100px; width:100px; background:red;}</p>
		<p><h4> yellow</h4> { height:100px; width:100px; background:yellow; }</p>
		</div>
		<div class="col-sm-6 pre-right" >    
		 <h3>After</h3>
		<div style="height:100px; width:100px; background:red; position:static;"> </div>
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		
		
		<p><h4> red</h4>{ height:100px; width:100px; background:red; <code>position:static;</code> } </p>
		<p> <h4>yellow </h4>{ height:100px; width:100px; background:yellow; }</p>
		
		</div>
		
		
	 </div>
	<h4>hint:- <mark> No Changes After using Static Position </mark></h4>
 </div>
	
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	    <h3><a href="#"> What Is Z-Index In CSS ? </a></h3>
		<p> <code>Z-index</code> property specifies the stack order of an element. An element with greater stack order is always in front of an element with a lower stack order. Note: z-index only works on positioned elements (position:absolute, position:relative, or position:fixed).</p>
		
		
		<h4><a href="#"> Example Z-index </a></h4>
		<code> Z-index works on the z-axis or toward the user like 3D</code>
		<div class="col-sm-12 pre-tag">
		
		<div class="col-sm-6 pre-left ">    
		 <h3>Before</h3>
		<div style="height:100px; width:150px; background:red; position:absolute; "> 
		
		</div>
		<h2 style="color:green;"> with z-index <<span>h2> </h2>
		<br><br><br>
		<p><h4> red </h4>{ height:100px; width:150px; background:red; position:absolute; }</p>
		<p><h4> h2</h4> {  color:green; }</p>
		</div>
		<div class="col-sm-6 pre-right"  >    
		 <h3>After</h3>
		 <div style="height:100px; width:150px; background:red; position:absolute; "> 
		
		</div>
		<h2 style="color:green; position:absolute; z-index:9;"> with z-index <<span>h2> </h2>
		<br><br><br><br><br>
		<p><h4> red </h4>{ height:100px; width:150px; background:red; position:absolute; }</p>
		<p><h4> h2</h4> {  color:green; z-index:9; }</p>
		</div>
		</div>
		</div>
	
	
	
	
	
	
	
	
	
	
	
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn">  
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of Position Properties of CSS   </a></h4>
	  <form method="post"  >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>

</style>
<body>  
<h4> check to remove { postion:absolute;} from the css </h4>
 
    <div style="height:100px; width:100px; background:red; position:absolute;"> </div>
	
		<div style="height:100px; width:150px; background:yellow;"> </div><br>
		<br>
	  
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