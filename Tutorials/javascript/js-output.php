
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SP3hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css?<?php  echo 1; ?>">
    <link rel="stylesheet" href="js-main.css? <?php  echo 1; ?>">
 
 
 
    <script language="javascript" type="text/javascript">
  function tryit() {
    window.open('tryit.php');
}
  
  function nextpage(){
  location.href = "js-variable.php";
  }
   function prevpage(){
  location.href = "js-syntax.php";
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
  
   .center{width:100%;}
   }
  </style>
  </head>
<body>
<!--- nav ---------->




<!--   end nav ------->
  
 <?php
 // head page include ---------
   include('head.php');
    
       
  
 // <!-- left side nav ---------------------->



$js3 = "active";
  
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
 
      <a href="#"><h3>Javascript Output</h3></a><br>
	  <div class="col-sm-12 bg-info column left_part question-box ">
      <h4><a href="#"> How Javascript Gives Output? </a></h4>
	  <p>JavaScript is most commonly used as a client side scripting language. This means that JavaScript code is written into an HTML page. When a user requests an HTML page with JavaScript in it, the script is sent to the browser and it's up to the browser to do something with it.</p><br>
	 
	    </div>
		
	
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">Example of javascript Output methods</a></h4>
      <p>1. Writing into an HTML element, using innerHTML.</p>
        <p>2. Writing into the HTML output using document.write().</p>
        <p>3. Writing into an alert box, using window.alert().</p>
        
	<div class="col-sm-12"> <br> </div>
	  
	    </div>
      <script>
	
	  </script>  
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      
      <h4><a href="#">1. Example of javascript using innerHTML </a></h4>
      <div class="col-sm-12 example"> <br>
      
      
      <<span>p id="zz">  &nbsp; &nbsp;   <</span>/p><br>
      
      <<span>button onClick="document
      .getElementById('z19').
      innerHTML=
      'Welcome to sp3hub.com';"> click to print <<span>/button>
      
      </div>
      <h3>Result:</h3>
     <p id="z19">  </p>
     <button onClick="document.getElementById('z19').innerHTML='Welcome to sp3hub.com';"> &nbsp;click to print &nbsp; </button>
	<div class="col-sm-12"> <br> </div>
	  
	    </div>
		
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">2. Example of javascript output by document.write() </a></h4>
	  <div class="col-sm-12 pre-tag"> <br>
      
      <<span>button onClick="
      document.write
      ('Welcome to sp3hub.com');"> click to print <<span>/button><br><br>
      </div>
      <h3>Result:</h3>
    
     <button onClick="document.write('Welcome to sp3hub.com'+'<br><br><h3>Refresh page to go back</h3>');"> &nbsp;click to print &nbsp; </button>
     <h4>Hint:</h4>
     <p><mark> It Change the whole page HTML coding</mark> </p>
     
	
	  
	  <br>
	  
	    </div>
        
        
		<div class="col-sm-12 bg-info column left_part question-box marginn ">
      <h4><a href="#">3. Example of javascript output by alert() </a></h4>
	  <div class="col-sm-12 pre-tag"> <br>
      
      <<span>button onClick="alert('Welcome to sp3hub.com');"> click to print <<span>/button><br><br>
      </div>
      <h3>Result:</h3>
    
     <button onClick="alert('Welcome to sp3hub.com');"> &nbsp;click to print &nbsp; </button>
    
	<h1> </h1>
	  
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
<script>  
function demo99()
{
document.getElementById('z199').innerHTML="Welcome to SP3hub.com";

}

</script>
<body>   
      <h1 id="z199">  </h1>  
    
	  <button onClick="demo99()"> click me 1  </button>
	  
      <!-- inline javascript -->
	  		   <button onClick="alert('welcome to sp3hub.com')"> click me 2</button> <br><br>
                <button onClick="document.write('welcome to sp3hub.com')"> click me 3 </button>
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