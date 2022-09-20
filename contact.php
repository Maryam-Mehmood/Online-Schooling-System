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
	 	  	 <h1>Contact<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
	     </div>
     </div>
	
     <div id="contact" class="section wb">
         <div class="container">
             <div class="section-title text-center">
                 <h3>Need Help? Sure we are Online!</h3>
                 <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
             </div><!-- end title -->

             <div class="row">
                 <div class="col-xl-6 col-md-12 col-sm-12">
                     <div class="contact_form">
                         <div id="message"></div>
                         <form action="#" method="post">
                             <div class="row row-fluid">
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                     <h3 class="text-white">Name</h3>
                                     <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Email</h3>
                                     <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Phone No.</h3>
                                     <input type="text" name="phone"  class="form-control" placeholder=" Enter Your Phone No." required>
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                     <h3 class="text-white">Message</h3>
                                     <textarea class="form-control" name="msg" rows="6" placeholder="Your Complaint/Message/Feedback.." required></textarea>
                                 </div>
                                 <div class="text-center pd">
                                     <button type="submit" value="SEND" class="btn btn-light btn-radius btn-brd grd1 btn-block" name="submit">Send Request</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div><!-- end col -->
			 	 <div class="col-xl-6 col-md-12 col-sm-12">
				     <div class="map-box">
                     <div class="map-responsive">

<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924234.6301497458!2d66.59496105984819!3d25.193389485801205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1630788986351!5m2!1sen!2s"
    width="600" height="592" frameborder="0" style="border:0" allowfullscreen></iframe>

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
	 <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	 <!-- Mapsed JavaScript -->
	 <script src="js/mapsed.js"></script>
	 <script src="js/01-custom-places-example.js"></script>
     <!-- ALL PLUGINS -->
     <script src="js/custom.js"></script>

</body>
</html>

<?php
 if(isset($_POST["submit"]))
 {
   $Name = $_POST["name"];
   $Email = $_POST["email"];
   $Phone = $_POST["phone"];
   $Message = $_POST["msg"];
                             
   $query = "INSERT INTO `contact`(`Full_Name`, `Email`, `Phone`, `Message`) VALUES ('$Name','$Email','$Phone','$Message')";
   $result = mysqli_query($conn,$query);
   ?>
   <Script>
       window.location.assign("index.php");
   </Script>
   <?php
  }
?>