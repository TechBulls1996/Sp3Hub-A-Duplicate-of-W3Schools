<html>
<head>
<title>SP3hub.com</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="stylesheet.css?<?php    ?>">
  <link rel="stylesheet" href="css/bootstrap.min.css?<?php  ?>">
 
  <script language="javascript" type="text/javascript" src="jquery/jquery-3.2.0.js"></script>
  <script language="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
  <script language="javascript">

   $(document).ready(function(){
 
  $('.lg1').click(function(){
  $('.lgmore').css("height","auto");
  $('.lgmore').slideToggle(1000);
  $('.lg1').css("background","#00CCFF");
  
  });
  });
  </script>

  </script>
  
  <style>
  
				  
   .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  


 </style>
 
</head>

<body>

<div class="wrapper">

  <?php
   include('head.php');
  ?>   
   
    
     <div class=" col-sm-12 slider"><!-- slider -->
         <div class="row ">
           <img src="Images/apple.jpg"  class="img-responsive">
		 
      </div> <!-- slider close -->
	  
	  <div class="row">
	    <div class="col-sm-12  cenh text-center"> <h1><small> WHAT DO YOU WANT LEARN ?</small> </h1>  </div>
		
		<div class="centermain col-sm-12 ">
		     <div class="row">
	    <div class="col-sm-12   center1">
		   <div class="row">
	      <div class=" col-sm-3  lang "><a href="Tutorials/html/html-main.php">HTML</a> </div>
		  <div class=" col-sm-3  lang"><a href="Tutorials/css/css-main.php">CSS</a>  </div>
	     <div class=" col-sm-3 lang "><a href="#" class="">javascript</a>  </div>
		 
		 
		  <div class=" col-sm-3 lang lg1 "><a >MORE &equiv;<span class="glyphicon"> </span></a>  </div>
		  <div class=" col-sm-3 lang lgmore"><a href="#">jquery</a>  </div>
		  <div class=" col-sm-3 lang lgmore"><a href="#">Bootstrap</a>  </div>
		   <div class=" col-sm-3 lang lgmore"><a href="#">PHP Core</a>  </div>
		    <div class=" col-sm-3 lang lgmore"><a href="#">PHP ++</a>  </div>
			 <div class=" col-sm-3 lang lgmore"><a href="#">Wordpress</a>  </div>
			  <div class=" col-sm-3 lang lgmore"><a href="#">Joomla</a>  </div>
			   <div class=" col-sm-3 lang lgmore"><a href="#">Examples</a>  </div>
			    <div class=" col-sm-3 lang lgmore"><a href="#">Pojects Free</a>  </div>
		 <div class=" col-sm-3 lang lgmore"><a href="#">Advance tuts</a>  </div>
	        </div>
	    </div>
	  </div>
	    </div> 
	   
   </div>
     <div class="row">
   <div class="col-sm-12 searc"><br>
     
	 <div class="col-sm-3"> </div>  
    <div class="input-group col-sm-6">
            <input type="text" class="form-control" placeholder="Find Out Anything Here.." style="height:42px;">
            <span class="input-group-btn">
               <input class="btn btn-default" type="button" value="Search">
             </span>
    </div>
	<div class="col-sm-3"> </div>
	 <hr>
	 
   </div>
   
   <div class="feature col-sm-12 bg-info"> <!-- features div -->
   
       
	   
	   
	   
   
   </div><!-- end of features div -->
   
   <div class="col-sm-12 latest ">
      <div class="row">   
     <div class="col-sm-12  text-center" style="height:70px;"> 
	   <h1><small> The Latest Box    </small></h1>
	   
	 </div>
	 <div class="col-sm-12 " style="">
	    
	  <div class="col-sm-6 thumbnail" style=" "> 
	     
	  <div class="row"><div class="container-fluid col-sm-12">   
		<table class="table table-striped table-hover" width="">
		<tr>
		  <th>S.no</th>  <th>New Tutorials  <code>[ With Example]</code></th>  <th>Go!</th>
		</tr>
		<tr>
		<td>1</td> <td>Html 5  <code> New*</code></td> <td><input type="button" class="btn btn-sm btn-info " value="click"></td>
		</tr>
		<tr>
		<td>2</td> <td>css 3  <code> New*</code></td> <td><input type="button" class="btn btn-sm btn-info " value="click"></td>
		</tr>
		<tr>
		<td>3</td> <td>Wordpress  <code> New*</code></td> <td><input type="button" class="btn btn-sm  btn-info" value="click"></td>
		</tr>
		<tr>
		<td>4</td> <td>Php ++  <code> New*</code></td> <td><input type="button" class="btn btn-sm  btn-info" value="click"></td>
		</tr>
		<tr>
	
		</table>
	  </div>
	  </div></div>
	  
	   
	    <div class="col-sm-6    thumbnail" style=" "> 
	   <div class="row"><div class="container  col-xs-12">   
		<table class="table table-striped table-hover" width="">
		<tr>
		  <th>S.no</th>  <th>New Projects <code>[with Source Code ]</code></th>  <th>Go!</th>
		</tr>
		<tr>
		<td>1</td> <td>Php  <code> New*</code></td> <td><input type="button" class="btn btn-sm btn-warning " value="click"></td>
		</tr>
		<tr>
		<td>2</td> <td>Wordpress <code> New*</code></td> <td><input type="button" class="btn btn-sm btn-warning " value="click"></td>
		</tr>
		<tr>
		<td>3</td> <td>Joomla  <code> New*</code></td> <td><input type="button" class="btn btn-sm  btn-warning" value="click"></td>
		</tr>
		<tr>
		<td>4</td> <td>Bootstrap  <code> New*</code></td> <td><input type="button" class="btn btn-sm  btn-warning" value="click"></td>
		</tr>
		<tr>
	
		</table>
	  </div></div>
	   
	    </div>
	 
	 </div>
	 
	 </div>
   </div><!-- end of latest -->
   
    <div class=" col-sm-12"> <hr></div>
   
   <div class="col-sm-12 infor ">
     <div class="col-sm-6 inf1"> <center>
	 
	   <div style="border:1px solid grey" class="">
	  <br>
	   <div class="">
	    <img src="Images/pexels-photo-212286.jpeg" class="img img-responsive img-circle img-thumbnail inf11 "  style="height:200px; width:200px;"> <hr>
		</div>
		 <h2> <small><mark>Future As Developer</mark></small></h2>
		<p> 
	Ready, fire, aim: the fast approach to software development. Ready, aim, aim: the slow approach to software development.
	<mark><p> (Anonymous) </p></mark></p>
		
	     </div></center>
	  </div>
	 
     <div class="col-sm-6 inf1 "><center>
	   <div style="border:1px solid grey" >
	  <br>
	  
	 <img src="Images/pexels-photo-256548.jpeg" class="img img-responsive img-circle img-thumbnail inf11" style="height:200px; width:200px; "><hr> 
	 <h2  > <small><mark>Programming World</mark></small></h2>
	    <p>  It’s a curious thing about our industry: not only do we not
		 learn from our mistakes, we also don’t learn from our successes.      <mark><p>(Keith Braithwaite)</p></mark> </p>
	   </div>
	     </div></center>
	 </div><div class="col-sm-12" ><br><hr> </div>
	</center>
    </div> 

	 <!--footer-->
<footer class="container-fluid foot99">
	<?php
	include('footer.php');
	
	?>
      <!-- end of footer -->
   </footer>
   
   
   
   </div>
     </div><!-- row end -->
   
</div>
</div>
</body>
</html>
