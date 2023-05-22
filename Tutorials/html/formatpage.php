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
  location.href = "html-editors.php";
  }
   function prevpage(){
  location.href = "html-main.php";
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
      <div class="col-sm-2 sidenav">
	  <div class="row leftnav">
	<ul class="text-left">
	  <h5><a href="html-main.php" >HTML5 TUTORIALS</a></h5>
      <li class="active"><a href="html-main.php">HTML Intro</a></li>
      <li><a href="html-editors.php" >HTML Editors & Basic</a></li>
    
	  <li><a href="html-tags.php">HTML Tags & Attributes</a></li>
	  <li><a href="html-heading.php" >HTML Heading & Paragraph</a></li>
	  <li><a href="html-style.php" >HTML Styles</a></li>
	  <li><a href="html-format.php" >HTML formatting</a></li>
	  <li><a href="html-comments.php" >HTML Comments</a></li>
	  <li><a href="html-quotation.php" >HTML Quotation</a></li>
	  <li><a href="html-links.php" >HTML Links</a></li>
	  <li><a href="html-images.php" >HTML Images</a></li>
	  <li><a href="html-audio.php" >HTML audio</a></li>
	  <li><a href="html-video.php" >HTML Video</a></li>
	  <li><a href="html-tables.php" >HTML Tables</a></li>
	  <li><a href="html-lists.php" >HTML Lists</a></li>
	  <li><a href="html-blocks.php" >HTML Blocks</a></li>
	  <li><a href="hyml-iframes.php" >HTML Iframe</a></li>
	  <li><a href="html-font.php" >HTML Font</a></li>
	  <li><a href="html-embed.php" >HTML Embed tags</a></li>
	  <li><a href="html-javascript.php" >HTML javascript</a></li>
	  
	  <br>
	  <h5><a href="html-forms.php" >HTML FORMS</a></h5>
	  <li><a href="html-form-elements.php" >HTML Form Elements</a></li>
	  <li><a href="html-inputs.php" >HTML Input Types</a></li>
	  <li><a href="html-examples.php" >HTML Examples</a></li>
	  <br>
	  
	  <li><a href="html-exercises.php" >HTML Exercises</a></li>
	  <li><a href="html-quiz.php" >HTML Quiz Test</a></li>
	  <li><a href="html-test.php" >HTML Hard Test</a></li>
	  <br>
	  
	  </ul></div>
    </div>
	
	
	
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 
</body>
</html>