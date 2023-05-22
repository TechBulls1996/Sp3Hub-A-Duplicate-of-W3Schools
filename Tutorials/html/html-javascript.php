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
  location.href = "html-forms.php";
  }
   function prevpage(){
  location.href = "html-embed.php";
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


$htmljavascript="active";
  
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
   <h3>Javascript</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is  Javascript ?</h4>
	<p>JavaScript  is a high-level, dynamic, untyped, and interpreted programming language. ... JavaScript is prototype-based with first-class functions, making it a multi-paradigm language, supporting object-oriented, imperative, and functional programming styles.</p>
	
	
	</div>
 
  
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>How we use with Html ?</h4>
	<p>We Use javascript in <code>script Tags</code> in html </p>
	<p>1. Inline javacript</p>
	<p>2. Head section Javascript</p>
	<p>3. External Javascript</p>
	
	<h3>Exapmle</h3>
	<pre><p id="onclick11">  </p><script>
	   function clck11(){
	       document.getElementById('onclick11').innerHTML="Welcome to Sp3hub";
	        }
			 </script>
		<button onClick="clck11()"> click here to test js	</button> <button onClick="alert('this is alert msg')"> click here for alert	</button>  </pre>
	
	</div>
  
   <div class="col-sm-12 bg-info column left_part question-box marginn"> 
      
  <h4>Example Of Javascript</h4>
  <form method="post"> 
	<textarea name="trytext"  style="resize:none; height:250px; width:100%;" class="family"> <Html> 
<head>  
   <title> SP3hub</title>
</head>  
<body> 
 
<script>
document.write('welcome to India')

</script>

</body>
</html></textarea>   <br>

  <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live"><br><br>
  </form>
   
  	</div>   
   <?php
  $dem =@$_POST['trytext'];
  
   
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']= $dem;
	  }
	  ?> 
	    
 
   <div class="col-sm-12 bg-info column left_part question-box marginn">
  <h4>Example Of Javascript with Button</h4>
   <form method="post">
	<textarea name="trytext1" style="resize:none; height:370px; width:100%;" class="family"><Html> 
<head> 
   <title> SP3hub</title>
</head> 
<body> 
 <p id="demo99">   </p> <br>

<script>
 function dek()
 {
 document.getElementById('demo99').innerHTML="Welcome to Sp3hub";
  }
 </script>
 
<button onClick="dek()"> click here to test js	</button><br><br>

<button onClick="alert('welcome to sp3hub')"> alert button </button>
</body> 
</html> 
</textarea> <br>

  <input type="submit" class="but " onClick="tryit()" name="trysub1" value="Try it Live"><br><br>
  </form>
   <?php
   echo @$_POST['trytext1'];
   
	 if(isset($_POST['trysub1']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext1'];
	  }
	  ?> 
  
 </div>
 
  <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>More About Javascript - go on js tutorials</h4>
	<p> <a href="js-main.php">Javascript Tutorials </a>  &nbsp;Click Here to Continue js</p>
	
	
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