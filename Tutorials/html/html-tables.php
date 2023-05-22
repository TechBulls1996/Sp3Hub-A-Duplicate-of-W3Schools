<?php
session_start(); 

?><!DOCTYPE html>
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
  location.href = "html-lists.php";
  }
   function prevpage(){
  location.href = "html-video.php";
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


$htmltables="active";
  
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
	               
                    
       <h3>HTML Tables</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is Table tag HTML?</h4>
	<p>Definition and Usage. The < <span>table> tag defines an HTML table. An HTML table consists of the <</span>table> element and one or more <<span>tr>, <</span>th>, and <<span>td> elements. The <</span>tr> element defines a table row, the <<span>th> element defines a table header, and the <</span>td> element defines a table cell.</p>
	
	
	</div>
 
   <div class="col-sm-12 bg-info column left_part question-box marginn">
   <h4>What is the use of table in HTML?</h4>
	<p>The HTML tables allow web authors to arrange data like text, images, links, other tables, etc. into rows and columns of cells. The HTML tables are created using the <<span>table> tag in which the <</span>tr> tag is used to create table rows and <<span>td> tag is used to create data cells</span>.</p>
	
	
	</div>
 
   <div class="col-sm-12 bg-info column left_part question-box marginn">
  <h4>  </h4>
   <pre>
  <table class="table  table-bordered">
  <tr>
  <th>NAME</th>  <th>CLASS</Th>  <th>ROLL NO</th>
  </tr>
  <tr>
  <td>Ram</td> <td>4th</td> <td>33</td>
  </tr>
   <tr>
  <td>Meena</td> <td>5th</td> <td>13</td>
  </tr>
   <tr>
  <td>Syam</td> <td>5th</td> <td>43</td>
  </tr>
  
  </table>
	</pre>
	
	
	 <h4>Example</h4>
	 <form method="post">
	 <textarea name="trytext" style="resize:none; height:250px; width:100%;" class="family"><Html>
<head>
   <title> SP3hub</title>
</head>
<body>
   <table border="1px" height="300px" width="100%">
  <tr>
  <th>NAME</th>  <th>CLASS</Th>  <th>ROLL NO</th>
  </tr>
  <tr>
  <td>Ram</td> <td>4th</td> <td>33</td>
  </tr>
   <tr>
  <td>Meena</td> <td>5th</td> <td>13</td>
  </tr>
   <tr>
  <td>Syam</td> <td>5th</td> <td>43</td>
  </tr>
  
  </table>
</body>
</html></textarea><br>
 <input type="submit" class="but " onClick="tryit()" name="trysub" value="Try it Live">	   </form>
	  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> <br><br>
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