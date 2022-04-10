<!DOCTYPE html> 
<html> 
<head> 
	<title>ContactEmail - Rebecca Scott Web Resume</title> 
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="styles.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name=“viewport” content=“width=device-width,initial-scale=1.0, maximum-scale=1.0” />
</head> 
<body> 
	<div id="wrapper">
	<header>
	<nav>
	<ul>
		<li><a href="finalProject1.html">Home</a></li>
		<li><a href="portfolio.html">Portfolio</a></li>
		<li><a href="skills.html">Skills</a></li>
		<li><a href="experience.html">Experience</a></li>
		<li><a href="contact.html">Contact</a></li>
		
	</ul>
	</nav>
	<h1> Rebecca Scott </h1> 
	
	</header>
	<div id = "col1">
	<section> 
	<h3>Thank you! Your Email has been sent!</h3>
	<?php 
		$name = $_POST['fname'] . ' ' . $_POST['lname'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$to = 'rebecca.scott01@stclairconnect.ca';
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$msg = "$name has sent you a message.\n" .
		"Phone Number: $tel\n" .
		"Email: $email\n" .
		"Subject: $subject\n" .
		"Message: $message";
	mail($to, $subject, $message, $msg, 'From:' . $email);
	echo 'Your email has been sent ' . $name . '<br />';
	echo 'Subject: ' . $subject . '<br />';
	echo 'Phone Number: ' . $tel . '<br />';
	echo 'Email: ' . $email . '<br />';
	echo 'Message: ' . $message . '<br />';
	
	?>
	</section> 
	</div>
	<div id ="col2">
	<aside> 
	<img src="me.jpg" title="me" alt="me"/>
	<p>My name is Rebecca Scott, otherwise know as an over caffeinated, Netflix obsessed, coding newbie.</p>
	<a href="https://www.facebook.com/rebeccamscott94" target="_blank" class="fa fa-facebook"></a>
	<a href="http://shortedcircuits.tumblr.com/" target="_blank" class="fa fa-tumblr"></a>
	<a href="https://www.linkedin.com/in/rebecca-scott-2b0806128" target="_blank" class="fa fa-linkedin"></a>
	<a href="https://www.pinterest.com/shortcircuits94/" target="_blank" class="fa fa-pinterest"></a>	</p>
	</aside> 
	</div>
	<footer>
	Rebecca Scott &#9900; 6-52 Lacroix St &#9900; Chatham, ON &#9900; N7M2T6 &#9900;  226-881-1559 &#9900; <a href="mailto:rebecca.scott01@stclairconnect.ca?Subject=Hello%20again" target="_top">rebecca.scott01@stclairconnect.ca
	</footer> 
	</div>
</body> 
</html>