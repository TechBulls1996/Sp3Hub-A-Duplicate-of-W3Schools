<!DOCTYPE html>
<html lang="en">
<head>
  <title alt="html Tutorials">html Tutorials</title>
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
  location.href = "html-tags.php";
  }
   function prevpage(){
  location.href = "html-main.php";
  }
  
  </script>
  
  <style>
  
   a:hover{ text-decoration:none;}
  .head{ overflow:visible;}
  .but{position:relative; right:10px; margin:5px;}
  .col-sm-2{width:20.5%;}
  .col-sm-10{width:79.5%;}
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
  
<div class="container-fluid text-center"  >      
   <div class="row content">  
  
  <!-- left side nav ---------------------->
<?php
$htmlmain = $htmleditors = $htmltags = $htmlheading = $htmlstyle = $htmlformat = $htmlcomments = $htmltest = $htmlembed= $htmlfont = $htmliframes= $htmlblocks = $htmllists =  $htmltables = $htmlvideo= $htmlaudio= $htmlimages= $htmllinks = $htmlquotation = $htmlquiz= $htmlexercises = $htmlexamples = $htmlinputs = $htmlformelements = $htmljavascript = $htmleditors =$htmldiv = 0;


$htmleditors="active";
  
include('html-sidenav.php');
  
  ?>
	
	
	
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center ">  
    <div class="row">  
	
 
            <!--   center   ---------------------->
 <div class="col-sm-12 text-left center">  
      <h2><a href="#">HTML-5 TUTORIALS</a></h2><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->
 <div class="col-sm-12">  
   <h3>Editors</h3>
   
  <div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4>You can use many editors Paid As Well As Free  </h4>
	  <p ><ol  >
	   <li style="margin-left:20px;">Notepad <code>(Free)</code> By microsoft <mark>[OS-Windows]</mark></li>
	    <li style="margin-left:20px;">Notepad ++<code>(Free)</code>   </li>
	    <li style="margin-left:20px; ">Dreamweaver<code>(paid)</code> By Adobe </li>
		 <li style="margin-left:20px; ">Braket <code>(Free)</code> </li>
		  <li style="margin-left:20px; ">Sublime Text </li>
		   <li style="margin-left:20px;">TextEdit    <mark>[os-mac]</mark></li>
	  </ol>
	  </p><br>
   </div>
   
   
   <h3><a href="editors.html">How to start Html Coding And Run ? </a></h3>
     <h4>Step 1: </h4>
	 <p> <font size="4">O</font>pen your operating stytem editor . 
	 Or Download notepad ++ <code> Free</code> and install it .</p>
	 
	 <h4>Step 2:</h4>
	 <p> Then start <code>HTML</code> coding </p>
	 <p>For Example :-</p>
	 	<div class="col-sm-12 bg-info column left_part question-box marginn "> 
      <br>
	  <form method="post">
	   <textarea name="trytext" style="resize:none; height:250px; width:100%; " class="family"> 
<HTML> 
<head>
   <title> SP3hub</title>
</head> 
<body>
      <h1> this is heading </h1>
		   
</body>
</html>	
      </textarea><br>
	  <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 
	
	<div class="col-sm-12" style="height:15px;"> </div>
	  
	    </div>
		
		<h4> Step 4:</h4>
		<p> After Complete Coding Now save Your File By <code>.html</code> Extention</p>
		<p> Example :  <code> Demo.html</code> </p>
		<p> HINT:<mark> Save your file at desktop to findout easily </mark></p>
		
		<h4>Step 5:</h4>
		<p> Run your file from where are you Save it </p>
		<p>Right Click On file And open with web Browsers Like: <code>Internet Explorer , Crome , Firefox && Safari  etc</code></p> 
		
</div >

</div >
 
 
 
 
 
 </div>
 
  <!-- end of center ---------------------->
    
	
	
  <!--right side nav ---------------------->
	</div> 
	
    <div class="col-sm-12">
	<button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
 </div> 
</div> </div> 
</div>
 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body> 
</html> 