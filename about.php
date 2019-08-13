<?PHP
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer </title>
	
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
	
    
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

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
				<a class="navbar-brand" href="index.php"> <span class="fa fa-empire"></span>Wedding <span><span class="line"></span>Organizer</span>
				</a>
			</h1>
		</div>

        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="mr-lg-3 mr-2"><a href="index.php">Home</a></li>
                <li class="mr-lg-3 mr-2 active"><a href="about.php">About Us</a></li>
                <li class="mr-lg-3 mr-2"><a href="services.php">Services</a></li>
                <li class="mr-lg-3 mr-2"><a href="gallery.php">Gallery</a></li>
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
                    About Page
                </h2>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->



<!-- welcome -->
<section class="welcome py-5" id="welcome">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> we will plan every detail of your wedding </h3>
		<div class="row welcome-grids">
			<div class="col-lg-4 mb-lg-0 mb-5">
				<h4 class="left-heading">Our Weddings Story</h4>
				<p class="mb-3">Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictum lacinia, nisl est posuere nulla, nec eges tas leo mi id lorem. Maecenas sem nulla ex init dictu lacinia, Maecenas sem nulla. Sed gravida dignissim magna idesn en molestie</p>
				<div class="welcome-button mt-4">
					<a href="about.php">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="image1 mb-4">
				<h4>Hair / Makeup</h4>
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
				</div>
				<div class="image1">
				<h4>Venue & Catering</h4>
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
				<div class="image1 mb-4">
				<h4>Photo / Video </h4>
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
				</div>
				<div class="image1">
				<h4>Flowers & Music</h4>
					<p class="mt-3">Sed gravida dignissim magna idesn en molestie. Nulla congue, ex init dictu lacinia, Maecenas sem nulla</P>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- welcome -->

<!-- /stats -->
<section class="stats_test">
	<div class="wthree-different-dot1 py-5">
	<div class="container py-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Our Company Facts </h3>
		<div class="row">
			<div class="col-12 text-center inner_stat_wthree_agileits">
				<div class="row px-sm-0 px-3">
					<div class="col-lg-2 col-sm-4 col-6 stats_left counter_grid">
						<p class="counter">450</p>
						<h4>Weddings</h4>
					</div>
					<div class="col-lg-2 col-sm-4 col-6 stats_left counter_grid1">
						<p class="counter">1000</p>
						<h4>Parties</h4>
					</div>
					<div class="col-lg-2 col-sm-4 col-6 stats_left counter_grid2">
						<p class="counter">145</p>
						<h4>Events</h4>
					</div>
					<div class="col-lg-2 col-sm-4 col-6 stats_left counter_grid3">
						<p class="counter">986</p>
						<h4>Registered</h4>
					</div>
					<div class="col-lg-2 col-sm-4 col-6 stats_left counter_grid4">
						<p class="counter">490</p>
						<h4>Conducted</h4>
					</div>
					<div class="col-lg-2 col-sm-4 col-6 stats_left counter_grid5">
						<p class="counter">560</p>
						<h4>Happy Clients</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //stats -->

<!-- about -->
<section class="about py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Who We Are</h3>
		<div class="row about-grids">
			<div class="col-lg-6">
				<h4>We are committed to service excellence and quality on wedding & events</h4>
				<p class="mb-3">Our entrepreneurial mind combined with our passion for client relationship building delivers results
				 which exceed strategic and operational goals.</p>
				
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<img src="images/who.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- contact query -->
<section class="query">
	<div class="wthree-different-dot1 py-5">
		<div class="container py-sm-3">
			<div class="row query-grids">
				<div class="col-lg-5">
					<h4 class="mb-3">Find Your Style</h4>
					<p class="mb-3">Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictu lacinia, nislen est posuere nulla,
					nec egestas leo miid sed lorem. Maecenas sem nulla. Maecenas risus enim, pharetra accumsan nulla vitae, mollis hendrerit orci.
					Pellentesque nec purus eurts tortor molestie fringilla ut sit amet mauris. Maecenas mattis eleifend lacus non condimentum.</p>
					<a href="contact.php">Contact and Inquiry </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //contact query -->

<!-- subscribe -->
<section class="subscribe text-center bg-light py-5">
	<div class="container p-sm-3">
		<h3 class="heading mb-2"> Subscribe Newsletter </h3>
		<p class="mb-5">Signup and recieve 15% on your First Plan.</p>
		<form action="#" method="post">
			<input class="form-control" type="email" placeholder="Your Email Address" name="Subscribe" required="">
			<button class="btn1" type="submit" name="E_Sub">
				<span class="fa fa-paper-plane"></span>			</button>
				<?PHP
				if(isset($_POST['E_Sub'])){
				  $Email=$_POST['Subscribe'];
				  $to_email=filter_var($Email, FILTER_VALIDATE_EMAIL);
                  $message="Thank You For Subscribe";
                  $headers='from:noreply@company.com';
                     if($to_email==true){
                     if(mail($to_email,$message,$headers)){
                         echo '<script type="text/javascript">alert("Email Sent");</script>';
                       }
                     else{
                         echo '<script type="text/javascript">alert("Email not sent");</script>';
                         }
						}
				 else{
					 echo '<script type="text/javascript">alert("Invalid Mail");</script>'; 
					}	 
                } 
                   ?>
		</form>
	</div>
</section>
<!-- //subscribe -->

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
		<p>© 2018 Wedding Organizer. All Rights Reserved | Design by <a href="" target="_blank">Succexa</a></p>
	</div>
</footer>
<!-- footer -->

<!-- popup for login -->
<div id="login-popup" class="popup-effect">
	<div class="popup">
		<h5 class="modal-title text-uppercase">Login</h5>
		<div class="login-form">
			<form action="" method="post" class="px-3 pt-3 pb-0">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">User Name</label>
					<input type="email" class="form-control" placeholder="Enter Username" name="uname" id="recipient-name" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="Enter Password" name="psw" id="recipient-name1" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label"></label>
					<input type="checkbox" onclick="myFunction()">Show Password
				</div>
				<div class="right-w3l">
					<input type="submit" name="s1"class="form-control" value="Login">
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
	 $_SESSION['log']=$user;
	 echo '<script type="text/javascript">alert("Logged in successfully");</script>';
         
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
					<input type="text" class="form-control" placeholder="" name="f_name" id="recipient-name2" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Last Name</label>
					<input type="text" class="form-control" placeholder="" name="l_name" id="recipient-name3" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Email id</label>
					<input type="email" class="form-control" placeholder="" name="email" id="recipient-name4" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Mobile Number</label>
					<input type="text" class="form-control" placeholder="" name="mob" id="recipient-name5" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="" name="psw" id="recipient-name6" required="">
				</div>
				<div class="right-w3l">
					<input type="submit" name="s2" class="form-control"  value="Get Started">
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