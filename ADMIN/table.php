<?php
 session_start();
 $conn = mysqli_connect("Localhost","root","","online_schooling_system");
?>
<!DOCTYPE html>
<html lang="en">

 <head>
     <meta charset="utf-8">
     <title>Admin Tables</title>
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

             <!-- Table Start -->
             <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">                      
                     <!--ACTIVITY TABLE-->
                     <div class="col-12">
                         <div class="bg-secondary rounded h-100 p-4">
                             <h2 class="mb-4 text-center">ACTIVITIES</h2>
                             <a href="A-add.php" class="btn btn-primary mb-2">Add New</a>
                             <table class="table table-hover table-dark">
                                 <thead>
                                     <tr>
                                         <th scope="col">#</th>
                                         <th scope="col">Sports</th>
                                         <th scope="col">Library</th>
                                         <th scope="col">Edit</th>
                                         <th scope="col">Delete</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                         $query = "SELECT * FROM `activities`";
                                         $result = mysqli_query($conn,$query);
                                         if(mysqli_num_rows($result))
                                           {
                                             while($row = mysqli_fetch_array($result)){                                              
                                        ?>     
                                     <tr>
                                         <th scope="row"><?php echo $row[0];?></th>
                                         <td><?php echo $row[1];?></td>
                                         <td><?php echo $row[2];?></td>
                                         <td><a href="A-edit.php?id=<?php echo $row[0]?>" class="btn btn-success">Edit</a></td>
                                         <td><a href="delete.php?id=<?php echo $row[0]?>" class="btn btn-danger">Delete</a></td>
                                     </tr>
                                     <?php
                                           }
                                           }
                                     ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <!--TEACHER INFO TABLE-->
                     <div class="col-12">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h2 class="mb-4 text-center">TEACHER INFO</h2>
                                    <a href="T-add.php" class="btn btn-primary mb-2">Add New</a>
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Qualification</th>
                                                <th scope="col">Subjects</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                             $query2= "SELECT * FROM `teacher`";
                                             $result2 = mysqli_query($conn,$query2);
                                             if(mysqli_num_rows($result2))
                                               {
                                                 while($row2 = mysqli_fetch_array($result2)){                                              
                                            ?> 
                                            <tr>
                                                <th scope="row"><?php echo $row2[0];?></th>
                                                <td><?php echo $row2[1];?></td>
                                                <td><?php echo $row2[2];?></td>
                                                <td><?php echo $row2[3];?></td>
                                                <td><?php echo $row2[4];?></td>
                                                <td><?php echo $row2[5];?></td>
                                                <td><a href="T-edit.php?id=<?php echo $row2[0]?>" class="btn btn-success">Edit</a></td>
                                                <td><a href="delete.php?id=<?php echo $row2[0]?>" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                         <?php
                                             }
                                             }
                                         ?>
                                        </tbody>
                                    </table>
                                </div>
                     </div>
                     <!--STUDENT INFO TABLE-->
                     <div class="col-12">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h2 class="mb-4 text-center">STUDENT INFO</h2>
                                    <a href="S-add.php" class="btn btn-primary mb-2">Add New</a>
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Father Name</th>
                                                <th scope="col">Mother Name</th>
                                                <th scope="col">Date of Birth</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Nationality</th>
                                                <th scope="col">Religion</th>
                                                <th scope="col">Class</th>
                                                <th scope="col">Admission Date</th>
                                                <th scope="col">Report Card</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                             $query3 = "SELECT * FROM `student`";
                                             $result3 = mysqli_query($conn,$query3);
                                             if(mysqli_num_rows($result3))
                                               {
                                                 while($row3 = mysqli_fetch_array($result3)){                                              
                                            ?> 
                                            <tr>
                                                <th scope="row"><?php echo $row3[0];?></th>
                                                <td><?php echo $row3[1];?></td>
                                                <td><?php echo $row3[2];?></td>
                                                <td><?php echo $row3[3];?></td>
                                                <td><?php echo $row3[4];?></td>
                                                <td><?php echo $row3[5];?></td>
                                                <td><?php echo $row3[6];?></td>
                                                <td><?php echo $row3[7];?></td>
                                                <td><?php echo $row3[8];?></td>
                                                <td><?php echo $row3[9];?></td>
                                                <td><?php echo $row3[10];?></td>
                                                <td><?php echo $row3[11];?></td>
                                                <td><?php echo $row3[12];?></td>
                                                <td><a href="S-edit.php?id=<?php echo $row3[0]?>" class="btn btn-success">Edit</a></td>
                                                <td><a href="delete.php?id=<?php echo $row3[0]?>" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                         <?php
                                             }
                                             }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                     </div>
                  </div>
             </div>
             <!-- Table End -->
        
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