<?php
 $conn = mysqli_connect("localhost","root","","online_schooling_system");

 $id = $_GET["id"];
 
 $query = "DELETE FROM `activities` WHERE `Id` = $id";
 $query2 = "DELETE FROM `teacher` WHERE `Id` = $id";
 $query3 = "DELETE FROM `student` WHERE `Id` = $id";
 $query4 = "DELETE FROM `holiday` WHERE `Id` = $id";

 mysqli_query($conn,$query);
 mysqli_query($conn,$query2);
 mysqli_query($conn,$query3);
 mysqli_query($conn,$query4);
 
 header("Location:table.php");
?>