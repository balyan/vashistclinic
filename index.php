<!DOCTYPE html>
<html>
<head>
	<title>Vashist Clinic</title>
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic|Patrick+Hand' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class="container">
		<header>
			<img src="images/logo.svg" height="100px" />

			<nav>
				<ul>
					<li><a href="" id="about"><h3>about</h3></a></li>
					<li><a href="api/">clinic locator</a></li>
					<li><a href="">contact</a></li>
				</ul>
			</nav>
		</header>

		
	</div>
	<div class="doctor-appointment-container">
			<div class="container" id="app_steps">
				<h3>Easy Steps to get Doctor&rsquo;s Appointment</h3>
				<div class="appointment-steps">
					<img src="images/app_date_icon.svg" />
					<h4>Step 1</h4>
					<p class="app-step-desc">Select Date as your Convinience</p>
				</div>
				<div class="appointment-steps">
					<img src="images/app_symptom_icon.svg" />
					<h4>Step 2</h4>
					<p class="app-step-desc">Choose your Symptoms</p>
				</div>
				<div class="appointment-steps">
					<img src="images/app_detail_icon.svg" />
					<h4>Step 3</h4>
					<p class="app-step-desc">Enter your Details</p>
				</div>
			</div>
			<div class="container center" id="app_step1">
				<h3>Select Date</h3>
				<input type="text" />
			</div>
			<div class="get-app-button" id="app-button">Get Appointment Now</div>
		</div>
<script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
<script type="text/javascript" src="bower_components/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>