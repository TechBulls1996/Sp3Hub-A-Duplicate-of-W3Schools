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
  location.href = "html-audio.php";
  }
   function prevpage(){
  location.href = "html-links.php";
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
$htmlmain = $htmleditors = $htmltags = $htmlheading = $htmlstyle = $htmlformat = $htmlcomments = $htmltest = $htmlembed= $htmlfont = $htmliframes= $htmlblocks = $htmllists =  $htmltables = $htmlvideo= $htmlaudio= $htmlimages= $htmllinks = $htmlquotation = $htmlquiz= $htmlexercises = $htmlexamples = $htmlinputs = $htmlformelements = $htmljavascript = $htmleditors = $htmldiv =0;


$htmlimages="active";
  
include('html-sidenav.php');
  
  ?>
	
	
	
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center ">
    <div class="row">
	
	<div class="col-sm-12 text-left center ">
      <h2>HTML-5 TUTORIALS</h2><br>
     <div class="col-sm-12">
	<button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	               
        <h3>Image Tag</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>How do you add a picture in HTML?</h4>
	<p>1. Use the HTML <<span>img</span>> element to define an image.</p>
	<p>2. Use the HTML src attribute to define the URL of the image.</p>
	<p>3. Use the HTML alt attribute to define an alternate text for an image, if it cannot be displayed.</p>
	<p>4. Use the HTML width and height attributes to define the size of the image.</p>
	
	<pre>
	<<span>img src="address of images" height="300px" width="100%"><span>
	</pre>
	</div>
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn">
	<h4>How to give Correct address to image ?</h4>
	<p> Put image and html file at same place or in a same folder than direct put name in <code>src="cat.jpg"</code> don't forget extension<p>
	
	
	    </div>
	  
    <div class="col-sm-12 bg-info column left_part question-box marginn">
	<h4>Example</h4>
	<form method="post">
	<textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
   <img src="images/flower.jpeg" height="200px" width="200px">
</body>
</html></textarea><br>
  <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 	
	
	     </div> 
	  
 
 
 
 
 
  <div class="col-sm-12">
	<button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
 
  <!-- end of center ---------------------->
    
	</div> </div></div>
	
  <!--right side nav ---------------------->
	</div> </div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>