
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
  
   <script language="javascript" type="text/javascript">
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
  
   .center{width:100%;}
   }
  </style>
</head>
<body>
<!--- nav ---------->




<!--   end nav ------->
  
 <?php
   include('head.php');
  ?>   
       
  
  <!-- left side nav ---------------------->
<?php

$htmlmain = $htmleditors = $htmltags = $htmlheading = $htmlstyle = $htmlformat = $htmlcomments = $htmltest = $htmlembed= $htmlfont = $htmliframes= $htmlblocks = $htmllists =  $htmltables = $htmlvideo= $htmlaudio= $htmlimages= $htmllinks = $htmlquotation = $htmlquiz= $htmlexercises = $htmlexamples = $htmlinputs = $htmlformelements = $htmljavascript = $htmleditors =$htmldiv = 0;

$htmlmain = "active";
  
include('html-sidenav.php');
  
  ?>
	<div class="container-fluid text-center" >         
   <div class="row">
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center ">    
    <div class="row">    
	
           <!--   center   ---------------------->
 <div class="col-sm-12 text-left center">    
      <h2>HTML-5 TUTORIALS</h2><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()" ><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->

  

	               
 
	   <div class="row">   
 <div class="col-sm-12">   
 
      <h3>Introduction</h3><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4> What is HTML and what is it used for? </h4>
	  <p>First developed by<code> Tim Berners-Lee in 1990,</code> HTML is short for HyperText Markup Language. HTML is used to create electronic documents (called pages) that are displayed on the World Wide Web.</p><br>
	 
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4> What is HTML Versions ? </h4>
	  <p>There are many HTML versions Like: <code>HTML 1.0 ,HTML 2.0 , HTML 3.0, HTML 4.0 , HTML 5.0 And XHTML( HTML + XML )</code></p><br>
	 
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4>How does it work HTML? </h4>
	  <p>The text is then saved as a html file, and viewed through a browser, like Internet Explorer or Netscape Navigator. This browser reads the file and translates the text into a visible form, hopefully rendering the page as the author had intended. Writing your own HTML entails using tags correctly to create your vision.</p><br>
	  
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4>Why HTML is not a programming language? </h4>
	  <p>In 1980, physicist Tim Berners-Lee, a contractor at CERN, proposed and prototyped ENQUIRE, a system for CERN researchers to use and share documents. In 1989, Berners-Lee wrote a memo proposing an Internet-based hypertext system. Berners-Lee specified HTML and wrote the browser and server software in late 1990.</p><br>
	  
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn">  
      <h4>Format of HTML ? </h4>
	  <form method="post">  
	   <textarea name="trytext" style="resize:none; height:250px; width:70%; " class="family">  
<html>  
<head>  
   <title> SP3hub</title>
</head>  
<body>  
      <h1>   this is heading </h1>  
		   
</body>
</html>	
      </textarea>  <br>
	  <input type="submit" name="trysub" class="but " onClick="tryit()" value="Try It Live"> 	  
	  </form> 
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 echo $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 
	
	<div class="col-sm-12" style="height:20px;"> </div>
	  
	    </div>  
		
		
		
		
	
	
	<br>
	   <div class="col-sm-12">
	 <button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br><hr>
	   <div class="col-sm-12" style="height:50px;"> </div>
	   
	   
		<!--content div end -->
  
  
  
  
   </div>  
   </div>  
  <!-- end of center ---------------------->
    
	</div>  
	</div>  
	</div>  
	
  <!--right side nav ---------------------->
	</div> </div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body> 
</html> 