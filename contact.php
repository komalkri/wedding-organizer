<?php
	session_start();
	include 'config.php';
	
	
	if(!isset($_SESSION['log']))
	{
	 echo '<meta http-equiv="Refresh" content="0; url=index.php">';	
	 echo '<script type="text/javascript">alert("Please Log In Yourself First!!");</script>';	
		
	}
	else
	{	
	 	
	?>	 	

<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer </title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content=" Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords --> <!--Show Password -->
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
                <li class="mr-lg-3 mr-2 active"><a href="index.php">Home</a></li>
                <li class="mr-lg-3 mr-2"><a href="about.php">About Us</a></li>
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
                <li class="active"><a href="contact.php">Contact</a></li>
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
                    Contact Page
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
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        
		<?PHP
	 include 'config.php';
	  $t=$_SESSION['log'];
	  $sql = mysqli_query($conn,"SELECT  fname, lname FROM reg_tbl where email= '$t'");

    // output data of each row
    while($row = mysqli_fetch_array($sql)) {?>
	<li class="breadcrumb-item active" aria-current="page"><font color="#FF0000">
       <?PHP echo "Logged in UserName: " . $row["fname"]. " " . $row["lname"]. "<br>";
    }

	?></font></li>
	</ol>

    </nav>
    <!-- //breadcrumbs -->
	
<!-- contact -->
<section class="contact py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Contact Us </h3>
		<div class="address row">
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-map-marker"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Address</h6>
						<p> 2466H 5th Street Parking, King Block, New York City.

						</p>
					</div>
				</div>

			</div>
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-envelope"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Email</h6>
							<a href="mailto:information@example.com"> information@example.com</a>
							<a href="mailto:information@example1.com"> information@example1.com</a>
					</div>

				</div>
			</div>
			<div class="col-md-4 address-grid">
				<div class="address-info">
					<div class="address-left text-center">
						<span class="fa fa-phone"></span>
					</div>
					<div class="address-right text-center">
						<h6 class="ad-info text-uppercase mb-2">Phone</h6>
						<p>+1 234 567 8901</p>
						<p>+1 234 567 8901</p>

					</div>
				</div>
			</div>
		</div>
		<div class="form row py-5">
			<div class="col-lg-6 contact-form">
				<form action="#" method="post">
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="First_name" required=""> 
							<label>Full Name</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="email" name="Email" required="">
							<label>Email Address</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="tel" name="Phone" required="">
							<label>Phone Number</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="tel" name="sub" required="">
							<label>Subject</label>
							<span></span>
						</div>
						
						<div class="styled-input mt-5">
							<textarea name="msg"></textarea>
							<label class="text">Your Message</label>
							<span></span>
						</div>
					</div>
					<input type="submit"  name="s2"value="Submit">
					<?php
  include 'config.php';
  if(isset($_POST['s2'])){                         
  $First_name=$_POST['First_name'];
  $Email=$_POST['Email'];
  $Phone=$_POST['Phone'];
  $sub=$_POST['sub'];
  $msg=$_POST['msg'];
   $to_email=filter_var($Email, FILTER_VALIDATE_EMAIL);
   if($to_email==true){
  $d= mysqli_query($conn,"insert into contact(name,e_mail,mobile,subject,message) Values 
   ('$First_name','$Email','$Phone','$sub','$msg')");
   if(!$d)
   {
	    die('could not update:'.mysqli_error());
   }
   else{
      echo '<script type="text/javascript">alert("Inserted sucessfully!!");</script>';
   }
  
   $subject=$sub;
   $message=$msg;
   $headers='from:noreply@company.com';
 
   if(mail($to_email,$subject,$message,$headers)){
       echo '<script type="text/javascript">alert("Email Sent");</script>';
	   }
   else{
      echo '<script type="text/javascript">alert("Email not sent");</script>';;
      }
    }
 else {
  echo '<script type="text/javascript">alert("Invalid Mail");</script>'; 
	}	 
  }
?>

				</form>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<div class="bg-img">
					<div class="contact-layer">
						<h3 class="mb-3">Dont hesitate to contact us for any kind of information</h3>
						<p><i class="fas mr-2 fa-mobile-alt"></i> +12 327 8976 2334</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
						style="border:0"></iframe>
		</div>
	</div>
</section>	
<!-- //contact -->

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
					<input type="email" class="form-control" placeholder="" name="uame" id="recipient-name" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label">Password</label>
					<input type="password" class="form-control" placeholder="" name="psw" id="recipient-name1" required="">
				</div>
				<div class="form-group">
					<label for="recipient-name1" class="col-form-label"></label>
					<input type="checkbox" onclick="myFunction()">Show Password
				</div>
				<div class="right-w3l">
					<input type="submit"  name="s1"class="form-control" value="Login">
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
					<input type="password" class="form-control" placeholder="" name="Name" id="recipient-name6" required="">
				</div>
				
				
				<div class="right-w3l">
					<input type="submit" class="form-control" value="Get Started">
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
   ('$f_name','$l_name','$email',$mob,'$psw')");
   if(!$d)
   {
	    die('could not update:'.mysqli_error());
   }
   else{
   echo '<script type="text/javascript">alert("Inserted sucessfully!!");</script>';

   }
   }
?>
			
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- popup for register -->
<?PHP
}
?>
 
</body>
</html>