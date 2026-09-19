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
		
		<link rel="stylesheet" href="css/contact_v2.css">
		<script src="https://kit.fontawesome.com/ab3ad18ef2.js" crossorigin="anonymous"></script>

  
</head>
	
<body>
	
	<nav class="navbar">
		<ul class="nav-links">
			<li><a href="index_v2.html">HOME</a></li>
			<li><a href="page2_v2.html">ABOUT</a></li>
			<li><a href="page3_v4.html">PRODUCTS</a></li>
			<li><a href="page5_v2.html">PRE-ORDER</a></li>
			<li><a href="page6_v2.php">CONTACT</a></li>
		</ul>
		
	</nav>
	
	<div id="header">
		<div class="head">
			<div class="text-box">
				<h1>CONTACT</h1>
			</div>
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
					<h3 class="title">CONTACT US!</h3>
					<p class="text">
						lorem ipsum sit amet consectetur adipsicing elit.
					</p><!--information/blurb-->
					<div class="info">
						<div class="information">
							<img src="" class="icon" alt="icon 1"><!--location-->
							<p>Wellington, NZ</p>
						</div>
						<div class="information">
							<img src="" class="icon" alt="icon 2"><!--MUSE college email-->
							<p>muse_cosmetics@gmail.com</p>
						</div>
						<div class="information">
							<img src="" class="icon" alt="icon 3"><!--MUSE college number-->
							<p>020 142 02938</p>
						</div>
					</div>
				</div>
				<div class="contact-form">
					<form action="connect.php" method="post">
						<div class="input-container focus">
							<input type="text" name="name" class="input" placeholder="Your name"><!--for Full name-->
							<label for="">FULL NAME</label>
							<span>FULL NAME</span>
						</div>
						<div class="input-container focus">
							<input type="email" name="email" class="input" placeholder=" Your email "><!--For email-->
							<label for="">EMAIL</label>
							<span>EMAIL</span>
						</div>
						<div class="input-container focus">
							<input type="tel" name="phone" class="input" placeholder="Your phone number "><!--For phone number-->
							<label for="">PHONE</label>
							<span>PHONE</span>
							
						</div>
						<div class="input-container textarea focus">
							<textarea name="message" class="input" placeholder=" Type message " ></textarea><!--For the message input fix this tmrw morning-->
							<label for="">TYPE HERE</label>
							<span>TYPE HERE</span>
						</div>
						<input type="submit" value="Send" class="btn">
					</form>
				</div>
			</div>
		</div>
	</section>
	

	
	<footer class="footer">
    	<img src="images/placeholder.webp" class="footerlogo" alt="MUSE logo">
		<p>Copyright © MUSE 2026<br> All Rights Reserved</p>

	<div class="footer-content">
		<h4>QUICK LINKS</h4>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="page2.html">About</a></li>
			<li><a href="page3.html">Shop</a></li>
			<li><a href="page4.html">BYO</a></li>
			<li><a href="page5.html">Contact</a></li>
		</ul>
	</div>

		<div class="footer-content">
			<h4>CONTACT</h4>
			<ul>
				<li>
					<i class="fa-solid fa-phone"></i>
					<p>+64 20 4092 1051</p>
				</li>
				<li>
					<i class="fa-solid fa-envelope"></i>
				   <p>muse.cosmetics1005@gmail.com</p>
				</li>
				<li>
					<i class="fa-solid fa-location-dot"></i>
					<p>Wellington, New Zealand</p>
				</li>
			</ul>
		</div>

</footer>
	
</body>
