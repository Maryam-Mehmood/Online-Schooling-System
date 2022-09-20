<?php
 $conn = mysqli_connect("localhost","root","","online-school-system");
 session_start();
 // $_SESSION["role"] = "";
?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <!-- Basic -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
     <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
      
     <!--logo--->
     <link rel="icon" type="image" href="images/mimilogo.png">

      <!-- Site Metas -->
     <title>Online Education</title>  
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

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
 </head>

<style>

</style>

 <body class="host_version">  
     <?php
     include_once("nav.php");
     ?>
	 
     <!-- Slider Start -->
	 <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
	     <!-- Indicators -->
		 <ol class="carousel-indicators">
		     <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			 <li data-target="#carouselExampleControls" data-slide-to="1"></li>
			 <li data-target="#carouselExampleControls" data-slide-to="2"></li>
		 </ol>
		 <div class="carousel-inner" role="listbox">
		 	 <div class="carousel-item active">
                 <?php
                     $query = "SELECT * FROM `slider`";
                     $result = mysqli_query($conn,$query);
                     if(mysqli_num_rows($result))
                       {
                         while($row = mysqli_fetch_array($result)){                                              
                    ?> 
			     <div id="home" class="first-section" style="background-image:url('https://e-file.huawei.com/-/media/EBG/Images/SolutionV2/industry/education/solution-01-v3.jpg');">
				     <div class="dtab">
					     <div class="container">
						     <div class="row">
							     <div class="col-md-12 col-sm-12 text-right">
								     <div class="big-tagline">
                                     <h2 data-animation="animated zoomInRight">SmartOnline <strong>education system</strong></h2>
										 <p class="lead" data-animation="animated fadeInLeft">Today we can do everything online; we can shop online, we can book anything online, we can make payment online, then why not study? Yes, of course we can also study online. </p>
										 <a href="contact.php" class="hover-btn-new"><span>Contact Us</span></a>
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										 <a href="about.php" class="hover-btn-new"><span>Read More</span></a>
									 </div>
								 </div>
							 </div><!-- end row -->            
						 </div><!-- end container -->
					 </div>
				 </div><!-- end section -->
                 <?php
                     }
                     }
                    ?>
			 </div>
			 <div class="carousel-item">
			     <div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
				     <div class="dtab">
					     <div class="container">
						     <div class="row">
							     <div class="col-md-12 col-sm-12 text-left">
								     <div class="big-tagline">
									     <h2 data-animation="animated zoomInRight">Students Education <strong>Policy</strong></h2>
										 <p class="lead" data-animation="animated fadeInLeft">This is a working brief identifying policy recommendations for inclusive educational materials based on the takeaways from prior research described above. </p>
										 <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
									     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										 <a href="#" class="hover-btn-new"><span>Read More</span></a>
									 </div>
								 </div>
							 </div><!-- end row -->            
						 </div><!-- end container -->
					 </div>
				 </div><!-- end section -->
			 </div>
			 <div class="carousel-item">
			     <div id="home" class="first-section" style="background-image:url('https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80');">
				     <div class="dtab">
					     <div class="container">
						     <div class="row">
							     <div class="col-md-12 col-sm-12 text-center">
								     <div class="big-tagline">
									     <h2 data-animation="animated zoomInRight"><strong>Find Scholarships </strong>to Finance Your Study</h2>
										 <p class="lead" data-animation="animated fadeInLeft">MPOWER is proud to offer scholarships for international students to help fund your education and dreams.
                                         </p>
									     <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										 <a href="#" class="hover-btn-new"><span>Read More</span></a>
									 </div>
								 </div>
							 </div><!-- end row -->            
						 </div><!-- end container -->
					 </div>
				 </div><!-- end section -->
			 </div>
			 <!-- Left Control -->
			 <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			     <span class="fa fa-angle-left" aria-hidden="true"></span>
				 <span class="sr-only">Previous</span>
			 </a>

			 <!-- Right Control -->
			 <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			     <span class="fa fa-angle-right" aria-hidden="true"></span>
				 <span class="sr-only">Next</span>
			 </a>
		 </div>
	 </div>
	 <!-- Slider End -->




     
    
	 <div class="section cl">
	     <div class="container">
		     <div class="row text-left stat-wrap">
			     <div class="col-md-4 col-sm-4 col-xs-12">
				     <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					 <p class="stat_count">
                         <?php
                             $query = "SELECT COUNT(id) from `student`";
                             $result =  mysqli_query($conn,$query);
                             if (mysqli_num_rows($result)) 
                               {
                                 while ($row = mysqli_fetch_array($result)) 
                                   {
                                     echo $row[0];
                                    }
                                }
                            ?>
                     </p>
					 <h3>Students</h3>
				 </div><!-- end col -->

				 <div class="col-md-4 col-sm-4 col-xs-12">
				     <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					 <p class="stat_count">
                         <?php
                             $query = "SELECT COUNT(id) from `teacher`";
                             $result =  mysqli_query($conn,$query);
                             if (mysqli_num_rows($result)) 
                               {
                                 while ($row = mysqli_fetch_array($result)) 
                                   {
                                     echo $row[0];
                                    }
                                }
                            ?>
                     </p>
					 <h3>Teachers</h3>
				 </div><!-- end col -->

				 <div class="col-md-4 col-sm-4 col-xs-12">
				     <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					 <p class="stat_count">
                         <?php
                             $query = "SELECT COUNT(id) from `holiday`";
                             $result =  mysqli_query($conn,$query);
                             if (mysqli_num_rows($result)) 
                               {
                                 while ($row = mysqli_fetch_array($result)) 
                                   {
                                     echo $row[0];
                                    }
                                }
                            ?>
                     </p>
					 <h3>Holidays</h3>
				 </div><!-- end col -->
			 </div><!-- end row -->
		 </div><!-- end container -->
	 </div><!-- end section -->

     <br>
     <div class="container mt-2">
