

// Ganti event listener pada form dengan ID 'yourFormID'
document.getElementById("myForm").addEventListener("submit", function(event) {
   // Mencegah form untuk melakukan submit
  
  var errors = [];
  var inputs = document.querySelectorAll("input");
  inputs.forEach(function(input) {
    if (input.value.trim() === "") {
      input.classList.add("is-invalid");
      errors.push("error");
    } else {
      input.classList.remove("is-invalid");
      errors.splice(0, errors.length);
    }
  });

  var d = [
    "Please choose a name.",
    "Please choose a username.",
    "Please choose an email.",
    "Please choose a password."
  ];
  var div = document.querySelectorAll(".resp");
  for (let i = 0; i < div.length; i++) {
    if (inputs[i].value.trim() === "") {
      div[i].textContent = d[i];
      errors.push("error");
    } else {
      div[i].textContent = "";
      errors.splice(0, errors.length);
    }
  }
  
  
  var checkbox = document.getElementById("invalidCheck3");
  var message = document.getElementById("invalidCheck3Feedback");
  if (!checkbox.checked) {
    message.textContent = "You must agree before submitting.";
    errors.push("error");
  } else {
    message.textContent = "";
    errors.splice(5);
  }
  
  if (errors.length > 0) {
  	event.preventDefault();
  }
});

function checkMaill() {
	var mail = document.getElementById("floatingInputGroup3");
	var showErr = document.getElementById("emailCheck");
	mail.classList.add("is-invalid");
	showErr.textContent = "e-mail already exists";
	return false;
	
}

function closecMail() {
	var mail = document.getElementById("floatingInputGroup3");
	var showErr = document.getElementById("emailCheck");
	mail.classList.remove("is-invalid");
	showErr.textContent = "";
}
