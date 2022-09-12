<?php
 session_start();
 $conn = mysqli_connect("Localhost","root","","online-school-system");
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
         <h1 class="text-center">Insert New Student Info</h1>
         <div class="card mt-5">
             <h3 class="card-header text-center">STUDENT INFO</h3>
             <div class="card-body">
                 <form action="#" method="post">
                     <div class="form-group">
                         <label>Student Name</label>
                         <input type="text" placeholder="Enter Student Name" class="form-control" name="sname">
                     </div>
                     <div class="form-group">
                         <label>Student Father Name</label>
                         <input type="text" placeholder="Enter Student Father Name" class="form-control" name="fname">
                     </div>
                     <div class="form-group">
                         <label>Student Mother Name</label>
                         <input type="text" placeholder="Enter Student Mother Name" class="form-control" name="mname">
                     </div>
                     <div class="form-group">
                         <label>Student Date of Birth</label>
                         <input type="date" placeholder="Enter Student Date of Birth" class="form-control" name="dob">
                     </div> 
                     <div class="form-group">
                         <label>Student Email</label>
                         <input type="email" placeholder="Enter Student Email" class="form-control" name="email">
                     </div>
                     <div class="form-group">
                         <label>Student Phone No.</label>
                         <input type="tel" placeholder="Enter Student Phone No" class="form-control" name="phone">
                     </div>
                     <div class="form-group">
                         <label>Student Address</label>
                         <input type="text" placeholder="Enter Student Address" class="form-control" name="add">
                     </div>
                     <div class="form-group">
                         <label>Student Nationality</label>
                         <input type="text" placeholder="Enter Student Nationality" class="form-control" name="nat">
                     </div>
                     <div class="form-group">
                         <label>Student Religion</label>
                         <input type="text" placeholder="Enter Student Religion" class="form-control" name="rel">
                     </div>
                     <div class="form-group">
                         <label>Student Class</label>
                         <input type="text" placeholder="Enter the class in which student have to take admission" class="form-control" name="class">
                     </div>
                     <div class="form-group">
                         <label>Student Admission Date</label>
                         <input type="text" placeholder="Enter the date in which student have take admission" class="form-control" name="date">
                     </div>
                     <div class="form-group">
                         <label>Student Report Card</label>
                         <input type="text" placeholder="Enter Student Report Card" class="form-control" name="rc">
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
     $Sname = $_POST["sname"];
     $Fname = $_POST["fname"];
     $Mname = $_POST["mname"];
     $Dob = $_POST["dob"];
     $Email = $_POST["email"];
     $Phone = $_POST["phone"];
     $Address = $_POST["add"];
     $Nationality = $_POST["nat"];
     $Religion = $_POST["rel"];
     $Class = $_POST["class"];
     $Date = $_POST["date"];
     $ReportCard = $_POST["rc"];
     $query = "INSERT INTO `student`(`First_Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Email`, `Phone`, `Address`, `Nationality`, `Religion`, `Class`, `Date`, `Report_Card`) VALUES ('$Sname','$Fname','$Mname','$Dob','$Email','$Phone','$Address','$Nationality','$Religion','$Class','$Date','$ReportCard')";
     mysqli_query($conn,$query);
?>
<Script>
     window.location.assign("../admin/table.php");
</Script> 
<?php
 }
?>