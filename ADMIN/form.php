<?php
 session_start();
 $conn = mysqli_connect("Localhost","root","","online_schooling_system");
?>
<!DOCTYPE html>
<html lang="en">

 <head>
     <meta charset="utf-8">
     <title>Forms</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content="" name="keywords">
     <meta content="" name="description">

     <!-- Favicon -->
     <link href="img/logo.png" rel="icon">

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Template Stylesheet -->
     <link href="css/style.css" rel="stylesheet">
 </head>

 <body>
     <div class="container-fluid position-relative d-flex p-0">
         <!-- Spinner Start -->
         <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
             <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                 <span class="sr-only">Loading...</span>
             </div>
         </div>
         <!-- Spinner End -->

         <!-- Sidebar Start -->
         <div class="sidebar pe-4 pb-3">
             <nav class="navbar bg-secondary navbar-dark">
                 <a href="index.php" class="ms-auto me-auto navbar-brand mx-4 mb-3">
                     <h3 class="text-primary"><img src="img/logo.png" alt=""></h3>
                  </a>
                 <div class="navbar-nav w-100">
                     <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                     <a href="form.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                     <a href="table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                 </div>
             </nav>
         </div>
         <!-- Sidebar End -->

         <!-- Content Start -->
         <div class="content">
             <!-- Navbar Start -->
             <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                 <a href="#" class="sidebar-toggler flex-shrink-0">
                     <i class="fa fa-bars"></i>
                 </a>
                 <div class="navbar-nav align-items-center ms-auto">             
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             <span class="d-none d-lg-inline-flex">My School</span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                             <a href="logout.php" class="dropdown-item">Log Out</a>
                         </div>
                     </div>
                 </div>
             </nav>
             <!-- Navbar End -->

             <!-- Form Start -->
             <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                     <!--ADMISSION FORM-->
                     <div class="col-sm-12 col-xl-6">
                         <div class="bg-secondary rounded h-100 p-4">
                             <h4 class="mb-4 text-center">ADMISSION FORM</h4>
                             <form action="#" method="post">
                                 <div class="mb-3">
                                     <label class="form-label">Student Name</label>
                                     <input type="text" class="form-control" name="name">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Father Name</label>
                                     <input type="text" class="form-control" name="fname">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Mother Name</label>
                                     <input type="text" class="form-control" name="mname">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Date of Birth</label>
                                     <input type="date" class="form-control" name="dob">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Email</label>
                                     <input type="email" class="form-control" name="email">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Phone No.</label>
                                     <input type="text" class="form-control" name="phone">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Address</label>
                                     <input type="text" class="form-control" name="add">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Nationality</label>
                                     <input type="text" class="form-control" name="nat">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Religion</label>
                                     <input type="text" class="form-control" name="rel">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">In which Class Admission sought?</label>
                                     <input type="text" class="form-control" name="class" placeholder="In which class child want to take admission?">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Admission Date</label>
                                     <input type="date" class="form-control" name="date">
                                 </div>
                                 <button type="submit" class="btn btn-primary" name="submit">Submit Admission Form</button>
                             </form>
                         </div>
                     </div>  
                     <!--VOUCHER FORM-->
                     <div class="col-sm-12 col-xl-6">
                         <div class="bg-secondary rounded h-100 p-4">
                             <h4 class="mb-4 text-center">ONLINE FEES VOUCHER FORM</h4>
                             <form action="#" method="post">
                                 <div class="mb-3">
                                     <label class="form-label">Student Id No.</label>
                                     <input type="text" class="form-control" name="id">
                                 </div>
                                 <div Class="mb-3">
                                     <label class="form-label">Student Name</label>
                                     <input type="text" class="form-control" name="sname">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Reciept No.</label>
                                     <input type="text" class="form-control" name="rec">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Current Month</label>
                                     <input type="text" class="form-control" name="month">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Fees Total Amount</label>
                                     <input type="text" class="form-control" name="total">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Total Amount(in words)</label>
                                     <input type="text" class="form-control" name="word">
                                 </div>
                                 <button type="submit" class="btn btn-primary" name="submit-2">Submit Fees Voucher</button>
                             </form>
                         </div>
                     </div>
                      <!--CONTACT FORM-->
                     <div class="col-sm-12 col-xl-6">
                         <div class="bg-secondary rounded h-100 p-4">
                             <h4 class="mb-4 text-center">CONTACT FORM</h4>
                             <form>
                                 <div Class="mb-3">
                                     <label class="form-label">Full Name</label>
                                     <input type="text" class="form-control" placeholder="Enter Your Full Name" name="name">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Email address</label>
                                     <input type="email" class="form-control" placeholder="example@gmail.com" name="email">
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label">Message</label>
                                     <input type="text" class="form-control" name="msg">
                                 </div>
                                 <button type="submit" class="btn btn-primary" name="submit">Submit Contact Form</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Form End -->

             <!-- Footer Start -->
             <div class="container-fluid pt-4 px-4">
                 <div class="bg-secondary rounded-top p-4">
                     <div class="row">
                         <div class="col-12 col-sm-6 text-center text-sm-start">
                             &copy; <a href="#">My Online School</a>, All Right Reserved. 
                         </div>
                         <div class="col-12 col-sm-6 text-center text-sm-end">
                             <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                              Designed By <a href="https://htmlcodex.com">Momna Khan & Maryam Fatima</a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Footer End -->  
         </div>
         <!-- Content End -->


         <!-- Back to Top -->
         <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
     </div>

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/chart/chart.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/tempusdominus/js/moment.min.js"></script>
     <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
     <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

     <!-- Template Javascript -->
     <script src="js/main.js"></script>
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
                               
     $query = "INSERT INTO `student`(`Id`, `First_Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Email`, `Phone`, `Address`, `Nationality`, `Religion`, `Class`, `Date`, `Report_Card`) VALUES (Null,'$Name','$Fname','$Mname','$Dob','$Email','$Phone','$Add','$Nat','$Rel','$Class','$Date')";
     $result = mysqli_query($conn,$query);
     ?>
     <Script>
         window.location.assign("table.php");
     </Script>
     <?php
    }

 if(isset($_POST["submit-2"]))
   {
     $Id = $_POST["id"];
     $Sname = $_POST["sname"];
     $Rec = $_POST["rec"];
     $Month = $_POST["month"];
     $Total = $_POST["total"];
     $Word = $_POST["word"];
                               
     $query2 = "INSERT INTO `onlie_fees_voucher`(`Id`, `Student_Id_No`, `Student_Name`, `Reciept_No`, `Current_Month`, `Total_Amount`, `Amount(in_words)`) VALUES (Null,'$Id','$Sname','$Rec','$Month',$Total'','#$Word')";
     $result = mysqli_query($conn,$query2);
     header("Location: table.php");
    }
?>