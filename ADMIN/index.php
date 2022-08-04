<?php
 session_start();
 $conn = mysqli_connect("Localhost","root","","online_schooling_system");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <title>Home</title>
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

             <!-- Sale & Revenue Start -->
             <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                     <div class="col-md-6">
                         <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                             <i class="fa fa-chart-line fa-3x text-primary"></i>
                             <div class="ms-3">
                                 <p class="mb-2">Teacher</p>
                                 <h6 class="mb-0">
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
                                 </h6>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                             <i class="fa fa-chart-bar fa-3x text-primary"></i>
                             <div class="ms-3">
                                 <p class="mb-2">Student</p>
                                 <h6 class="mb-0">
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
                                 </h6>
                             </div>
                         </div>
                     </div>
                </div>
             </div>
             <!-- Sale & Revenue End -->
 
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