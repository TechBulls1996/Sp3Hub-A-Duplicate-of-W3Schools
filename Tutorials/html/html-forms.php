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
  location.href = "html-form-elements.php";
  }
   function prevpage(){
  location.href = "html-javascript.php";
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
 
 
    <h3>Html Forms</h3>
	 
	 
	 
     <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is  Form Tag in Html ?</h4>
	<p>The HTML <<span>form> </span>tag is used for creating a form for user input. A form can contain textfields, checkboxes, radio-buttons and more. Forms are used to pass user-data to a specified URL.</p>
	
	
	</div>
   
    <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is the use of forms in HTML?</h4>
	<p>A webform, web form or HTML form on a web page allows a user to enter data that is sent to a server for processing. Forms can resemble paper or database forms because web users fill out the forms using checkboxes, radio buttons, or text fields.</p>
	
	
	</div>
 
 
   <div class="col-sm-12 bg-info column left_part question-box marginn">
      
	  <h4>What is form element in HTML?</h4>
	   <table class="table table-bordered table-responsive">
	   <tr>
	   <th>Tags</th> <th> describe</th>
	   </tr>
	   
	   <tr>
	   <td> <<span>input></span>  </td> <td>Defines an input control </td>   
	   </tr>
	   
	   <tr>
	   <td> <<span>textarea></span>  </td>  <td>Defines a multiline input control (text area)</td>  
	   </tr>
	   
	   <tr>
	   <td><<span>lebel></span>   </td> <td>Defines a label for an <<span>input></span> element </td>    
	   </tr>
	   
	   <tr>
	   <td><<span>fieldset ></span>  </td>  <td>Groups related elements in a form</td>   
	   </tr>
	  
	 </table>
	</div>
	
	 <div class="col-sm-12 bg-info column left_part question-box marginn">
	 <h4>Example Of Form</h4>
	 <pre><form action="" method="post">
name:
<input type="text"><br>
pass:
<input type="password"><br>
<input type="submit" value="send">

</form></pre>
	 
    <form method="post" name="frm">
	<textarea name="trytext"  style="resize:none; height:350px; width:100%;" class="family"><Html>
<head> 
   <title> SP3hub</title>
</head> 
<body>
<form action="" method="post"> 
Full name:
<input type="text"><br><br>
Password:
<input type="password"><br><br>
<input type="submit" value="send">

</form> 
</body>
</html></textarea> <br>
 <input type="submit" class="but " name="trysub" onClick="tryit()" value="Try it Live" > <br><br>
 
 </div>
<?php
    $deca=@$_POST['trytext'];
   
	 if(isset($_POST['trysub']))
	 {
	 $_SESSION['tryitt']= $deca;
	  }
	  ?> 
  
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