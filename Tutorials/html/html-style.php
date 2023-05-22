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
    window.open('tryit.html');
}
   function nextpage(){
  location.href = "html-format.php";
  }
   function prevpage(){
  location.href = "html-heading.php";
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


$htmlstyle="active";
  
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
	
	 <div class="col-sm-12"> <hr>  </div>
	    </div><br>
	    
  <h2>1.Styles</h2>         
       <div class="col-sm-12 bg-info column left_part question-box ">
      <h4> What is HTML Styles ? </h4>
	  <p> Setting the style of an HTML element, can be done with the style attribute. The HTML style attribute has the following syntax: <tagname style="property:value;"> The property is a CSS property. The value is a CSS value.<br>
      
	  <p> * Color <code>[color:red;,green,yellow etc] </code> </p>
	  <p> * Font sizing <code>[ font-size:20px;] </code> </p>
	  <p> * Font family <code>[font:family:courier;] </code></p>
	  <p> * Font position <code>[ text-align:left; ,center ,right etc] </code></p>
	  <h4> Style Background color ?  </h4>
	  <pre> 
	  <span>< </span> div style="background:red; height:300px; width:300px;">    this is division <span> < </span>/div> 
	  
	  </pre><br>
	  <h4> Style Background image </h4>
	  <pre><span><</span>div style="background:url("address of image"); background-size:cover; height:300px; width:300px;"> 
	  this is division <span> < </span>/div> 
	  
	  </pre><br>
	  </p><br>
	 
	    </div>		
      
  <div class="col-sm-12 bg-info column left_part question-box marginn">
      <h4>Examples </h4>
	   <form method="post">
	  <textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
      <p style="color:red;"> color styling in html </p><br>
	  <p style="font-size:17px;"> font-size styling in html </p>
	  <p style="font-family:courier"> color styling in html </p>
	  <p style="text-align:center;"> color styling in html </p>
     	  
</body>
</html></textarea><br>
	   <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 
	  
	  
	 <br><bR>
	 
	    </div>
   
      <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is meant by CSS in HTML?</h4>
	 <p>HTML (the Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the structure of the page, CSS the (visual and aural) layout, for a variety of devices.   </p>
	    </div>	
 
       <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Who created CSS? </h4>
	 <p> Css Developed By : --- Håkon Wium Lie Bert Bos World Wide Web Consortium   </p>
    <p> Intial release :---  December 17, 1996; 20 years ago (1996-12-17)	</p>  
	  </div>
 
   <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What are the different types of CSS? </h4>
	 <p>There are three types of CSS styles:**inline styles. Inline styles are styles that are written directly in the tag on the document. ... **embedded styles. Embedded styles are styles that are embedded in the head of the document. ... **external styles.   </p>
      
	  </div>
 
 <div class="col-sm-12"> <br> </div>
 
 
 
  <div class="col-sm-12">
	 <button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
 
  <!-- end of center ---------------------->
    
	</div></div></div>
	
  <!--right side nav ---------------------->
	</div></div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>