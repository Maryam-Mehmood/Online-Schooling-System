<!-- LOADER -->
<div id="preloader">
 <div class="loader-container">
     <div class="progress-br float shadow">
         <div class="progress__item">
		 </div>
	 </div>
 </div>
</div>
<!-- END LOADER	 -->
	
<!-- Start header -->
<header class="top-navbar">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container-fluid">
         <a class="navbar-brand" href="index.php">
	         <img src="images/logo1.png" alt="" width="200px">
		 </a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
		     <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
    	 <div class="collapse navbar-collapse" id="navbars-host">
		     <ul class="navbar-nav ml-auto">
			     <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
				 <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
				 <li class="nav-item"><a class="nav-link" href="class.php">Classes</a></li>
				 <li class="nav-item"><a class="nav-link" href="teachers.php">Teachers</a></li>
				 <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                 <?php
                     error_reporting(0);
                     if($_SESSION["role"] == null)
					 {
                    ?>
                 <li class="nav-item"><a class="nav-link" href="signin.php">Login / Register</a></li>
                 <?php
                     }
                     else if($_SESSION["role"] == 2)
					   {
                    ?>
                    
                 <!-- <li class="nav-item"><a class="nav-link" href="">Profile</a></li> -->
				 <li class="nav-item"><a class="nav-link" href="signout.php">Sign Out</a></li>
        		 <?php
                     }
                    ?>
             </ul>
			 <ul class="nav navbar-nav navbar-right">
                 <?php
                     if($_SESSION["role"] == 2){
                    ?>
                 <li><a class="hover-btn-new log orange" href="admission.php"><span>Get Admission</span></a></li>
                 <?php
                     }
                    ?>
            </ul>
		 </div>
	 </div>
 </nav>
</header>
