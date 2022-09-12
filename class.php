<?php
 session_start();
 $conn = mysqli_connect("localhost","root","","online-school-system");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <!-- Basic -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
     <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
     <title>SmartEDU - Education</title>  
     <meta name="keywords" content="">
     <meta name="description" content="">
     <meta name="author" content="">

     <!-- Site Icons -->
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
     <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- Site CSS -->
     <link rel="stylesheet" href="style.css">
     <!-- ALL VERSION CSS -->
     <link rel="stylesheet" href="css/versions.css">
     <!-- Responsive CSS -->
     <link rel="stylesheet" href="css/responsive.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/custom.css">

     <!-- Modernizer for Portfolio -->
     <script src="js/modernizer.js"></script>

     <!-- Bootstrap -->

     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

 </head>
 <body class="host_version"> 

     <?php
     include_once("nav.php");
     ?>
	 	
	 <div class="all-title-box">
	     <div class="container text-center">
			 <h1>Classes<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		 </div>
	 </div>
	
	 <div id="teachers" class="section wb">
         <div class="container">
             <div class="">
	             <div class="">
					 <div class="our-team">
						 <h1 class="text-center">Time Table</h1>
                         <div class="card">
                             <h5 class="card-header">Grade 1</h5>
                             <div class="card-body">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th scope="col">Days</th>
                                             <th scope="col">1</th>
                                             <th scope="col">2</th>
                                             <th scope="col">3</th>
                                             <th scope="col">4</th>
                                             <th scope="col"></th>
                                             <th scope="col">5</th>
                                             <th scope="col">6</th>
                                             <th scope="col">7</th>
                                             <th scope="col">8</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <th scope="row">Monday</th>
                                             <td>English</td>
                                             <td>Urdu</td>
                                             <td>Maths</td>
                                             <td>S.st</td>
                                             <td>Break</td>
                                             <td>Science</td>
                                             <td>Islamiat</td>
                                             <td>Maths</td>
                                             <td>Maths</td> 
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
				     </div>
				 </div>
             </div><!-- end row -->
         </div><!-- end container -->
     </div><!-- end section -->	

     <div class="parallax section dbcolor">
         <div class="container"> 
         </div><!-- end container -->
     </div><!-- end section -->

	 <?php
         include_once("footer.php");
        ?>
	 
     <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

     <!-- ALL JS FILES -->
     <script src="js/all.js"></script>
     <!-- ALL PLUGINS -->
     <script src="js/custom.js"></script>

 </body>
</html>