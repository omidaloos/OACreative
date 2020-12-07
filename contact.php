<!DOCTYPE html>
<html lang="en">
<head>
	<title>OA Creative - Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<?php include('includes/header.inc') ?>

	<main>

		<div id="contactForm">
			<div>
				<h1>Contact</h1>
				<p>Thank you for visiting our website. Our clients are our main focus<br>and your satisfaction is our top priority. We look forward to helping<br>you acomplish your goals. Give us a call today for a free consultation<br>or fill out the form on this page to have us contact you.</p>
			</div>
			<div>
				<form action="#" method="post">
					<h1 id="contactHead">Contact Us</h1>
					<ul id="contactList">
						<li>
						    <input type="text" class="leftF" name="nameF" placeholder="Name">
						    <input type="email" class="rightF" name="emailF" placeholder="Email">

						</li>
						<li>
						    <input type="tel" class="leftF" name="phoneF" placeholder="Phone"> <!-- use regEX -->
						    <input type="url" class="rightF" name="biznameF" placeholder="Business"> <!-- use regEX -->
						</li>
						<li>
							<input type="text" class="fullF" name="subjectF" placeholder="Subject">
						</li>
						<li>
							<textarea class="fullF" name="messageF" placeholder="Message"></textarea>
						</li>
						<li>
							<input type="submit" id="submitF" value="Send Message">
						</li>
					</ul>
				</form>
			</div>
		</div>

	</main>

	<?php include('includes/footer.php'); ?>
	<script src="oacreative.js"></script>
</body>
</html>