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
  location.href = "html-inputs.php";
  }
   function prevpage(){
  location.href = "html-forms.php";
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


$htmlformelements="active";
  
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
 
  <h3>HTML Form Elements</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is  HTML Form Elements ?</h4>
	<p>The HTML <<span>form> element defines a form that is used to collect user input: <</span>form> ... </<span>form></span> An HTML form contains form elements. Form elements are different types of input elements, like text fields, checkboxes, radio buttons, submit buttons, and more</p>
	<p>1. inputs</p>
	<p>2. Selects</p>
	<p>3. radio</p>
	<p>4. checkbox</p>
	<p>5.textarea</p>
	<p>6.fieldset</p>
	
	
	
	</div>
 
 
 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>Example of input</h4>
	<pre>
	name:<input type="text">
	
	Inputs :- text,password,email,range,button,submit,radio,checkbox
	</pre>
	
	<h4>Example of radio</h4>
	<pre>
	Gender:
	male<input type="radio" name="g" value="male"> female<input type="radio" name="g" value="female">
	</pre>
	
	<h4>Example of checkbox</h4>
	<pre>
	languages:
	Html<input type="checkbox" name="g" value="male"> javascript<input type="checkbox" name="g" value="female"> css<input type="checkbox" name="g" value="male"> jquery<input type="checkbox" name="g" value="male">
	</pre>
	
	<h4>Example of select</h4>
	<pre>
	Degree:<select>
	    <option>B.Tech</option>
		<option>B.C.A</option>
	     </select>
	</pre>
	<h4> Example of Textarea</h4>
	<pre>
	Message:
	<textarea style="max-width:450px; max-height:300px;">
	
	</textarea><h3>Hint:</h3><p><mark>Here you can increase textarea height width by pulling it from corner</mark></p>
	</pre>
	
	<h4>Example of fieldset</h4>
	<pre>
	<<span>fieldset>
	<</span>legend>Address<<span>/legend>
	
	< </span>input type="text"> here you can code your form
	
	< <span>/fieldset</span>> 
	</pre>
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
