<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Medical Store - Contact Us</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet"
href="css/final.css">

</head>

<body>

<header class="header">

<a href="final.php" class="logo">

<i class="fa fa-medkit"></i>
Medical Store

</a>

<nav class="navbar">

<a href="final.php">Home</a>
<a href="aboutUs.php">About Us</a>
<a href="products.php">Products</a>
<a href="services.php">Services</a>
<a href="contactUs.php">Contact Us</a>

</nav>

<div class="icons">

<div class="fa fa-bars" id="menu-btn"></div>
<div class="fa fa-search" id="search-btn"></div>

</div>

<form class="search-form">

<input
type="search"
id="search-box"
placeholder="Search here...">

<label
for="search-box"
class="fa fa-search">
</label>

</form>

</header>


<main>

<section>

<h1 class="heading">

Contact <span>Us</span>

</h1>

<div class="services">

<ul>

<li>
<i class="fa fa-phone"></i>
<strong>Phone</strong>
<br><br>
+1 (785) 787-1936
</li>

<li>
<i class="fa fa-envelope"></i>
<strong>Email</strong>
<br><br>
y_diallo@mail.fhsu.edu
</li>

<li>
<i class="fa fa-map-marker"></i>
<strong>Location</strong>
<br><br>
600 Park St, Hays, KS 67601
</li>

</ul>

</div>

</section>


<section class="contact">

<form action="process_contact.php" method="POST">

<input
type="text"
name="first_name"
placeholder="First Name"
required>

<input
type="text"
name="last_name"
placeholder="Last Name"
required>

<input
type="email"
name="email"
placeholder="Email"
required>

<input
type="tel"
name="phone"
placeholder="Phone Number"
required>

<textarea
name="message"
placeholder="Write your message here"
required></textarea>

<input
type="submit"
value="Send Message"
class="btn">

</form>

</section>

</main>


<footer>

<p>
© 2026 Medical Store | All Rights Reserved
</p>

</footer>

<script src="js/main.js"></script>

</body>
</html>