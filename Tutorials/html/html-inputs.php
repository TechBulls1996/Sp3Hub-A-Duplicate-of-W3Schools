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
  location.href = "html-examples.php";
  }
   function prevpage(){
  location.href = "html-form-elements.php";
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
    @media (max-width:400px)
	{
	 input{width:80px;}
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
$htmlmain = $htmleditors = $htmltags = $htmlheading = $htmlstyle = $htmlformat = $htmlcomments = $htmltest = $htmlembed= $htmlfont = $htmliframes= $htmlblocks = $htmllists =  $htmltables = $htmlvideo= $htmlaudio= $htmlimages= $htmllinks = $htmlquotation = $htmlquiz= $htmlexercises = $htmlexamples = $htmlinputs = $htmlformelements = $htmljavascript = $htmleditors = $htmldiv =0;


$htmlinputs="active";
  
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
 
 
  <h3>HTML Form Inputs</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is  HTML Form Inputs ?</h4>
	 <p>Definition and Usage. The <<span>input> tag specifies an input field where the user can enter data. <</span>input> elements are used within a <<span>form</span>> element to declare input controls that allow users to input data. An input field can vary in many ways, depending on the type attribute.</p>
	
	</div>
 
 
      
	 
 
    <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>How many types  HTML Form Inputs ?</h4>
	 <table class="table table-responsive table-bordered">
	 <tr>
	 <th>Input Types</th>  <th> Examples</th>
	 
	 </tr>
	 <tr>
	 <td>Text</td>  <td> <input type="text"> </td>
	 </tr>
	 <tr>
	 <td>password</td>  <td> <input type="password"> </td>
	 </tr>
	 <tr>
	 <td>Email</td>  <td> <input type="Email"> </td>
	 </tr>
	 <tr>
	 <td>radio</td>  <td> <input type="radio"> </td>
	 </tr>
	 <tr>
	 <td>checkbox</td>  <td> <input type="checkbox"> </td>
	 </tr>
	 <tr>
	 <td>Button</td>  <td> <input type="Button" value="button"> </td>
	 </tr>
	 <tr>
	 <td>Submit</td>  <td> <input type="submit"> </td>
	 </tr>
	 <tr>
	 <td>reset</td>  <td> <input type="reset" > </td>
	 </tr>
	 <tr>
	 <td>range</td>  <td> <input type="range"> </td>
	 </tr>
	 <tr>
	 <td>number</td>  <td> <input type="number" value="10"> </td>
	 </tr>
	 <tr>
	 <td>color</td>  <td> <input type="color"> </td>
	 </tr>
	 <tr>
	 <td>Date</td>  <td> <input type="date"> </td>
	 </tr>
	 <tr>
	 <td>search</td>  <td> <input type="search"> </td>
	 </tr>
	 <tr>
	 <td>Url</td>  <td> <input type="url"> </td>
	 </tr>
	 <tr>
	 <td>File</td>  <td> <input type="file"> </td>
	 </tr>
	 
	 </table>
	<h4>HINT:</h4>
	<p><mark>Range,url,date,color,
	number,email etc are HTML 5 text</mark></p>
	</div>
	
	
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is  HTML Attributes ?</h4>
	 <p>The formenctype Attribute. The formenctype attribute specifies how the form data should be encoded when submitted (only for forms with method="post"). The formenctype attribute overrides the enctype attribute of the <<span>form> element. The formenctype attribute is used with type="submit" and type="image"</p>
	
	</div>
	
	   <div class="col-sm-12 bg-info column left_part question-box marginn">
	 <h3>Input Attributes</h3>
	  <table class="table table-responsive table-bordered">
	 <tr>
	 <th>Attributes</th>  <th> Describe</th>
	 
	 </tr>
	 <tr>
	 <td>Name</td>  <td> it used to connect inputs with backend language </td>
	 </tr>
	 <tr>
	 <td>value</td>  <td> it used to give value to inputs  </td>
	 </tr>
	
	 <td>placeholder</td>  <td> it used to give background text to input </td>
	 </tr>
	
	 </table>
	  <h3>Form Atrributes</h3>
	    <table class="table table-responsive table-bordered">
	 <tr>
	 <th>Attributes</th>  <th> Describe</th>
	 
	 </tr>
	 <tr>
	 <td>Name</td>  <td> it used to connect form with backend language </td>
	 </tr>
	 <tr>
	 <td>method</td>  <td> when we transfer data browser to server by using methods get/post </td>
	 </tr>
	
	 <td>action</td>  <td> it used to perform action on which page when form submitted </td>
	 </tr>
	
	 </table>
	
	</div>
	
  
  <div class="col-sm-12 bg-info column left_part question-box marginn">
      
   <h4>Example Of complete Form</h4>
   <form method="post">
	<textarea name="trytext" style="resize:none; height:750px; width:100%;" class="family"><Html>
<head> 
   <title> SP3hub</title>
</head> 
<body> 
  
  <form action="" method="post" name="frm">
Name:<input type="text" name="na" palceholder="Full name"><br><br>

pass:<input type="Password" name="pass" palceholder="Password"><br><br>

DOB: <select>
     <option>Months</option>
     <option>jan</option>
	 <option>feb</option>
	 <option>mar</option>
	 </select>
	 
	 <select>
	 <option>date</option>
	  <option>1</option>
	 <option>2</option>
	 <option>3</option>
	 </select>
	 <input type="number" value="1996"><br><br>
Gender:
	male<input type="radio" name="g" value="male"> female<input type="radio" name="g" value="female"><br><br>
	
	<input type="submit" name="sub">
	</form> 
	
</body>
</html></textarea>  <br>
 <input type="submit" name="trysub" class="but " onClick="tryit()" value="Try it Live">
 </form><br><br>
  <?php
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']=$_POST['trytext'];
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
	</div></div></div>

 <!-- end of right side nav ---------------------->
 
 

<!-------footer---------->

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>