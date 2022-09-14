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

   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
 </head>
 <style>
   body {
   padding: 2em;
  }
 .card {
   border: none;
 }
 img,
 .card-img-top {
   border-radius: 0em;
 }

 @media (min-width: 576px) {
  .card-columns {
    column-count: 2;
  }
 }

 @media (min-width: 768px) {
  .card-columns {
    column-count: 3;
  }
 }

 @media (min-width: 992px) {
  .card-columns {
    column-count: 4;
  }
 }

 @media (min-width: 1200px) {
  .card-columns {
    column-count: 5;
  }
 }

 </style>


 <body class="host_version"> 

     <?php
     include_once("nav.php");
     ?>
	 	
	 <div class="all-title-box">
	     <div class="container text-center">
			 <h1>Gallery<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		 </div>
	 </div>

     <br>
     <br>
     <div class="container">
  <div class="card-columns">
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/200/tech/1	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/480/tech/2	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/3	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/500/300/tech/4	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/480/tech/5	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/200/tech/6" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/600/500/tech/7" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/600/500/tech/8" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/200/450/tech/20" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/10" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/11" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/200/400/tech/12" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/21" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/14" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/200/tech/15" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/300/300/tech/16" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/300/300/tech/17" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/480/tech/18" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/300/400/tech/19" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/300/tech/20" alt="Card image cap"> </div>

  </div>
</div>



	
	 <div id="teachers" class="section wb">
         <div class="container">
             <div class="row">
	             <div class="col-md-4">
					 <div class="our-team">
						 <?php
                             $query = "SELECT * FROM `teacher`";
                             $result = mysqli_query($conn,$query);
                             if(mysqli_num_rows($result))
                               {
                                 while($row = mysqli_fetch_array($result)){                                              
                            ?> 
						 <div class="team-img">
							 <img src="images/team-1.jpg">
						 </div>
					     <div class="team-content">
						     <h3 class="title"><?php echo $row[2];?></h3>
                             <span class="post">Qualification: <?php echo $row[6];?></span>
							 <span class="post">Email: <?php echo $row[3];?></span>
                             <span class="post">Phone No: <?php echo $row[5];?></span>
                             <span class="post">Subjects: <?php echo $row[7];?></span>
						 </div>
						 <?php
			 				 }
								}
						 ?>
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