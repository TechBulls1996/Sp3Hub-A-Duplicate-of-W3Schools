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
  location.href = "html-blocks.php";
  }
   function prevpage(){
  location.href = "html-tables.php";
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


$htmllists="active";
  
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
	               
      <h3>HTML List</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is List tag HTML?</h4>
	<p>There are three list types in HTML: unordered list — used to group a set of related items, in no particular order. ordered list — used to group a set of related items, in a specific order. description list — used to display name/value pairs such as terms and their definitions, or times and events.</p>
	
	<h5><b> Two Types Of Lists are :</b></h5>
	<p>1.Ordered list <code>ol</code></p>
	<p>2. Unordered list <code> ul  </code></p>
	</div>
   
      <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is the difference between a UL and an OL?</h4>
	<p>You could style them to be any way you want... but, as default, UL will give you bullets and OL will give you nubers. The difference is that UL is an unordered list and OL is an ordered list. In an unordered list, the order of the list items is not significant</p>
	
	
	</div>
	
	
 
   
    <div class="col-sm-12 bg-info column left_part question-box marginn">
 <h4>1. Ordered List</h4>
	<pre><ol><li>book1</li><li>book2</li><li>book3</li><li>book4</li><li>book5</li><li>book6</li></ol></pre>
  <h4>Example</h4>
  <form method="post">
	 <textarea name="trytext" style="resize:none; height:300px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
   <ol>
   <li>book1</li>
   <li>book2</li>
   <li>book3</li>
   <li>book4</li>
   <li>book5</li>
   <li>book6</li>
   </ol>
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
 
    <div class="col-sm-12 bg-info column left_part question-box marginn">
 <h4>2. Unordered List</h4>
	<pre><ul><li>book1</li><li>book2</li><li>book3</li><li>book4</li><li>book5</li><li>book6</li></ul></pre>
  <h4>Example</h4>
  
  <form name="" method="post">
	 <textarea name="trytext1" style="resize:none; height:300px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
   <ul>
   <li>book1</li>
   <li>book2</li>
   <li>book3</li>
   <li>book4</li>
   <li>book5</li>
   <li>book6</li>
   </ul>
</body>
</html></textarea><br>
 <input type="submit" class="but " onClick="tryit()" name="trysub1" value="Try it Live">	   </form>
	  <?php
	  
	 if(isset($_POST['trysub1']))
	 {
	 $_SESSION['tryitt']=@$_POST['trytext1'];
	  }
	  ?>
 </div>
 
  <!-- end of center ---------------------->
    
  <div class="col-sm-12">
	 <button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
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