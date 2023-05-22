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
  location.href = "html-style.php";
  }
   function prevpage(){
  location.href = "html-tags.php";
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


$htmlheading="active";
  
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
		
	      <h2>1. Headings</h2>         
       <div class="col-sm-12 bg-info column left_part question-box ">
      <h4> What is HTML Headings ? </h4>
	  <p>HTML defines six levels of headings. A heading element implies all the font changes, paragraph breaks before and after, and any white space necessary to render the heading. The heading elements are<code> H1, H2, H3, H4, H5, and H6</code> with H1 being the highest (or most important) level and H6 the least.</p><br>
	 
	    </div>
  
     <div class="col-sm-12 bg-info column left_part question-box marginn"> 
      <h4> Examples</h4>
	  
	  <!-- try it -->
	  <form method="post">
<textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
      <h1> this is heading 1</h1>
	  <h2>this is heading 2 </h2>
	  <h3>this is heading 2 </h3>
	  <h4>this is heading 2 </h4>
	  <h5>this is heading 2 </h5>
	  <h6>this is heading 2 </h6>   
</body>
</html></textarea><br>
	  <input type="submit" class="but " onClick="tryit()" value="Try it Live" name="trysub">	   
	</form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	  $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 
	<div class="col-sm-12" style="height:20px;"><br> </div>
	</div>
	
	<!----end of try it -->
	   <h2>2. Paragraph</h2>         
       <div class="col-sm-12 bg-info column left_part question-box ">
      <h4> What is HTML Paragraph ? </h4>
	  <p>The HTML p element represents a paragraph of text. Paragraphs are usually represented in visual media as blocks of text that are separated from adjacent blocks by vertical blank space and/or first-line indentation. Paragraphs are block-level elements</p><br>
	 
	    </div>
	
	  <div class="col-sm-12 bg-info column left_part question-box marginn">
      <h4> Examples</h4>
	  
	  <!-- try it -->
	  <form method="post" name="">
<textarea name="trytext2"style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
      <p> this is paragraph tag </p>
	  
</body>
</html></textarea><br>
	   <input type="submit" class="but " onClick="tryit()" value="Try it Live" name="trysub1">	   
	</form>
	  <?php
	 if(isset($_POST['trysub1']))
	 {
	  $_SESSION['tryitt']=$_POST['trytext2'];
	  }
	  ?> 
	<div class="col-sm-12" style="height:20px;"> </div>
	</div>
	 
	 
	    
 
 
 
  <div class="col-sm-12">
	 <button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
 
 
  <!-- end of center ---------------------->
    
	</div> </div></div></div>
	
  <!--right side nav ---------------------->
	</div></div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>