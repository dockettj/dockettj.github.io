<!doctype html>
<html>
	<head>
		<!--<script src="../js/menu.js" type="text/javascript"></script>-->
		<script src="../js/form-validator.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta charset="UTF-8">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='../css/style.min.css' rel='stylesheet' type='text/css'>
		<title>Web Design and Development in Bay City, MI. Web Designer and Developer | Jesse Dockett</title>
		<meta name="description" content="Jesse Dockett is a web designer and web developer from Bay City, Michigan. He primarily works in front-end development with Wordpress and Joomla. Occasionally, he makes videos, too. Please contact directly if in need of web design or web development.">
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
					<?php include 'faq.php';
						?>
				</div>
				<div class="six-columns">
					<h2>Contact</h2>
					<?php
						include 'contact-form.php';
					?>
				</div>
				<?php
					include '../footer.php';
				?>
			</div>
		</div>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-33934983-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>
