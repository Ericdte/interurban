function validateRegistrationForm() {
	let name = document.getElementById("name").value;
	let email = document.getElementById("email").value;
	let password = document.getElementById("password").value;
	let phone = document.getElementById("phone").value;
	let location = document.getElementById("location").value;
  
	let emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
	let phoneRegex = /^[0-9]{10}$/;
  
	if (name == "" || email == "" || password == "" || phone == "" || location == "") {
	  alert("Please fill out all required fields.");
	  return false;
	}
	else if (!emailRegex.test(email)) {
	  alert("Please enter a valid email address.");
	  return false;
	}
	else if (!phoneRegex.test(phone)) {
	  alert("Please enter a valid 10-digit phone number.");
	  return false;
	}
  
	return true;
  }
  
  