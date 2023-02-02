function validateName() {
	
	var name = document.getElementById('name');
	
	if (typeof name !== "undefined" && name.value == '') {
		document.getElementById("name").className = "invalid";
		document.getElementById("name-icon").className = "invalid-icon";
	} else {
		document.getElementById("name").className = "valid";
		document.getElementById("name-icon").className = "valid-icon";
	}
}
function validatePhone() {
	
	var phone = document.getElementById('phone');
	
	if (typeof phone !== "undefined" && phone.value == '') {
		document.getElementById("phone").className = "invalid";
		document.getElementById("phone-icon").className = "invalid-icon";
	} else {
		document.getElementById("phone").className = "valid";
		document.getElementById("phone-icon").className = "valid-icon";
	}
}
function validateEmail() {
	
	var email = document.getElementById('email');
	
	if (typeof email !== "undefined" && email.value == '') {
		document.getElementById("email").className = "invalid";
		document.getElementById("email-icon").className = "invalid-icon";
	} else {
		document.getElementById("email").className = "valid";
		document.getElementById("email-icon").className = "valid-icon";
	}
}
function validateMessage() {
	
	var message = document.getElementById('message');
	
	if (typeof message !== "undefined" && message.value == '') {
		document.getElementById("message").className = "invalid";
	} else {
		document.getElementById("message").className = "valid";
	}
}