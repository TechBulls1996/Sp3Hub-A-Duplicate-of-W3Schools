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
  location.href = "html-links.php";
  }
   function prevpage(){
  location.href = "html-comments.php";
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


$htmlquotation="active";
  
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
	               
        <h3>HTML Quotation</h3>
		
      <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is meant by Quotation in HTML?</h4>
	 <p>HTML <span><</span>blockquote> for Quotations. The HTML <<span>blockquote></span> element defines a section that is quoted from another source. Browsers usually indent <<span>blockquote</span>> elements. </p>
	
	 
	
	    </div>
 
 
  <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is the use of blockquote tag in HTML?</h4>
	 <p>The HTML <span>< </span>blockquote> tag is used for indicating long quotations (i.e. quotations that span multiple lines). It should contain only block-level elements within it, and not just plain text. </p>
	
	    </div>
		
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Example</h4>
	  <form method="post">
	 	  <textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
     <p> India is Seventh Largest Country </p>
    <blockquote> "But Now a Day, It is Counting In a Developing Country  and 2nd lagest country in population" </blockquote>
</body>
</html></textarea><br>
  <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 	<h4>HINT:</h4>
	<p><mark> quotation tag use to make any paragraph/lines special and differnt from others</mark> </p> 
	    </div>
 
  <h3><abbr title="Hyper text markup language">HTML</abbr> Abbrivation abbr</h3> 
  <code>Put mouse courser  on HTML text and watch example of abbr tag </code>
  <div class="col-sm-12 bg-info column left_part question-box marginn"><br>
      
	 
	  <pre><<span>p</span>> <span><</span>abbr title="world health organization">WHO <span><</span>/abbr>
	  is the world largest oragination which makes always our world better and healthy <<span>/p</span>>
	  
	  </pre>
	 <h4>Example</h4>
	 <form method="post">
	  <textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
      <p>The <abbr title="world health organization">WHO </abbr>
	  is the world largest oragination which makes always our world better and healthy </p>
</body>
</html></textarea><br>
  <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> <br><br>
 
 <p><code>*Address tag</code> -- it uses for mark address of anywhere</p>
 <pre>
<span>< </span>address> H.no-00223 ,Ward no-4
          Dist-Palwal
          Haryana,India
        121105
<span> < </span>address>
 </pre>
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