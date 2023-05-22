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
  location.href = "html-tables.php";
  }
   function prevpage(){
  location.href = "html-audio.php";
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


$htmlvideo="active";
  
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
	               
       <h3>Video Tag</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is Video tag HTML?</h4>
	<p>The HTML 5<code> <<span>video> </code>tag is used to specify video on an HTML document. For example, you could embed a music video on your web page for your visitors to listen to and watch. The HTML 5 <code><</span>video> </code>tag accepts attributes that specify how the video should be played. Attributes include preload , autoplay , loop and more</p>
	
	
	</div>
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>How Video tag Works ?</h4>
	<p>The controls attribute adds video controls, like play, pause, and volume.</p>

<p>It is a good idea to always include width and height attributes. If height and width are not set, the page might flicker while the video loads.</p>

<p>The <code><<span>source></span></code> element allows you to specify alternative video files which the browser may choose from. The browser will use the first recognized format.</p>

<p>The text between the<code> <<span>video> </code>and <</span>/video> tags will only be displayed in browsers that do not support the <code><<span>video></span></code> element.</p>

</p>
	
	
	</div>
	
 <div class="col-sm-12 bg-info column left_part question-box marginn">
  <h4>Example</h4>
  <form method="post">
	<textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
  <video width="400" controls>
  <source src="media/sample-video.mp4" type="video/mp4">
  <source src="media/sample-video.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
</body>
</html></textarea> <br>
  <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> <br><br>
	
	
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