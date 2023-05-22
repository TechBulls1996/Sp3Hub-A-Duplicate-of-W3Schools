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
  location.href = "html-embed.php";
  }
   function prevpage(){
  location.href = "html-iframes.php";
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


$htmlfont="active";
  
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
 
    
	               
       <h3>Video Tag</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is  HTML Font Tags ?</h4>
	<p>The font tag is having three attributes called size, color, and face to customize your fonts. To change any of the font attributes at any time within your webpage, simply use the <<span>font> tag. The text that follows will remain changed until you close with the </ </span>font> tag.</p>
	
	
	</div>
   
   
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Attributes of Font tag :</h4>
	<p>1.Color <code> it used to giving color to the font </code></p>
	<p>2.Face <code> it used to giving font-family to the font </code></p>
	<p>3.Size <code> it used to giving size to the font </code></p>
	<h3>HINT: </h3>
	<p><mark>Font Tags doesnot support HTML5 i.e : We use Style</mark> </p>
	
	</div>
   
    <div class="col-sm-12 bg-info column left_part question-box marginn"> 
  <h4>Example</h4>
  <form method="post"> 
	<textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html> 
<head> 
   <title> SP3hub</title>
</head> 
<body> 
<font color="red"> this is color attribute </font><br> 

<font size="20"> this is size attribute </font><br>

<font face="courier"> this is face attribute for font-family</font>
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
 
 
 
 
 
 
 
  <!-- end of center ---------------------->
  
  
  <div class="col-sm-12">
<button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
		    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
    
	</div></div></div>
	
  <!--right side nav ---------------------->
	</div></div></div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>