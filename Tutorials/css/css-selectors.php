
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
  location.href = "css-background.php";
  }
   function prevpage(){
  location.href = "css-main.php";
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

$cssselectors = "active" ;
  
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
      <h2><a href="#">CSS TUTORIALS</a></h2><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()" ><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->

  

	               
 
	   <div class="row">   
 <div class="col-sm-12">   
 
      <h3><a href="#">Selectors And Syntax </a> </h3><br>
	  
	  <div class="col-sm-12 bg-info column left_part question-box ">
	  <h4><a href="">What is CSS Syntax ? </a>  </h4>
	  <p>CSS Syntax. A CSS rule-set consists of a selector and a declaration block: The selector points to the HTML element you want to style. The declaration block contains one or more declarations separated by semicolons.</p>
	  <pre>
	  <span style="color:red; font-size:35px;">h1</span> <span style="color:blue; font-size:25px;">{ 
	   color:red;   font-family:courier;
	  }</span>
	  
	  -------------------------------HERE---------------------
	  <span style="color:red; font-size:25px;">h1 ::</span> <span style="color:green; font-size:20px;">Its is a Selector </span>
	  <span style="color:red; font-size:25px;">Color & Font-size ::</span> <span style="color:green; font-size:20px;">Its is a property </span>
	  <span style="color:red; font-size:25px;">red & courier ::</span> <span style="color:green; font-size:20px;">Its is a Values </span>
	  </pre>
	   </div>
	  
	  <div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#"> What are the Selectors In CSS ?</a></h4>
	  <p>Introducing CSS Selectors. A CSS selector is the part of a CSS rule set that actually selects the content you want to style. ...</p>
<p>1. Universal Selector. </p>
<p>2. Element Type Selector. </p>
<p>3. ID Selector. </p>
<p>4. Class Selector. </p>
<p>5. Descendant Combinator. </p>
<p>6. Child Combinator. </p>
<p>7. General Sibling Combinator.</p>
<p>8. CSS Comments </p>	 <br>
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#"> Examples of Selectors</a> </h4>
	  <h3><a href="#">2. Element Type Selector</a></h3><br>
	  <p> Also referred to simply as a �type selector,� this selector must match one or more HTML elements of the same name. Thus, a selector of nav would match all HTML nav elements, and a selector of <<span>ul> would match all HTML unordered lists, or <</span>ul> elements.

The following example uses an element type selector to match all <<san>ul> elements: </p>
	  <pre> ul {
   list-style: none;
   border: solid 2px red;
   }
   
 ol  {
   background:red;
   display:block;
   }
	  </pre>
	  
	
	  <h3><a href="#">3. ID Selector</a></h3><br>
	  <p> An ID selector is declared using a hash, or pound symbol <code>(#)</code> preceding a string of characters. The string of characters is defined by the developer. This selector matches any HTML element that has an ID attribute with the same value as that of the selector, but minus the hash symbol. </p>
	  <pre>
#container {
             height:200px;
            width: 560px;
             margin:auto;
	 background:lightblue;
             }
---------------HTML--------------------------------------			 
	<<span>div id="container">    </ </span>div>
	  </pre>
	  
	  <h3><a href="#">4.Class Selector</a></h3><br>
	  <p>The class selector is the most useful of all CSS selectors. It�s declared with a <code>dot(.)</code> preceding a string of one or more characters. Just as is the case with an ID selector, this string of characters is defined by the developer. The class selector also matches all elements on the page that have their class attribute set to the same value as the class, minus the dot(.) </p>
	  <pre>
	 .container {
             height:200px;
            width: 560px;
             margin:auto;
	 background:lightblue;
             }
---------------HTML--------------------------------------			 
	<<span>div class="container">    </ </span>div>
	  </pre>
	  
	  
	   <h3><a href="#">5. Descendant Combinator.</a></h3><br>
	  <p> The descendant selector or, more accurately, the descendant combinator lets you combine two or more selectors so you can be more specific in your selection method. For example: </p>
	  <pre>
#container .main {
             height:200px;
            width: 560px;
             margin:auto;
	 background:lightblue;
             }
---------------HTML--------------------------------------			 
	<<span>div id="container">  
	
	     <<span>div class="main">         </</span>div>
	
	  </ </span>div>
	  </pre>
	  
	  <h3><a href="#">6. Child Combinator.</a></h3><br>
	  <p> A selector that uses the child combinator is similar to a selector that uses a descendant combinator, except it only targets immediate child elements:</p>
	  <code> child cobinator work for parent and child tags of html here #container is parent and .menu is child  and only target child ".menu"</code><div><br> </div>
	  <pre>
#container > .main {
             height:200px;
            width: 560px;
             margin:auto;
	 background:lightblue;
             }
---------------HTML--------------------------------------			 
	<<span>div id="container">  
	
	     <<span>div class="main">         </</span>div>
	
	  </ </span>div>
	  </pre>
	  
	<h3><a href="#">7. General Sibling Combinator</a></h3><br>
	  <p> A selector that uses a general sibling combinator matches elements based on sibling relationships. That is to say, the selected elements are beside each other in the HTML.</p>
	  
	  <div><br> </div>
	  <pre>
h2 ~ p {
   margin-bottom: 20px; color:red;
}
---------------HTML--------------------------------------			 
	<<span>h2>Title<</span>/h2>
    <<span>p>Paragraph example.<<span>/p>

    <<span>div class="menu">
         <<span>p>Paragraph example.<<span>/p>
   <<span>/div>
	  </pre>
	  
	  
	   <h3><a href="#">8. Comments in CSS.</a></h3><br>
	  <p>Comments are used to explain the code, and may help when you edit the source code at a later date.</p>
	  <pre>
	<span style="color:green;">  /* this is css comment */ </span>
 #container .main {
             height:200px;
            width: 560px;
             margin:auto;
	 background:lightblue;
             }

	  </pre><br>
	  
	    </div>
		
			
		<div class="col-sm-12 bg-info column left_part question-box marginn"> 
		<h3>Examples </h3><br> 
      <h4><a href="#"> Format of Internal and Inline CSS ?</a> </h4>
	  <form method="post" >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<style>  
#z9{color:red; font-size:40px; }  
#z9:hover{ color:#00CCFF;}
</style>  
<body>   
      <h1 id="z9"> Internal CSS </h1>  
	  
	  
	  <p style="color:red; font-size:30px;"> Inline CSS </p> <!-- inline css -->
		   
</body>
</html>	
      </textarea>  <br>
	  <input type="submit" name="trysub" class="but " onClick="tryit()" value="Try It Live"> <br><br>	  
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