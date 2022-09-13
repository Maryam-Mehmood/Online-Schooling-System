<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

 <head>
     <meta charset="utf-8">
     <title>Signin</title>
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

 <body style="background-image: url('images/bk.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
     <div class="container-fluid position-relative d-flex p-0">
         <!-- Spinner Start -->
         <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
             <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                 <span class="sr-only">Loading...</span>
             </div>
         </div> -->
         <!-- Spinner End -->

         <!-- Sign In Start -->
         <div class="container-fluid">
             <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                 <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                     <form action="#" method="POST">
                         <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                             <div class="d-flex align-items-center justify-content-between mb-3">
                                 <a href="index.html" class="">
                                     <h3 class="text-primary text-center"><i class="fa fa-user-edit me-2"></i>SmartEDU</h3>
                                     <h3 class="text-center">Sign In for Students</h3>
                                 </a>
                             </div>
                             <div class="form-floating mb-3">
                                 <label for="floatingInput">Email address</label>
                                 <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                             </div>
                             <div class="form-floating mb-4">
                                 <label for="floatingPassword">Password</label>
                                 <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                             </div>
                             <div class="d-flex align-items-center justify-content-between mb-4">
                                 <!-- <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                 </div> -->
                                 <?php
                                     //    error_reporting(0);
                                     if(isset($_GET["invalid"]))
                                       {
                                         ?>
                                         <a href="" class="text-danger">Invalid Email or password</a>                                    
                                         <?php
                                        }
                                    ?>                   
                             </div>
                             <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                             <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                         </div>         
                     </form>     
                 </div>
             </div>
         </div>
         <!-- Sign In End -->
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
     $conn = mysqli_connect("localhost","root","","online-school-system");
     
     $email = $_POST["email"];
     $password = $_POST["password"];
     
     $query = "SELECT * FROM `student` WHERE `Email` = '$email' AND `Pass` = '$password'";
     $result = mysqli_query($conn,$query);
     
     if (mysqli_num_rows($result))
       {
         while($row = mysqli_fetch_array($result))
           {
             if($row[14] == 2)
               {
                 $_SESSION["username"] = $row[1];
                 $_SESSION["email"] = $row["5"];
                 $_SESSION["phone"] = $row["7"];
                 $_SESSION["role"] = $row["14"];
                 ?>
                 <script>
                     window.location.assign("index.php");
                 </script>
                 <?php
                }
            }
        }
     else
       {
         ?>
         <script>
             window.location.assign("signin.php?invalid");        
         </script>
         <?php
        }                    
    }
?>