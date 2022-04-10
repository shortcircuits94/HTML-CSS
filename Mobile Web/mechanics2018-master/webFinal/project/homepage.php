
<html>
<head>
	<title>Home</title>
	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<?php include "header.php"; ?>
    
<body>
<body>
    
	<!--<div id="head">
	
    <img src="aLogo.png" id="logo">    

        
	<ul id="nav" class="nav justify-content-center">
	  <li><a href="homepage.html">Home</a></li>
	  <li><a href="#news">About</a></li>
	  <li><a class="active" href="#testimonials">Testimonials</a></li>
	  <li><a href="#about">Services</a></li>
      <li><a href="contact">Contact</a></li>
	</ul>
    
    </div> -->
	

	
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner"">
			<div class="carousel-item active">
			<img class="d-block w-100" src="car1.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="car2.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="car3.jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
	

	<div class="container">
	
	<div>
		<div id="welcome" class="col">
			<div class="jumbotron">
  <h1 class="display-4">Welcome, to Aplina Auto Services!</h1>
  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  <hr class="my-4">
  <p>To learn more about us, head over to our About page!</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button" id="LMbutton">Learn more</a>
  </p>
</div>
		</div>
	</div>
	<div class="row">	
		<div id="news" class="col">
			<h3>News & Updates</h3>
			
			<ul>
				<li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
				<li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
				<li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
				<li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
				<li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
			</ul>
		</div>
	</div>
    </div>
                    
	
	<?php include 'footer.php' ?>
	