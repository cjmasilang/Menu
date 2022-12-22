<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>James Wright Menu</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Valley Bread Cafe Menu" name="keywords">
<meta content="Valley Bread Cafe Menu" name="description">
<!-- Favicons -->
<link href="assets/img/logo2.ico" rel="icon">
<link href="assets/img/jwlogoo.png" rel="apple-touch-icon">
<!-- CSS only -->
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">
<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>


<style>
body {
    background-image: url('assets/img/menuback.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
  }



		.bg2 {
		animation-direction: alternate-reverse;
		animation-duration: 4s;
		}

		.bg3 {
		animation-duration: 5s;
		}

	
		h1 {
		font-family: monospace;
		}

		@keyframes slide {
		0% {
		transform: translateX(-25%);
		}

		100% {
		transform: translateX(25%);
		}
		}

		#profile-img {
		height: 180px;
		}
		@media only screen and (min-width: 375px) {
		/* For desktop: */
		.d-md-block {width: 350px;}
		}
</style>

<body>
<div class="bg"></div>
	<div class="bg bg2"></div>
		<div class="bg bg3"></div>
			<div class="container">
				<div class="form-row">
					<div class="col-md-3"></div>
						<div class="col-md-6">

<center>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%; margin-top:50px;">
<ol class="carousel-indicators">
	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
</ol>

<div class="carousel-inner">
	<center><h1>Popular Food</h1></center>
	<div class="carousel-item active">
	<img class="d-md-block" src="assets/img/all-day-breakfast/Farmer's Breakfast.jpg" alt="First slide">
</div>

<div class="carousel-item">
	<img class="d-md-block" src="assets/img/all-day-breakfast/Chicken Tocino.jpg" alt="Second slide">
	</div>
</div>

<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
</center>
</div>

<div class="col-md-3"></div>
</div>

<div class="form-row" style="margin-top: 50px;">
	<div class="col-md-4"></div>
		<div class="col-md-4">

<div class="row align-items-center h-100">
	<div class="col-8 mx-auto">
		<div class="text-center">
		<img id="profile-img" class="rounded-circle profile-img-card" src="assets/img/jwlogoo.png" />
		<p id="profile-name" class="profile-name-card"></p>

	<form class="form-signin">
		<a style="color:white;" onclick="redirectCustom();" class="btn btn-lg btn-success btn-signin" type="submit">View Our Menu</a>
		</form><!-- /form -->
	</div>
</div>
</div>
</div>

<div class="col-md-4"></div>
	</div>
<br>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="js/cake.js">
</script>

<script>
		function toPage() {
		window.location = "menu.php";
		}
		function redirectCustom() {
		//redirect after 5 seconds for i min pass 60000
		setTimeout('toPage()', 1500);
		document.getElementById("welcome").play();
		}
</script>
</body>



</html>