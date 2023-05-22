
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
  location.href = "css-images.php";
  }
   function prevpage(){
  location.href = "css-text.php";
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

$cssfont = "active";
  
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
 
      <h3><a href="#">CSS Font Properties </a> </h3><br>
	  
	  <div class="col-sm-12 bg-info column left_part question-box ">
	  <h4><a href="">What is CSS Font ? </a>  </h4>
	  <p>Definition and Usage. The <font> tag is not supported in HTML5. Use CSS instead. The <font> tag specifies the font face, font size, and color of text</p>
	
	   </div>
	  
	  <div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#"> Css Font properties are </a></h4>
	  <table class="table table-bordered ">
	  <tr class="warning">
	  <th>Properties</th>  <th> Examples</th>
	  </tr>
	  <tr class="warning">
	  <th>1. Font-size(10px,20px etc)</th>  <th> <span style="font-size:40px;"> F</span> <span style="font-size:30px;"> F</span> <span style="font-size:20px;"> F</span></th>
	  </tr>
	  
	  <tr class="warning">
	  <th>2. Font-family ( arial ,courier etc)</th>  <th> <span style=" font-family:'Courier New', Courier, monospace;"> Font</span> <span style="font-family:Verdana, Arial, Helvetica, sans-serif;"> Font</span> </th>
	  </tr>
	  
	   <tr class="warning">
	  <th>3. Font-Weight ( 100 ,300 ,800)</th>  <th> <span style=" font-weight:800"> Font</span> <span style="font-weight:400px;"> Font</span> </th>
	  </tr>
	  
	   <tr class="warning">
	  <th>4. Font-varient ( normal,small-caps)</th>  <th> <span style=" font-variant:small-caps;"> Font</span> <span style=" font-variant:normal;"> Font</span> </th>
	  </tr>
	  
	   <tr class="warning">
	  <th>5. Font-style (normal,italic,bold etc )</th>  <th> <span style=" font-style:italic;"> Font</span> <span style=" font-style:normal;"> Font</span> </th>
	  </tr>
	  
	  
	  </table>
      
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#"> Examples of Font Properties are</a> </h4>
	  <h3><a href="#">1. Font-size</a></h3><br>
	 <p> Text <code>Font-size</code> is a properties to define font/text size in pixels ,em etc</p> 
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { color:red; font-size:40px; } 
	  <<span>/style><h3>Result :- </h3><p style="color:red; font-size:40px;">this is paragraph tag</p></pre>
	  
      
	  <h3><a href="#">2. Font-family</a></h3><br>
	  <p> <code>Font-family </code> property is define to set or remove decoration of text </p>
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { font-family:courier; }  More:-<span style="color:green;">arial,sans-serif,courier new etc</span>
	  <<span>/style><h3>Result :- </h3><p style=" font-family:'Courier New', Courier, monospace">this is paragraph tag</p></pre>
	  
	  
	
      <h3><a href="#">3. Font-weight</a></h3><br>
	  <p> <code> Font-weight </code> property is define to set text/font height or darker</p>
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { font-weight:700; }  More:-<span style="color:green;">100, 200, 300 ,400 ....etc </span>
	  <<span>/style><h3>Result :- </h3><p style="font-weight:700;">this is paragraph tag</p></pre>
      
  <h3><a href="#">4. Font-style</a></h3><br>
	  <p> <code>Font-style</code> property is define to change text style like :- bold ,italic ,oblique ,normal etc </p>
	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { Font-style:italic; }  More:-<span style="color:green;"> bold ,italic ,oblique ,normal etc</span>
	  <<span>/style><h3>Result :- </h3><p style="font-style:italic;">this is paragraph tag</p></pre>
      
      
        <h3><a href="#">5. font-varient</a></h3><br>
	  <p>The <code>font-varient</code>,In a small-caps font, all lowercase letters are converted to uppercase letters. However, the converted uppercase letters appears in a smaller font size than the original uppercase letters in the text. The font-variant property specifies whether or not a text should be displayed in a small-caps font.</p>


	  <pre>
      <<span>p> this is paragraph tag <</span>/p> 
          
          <<span>style>
	  p { font-variant:small-caps; font-size:20px;}  More:- <span style="color:green;">normal and small-caps    </span> 
	  <<span>/style><h3>Result :- </h3><h3 style=" font-variant:small-caps;">This is paragraph tag </h3></pre>
	
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
#z9{color:red; text-align:center; font-size:30px; font-family:"Courier New", Courier, monospace; }  
#z9:hover{ color:#00CCFF;}
</style>  
<body>   
      <h1 id="z9"> Font Tags of css </h1>  
	  
	  
	  <p style="color:green; text-decoration:underline; font-style:oblique; font-weight:900;"> Inline CSS </p> <!-- inline css -->
		   
</body>
</html>	
      </textarea>  <br>
	  <input type="submit" name="trysub" class="but " onClick="tryit()" value="Try It Live"> 	 <br><br> 
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