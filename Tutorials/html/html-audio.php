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
  location.href = "html-video.php";
  }
   function prevpage(){
  location.href = "html-images.php";
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


$htmlaudio="active";
  
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
	               
        <h3>Audio Tag</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is audio tag HTML?</h4>
	<p>The HTML <<span>audio> element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the <</span>source> element: the browser will choose the most suitable one.</p>
	
	
	</div>
 
 
  <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is the Web Audio API?</h4>
	<p>
	The Web Audio API is a high-level JavaScript API for processing and synthesizing audio in web applications. The goal of this API is to include capabilities found in modern game audio engines and some of the mixing, processing, and filtering tasks that are found in modern desktop audio production applications.
	</p>
	
	
	</div>
 
  <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is an Ogg file?</h4>
	<p>
	OGG is a free, open container format created under unrestricted software patents by the Xiph.Org Foundation (Ogg Vorbis). It allows users to stream and alter high quality digital multimedia files. The name “Ogg” derives from the jargon word “ogging.”
	</p>
	
	
	</div>
   
   <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>HTML Audio - How It Works ?</h4>
	<p>
	The <code>controls attribute</code> adds audio controls, like play, pause, and volume.</p>

 <p>The <code><<span>source></code> element allows you to specify alternative audio files which the browser may choose from. The browser will use the first recognized format.</p>

<p>The text between the <</span>audio> and <<span>/audio> tags will only be displayed in browsers that do not support the<code> <</span>audio> </code> element.
	</p>
	
	
	</div>
 
 
   <div class="col-sm-12 bg-info column left_part question-box marginn"> 
	<h4>Example</h4>
	<form method="post">
	<textarea  name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
  <audio controls>
  <source src="media/sample-audio.ogg" type="audio/ogg">
  <source src="media/sample-audio.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
</body>
</html></textarea> <br>
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
	</div> </div></div>
	
  <!--right side nav ---------------------->
	</div> </div></div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>