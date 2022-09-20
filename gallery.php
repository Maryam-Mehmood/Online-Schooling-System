<?php
 session_start();
 $conn = mysqli_connect("localhost","root","","online-school-system");
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
 <style>
  
@import url('https://fonts.googleapis.com/css?family=Oswald:300,400,500,700');

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');



.gr-1{background: $gr-1;}
.gr-2{background: $gr-2;}
.gr-3{background: $gr-3;}

*{transition: .5s;}

.h-100{height: 100vh !important;}
.align-middle{
  position: relative;
  top:50%;
  transform:translateY(-50%);
}

.column{
  margin-top:3rem;
  padding-left:3rem;
  &:hover{
    padding-left:0;
    .card .txt{
      margin-left:1rem;
      h1, p{
        color:rgba(255,255,255,1);
        opacity:1;
      }
    }
    a{
      color:rgba(255,255,255,1);
      &:after{
      width: 10%;
      }
    }
  }
}
.card{
  min-height:170px;
  margin: 0;
  padding: 1.7rem 1.2rem;
  border: none;
  border-radius: 0;
  color:rgba(0,0,0,1);
  letter-spacing: .05rem;
  font-family: 'Oswald', sans-serif;
  box-shadow: 0 0 21px rgba(0,0,0,.27);
  .txt{
    margin-left:-3rem;
    z-index: 1;
    h1{
      font-size:1.5rem;
      font-weight: 300;
      text-transform: uppercase;
    }
    p{
      font-size:.7rem;
      font-family: 'Open Sans', sans-serif;
      letter-spacing: 0rem;
      margin-top:33px;
      opacity:0;
      color:rgba(255,255,255,1);
    }
  }
  a{
    z-index:3;
    font-size: .7rem;
    color:rgba(0,0,0,1);
    margin-left:1rem;
    position:relative;
    bottom: -.5rem;
    text-transform: uppercase;
    &:after {
      content:"";
      display: inline-block;
      height: 0.5em;
      width: 0;
      margin-right: -100%;
      margin-left: 10px;
      border-top: 1px solid rgba(255,255,255,1);
      transition: .5s;
    }
  }
  .ico-card{
    position:absolute;
    top: 0;
    left:0;
    bottom:0;
    right: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  i{
    position: relative;
    right: -50%;
    top:60%;
    font-size: 12rem;
    line-height: 0;
    opacity: .2;
    color:rgba(255,255,255,1);
    z-index: 0;
   }

 </style>


 <body class="host_version"> 

     <?php
     include_once("nav.php");
     ?>
	 	
	 <div class="all-title-box">
	     <div class="container text-center">
			 <h1>Gallery<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		 </div>
	 </div>

   
    
     <br>

     <div class="container h-100">
  <div class="row align-middle">
    <div class="col-md-6 col-lg-4 column">
      <div class="card gr-1">
        <div class="txt">
          <h1>BRANDING AND </br>
CORPORATE DESIGN</h1>
          <p>Visual communication and problem-solving</p>
        </div>
        <a href="#">more</a>
        <div class="ico-card">
        <i class="fa fa-rebel"></i>
      </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 column">
      <div class="card gr-2">
        <div class="txt">
          <h1>Web Front-End </br>
SOLUTIONS</h1>
          <p>How design is implemented on the web.</p>
        </div>
        <a href="#">more</a>
      <div class="ico-card">
        <i class="fa fa-codepen"></i>
      </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 column">
      <div class="card gr-3">
        <div class="txt">
          <h1>UX/UI WEBsite </br>AND MOBILE app</h1>
          <p>User Interface and User Experience Design.</p>
        </div>
        <a href="#">more</a>
      <div class="ico-card">
        <i class="fa fa-empire"></i>
      </div>
      </div>
    </div>
    
  </div>
</div>
    

	

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
     <!-- ALL PLUGINS -->
     <script src="js/custom.js"></script>

 </body>
</html>