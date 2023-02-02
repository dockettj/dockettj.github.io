<?php 
$errors = '';
$myemail = 'jdockett@gmail.com';
if(empty($_POST['name'])  || 
   empty($_POST['phone']) ||
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: All fields are required.<br/>";
}

$name = $_POST['name'];
$phone = $_POST['phone']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Your email address appears to be invalid";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Phone Number: $phone \n Email: $email_address \n Message: \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.php');
} 
?>
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
					<div class="red">
						<h3>Oops!</h3>
						<p>Looks like there was an problem with your message. <br/>Could you try again?<br/>
							<?php 
								echo($errors);
								?>
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



</body>
</html>