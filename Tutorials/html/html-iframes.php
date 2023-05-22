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
   window.location.reload();
    window.open('tryit.php');
}
   function nextpage(){
  location.href = "html-font.php";
  }
   function prevpage(){
  location.href = "html-blocks.php";
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


$htmliframes="active";
  
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
 
  
        <div class="col-sm-12"> <hr>  </div>
 
  <h3>1. HTML Iframes</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is an Iframe in HTML?</h4>
	<p>You can define an inline frame with HTML tag <span><</span>iframe>. ... The <<span>iframe></span> tag defines a rectangular region within the document in which the browser can display a separate document, including scrollbars and borders. The src attribute is used to specify the URL of the document that occupies the inline frame.</p>

	</div>

 
  <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Two methods of iframe</h4>
	1.method <pre>< <span>iframe frameborder="0px" src="adress of page" height="200px" width="300px">  </</span>iframe></pre>
	
	 
 
 <h4>Example</h4>
 <form method="post" name="frstfrm"> 
	<textarea  name="trytext" style="resize:none; height:250px; width:100%;" class="family"> <Html>
<head> 
   <title> SP3hub</title>
</head> 
<body> 
<iframe frameborder="0px" src="html-main.php" height="300px" width="400px">      </iframe>

</body>
</html></textarea>  <br>
 <input type="submit" class="but " onClick="tryit()" name="trysubject" value="Try it Live">	<br><br>  
 
  </form> 
	 	
	  <?php
	  @$mzeo= $_POST['trytext'];
	 
	  
	  
	 if(isset($_POST['trysubject']))
	 {
	 $_SESSION['tryitt']=$mzeo;
	  }
	  
	 
	  ?> 
	     
	
	
	2. method<pre>< <span>iframe frameborder="0px" name="result" height="200px" width="300px">  </</span>iframe>
	< <span>a href="page adress which is open in iframe" target="result">click here </ </span>a></pre>

	
 

 <h4>Example</h4>
   <form method="post" name="frm"> 
	<textarea  name="trytext2" style="resize:none; height:250px; width:100%;" class="family"> <Html>
<head> 
   <title> SP3hub</title>
</head> 
<body> 
<a href="html-main.php" target="textto">click here</a>
<iframe frameborder="0px" name="textto" height="300px" width="400px">      </iframe>

</body>
</html></textarea>  <br>
 <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	<br><br>   </form> 
	  
	   
 </div>
 <?php
 @$aa=$_POST['trytext2'];

 
  if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$aa;
	  }
	  
	 
	  ?> 

 
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