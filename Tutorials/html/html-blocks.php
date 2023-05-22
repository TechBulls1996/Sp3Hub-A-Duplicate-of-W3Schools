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
    <link rel="stylesheet" href="html-main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script>
  function tryit() {
    window.open('tryit.php');
}
   function nextpage(){
  location.href = "html-iframes.php";
  }
   function prevpage(){
  location.href = "html-lists.php";
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
   .sidenav{width:100%;}
   .center{width:100%;}
   }
  </style>
</head>
<body>
<!--- nav ---------->


<?php
   include('head.php');
  ?>   
   

<!--   end nav ------->
  
<div class="container-fluid text-center" >    
   <div class="row content">
  
  <!-- left side nav ---------------------->
   <?php
$htmlmain = $htmleditors = $htmltags = $htmlheading = $htmlstyle = $htmlformat = $htmlcomments = $htmltest = $htmlembed= $htmlfont = $htmliframes= $htmlblocks = $htmllists =  $htmltables = $htmlvideo= $htmlaudio= $htmlimages= $htmllinks = $htmlquotation = $htmlquiz= $htmlexercises = $htmlexamples = $htmlinputs = $htmlformelements = $htmljavascript = $htmleditors =$htmldiv = 0;


$htmlblocks="active";
  
include('html-sidenav.php');
  
  ?>
	
	
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center ">
    <div class="row">
	
	<div class="col-sm-12 text-left center ">
      <h2>HTML-5 TUTORIALS</h2><br>
    <div class="col-sm-12">
	 <div class="col-sm-12">
	<button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
 
  <h3>1. HTML Blocks Elements</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is Blocks Elements?</h4>
	<p>HTML (Hypertext Markup Language) elements are usually either "block-level" elements or "inline" elements. A block-level element occupies the entire space of its parent element (container), thereby creating a "block."</p>
	<p>1.Heading tags</p>
	<p>2. Paragraph tags </p>
	<p>3.Div tags </p>
	<h3>HINT:</h3>
	<p><mark>Block elements are always start with a new line</mark> </p>
	
	</div>
	  <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	<h4>Example</h4>
	<form method="post">
	<textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
 <h1> this is heading </h1>
 <div style="height:100px; width:100px; background:red;">  this is division </div>
 <p> this is paragraph tag </p>
</body>
</html></textarea>  <br>
  <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 	
	
	    </div> 
 
  <h3>2. HTML Inline Elements </h3>
    <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is Inline Elements?</h4>
	<p>Most HTML 4 elements permitted within the BODY are classified as either block-level elements or inline elements. Inline elements typically may only contain text and other inline elements. When rendered visually, inline elements do not usually begin on a new line.</p>
	<p>1. span tag</p>
	<p>2.anchor tag </p>
	<p>3. image tag </p>
	<h3>HINT:</h3>
	<p><mark>Inline elements are never starts with new line </mark> </p>
	
	</div>
 
  <div class="col-sm-12 bg-info column left_part question-box marginn">
	<h4>Example</h4>
	<form method="post">
	<textarea name="trytext1" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
 <span> this is span tag </span><br>
 <a href="#"> this is anchore tag </a><br>
 <img src="images/flower.jpeg" height="100px" width="100px" title="image tag"> 
</body>
</html></textarea> <br>
  <input type="submit" class="but " onClick="tryit()" name="trysub1" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub1']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext1'];
	  }
	  ?> 	
	
	
	    </div> 
 
  <!-- end of center ---------------------->
  
  
  <div class="col-sm-12">
	<button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
    
	</div></div></div>
	</div>
	
  <!--right side nav ---------------------->
	</div></div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>