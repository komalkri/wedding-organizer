<?PHP
 session_start();
 include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Wedding Organizer web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
	$( function() {
    $( "#datepicker" ).datepicker();
	dateFormat: "yyyy-mm-dd"
  } );
  </script>

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
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->


<!-- banner -->
<section class="banner layer" id="home">
	<div class="container">
		<div class="banner-text">
			<div class="slider-info mb-4">
				<div class="banner-heading">
					<h3>
						Your wedding adventure starts here
					</h3>
				</div>
				<a href="contact.php"> Plan Your Wedding</a>
			</div>
			<!-- To bottom button-->
			<div class="thim-click-to-bottom">
				<div class="rotate">
					<a href="#welcome" class="scroll">
						<span class="fa fa-angle-double-down"></span>
					</a>
				</div>
			</div>
			<!-- //To bottom button-->

		</div>
	</div>
</section>
<!-- //banner -->

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

<!-- IMAGES -->
<section class="images">
	<div class="container-fluid">
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
<div class="form row py-5">

			<div class="col-lg-6 contact-form">
				<form action="#" method="post">
				<h3 class="heading text-capitalize mb-lg-5 mb-4"> BOOK YOUR DATE </h3>
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
						
							<input id="datepicker" name="b_date" type="text" required="">
							<label>Booking Date</label>
							<span></span>
						</div>
						
						<div class="styled-input">
							<input type="text" name="First_name" required=""> 
							<label>Full Name</label>
							<span></span>
						</div> 
						
						<div class="styled-input">
							<input type="email" name="Email" required="">
							<label>Email Address</label>
							<span></span>
						</div>
						
						<div class="styled-input mt-5">
							<textarea name="msg"></textarea>
							<label class="text">Your Message</label>
							<span></span>
						</div>
					</div>
				
					<input type="submit"  name="s2" value="Booking">
					<?php
  include 'config.php';
    if(isset($_POST['s2'])){
	 if(!isset($_SESSION['log']))
	{
	 echo '<meta http-equiv="Refresh" content="0; url=index.php">';	
	 echo '<script type="text/javascript">alert("Please Log In Yourself First!!");</script>';	
		
	}
	else
	{	
     $fn=$_POST['b_date'];
     date_default_timezone_set("Asia/Calcutta");
     $dt=date($fn);
     $First_name=$_POST['First_name'];
     $Email=$_POST['Email'];
     $msg=$_POST['msg'];
  	  $to_email=filter_var($Email, FILTER_VALIDATE_EMAIL);
	   if($to_email==true){                        
     $d= mysqli_query($conn,"insert into booking(date_book,email,name,message) Values 
     ('$dt','$Email','$First_name','$msg')");
       if(!$d)
        {
	      die('could not update:'.mysqli_error());
        }
      else{
          echo '<script type="text/javascript">alert("Booked sucessfully!!");</script>';
          }
   
   $subject='Regarding Booking';
   $message=$msg;
   $headers='from:noreply@company.com';
      if(mail($to_email,$subject,$message,$headers)){
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
   }
?>
                         
  
</form>
</div>
</div>


<!-- services -->
<section class="services py-5">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Our Services </h3>
		<div class="row service-grids">
			<div class="col-lg-3 col-sm-6">
				<div class="service-grid1">
					<span class="fa fa-globe"></span>
					<h4 class="my-3">Weddings</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-sm-4 mt-4" >
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Parties</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>				
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-sm-4 mt-4">
				<div class="service-grid1">
					<span class="fa fa-diamond"></span>
					<h4 class="my-3">Entertainment</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-sm-4 mt-4">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Celebrations</h4>
					<p>Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib dolor.</p>				
				</div>
			</div>
			<div class="ser-button mt-4">
				<a href="services.php">Explore all services</a>
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<!-- wedding date -->
<section class="section my-lg-5 py-5">
	<div class="container py-md-5">
		<h3 class="heading wedding text-light mb-2 text-center">Our Next Wedding Organizer Is On</h3>
		<p class="countdown-text mx-auto text-center text-light mb-lg-5 mb-4">Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures turpis, at bibendum lib sed ipsum dolor.</p>	
		<div class="row">
			<div class="col-lg-7 mx-auto">
				<!--date-->
				<div class="examples text-center">
					<h4>21 Dec, 2018.</h4>
					<p>Venue : 2466H 5th Street Parking, King Block, New York City.</p>
				</div>
				<!--//date-->
			</div>
			<div class="position-img1">
				<img src="images/right.jpg" alt="" class="img-fluid"/>
			</div>
			<div class="position-img2">
				<img src="images/left.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //wedding date -->

<!-- team -->
<div class="team py-5">
	<div class="container py-md-5">
	<h3 class="heading text-capitalize mb-lg-5 mb-4"> We are committed to service excellence </h3>
		<div class="row agile-team-grids">
			
			<div class="px-1 agileits-team-grid">
				<div class="team-info">
					<img src="images/t1.jpg" alt="" />
					<div class="team-caption"> 
						<h4>Jaye Smith</h4>
						<p>Wedding Planner</p>
						<ul>
							<li><a href="#"><span class="fa fa-facebook"></i></a></li>
							<li><a href="#"><span class="fa fa-twitter"></i></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><span class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<h4 class="text mt-3">Get To Know Her</h4>
				<p class="text">Sed lorem ipsumet </p>
			</div>
			
			<div class=" px-1 agileits-team-grid">
				<div class="team-info">
					<img src="images/t2.jpg" alt="" />
					<div class="team-caption"> 
						<h4>Mike Arney</h4>
						<p>Wedding Planner</p>
						<ul>
							<li><a href="#"><span class="fa fa-facebook"></i></a></li>
							<li><a href="#"><span class="fa fa-twitter"></i></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><span class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<h4 class="text mt-3">Get To Know Him</h4>
				<p class="text">Sed lorem ipsumet </p>
			</div>
			
			<div class="px-1 agileits-team-grid margin-team">
				<div class="team-info">
					<img src="images/t3.jpg" alt="" />
					<div class="team-caption"> 
						<h4>Mary Jane</h4>
						<p>Wedding Organizer</p>
						<ul>
							<li><a href="#"><span class="fa fa-facebook"></i></a></li>
							<li><a href="#"><span class="fa fa-twitter"></i></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><span class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<h4 class="text mt-3">Get To Know Her</h4>
				<p class="text">Sed lorem ipsumet </p>
			</div>
			
			<div class=" px-1 agileits-team-grid mt-lg-0 mt-5">
				<div class="team-info">
					<img src="images/t4.jpg" alt="" />
					<div class="team-caption"> 
						<h4>Louis Edward</h4>
						<p>Wedding Organizer</p>
						<ul>
							<li><a href="#"><span class="fa fa-facebook"></i></a></li>
							<li><a href="#"><span class="fa fa-twitter"></i></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><span class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<h4 class="text mt-3">Get To Know Him</h4>
				<p class="text">Sed lorem ipsumet </p>
			</div>
			<div class=" px-1 agileits-team-grid mt-lg-0 mt-5">
				<div class="team-info">
					<img src="images/t5.jpg" alt="" />
					<div class="team-caption"> 
						<h4>Johnson</h4>
						<p>Wedding Organizer</p>
						<ul>
							<li><a href="#"><span class="fa fa-facebook"></i></a></li>
							<li><a href="#"><span class="fa fa-twitter"></i></a></li>
							<li><a href="#"><span class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><span class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<h4 class="text mt-3">Get To Know Him</h4>
				<p class="text">Sed lorem ipsumet </p>
			</div>
		</div>
	</div>
</div>
<!-- //team -->

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
				<span class="fa fa-paper-plane"></span>			</button>
				<?PHP
				if(isset($_POST['E_Sub'])){
				  $Email=$_POST['Subscribe'];
				  $to_email= filter_var($Email, FILTER_VALIDATE_EMAIL);
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
		<p>� 2018 Wedding Organizer. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">Succexa</a></p>
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
					<input type="email" class="form-control" placeholder="" name="uname" id="recipient-name" required="">
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
	     $_SESSION['log']=$user;
	     echo '<script type="text/javascript">alert("Logged in successfully" );</script>';
         
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
					<input type="submit" name="register" class="form-control" value="Get Started">
				</div>
				<?php
  include 'config.php';
  if(isset($_POST['register'])){
	                          
  $f_name=$_POST['f_name'];
  $l_name=$_POST['l_name'];
   $email=$_POST['email'];
    $mob=$_POST['mob'];
	$psw = $_POST['psw'];
	
  $d= mysqli_query($conn,"insert into reg_tbl(fname,lname,email,password,mobile) Values 
   ('$f_name','$l_name','$email','$psw','$mob')");
   if(!$d)
   {
	    die('could not update:'.mysqli_error($conn));
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
<!-- //scrolling script -->
 <script src="js/main.js"></script>
 <!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->


</body>
</html>
