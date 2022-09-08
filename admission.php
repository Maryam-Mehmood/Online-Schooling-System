<?php
 session_start();
 $conn = mysqli_connect("Localhost","root","","online-schooling-system(vision)");
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
 <body class="host_version"> 
	 <?php
	 include_once("nav.php");
	 ?>
	
	 <div class="all-title-box">
	 	 <div class="container text-center">
	 	  	 <h1>Admission<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
	     </div>
     </div>
	
     <div id="contact" class="section wb">
         <div class="container">
             <div class="section-title text-center">
                 <h3>Need Admission? Sure we are Online!</h3>
                 <p class="lead">Let us give you more details about the admission you want us. Please fill out the form below.</p>
             </div><!-- end title -->

             <div class="row">
                 <div>
                     <div class="contact_form">
                         <div id="message"></div>
                         <form action="#" method="post">
                             <div class="row row-fluid">
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Student Name</h3>
                                     <input type="text" name="name" class="form-control" placeholder="Student First Name" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Father Name</h3>
                                     <input type="text" name="fname" class="form-control" placeholder="Sudent Father Name" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Mother Name</h3>
                                     <input type="text" name="mname" class="form-control" placeholder="Student Mother Name" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Date of Birth</h3>
                                     <input type="date" name="dob" class="form-control" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Email</h3>
                                     <input type="email" name="email" class="form-control" placeholder="Enter Your Email through which we can contact you" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Phone No.</h3>
                                     <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number through which we can contact you" required>
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                 <h3 class="text-white">Address</h3>
                                     <input type="text" name="add" class="form-control" placeholder="Your Complete Address" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Nationality</h3>
                                     <input type="text" name="nat" class="form-control" placeholder="Student Nationality" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Religion</h3>
                                     <input type="text" name="rel" class="form-control" placeholder="Student Religion" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Class</h3>
                                     <input type="text" name="class" class="form-control" placeholder="Enter the class in which student want to take admission?" required>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6">
                                     <h3 class="text-white">Student Admission Date</h3>
                                     <input type="date" name="date" class="form-control" required>
                                 </div>
                                 <div class="text-center pd">
                                     <button type="submit" value="SEND" class="btn btn-light btn-radius btn-brd grd1 btn-block" name="submit">Get Admission</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div><!-- end col --> 
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
   $Fname = $_POST["fname"];
   $Mname = $_POST["mname"];
   $Dob = $_POST["dob"];
   $Email = $_POST["email"];
   $Phone = $_POST["phone"];
   $Add = $_POST["add"];
   $Nat = $_POST["nat"];
   $Rel = $_POST["rel"];
   $Class = $_POST["class"];
   $Date = $_POST["date"];
                             
   $query = "INSERT INTO `student`(`First_Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Email`, `Phone`, `Address`, `Nationality`, `Religion`, `Class`, `Date`) VALUES ('$Name','$Fname','$Mname','$Dob','$Email','$Phone','$Add','$Nat','$Rel','$Class','$Date')";
   $result = mysqli_query($conn,$query);
   ?>
   <Script>
       window.location.assign("index.php");
   </Script>
   <?php
  }
?>