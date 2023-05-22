
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
    <link rel="stylesheet" href="css-main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
   <script language="javascript" type="text/javascript">
  function tryit() {
    window.open('tryit.php');
}
  
  function nextpage(){
  location.href = "css-font.php";
  }
   function prevpage(){
  location.href = "css-margin.php";
  }
  </script>
  
  <style>
  #dem99{ color:red;}
  #dem99:hover{color:#00CCFF;}
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

$cssmain = $cssselectors=$cssbackground=$cssborder=$cssmargin=$cssfont=$csstext=$cssimages=$csslink=$cssposition=$cssdisplay=$cssopacity=$cssfloat=$moretag=$cssdropdown = 0;

$csstext = "active";
  
include('css-sidenav.php');
  
 ?>
	<div class="container-fluid text-center">           
   <div class="row">  
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center ">     
    <div class="row">     
	
           <!--   center   ---------------------->
 <div class="col-sm-12 text-left center">     
      <h2>CSS TUTORIALS</h2><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()" ><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->

  

	               
 
	   <div class="row">   
 <div class="col-sm-12">   
 
      <h3><a href="#">CSS Text Properties </a> </h3><br>
	  
	  <div class="col-sm-12 bg-info column left_part question-box ">
	  <h4><a href="">What is CSS Text Style ? </a>  </h4>
	  <p>A text style is a set of character and/or paragraph attributes saved as a group. When you apply a style to text, you apply the whole group of attributes in just one step. ...<br>Styles can be applied to characters or paragraphs using either the Text context toolbar or the Text Styles tab</p>
	
	   </div>
	  
	  <div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#"> Css Text properties are </a></h4>
	  <p><a href="#">1. Color</a></p>
      <p><a href="#">2. Text-align</a></p>
      <p><a href="#">3. Text-decoration</a></p>
      <p><a href="#">4. Text-Transform</a></p>
      <p><a href="#">5. Text-indent</a></p>
      <p><a href="#">6. Text-direction</a></p>
      <p><a href="#">7. Text-shadow</a></p>
      <p><a href="#">8. Word-spacing</a></p>
      <p><a href="#">9. Letter-spacing</a></p>
	  <p><a href="#">10. Line-Height</a></p>
      
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#"> Examples of Text Properties are</a> </h4>
	  <h3><a href="#">1. CSS Color</a></h3><br>
	 <p> Text <code>color</code> is a properties to define font/text color</p> 
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { color:red; }  More:-<span style="color:green;">yellow,#ffcc00,green etc</span>
	  <<span>/style><h3>Result :- </h3><p style="color:red;">this is paragraph tag</p></pre>
	  
      
	  <h3><a href="#">2. Text Decoration</a></h3><br>
	  <p> <code>Text Decoration </code> property is define to set or remove decoration of text </p>
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { text-decoration:underline; }  More:-<span style="color:green;">blink ,line-through ,overline & none etc</span>
	  <<span>/style><h3>Result :- </h3><p style="text-decoration:line-through;">this is paragraph tag</p></pre>
	
      <h3><a href="#">3. Text Align</a></h3><br>
	  <p> <code> Text-Align </code> property is define to set text in center,left,right etc of display</p>
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { text-align:center; }  More:-<span style="color:green;">left ,right ,inherited & justified etc</span>
	  <<span>/style><h3>Result :- </h3><p style="text-align:center">this is paragraph tag</p></pre>
      
  <h3><a href="#">4. Text Transform</a></h3><br>
	  <p> <code>Text-transform</code> property is define to change text in lowercase,upercase & capitalized etc </p>
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { text-transform:uppercase; }  More:-<span style="color:green;">lowercase,capitalize and none etc</span>
	  <<span>/style><h3>Result :- </h3><p style="text-transform:uppercase;">this is paragraph tag</p></pre>
      
      
        <h3><a href="#">5. Text Indent</a></h3><br>
	  <p>The <code>text-indent</code> property is used to specify the indentation of the first line of a text:</p>


	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { text-indent:50px;}  
	  <<span>/style><h3>Result :- </h3><p style="text-indent:50px;">This is indent tag which starts the first 
 line of paragraph after 50px because we use 
 text-indent:50px; style. we use it in reports</p></pre>
	
 <h3><a href="#">6. Text-direction</a></h3><br>
	  <p> <code>Text-direction</code> property is define to change text in lowercase,upercase & capitalized etc </p>
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { text-transform:uppercase; }  More:-<span style="color:green;">lowercase,capitalize and none etc</span>
	  <<span>/style><h3>Result :- </h3><p style="text-transform:uppercase;">this is paragraph tag</p></pre>
	  
	  
	   <h3><a href="#">7. Text-Shadow</a></h3><br>
	  <p><code>Text-shadow</code> accepts a comma-separated list of shadows to be applied to the text and text-decorations of the element. Each shadow is specified as an offset from the text, along with optional color and blur radius values. Multiple shadows are applied front-to-back, with the first-specified shadow on top. </p>
	  <h4> <code> Text-shadow:Horizontal(5px) vertical(8px) fade(10px) color(red) </code> </h4>
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { text-Shadow:5px 8px 10px red; }  </span>
	  <<span>/style><h3>Result :- </h3><p style="text-shadow:5px 8px 9px red;">this is paragraph tag</p></pre>
	  
	    <h3><a href="#">8. Word-Spacing</a></h3><br>
	  <p><code>Word-spacing</code> property sets the extra spacing between words in the text content of an element. Word spacing can be affected by text justification (see the text-align property). When whitespace is preserved—see white-space —all space characters are affected by word spacing</p>
	  
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { word-spacing:10px }  </span>
	  <<span>/style><h3>Result :- </h3><p style="word-spacing:10px;">this is paragraph tag</p></pre>
	  
	  
	  <h3><a href="#">9. Letter-Spacing</a></h3><br>
	  <p><code>Letter-spacing</code> property is used to specify the space between the characters in a text.</p>
	  
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { letter-spacing:10px }  </span>
	  <<span>/style><h3>Result :- </h3><p style="letter-spacing:10px;">this is paragraph tag</p></pre>
	  
	   <h3><a href="#">10. Line-Height</a></h3><br>
	  <p>The <code>line-height </code>property is used to specify the space between lines:</p>
	  
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { line-height:60px; border:1px solid }  </span>
	  <<span>/style><h3>Result :- </h3><p style="line-height:60px; border:1px solid;">this is paragraph tag</p></pre>
	  
	  
	    </div>
		
		
			
		<div class="col-sm-12 bg-info column left_part question-box marginn"> 
		<h3>Examples </h3><br> 
      <h4><a href="#"> Example of CSS text Tag ?</a> </h4>
	  <form method="post" >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>  
#z9{color:red; text-align:center; }  
#z9:hover{ color:#00CCFF;}
</style>  
<body>   
      <h1 id="z9"> Internal CSS </h1>  
	  
	  
	  <p style="color:green; text-decoration:underline;"> Inline CSS </p> <!-- inline css -->
		   
</body>
</html>	
      </textarea>  <br>
	  <input type="submit" name="trysub" class="but " onClick="tryit()" value="Try It Live"> 	  
	  </form> 
	  <?php
	 if(isset($_POST['trysub']))
	 {
	  $_SESSION['tryitt']=$_POST['trytext'];
	  }
	  ?> 
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