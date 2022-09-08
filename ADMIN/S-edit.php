<?php
 session_start();
 $conn = mysqli_connect("Localhost","root","","online-schooling-system(vision)");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <title>Edit Form</title>
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
         <h1 class="mt-2 text-center">EDIT FORM</h1>
         <?php
             $id = $_GET["id"];
             $query = "SELECT * FROM `student` WHERE `Id` = $id";
             $result = mysqli_query($conn,$query);
             if(mysqli_num_rows($result))
               {
                 while($row = mysqli_fetch_array($result)){
            ?>
         <div class="card mt-5">
              <h3 class="card-header">Student</h3>
              <div class="card-body">
                 <form action="#" method="post">
                     <div class="form-group">
                         <label>Name</label>
                         <input type="text" class="form-control" name="name" value="<?php echo $row[1];?>">
                     </div>
                     <div class="form-group">
                         <label>Father Name</label>
                         <input type="text" class="form-control" name="fname" value="<?php echo $row[2];?>">
                     </div>
                     <div class="form-group">
                         <label>Mother Name</label>
                         <input type="text" class="form-control" name="mname" value="<?php echo $row[3];?>">
                     </div>
                     <div class="form-group">
                         <label>Date of Birth</label>
                         <input type="text" class="form-control" name="dob" value="<?php echo $row[4];?>">
                     </div>
                     <div class="form-group">
                         <label>Email</label>
                         <input type="email" class="form-control" name="email" value="<?php echo $row[5];?>">
                     </div>
                     <div class="form-group">
                         <label>Phone No.</label>
                         <input type="text" class="form-control" name="phone" value="<?php echo $row[6];?>">
                     </div>
                     <div class="form-group">
                         <label>Address</label>
                         <input type="text" class="form-control" name="add" value="<?php echo $row[7];?>">
                     </div>
                     <div class="form-group">
                         <label>Nationality</label>
                         <input type="text" class="form-control" name="nat" value="<?php echo $row[8];?>">
                     </div>
                     <div class="form-group">
                         <label>Religion</label>
                         <input type="text" class="form-control" name="rel" value="<?php echo $row[9];?>">
                     </div>
                     <div class="form-group">
                         <label>Class</label>
                         <input type="text" class="form-control" name="class" value="<?php echo $row[10];?>">
                     </div>
                     <div class="form-group">
                         <label>Admission Date</label>
                         <input type="date" class="form-control" name="ad" value="<?php echo $row[11];?>">
                     </div>
                     <div class="form-group">
                         <label>Report Card</label>
                         <input type="text" class="form-control" name="rc" value="<?php echo $row[12];?>">
                     </div>
                     <br>
                     <div class="form-group">
                         <input type="Submit" class="btn btn-success" name="submit" value="Edit it">
                     </div>
                 </form>
             </div>
         </div>
         <?php
             }
             }
             if(isset($_POST["submit"]))
               {
                 $Name = $_POST["name"];
                 $Father_Name = $_POST["fname"];
                 $Mother_Name = $_POST["mname"];
                 $Date_of_Birth = $_POST["dob"];
                 $Email = $_POST["email"];
                 $Phone = $_POST["phone"];
                 $Address = $_POST["add"];
                 $Nationality = $_POST["nat"];
                 $Religion = $_POST["rel"];
                 $Class = $_POST["class"];
                 $Admission_Date = $_POST["ad"];
                 $Report_Card = $_POST["rc"];
                 $query = "UPDATE `student` SET `First_Name`='$Name',`Father_Name`='$Father_Name',`Mother_Name`='$Mother_Name',`Date_of_Birth`='$Date_of_Birth',`Email`='$Email',`Phone`='$Phone',`Address`='$Address',`Nationality`='$Nationality',`Religion`='$Religion',`Class`='$Class',`Date`='$Admission_Date',`Report_Card`='$Report_Card' WHERE `Id`=$id";
                 mysqli_query($conn,$query);
            ?>
         <Script>
             window.location.assign("../admin/table.php");
         </Script> 
         <?php  
             }
            ?>
       <div>
 </body>
</html>