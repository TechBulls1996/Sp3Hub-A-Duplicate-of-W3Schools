<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HTML Tutorials</title>
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
  location.href = "html-heading.php";
  }
   function prevpage(){
  location.href = "html-editors.php";
  }
  
  </script>
  
  <style>
 
  .head{ overflow:visible;}
  .but{position:relative; right:10px;; margin:5px;}
  a:hover{ text-decoration:none;}
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
  
<div class="container-fluid text-center" >       
   <div class="row content"> 
  
  <!-- left side nav ---------------------->
   <?php
$htmlmain = $htmleditors = $htmltags = $htmlheading = $htmlstyle = $htmlformat = $htmlcomments = $htmltest = $htmlembed= $htmlfont = $htmliframes= $htmlblocks = $htmllists =  $htmltables = $htmlvideo= $htmlaudio= $htmlimages= $htmllinks = $htmlquotation = $htmlquiz= $htmlexercises = $htmlexamples = $htmlinputs = $htmlformelements = $htmljavascript = $htmleditors =$htmldiv = 0;


$htmltags="active";
  
include('html-sidenav.php');
  
  ?>
	
	
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center "> 
    <div class="row"> 
	
           <!--   center   ---------------------->
          <!--   center   ---------------------->
 <div class="col-sm-12 text-left center">
      <h2>HTML-5 TUTORIALS</h2><br>
    <div class="col-sm-12">
	<button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->
 <div class="col-sm-12">
   <h2>1. Elements And Tags</h2>

   <div class="col-sm-12 bg-info column left_part question-box marginn ">
        <h4>What is HTML TAGS ? </h4>
	      <p>HTML tags are the hidden keywords within a web page that define how your web browser must format and display the content. Most tags must have two parts, an opening and a closing part. For example, <html> is the opening tag and </html> is the closing tag.</p><br>
	  
	    </div>
		
		 <div class="col-sm-12 bg-info column left_part question-box marginn ">
        <h4>Empty tags And Container tags ? </h4>
	      <p><mark> Empty tags</mark> are only be started but not closed Eg:-<code> <span><</span>br>,<<span>hr></span> etc. </code>  </p>
		  <p><mark>Container Tags</mark> have opening part and closing part Eg:-<code><span><</span>h1> -------<<span>/h1></span>   </code>    </p><br>
	  
	    </div>
		<div class="col-sm-12"><br> </div>
		<h3>Most Common Tags are :</h3><br>
		<table class="table table-striped table-bordered table-reponsive table-hover ">
		<tr> 
		 <th>Tags</th>  <th>Explaination</th>
		</tr>
		
		<tr>
		<td><code> <span><</span>p> </code></td>  <td> It is used for making a paragraph in HTML </td>
		</tr>
		
		<tr>
		<td><code> <span><</span>h1></code> </td>  <td> It is used for making a Headings in HTML and there are six heading tags h1,h2,h3,h4,h5,h6 etc </td>
		</tr>
		
		<tr>
		<td><code> <span><</span>br> </code> </td>  <td> It is used for Break Down to next line in HTML </td>
		</tr>
		
		<tr>
		<td><code> <span><</span>hr> </code> </td>  <td> It is used for making a Horizontal line in HTML </td>
		</tr>
		
		
		
		</table>
 <div class="col-sm-12">  <br> </div>

 <h2> 2. HTML Attributes </h2>
 
<div class="col-sm-12 bg-info column left_part question-box marginn ">
        <h4>What is HTML ATTRIBUTES? </h4>
	      <p>An HTML attribute is a modifier of an HTML element type. An attribute either modifies the default functionality of an element type or provides functionality to certain element types unable to function correctly without them. In HTML syntax, an attribute is added to an HTML start tag.</p><br><br>
		  
		  <h4> EXAPMPLE :-</h4>
		  <pre>
	<span>< </span>h1 style="color:red; "> <span style="color:red;">This is heading</span> <span>< </span>/h1>
		  </pre>
	  
	</div>
	
	<h3> Most Common HTML attributes </h3>
	
		<table class="table table-striped table-bordered table-reponsive table-hover ">
		<tr> 
		 <th> Attributes </th>  <th>Explaination</th>
		</tr>
		
		<tr>
		<td><code> style</code> </td>  <td> It is used for styling in Tags of HTML eg: color,size,font style, etc </td>
		</tr>
		
		<tr>
		<td><code> href</code> </td>  <td> It is used for giving address of file  in HTML  </td>
		</tr>
		
		<tr>
		<td><code> Height</code> </td>  <td> It is used for Giving Height of tag in HTML </td>
		</tr>
		
		<tr>
		<td><code> Width </code></td>  <td> It is used for Giving Width of tag in HTML </td>
		</tr>
		
		
		
		</table>	
		
		
		
		
		
		
		
		
		
	 <div class="col-sm-12">
	 <button class="but" onClick="prevpage()"><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>	
		
</div> 


</div> 
</div> 
</div> 


 <!-- end of right side nav ---------------------->
 </span></div>
 
</div>
</div> 
</div>
<!-------footer---------->
<div class="col-sm-12"><br>   </div>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html> 