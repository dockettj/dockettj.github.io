<!doctype html>
<html>
	<head>
		<!--<script src="../js/menu.js" type="text/javascript"></script>-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='../css/style.min.css' rel='stylesheet' type='text/css'>
		<title>Web Design and Development in Bay City, MI. Web Designer and Developer | Jesse Dockett</title>
	</head>
	<body>
		<?php
			include '../menu.php';
		?>
		<div id="content">
			<div id="content-container">
				<div class="twelve-columns bottom-border">
					<h1>Contact Me</h1>
					<h2>Read some frequently asked questions or email me</h2>
				</div>
				<div class="six-columns">
					<?php 
						include 'faq.php';
					?>
				</div>
				<div class="six-columns">
					<h2>Contact</h2>
					<div class="green">
						<h3>Success!</h3>
						<p>
							Thank you, your message has been sent. I will be in touch with you soon.
						</p>
					</div>
					<?php
						include 'contact-form.php';
					?>
				</div>
				<?php
					include '../footer.php';
				?>
			</div>
		</div>
	</body>
</html>
