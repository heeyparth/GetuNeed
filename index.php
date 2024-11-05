<?php include('server.php');
if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
	if ($_SESSION["Usertype"]==1) {
		header("location: freelancerProfile.php");
	}
	else{
		header("location: employerProfile.php");
	}
}
else{
    $username="";
	//header("location: index.php");
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>GET U NEED</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">

<style>
	body{padding-top: 3%;margin: 0;}
	.header1{background-color: #EEEEEE;padding-left: 1%;}
	.header2{padding:20px 40px 20px 40px;color:#fff;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
</style>

</head>
<body>

<!--Navbar menu-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
	<div class="container">
		<div class="navber-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">GET U NEED</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<a href="loginReg.php" class="btn btn-info navbar-btn navbar-right">Register</a>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="#how">How it works</a></li>
				<!-- <li><a href="#faq">FAQ</a></li> -->
				<li><a href="loginReg.php">Login</a></li>
			</ul>
		</div>		
	</div>	
</nav>
<!--End Navbar menu-->



<!--Header and slider-->

<!--Header-->
<div class="row header1">
	<div class="col-lg-4">
		<div class="jumbotron">
			<div class="container text-center">
				<br><br><br><br>
				<h1>GET U NEED</h1>
				<p></p><br><br><br>
				<a href="loginReg.php" class="btn btn-warning btn-lg">It's Free!! Join Now!!!</a>
				<p></p>
			</div>
		</div>	
	</div>
<!--End Header-->

<!--slider-->
	<div class="col-lg-8">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="image/computer.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <!-- <h3>Work Slide</h3>
		        <p>Work hard to be successful.</p> -->
		      </div>
		    </div>

		    <div class="item">
		      <img src="image/mug.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <!-- <h3>Time Slide</h3>
		        <p>Do not waste your time.</p> -->
		      </div>
		    </div>

		    <div class="item">
		      <img src="image/coat.jpg" alt="Flower">
		      <div class="carousel-caption">
		        <!-- <h3>Believe Slide</h3>
		        <p>Always believe in yourself.</p> -->
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!--End slider-->



<!--Individual register tip-->
<div style="background:#cce5ff">
<div class="container text-center" style="padding:5%;">
	<div class="row">
		<div class="col-lg-6 card" style="padding:40px 80px 40px 80px;">
			<h1>Need works done?</h1>
			<p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes. Whatever your needs, there will be a freelancer to get it done: from web design, mobile app development, virtual assistants, product manufacturing, and graphic design (and a whole lot more). It is the simplest and safest way to get work done online.</p>
			<p></p>
			<a href="loginReg.php" class="btn btn-success btn-lg">Get Started</a>
		</div>
		<div class="col-lg-6" style="padding:40px 80px 40px 80px;margin-top:15px;box-shadow: 4px 4px 2px 5px rgba(0, 0, 0, 0.2), 0 6px 0px 0 rgba(0, 0, 0, 0.19);background:#fff">
			<h1>Looking for work?</h1>
			<p>If you are an expert in any kind of computer related or online work, then do not hesitate to join our platform. It is easy to use and payment is secured. It is a great platform to those people who are skillful. So do not miss the chance to explore the job posts and make some money.</p>
			<p></p>
			<a href="loginReg.php" class="btn btn-primary btn-lg">Get Started</a>
		</div>
	</div>
</div>
</div>
<!--End Individual register tip-->


<!--How it works-->
<div style="background:#cce5ff">
<div class="container text-center" style="padding:4%;" id="how">
	<h1 class="card header2" style="background:#007BFF">How it works</h1>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Post Projects For Free</h3>
			<p>It's always free to post your project. You’ll automatically begin to receive bids from our freelancers. Also, you can browse through the talent available on our site, and contact them by the contact information.</p>
		</div>
		<div class="col-lg-6">
			<img src="image/img01.jpg">
		</div>
	</div>
	<!-- <div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Deposit Money Safely</h3>
			<p>We have a complete security to your valuable money. You have the rights to pay the deposited money after the project completed. We have a good refund policy to make sure of satisfaction of the project completed.</p>
		</div>
		<div class="col-lg-6">
			<img src="image/img02.jpg">
		</div>
	</div> -->
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Feel Free To Talk</h3>
			<p>It is easier to talk with the freelancers here. So before you hire any freelancer feel free to talk with them. Tell them what you need and get the project done in the shortest possible time.</p>
		</div>
		<div class="col-lg-6">
			<img src="image/img03.jpg">
		</div>
	</div>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Build An Employer Profile</h3>
			<p>If you have a lot of works to be done or run a small business that needs some freelancers in a daily basis, this is the perfect place for you. Build your employer profile today and start hiring.</p>
		</div>
		<div class="col-lg-6">
			<img src="image/img04.jpg">
		</div>
	</div>
</div>
</div>
<!--End How it works-->



<!--Footer-->
<div class="text-center" style="padding:4%;background:#222;color:#fff;margin-top:20px;">
	<div class="row">
			<div class="col-lg-3">
			<h3>Quick Links</h3>
			<p><a href="index.php">Home</a></p>
			<p><a href="#how">How it works</a></p>
			<p><a href="loginReg.php">Login</a></p>
			<p><a href="loginReg.php">Register</a></p>
		</div>
		<div class="col-lg-3">
			<h3>About Us</h3>
			<p>Madhur Jain</p>
			<p>Parth Shrivastava</p>
			<p>Lavesh Kumrawat</p>
			
		</div>
		<div class="col-lg-3">
			<h3>Contact Us</h3>
			<p><a href="https://www.linkedin.com/in/madhur-jain-810757220">Madhur's Linkedin</a></p>
			<p></p><a href="https://www.linkedin.com/in/parth805 ">Parth's Linkedin</a></p>
			<p><a href="mailto:">Lavesh's Linkedin</a></p>
			
		</div>
		<div class="col-lg-3">
			<h3>Social Contact</h3>
			<p style="font-size:20px;color:#3B579D;"><i class="fab fa-facebook-square"> Facebook</i></p>
			<p style="font-size:20px;color:#D34438;"><i class="fab fa-google-plus-square"> Google</i></p>
			<p style="font-size:20px;color:#2CAAE1;"><i class="fab fa-twitter-square"> Twitter</i></p>
			<p style="font-size:20px;color:#0274B3;"><i class="fab fa-linkedin"> Linkedin</i></p>
		</div>
	</div>
</div>
<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>