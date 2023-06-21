document.getElementById("formmail").addEventListener("submit", function(event) {
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
    "Please choose a mail."
  ];
  var div = document.querySelectorAll(".invalid-feedback");
  for (let i = 0; i < div.length; i++) {
    if (inputs[i].value.trim() === "") {
      div[i].textContent = d[i];
      errors.push("error");
    } else {
      div[i].textContent = "";
      errors.splice(0, errors.length);
    }
  }
  
  var textarea = document.getElementById("floatingTextarea2Disabled");
  var showErr = document.getElementById("commcheck");
  if (textarea.value.trim() === "") {
	  textarea.classList.add("is-invalid");
	  showErr.textContent = "Please give your message";
	  errors.push("error");
  } else {
  	textarea.classList.remove("is-invalid");
	  showErr.textContent = "";
	  errors.splice(0, errors.length);
  }
  	
	
	
  if (errors.length > 0) {
  	event.preventDefault();
  }
  
});

