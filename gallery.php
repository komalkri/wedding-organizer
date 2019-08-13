<?PHP
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer Wedding Category Flat Bootstrap Responsive Website Template | Gallery : W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Wedding Organizer web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	 <!--Show Password -->
	<script>
	function myFunction() {
  var x = document.getElementById("recipient-name1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
	<!--//Show Password -->
    
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	 <!-- portfolio  -->
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <!-- //portfolio -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!--//web font-->

</head>

<body>


<!-- header -->
<header>
	<div class="container">
		<!-- top header -->
		<section class="row top_header pt-3">
			<div class="col-lg-6 buttons ml-auto">
				<p><span class="fa fa-phone"></span> +12 8976 2334</p>
				<?php if(isset($_SESSION['log'])){ ?>
                       <a class="btn btn-info btn-lg-block w3ls-btn px-sm-4 px-3 text-capitalize mr-sm-2" href="logout.php" >logout</a>
                <?php } 
                  else{ ?>
                       <a class="btn btn-info btn-lg-block w3ls-btn px-sm-4 px-3 text-capitalize mr-sm-2" href="#login-popup" >login</a>
                 <?php } ?>
				       <a class="btn btn-info1 btn-lg-block w3ls-btn1 px-sm-4 px-3 text-capitalize" href="#register-popup">Register</a>
			</div>
		</section>
		<!-- top header -->
		<!-- nav -->
		<nav class="py-3">
        <div id="logo">
			<h1>
				<a class="navbar-brand" href="index.html"> <span class="fa fa-empire"></span>Wedding <span><span class="line"></span>Organizer</span>
				</a>
			</h1>
		</div>

        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="mr-lg-3 mr-2"><a href="index.php">Home</a></li>
                <li class="mr-lg-3 mr-2"><a href="about.php">About Us</a></li>
                <li class="mr-lg-3 mr-2"><a href="services.php">Services</a></li>
                <li class="mr-lg-3 mr-2 active"><a href="gallery.php">Gallery</a></li>
                <li class="mr-lg-3 mr-2 pb-0">
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Pages <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2"/>
                <ul class="drop-down-ul">
                    <li><a href="error.php">Error Page</a></li>
                    <li><a href="events.php">Events Page</a></li>
                </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- inner banner -->
<div class="inner_banner layer" id="home">
	<div class="container">
		<div class="agileinfo-inner">
			<h2 class="text-center text-white">
				Gallery Page
			</h2>
		</div>
	</div>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Gallery Page</li>
	</ol>
</nav>
<!-- //breadcrumbs -->


<!-- portfolio -->
<section class="wthree-row w3-gallery py-sm-5 py-3" id="gallery">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-center mb-lg-5 mb-4">Our Gallery</h3>
		<div class="row portfolio-area">
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup1" >
						<img src="images/g1.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup2" >
						<img src="images/g2.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup3" >
						<img src="images/g3.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup4" >
						<img src="images/g4.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup5" >
						<img src="images/g5.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup6" >
						<img src="images/g6.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup7" >
						<img src="images/g7.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup8" >
						<img src="images/g8.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup1" >
						<img src="images/g1.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup2" >
						<img src="images/g2.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup3" >
						<img src="images/g3.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-1">
				<div class="portfolio-item2">
					<a class="" href="#popup4" >
						<img src="images/g4.jpg" class="img-fluid w3layouts agileits" alt="Wedding">
					</a>
				</div>
			</div>
			
		</div>
		<!--end portfolio-area -->
	</div>
	<!-- //gallery container -->
</section>
<!-- //portfolio -->

<!-- footer -->	
<footer>
	<div class="container py-5">
		<div class="row footer-gap">
			<div class="col-lg-4 col-sm-6">
				<h3 class="text-capitalize mb-3">Address</h3>
				<address class="mb-0">
					<p class=""><span class="fa fa-map-marker"></span> 2466H 5th Street Parking, King <br>Block, New York City.</p>
					<p><span class="fa fa-clock-o"></span> Timings : 10 a.m to 6 p.m</p>
					<p><span class="fa fa-phone"></span> +12 8976 2334</p>
					<p><span class="fa fa-envelope-open"></span> <a href="mailto:info@example.com">info@example.com</a></p>
				</address>
			</div>
			<div class="col-lg-4 col-sm-6 mt-lg-0 mt-sm-0 mt-4 p-md-0">
				<h3 class="text-capitalize mb-4">Meanwhile On Instagram</h3>
				<div class="images">
					<a class="pr-2" href="#"> <img src="images/insta1.jpg" alt="" class="img-fluid"/> </a>
					<a class="pr-2" href="#"> <img src="images/insta2.jpg" alt="" class="img-fluid"/> </a>
					<a class="pr-2" href="#"> <img src="images/insta3.jpg" alt="" class="img-fluid"/> </a>
					<a class="pr-2" href="#"> <img src="images/insta4.jpg" alt="" class="img-fluid"/> </a>
					<a class="pr-2" href="#"> <img src="images/insta5.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta6.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta7.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta8.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta9.jpg" alt="" class="img-fluid"/> </a>
					<a class="mt-2 pr-2" href="#"> <img src="images/insta1.jpg" alt="" class="img-fluid"/> </a>
				</div>	
			</div>
			<div class="col-lg-3 offset-lg-1 col-sm-6 mt-lg-0 mt-sm-5 mt-4">
				<h3 class="text-capitalize mb-3"> Follow us</h3>
				<p class="mb-4">Follow us on social media</p>
				<ul class="social mt-lg-0 mt-3">
					<li class="mr-1"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mr-1"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="mr-1"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class=""><a href="#"><span class="fa fa-linkedin"></span></a></li>
					<li class="mr-1"><a href="#"><span class="fa fa-rss"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="copyright pb-5 text-center">
		<p>© 2018 Wedding Organizer. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
	</div>
</footer>
<!-- footer -->
	
<!-- popup1 -->
<div id="popup1" class="popup-effect">
	<div class="popup">
		<img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<!-- //popup1 -->
<!-- popup2 -->
<div id="popup2" class="popup-effect">
	<div class="popup">
		<img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<!-- //popup2 -->
<!-- popup3 -->
<div id="popup3" class="popup-effect">
	<div class="popup">
		<img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<!-- //popu3 -->
<!-- popup4 -->
<div id="popup4" class="popup-effect">
	<div class="popup">
		<img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<!-- //popup4 -->
<!-- popup5 -->
<div id="popup5" class="popup-effect">
	<div class="popup">
		<img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<!-- //popup5 -->
<!-- popup6 -->
<div id="popup6" class="popup-effect">
	<div class="popup">
		<img src="images/g6.jpg" alt="Popup Image" class="img-fluid" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<!-- //popup6 -->
<!-- popup7 -->
<div id="popup7" class="popup-effect">
	<div class="popup">
		<img src="images/g7.jpg" alt="Popup Image" class="img-fluid" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<!-- //popup7 -->
<!-- popup8 -->
<div id="popup8" class="popup-effect">
	<div class="popup">
		<img src="images/g8.jpg" alt="Popup Image" class="img-fluid" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<!-- //popup8 -->

<!-- popup for login -->
<div id="login-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">Login</h5>
		<div class="login-form">
			<form action="#" method="post" class="px-3 pt-3 pb-0">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">User Name</label>
					<input type="email" class="form-control" placeholder="" name="Name" id="recipient-name" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="" name="Name" id="recipient-name1" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label"></label>
					<input type="checkbox" onclick="myFunction()">Show Password
				</div>
				<div class="right-w3l">
					<input type="submit" name="s1" class="form-control" value="Login">
				</div>
				<?PHP
				include 'config.php';
   if(isset($_POST['s1'])){
  $user=$_POST['uname'];
  $pwd=$_POST['psw'];
   $list=mysqli_query($conn,"select * from reg_tbl where email= '$user' and password='$pwd'");
   if(mysqli_num_rows($list)<1)
    { 
      echo '<script type="text/javascript">alert(" Wrong Password or userId");</script>';
	}
	 else{
	 echo '<script type="text/javascript">alert(" Logged in successfully");</script>';
         $_SESSION['log']=$user;
		 echo '<meta http-equiv="Refresh" content="0; url=contact.php">';
}
       
   }
  ?>		 

			</form>

		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- popup for login -->

<!-- popup for register -->
<div id="register-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">Register</h5>
		<div class="lregister-form">
			<form action="#" method="post" class="px-3 pt-3 pb-0">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">First Name</label>
					<input type="text" class="form-control" placeholder="" name="Name" id="recipient-name2" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Last Name</label>
					<input type="text" class="form-control" placeholder="" name="Name" id="recipient-name3" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Email id</label>
					<input type="email" class="form-control" placeholder="" name="Name" id="recipient-name4" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Mobile Number</label>
					<input type="text" class="form-control" placeholder="" name="Name" id="recipient-name5" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="" name="Name" id="recipient-name6" required="">
				</div>
				<div class="right-w3l">
					<input type="submit" name="s2"class="form-control" value="Get Started">
				</div>
				<?php
  include 'config.php';
  if(isset($_POST['s2'])){    
  $f_name=$_POST['f_name'];
   
  $l_name=$_POST['l_name'];
   $email=$_POST['email'];
    $mob=$_POST['mob'];
	$psw = $_POST['psw'];
	
  $d= mysqli_query($conn,"insert into reg_tbl(fname,lname,email,password,mobile) Values 
   ('$f_name','$l_name','$email','$psw',$mob)");
   if(!$d)
   {
	    die('could not update:'.mysqli_error());
   }
   }
?>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- popup for register -->

</body>
</html>