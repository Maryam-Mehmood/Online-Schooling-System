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
body {
  background-color:  #eee;
}
.title {
 
    margin-bottom: 50px;
    text-transform: uppercase;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
     
}
.card {
    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin-top:20px;
}

.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators .active {
    background-color: white;
    max-width: 12px;
    margin: 0 3px;
    height: 12px;
}



.btn {
  margin-top: auto;
}
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

 <!-- HOLIDAY SCHEDULE -->
 <div id="plan" class="section lb">
         <div class="container">
             <div class="section-title text-center">
                 <h3>School principals</h3>
                 <p>School principals are the link between teachers, students and their parents or guardians, the education system and the wider community.  </p>
             
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h1 class="card-title text-left"><b>Teaching staff</b> </h1>
          <p class="card-text text-left">
      Teaching staff refer to professional personnel directly involved in teaching students, including classroom teachers; special education teachers; and other teachers who work with students as a whole class in a classroom, 
            in small groups in a resource room, or in one-to-one teaching inside or outside a regular classroom.</p>
          <br>
          <a href="#" class="mt-auto btn btn-warning">Read More</a>
        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2015/9/1/1441131168821/b3d3ceba-4b86-4ff7-b9f0-a1e913f8f5f0-2060x1236.jpeg?width=620&quality=85&fit=max&s=e0a0a71127de6373af8752015d6f96d2" width="600px" height="350px" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="https://www.gannett-cdn.com/-mm-/84de89d94c58e3446288642c313aba4eab6b8f24/c=0-102-2000-1232/local/-/media/2015/11/19/WIGroup/FondduLac/635835504969164934-FON-111915-nfdl-4.jpg?width=2000&height=1130&fit=crop&format=pjpg&auto=webp" width="600px" height="350px" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="https://www.payscale.com/wp-content/uploads/2021/10/teacher.jpg" width="600px" height="350px" alt="">
            </div>
            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
        </div>
      </div>
      <!-- End of carousel -->
    </div>
  </div>
  <!-- End of card -->
  </div><!-- end title -->
</div>


 
 <br>
<br>
 




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