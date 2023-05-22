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
  location.href = "html-images.php";
  }
   function prevpage(){
  location.href = "html-quotation.php";
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


$htmllinks="active";
  
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
	               
        <h3>HTML Links</h3>
		
      <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is meant by Links in HTML?</h4>
	 <p>Linking Documents. A link is specified using HTML tag <<span>a</span>>. This tag is called anchor tag and anything between the opening <<span>a> tag and the closing <</span>/a> tag becomes part of the link and a user can click that part to reach to the linked document. Following is the simple syntax to use <<span>a> tag </span> </p>
	
	 <p> Example: <a href="#"> This is an link </a>  </p>
	 
	
	    </div>
 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Link Attributes</h4>
	 <p>
	 1. href ---- this is for address<br>
     2. target ---- this is for framename where u can target links in iframe tags	 
	 
	 </p>
	 
	
	    </div>
 
    <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Exapmles</h4>
	 <pre>
	 < <span>a href="web address"> </span> Click here <<span>/a </span>>
	 
	 </pre>
	 
	
	    </div>
 
    <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Types of Links<span style="color:red; font-size:40px;"><sub> *</sub> </span></h4>
	 <p> There are two types of links :</p>
	 <p><b>1. Global links</b>  <code> example = <<span>a href="http://www.google.com"> clcik here to visit google <</span>/a> </code></p>
	 <p><b>2. Local Links </b> <code> here you can give address of your own file[demo.html,images etc] </code>   </p>
	
	   
		 <br>
		 <h4>Example with Style</h4>
		 <form method="post">
		 
	 	  <textarea name="trytext" style="resize:none; height:350px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
   <style>
   a{ text-decoration:none; /* this is for remove underline from link */
      color:red;
   }
   
   /* hover work when mouse is on over the Link */
   a:hover{color:green;
           text-size:20px;
     	   }
   </style>
</head>
<body>
   <a href="http://www.google.com"> click to visit on google </a>
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