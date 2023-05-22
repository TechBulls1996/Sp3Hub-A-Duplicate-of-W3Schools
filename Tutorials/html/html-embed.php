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
  location.href = "html-javascript.php";
  }
   function prevpage(){
  location.href = "html-font.php";
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


$htmlembed="active";
  
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
 
   <h3>Embed Tag</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is  HTML embed Tags ?</h4>
	<p><<span>embed> The HTML <</span>embed> element represents an integration point for an external application or interactive content (in other words, a plug-in). Note: This topic documents only the element that is defined as part of HTML5</p>
	
	
	</div>
   
    <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is  embed Code ?</h4>
	<p>The "embed code" is a block of HTML which is embedded in the page-source and creates an object in doing so. HTML: one of the most basic languages used on the web, used to design and lay out web pages. You often see this code when you're in the "back end" of your blog post</p>
	
	
	</div>
 
   <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What are the attributes of embed tag?</h4>
	 <table  class="table table-bordered">
	 <tr>
	 <th>Attriutes</th>  <th> Describe</th>
	 
	 </tr>
	 <tr>
	 <td>1. Height</td>    <td> Specifies the height of the embedded content  </td>
	 </tr>
	 
	 <tr>
	 <td>2. Src</td>    <td> Specifies the address of the external file to embed </td>
	 </tr>
	 
	 <tr>
	 <td>3. Type</td>    <td> Specifies the media type of the embedded content  </td>
	 </tr>
	 
	 <tr>
	 <td>4. Width</td>    <td> Specifies the width of the embedded content  </td>
	 </tr>
	 
	 </table>
	
	
	</div>
 
   <div class="col-sm-12 bg-info column left_part question-box marginn">
  <h4>Example Of embed tag</h4>
  <form method="post">
	<textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
<embed src="media/sample-video.mp4" width="320px" height="240px">


</body>
</html></textarea> <br>
 <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 
	<h3>HINT:</h3>
	<p><mark> Some browser not support embed tag than we use noembed tag </mark></p>
	<h4>Example Of noembed tag</h4>
	<form method="post">
	<textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
<embed src="media/sample-video.mp4" width="320px" height="240px">
<noembed src="media/sample-video.mp4"> 
</embed>


</body> 
</html> </textarea>
 <br>
  <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">
  </form>
  	</div>  
   <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 
   <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h3>Audio And Video Tags</h3>
	<h4>You already learnt about audio and video tag in upper tutorials</h4>
	<p><a href="html-audio.php">Audio tags tuts </a> And <a href="html-video.php">Video Tags Tuts </a>
	
	
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