<!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="card card-block">
      <h4 class="card-title text-right"><i class=""></i></h4>
    <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
        <h5 class="card-title mt-3 mb-3 text-center">Sierra Web Development</h5>
        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
  </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card card-block">
      <h4 class="card-title text-right"><i class=""></i></h4>
    <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 text-center">ProVyuh</h5>
        <p class="card-text">This is a company that builds websites, web .</p> 
  </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card card-block">
      <h4 class="card-title text-right"><i class=""></i></h4>
    <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 text-center">ProVyuh</h5>
        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
  </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card card-block">
      <h4 class="card-title text-right"><i class=""></i></h4>
    <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 text-center">ProVyuh</h5>
        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
  </div>
    </div>    
  </div>
  
</div>

     <!-- HOLIDAY SCHEDULE -->
     <div id="plan" class="section lb">
         <div class="container">
             <div class="section-title text-center">
                 <h3>Holidays Schedule</h3>
                 <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
             </div><!-- end title -->

             <hr class="invis">

             <div class="row">
                 <div class="col-md-12">
                     <div class="tab-content">
                         <div class="tab-pane active fade show" id="tab1">
                             <div class="row text-center">
                                 <div class="col-md-12">
                                     <div class="pricing-table pricing-table-highlighted">
                                         <div class="pricing-table-header grd1">
                                             <h2>Holidays Schedule</h2>
                                         </div>
                                         <div class="pricing-table-space"></div>
                                         <table class="table table-hover">
                                             <thead>
                                                 <tr>
                                                     <th scope="col">Date</th>
                                                     <th scope="col">Day</th>
                                                     <th scope="col">Holiday Name</th>
                                                     <th scope="col">Detail</th>        
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <?php
                                                     $query = "SELECT * FROM `holiday`";
                                                     $result = mysqli_query($conn,$query);
                                                     if(mysqli_num_rows($result))
                                                       {
                                                         while($row = mysqli_fetch_array($result)){                                              
                                                    ?>     
                                                 <tr>
                                                     <td><?php echo $row[1];?></td>
                                                     <td><?php echo $row[2];?></td>
                                                     <td><?php echo $row[3];?></td>
                                                     <td><?php echo $row[4];?></td>
                                                 </tr>
                                                 <?php
                                                     }
                                                     }
                                                    ?>
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div><!-- end row -->
                         </div><!-- end pane -->
                     </div><!-- end content -->
                 </div><!-- end col -->
             </div><!-- end row -->
         </div><!-- end container -->
     </div><!-- end section -->


     

     <!-- Activities Start -->
     <div class="parallax section dbcolor">
         <div class="container">
             <!-- Facilities Start -->
             <div class="container-fluid pt-5">
                 <div class="container pb-3">
                     <div class="row">
                         <div class="col-lg-4 col-md-6 pb-1">
                             <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                 <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                                 <div class="pl-4">
                                     <h4><img src="images/sport.png" alt="" width="50px"> Sports</h4>
                                     <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 pb-1">
                             <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                 <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                                 <div class="pl-4">
                                     <h4><img src="images/library.png" alt="" width="50px"> Library</h4>
                                     <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-6 pb-1">
                             <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                                 <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                                 <div class="pl-4">
                                     <h4><img src="images/arts.png" alt="" width="50px"> Arts and Crafts</h4>
                                     <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                                 </div>
                             </div>
                         </div>
                         <!-- <div class="col-lg-4 col-md-6 pb-1">
                         <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                         <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                         <div class="pl-4">
                         <h4>Safe Transportation</h4>
                         <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                         </div>
                         </div>
                         </div>
                         <div class="col-lg-4 col-md-6 pb-1">
                         <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                         <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                         <div class="pl-4">
                         <h4>Healthy food</h4>
                         <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                         </div>
                         </div>
                         </div>
                         <div class="col-lg-4 col-md-6 pb-1">
                         <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                         <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                         <div class="pl-4">
                         <h4>Educational Tour</h4>
                         <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                         </div>
                         </div>
                         </div> -->
                     </div>
                 </div>
             </div>
             <!-- Facilities Start -->
         </div><!-- end container -->
     </div><!-- end section -->

     <?php
     include_once("footer.php");
     ?>

     <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

 </body>
</html>