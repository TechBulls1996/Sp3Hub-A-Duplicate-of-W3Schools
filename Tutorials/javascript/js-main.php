
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SP3hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css? <?php  echo 1; ?>">
    <link rel="stylesheet" href="js-main.css? <?php  echo 1; ?>">
 
 
 
    <script language="javascript" type="text/javascript">
  function tryit() {
    window.open('tryit.php');
}
  
  function nextpage(){
  location.href = "js-syntax.php";
  }
   function prevpage(){
  location.href = "js-main.php";
  }
 
  </script>
  
  <style>
  
.example{ width:100%; background-color:#E4E4E4; color:; font-size:16px; font-family:Courier; letter-spacing:1.5px; word-spacing:3px; margin:10px 0px 20px 0px; padding:5px 0px 5px 0px; white-space:pre-line; text-transform:capitalize; border:1px solid lightgrey; border-radius:4px;
box-shadow:2px 2px 2px grey;  }

  #dem99{ color:red;}
  #dem99:hover{color:#00CCFF;}
  .head{ overflow:visible;}
  .but{position:relative; right:10px; margin:5px;}
  .col-sm-2{width:20.5%;}
  .col-sm-10{width:79.5%;}
   a:hover{ text-decoration:none;}
   #image99{ display:none;}
   @media (max-width:800px)
   {
  
   .center{width:100%;}
   }
  </style>
  
  <script>
    var images = ['Images/1.png','Images/2.png','Images/3.png','Images/4.png'];
	  var str = 0;
	  
	  function slide99(){
		  document.getElementById('p99').innerHTML="Click multiples times on botton";
 		  document.getElementById('image99').style="display:block;";
		  document.getElementById('image99').src=images[str];
		 str++;
		 if(str>2){
			 str=0;
			 
			 } 
			 
	
		  }
	   
	  </script>
</head>
<body>
<!--- nav ---------->




<!--   end nav ------->
  
 <?php
 // head page include ---------
   include('head.php');
    
       
  
 // <!-- left side nav ---------------------->



$js1 = "active";
  
include('js-sidenav.php');
  
  ?>
	<div class="container-fluid text-center">           
   <div class="row">  
  <!-- End of left side nav ---------------------->
  
  
  <!--   center   ---------------------->
 <div class="col-sm-10 text-left center ">     
    <div class="row">     
	
           <!--   center   ---------------------->
 <div class="col-sm-12 text-left center">     
      <a href="#"><h2>JAVASCRIPT TUTORIALS</h2></a><br>
    <div class="col-sm-12">
	 <button class="but" onClick="prevpage()" ><span>&laquo;</span> PREV</button>   
	 
	     <button class="but" onClick="nextpage()">next <span>&raquo;</span></button>
	
	    </div><br>
	               
      <div class="col-sm-12"> <hr>  </div>
	  
	  <!--------    ------------------------------------->

  

	               
 
	   <div class="row">   
 <div class="col-sm-12">   
 
      <a href="#"><h3>Introduction</h3></a><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> What do you mean by Javascript? </a></h4>
	  <p>JavaScript is most commonly used as a client side scripting language. This means that JavaScript code is written into an HTML page. When a user requests an HTML page with JavaScript in it, the script is sent to the browser and it's up to the browser to do something with it.</p><br>
	 
	    </div>
		
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Example of javascript </a></h4>
	  <input type="button" onClick="alert('welcome to SP3hub.com')" value="click me to test javascript">
	 
	<div class="col-sm-12"> <br> </div>
	  
	    </div>
      <script>
	
	  </script>  
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Example of javascript </a></h4>
      <img src="Images/1.png" style="height:200px; width:200px; border:6px outset #09F;" id="image99"><br><br>
	  <input type="button" onClick="slide99()" value=" Click Me to Run ">
      <p id="p99" style="color:red; ">  </p>
	 
	<div class="col-sm-12"> <br> </div>
	  
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">How many types Of javascript ?</a></h4>
	  <p>There are three types of javascript are:   </p>
	  <p>1.Inline javascript</p>
	  <p>2.Internal javascript</p>
	  <p>3.External javascript+</p>
	  
	  <br>
	  
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn"> 
		<h3>Examples </h3><br> 
      <h4><a href="#"> Format of Internal and Inline javascript ?</a> </h4>
	  <form method="post" >  
	   <textarea name="trytext" style="resize:none; padding-left:15px; height:400px; width:100%; " class="family">   
<html>   
<head>   
   <title> SP3hub</title>
</head> 
<script>  /*-------Internal javascript ------- */
function demo99()
{
document.getElementById('z199').innerHTML="Welcome to SP3hub.com";

}

</script>
<body>   
      <h1 id="z199">  </h1>  
      <!-- Internal javascript by button -->
	  <button onClick="demo99()"> click me to test internal js  </button>
	  
      <!-- inline javascript -->
	  <button onClick="alert('welcome to sp3hub.com')"> click me to test inline js </button> <!-- inline css -->
		   
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
    	<div class="col-sm-12 bg-info column left_part question-box marginn"> 
	
	 <h3><a href="#"> Format of External Javascript ?</a> </h3>
     <h4> Step 1:</h4>
	<p> Create a new HTML page  <code>demo.html</code></p>
    
	<div class="col-sm-12 example">
	<<span>html>
    <</span>head>
	 <<span>title> sp3hub <</span>/title><br>
	<<span>/head>
	<</span>body>
    
	 <<span>h1 id="zz99"> this is External Javascript <</span>/h1>
	 <<span>button onclcik="demo99()"> Click me <</span>/button>
	 <<span>/body>
     <<span>/html>
     </div>
	<h5>Result :</h5>
	<h1> This is External Javascript</h1><hr>
    
    
    
	<h4>Step 2: </h4>
	<p><a href="#"> Create a JavaScript page </a><code>"demo.js"</code> </p>
	<mark> JavaScript Page create with  Pagename.js Extension </mark>
	<div class="col-sm-12" style="height:20px;"> </div>
	 <div class="col-sm-12 example">
	  function demo99()
      {
      document.getElementById
      ('zz99').style="color:red;";
      }
	  
	 </div> 
     <br>
	 <mark> Id(getElementById) are used to connect html and css tags </mark>
	 <h4>Step 3: </h4>
	 <p>Now Connect Or Link Both Pages<code>[ demo.js and demo.html ]</code> In Head Section Of HTML Page  <code>"demo.html"</code> </p>
     <div class="col-sm-12 example">
	  <<span>head><br><code> <</span>script type="text/javascript" language="javascript" src="demo.js">   <<span>/script> </code><br> <<span>/head> </span> <div>  </br> </div>
	  </div>
	  <mark>Then Save Both pages And Check be you were be used <code>Link Tag</code> in Head section HTML Page </mark>
	  <div>  </br> </div>
	  
	  <h4> Final Result : </h4>
 <script>      
  function demo99()
         {

          document.getElementById('zz99').innerHTML="Welcome to SP3hub.com";
         }
		 </script>
		 
	  <h1 id="zz99" style="color:#09F;">  </h1>
      <button onclick="demo99()"> Click me to test external js  </button><br>
	    <h1>  </h1>
        
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

<footer class="container-fluid">
  <?php  include('footer.php');  ?>
</footer>
</body> 
</html> 