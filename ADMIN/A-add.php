<?php
 session_start();
 $conn = mysqli_connect("Localhost","root","","online_schooling_system");
?>
<!DOCTYPE html>
<html lang="en">
 <head> 
     <meta charset="utf-8">
     <title>Add New Form</title>
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

     <!-- BOOTSTAP -->
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

     <!-- Template Stylesheet -->
     <link href="css/style.css" rel="stylesheet">
 </head> 
 <body>
     <div class="container">
         <h1 class="text-center">Insert New Activities</h1>
         <div class="card mt-5">
             <h3 class="card-header text-center">ACTIVITIES</h3>
             <div class="card-body">
                 <form action="#" method="post">
                     <div class="form-group">
                         <label>Sports</label>
                         <input type="text" placeholder="Enter Sports" class="form-control" name="sport">
                     </div>
                     <div class="form-group">
                         <label>Library</label>
                         <input type="text" placeholder="Enter Library" class="form-control" name="lib">
                     </div>
                     <br>
                     <div class="form-group">
                         <input type="Submit" class="btn btn-success" name="submit" value="Add New">
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </body>
</html>
<?php
 if(isset($_POST["submit"]))
   {
     $Sport = $_POST["sport"];
     $Library = $_POST["lib"];
     $query = "INSERT INTO `activities`(`Sports`, `Library`) VALUES ('$Sport','$Library')";
     mysqli_query($conn,$query);
     header("Location:table.php");
    }
?>