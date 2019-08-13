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

	<!-- testimonials css -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
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
                <li class="mr-lg-3 mr-2 active"><a href="services.php">Services</a></li>
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
                    Services Page
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
            <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

	
<!-- services -->
<section class="services py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Our Services  </h3>
		<div class="row service-grids">
			<div class="col-lg-3 col-sm-6">
				<div class="service-grid1">
					<span class="fa fa-globe"></span>
					<h4 class="my-3">Weddings</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 ">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Parties</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>				
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="service-grid1">
					<span class="fa fa-diamond"></span>
					<h4 class="my-3">Entertainment</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Celebrations</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>				
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-5">
				<div class="service-grid1">
					<span class="fa fa-globe"></span>
					<h4 class="my-3">Events</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-mt-5">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Catering</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>				
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-mt-5">
				<div class="service-grid1">
					<span class="fa fa-diamond"></span>
					<h4 class="my-3">Makeup</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-mt-5">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">photo / Video</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>				
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->


<!-- IMAGES -->
<section class="images pb-5">
	<div class="container-fluid py-md-5">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-6  bg-img1">
				<h4>Perfect Planning</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img2">
				<h4>Wedding Ceremony</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img3">
				<h4>Entertainment Program</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img4">
				<h4>Engagement Ceremony</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img5">
				<h4>Birthday Celebrations</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img6">
				<h4>Anniversary Events</h4>
			</div>
		</div>
	</div>
</section>
<!-- IMAGES -->


<!-- Clients -->
<section class="clients-main">
	<div class="wthree-different-dot1 py-5">
		<div class="container py-sm-3">
			<h3 class="heading text-capitalize text-center mb-sm-5 mb-4"> What They Say </h3>
			<div class="row cli-ent">
				<div class="col-lg-4 col-md-6 item g1">
					<div class="row agile-dish-caption">
						<div class="col-lg-11 text-center mx-auto">
							<h5>Michael Johnson</h5>
							<p class="para-w3-agile"> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lac nec elit mollis pretium. Sed sed nunc lectus sapien in tellus.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 item g1">
					<div class="row agile-dish-caption">
						<div class="col-lg-11 text-center mx-auto">
							<h5>Mary elizabeth</h5>
							<p class="para-w3-agile"> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lac nec elit mollis pretium. Sed sed nunc lectus sapien in tellus.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 item g1">
					<div class="row agile-dish-caption">
						<div class="col-lg-11 text-center mx-auto">
							<h5>Elisa kour</h5>
							<p class="para-w3-agile"> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lac nec elit mollis pretium. Sed sed nunc lectus sapien in tellus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--// Clients -->


<!-- subscribe -->
<section class="subscribe text-center bg-light py-5">
	<div class="container p-sm-3">
		<h3 class="heading mb-2"> Subscribe Newsletter </h3>
		<p class="mb-5">Signup and recieve 15% on your First Plan.</p>
		<form action="#" method="post">
			<input class="form-control" type="email" placeholder="Your Email Address" name="Subscribe" required="">
			<button class="btn1" type="submit" name="E_Sub">
				<span class="fa fa-paper-plane"></span>
			</button>
			<?PHP
				if(isset($_POST['E_Sub'])){
				  $Email=$_POST['Subscribe'];
				  $to_email= $Email;
                  $message="Thank You For Subscribe";
                  $headers='from:noreply@company.com';
                     if(mail($to_email,$message,$headers)){
                         echo '<script type="text/javascript">alert("Email Sent");</script>';
                       }
                     else{
                         echo '<script type="text/javascript">alert("Email not sent");</script>';;
                         }
                } 
?>
		</form>
	</div>
</section>
<!-- //subscribe -->

<!-- footer -->	
<footer>
	<div class="container p-sm-5 py-5">
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
			<div class="col-lg-3 offset-lg-1 col-md-4 col-sm-6 mt-lg-0 mt-sm-5 mt-4">
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
					<input type="submit" name="s2" class="form-control" value="Get Started">
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