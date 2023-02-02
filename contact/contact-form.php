<form class="contact" method="POST" name="contactform" action="contact-form-handler.php">
		<input type="text" id="name" name="name" placeholder="Full Name" onblur="validateName()">
		<div id="name-icon" class="icon"></div>
		<input type="text" id="phone" name="phone" placeholder="Phone Number" onblur="validatePhone()">
		<div id="phone-icon" class="icon"></div>
		<input type="text" id="email" name="email" placeholder="Email Address" onblur="validateEmail()">
		<div id="email-icon" class="icon"></div>
		<textarea id="message" name="message" placeholder="Message" onblur="validateMessage()"></textarea>
	<p class="centered">
		<input class="submit" type="submit" value="Submit">
	</p>
</form>
<p>&nbsp;</p>