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
  location.href = "html-comments.php";
  }
   function prevpage(){
  location.href = "html-style.php";
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


$htmlformat="active";
  
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
   	    
     <h2>HTML Formatting </h2>
		
      <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is meant by formatting in HTML?</h4>
	 <p>HTML stands for HyperText Markup Language. It's the way web pages and email templates are coded so that text is formatted and images are added. Plain Text is regular text, with no formatting options such as bold, italics, underlines, or special layout options.  </p>
	
<p>	<code>1. b - Bold text</code></p>
<p><code>2. strong - Important text</code></p>
<p><code>3. i - Italic text</code></p>
<p><code>4. em - Emphasized text</code></p>
<p><code>5. mark - Marked text</code></p>
<p><code>6. small - Small text</code></p>
<p><code>7. del - Deleted text</code></p>
<p><code>8. ins - Inserted text</code></p>
<p><code>9. sub - Subscript text</code></p>
<p><code>10.sup - Superscript text</code></p>
<p><code>10.u - underline text</code></p>
	 
	
	    </div>
    
	  <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Examples</h4>
	   <form method="post"> 
	  <textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head> 
   <title> SP3hub</title>
</head> 
<body> 
     <b> bold text </b>
	 <i> italic text </i>
	 <strong> strong text </strong>
	 <em> emphasized text </em>
	 <mark> mark text </mark>
	 <small> small text</small>
	 <sub> subscript text </sub>
	 <sup> superscript text </sup>
	 <u> underline text </u>
</body>
</html></textarea><br>
 <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 	    </div>
 
   
  <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is the use of pre tag in HTML?</h4>
	 <p> The HTML <span>< </span>pre> tag is used for indicating preformatted text. The code tag surrounds the code being marked up. Browsers normally render pre text in a fixed-pitched font, with whitespace in tact, and without word wrap. </p><br>
	 
	 </div>
 
 
 
  
  <!-- end of center ---------------------->
    <div class="col-sm-12">
	<button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
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