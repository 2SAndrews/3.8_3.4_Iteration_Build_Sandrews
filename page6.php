<!DOCTYPE html>

<html lang="en">


<head>

    <title>MUSE | CONTACT</title>
		<link rel="icon" type="image/x-icon" href="images/logo.png">

		<meta charset="utf-8">

		<meta name="keywords" content="MUSE, cosmetics, make-up"/>

		<meta name="author" content="Sherlyn Andrews"/>

		<meta name="description" content="Find a new product tailored for you"/>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	 <!-- Import the web page's style sheet -->
		
		<link rel="stylesheet" href="css/contact.css">
		<script src="https://kit.fontawesome.com/ab3ad18ef2.js" crossorigin="anonymous"></script>

  
</head>
	
<body>
	
	<div id="header">
		<div class="container">
		 </div>
	</div>
	
	<?php
	//get the connection to the database in phpMyAdmin
		require_once("page6_contact_mysqli.php");
		?>
	
	<section id="contact">

		<div class="container">
			<div class="form">
				<div class="contact-info">
					<h3 class="title">Lorem Ipsum</h3>
					<p class="text">
						lorem ipsum sit amet consectetur adipsicing elit.
					</p><!--information/blurb-->
					<div class="info">
						<div class="information">
							<img src="" class="icon" alt="icon 1"><!--location-->
							<p>blah blah blah</p>
						</div>
						<div class="information">
							<img src="" class="icon" alt="icon 2"><!--Tawa college email-->
							<p>lorem@ipsum.com</p>
						</div>
						<div class="information">
							<img src="" class="icon" alt="icon 3"><!--Tawa college number-->
							<p>123 456 789</p>
						</div>
					</div>
				</div>
				<div class="contact-form">
					<form action="connect.php" method="post">
						<h3 class="title">Lorem Ipsum</h3> 
						<div class="input-container focus">
							<input type="text" name="name" class="input" placeholder="Your name"><!--for Full name-->
							<label for="">Ipsum</label>
							<span>Ipsum</span>
						</div>
						<div class="input-container focus">
							<input type="email" name="email" class="input" placeholder=" Your email "><!--For email-->
							<label for="">Ipsum</label>
							<span>Ipsum</span>
						</div>
						<div class="input-container focus">
							<input type="tel" name="phone" class="input" placeholder="Your phone number "><!--For phone number-->
							<label for="">Ipsum</label>
							<span>Ipsum</span>
							
						</div>
						<div class="input-container textarea focus">
							<textarea name="message" class="input" placeholder=" Type message " ></textarea><!--For the message input fix this tmrw morning-->
							<label for="">Ipsum</label>
							<span>Ipsum</span>
						</div>
						<input type="submit" value="Send" class="btn">
					</form>
				</div>
			</div>
		</div>
	</section>
	

	
	<footer>
		<div class="container">
			<div class="logo">
				<h1>LOGO GOES HERE</h1>
			</div>
				<div class="quicklinks">
				<h2>Links</h2>
		</div>

			<div class="quicklinks2">
				<h2>Links2</h2>
			</div>

			<div class="contact">
				<h2>Contact</h2>
				<ul class="info">
				</ul>
			</div>
		</div>
	</footer>	
	
</body>