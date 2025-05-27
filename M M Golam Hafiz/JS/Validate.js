function validateForm() {
  let isValid = true;

  let name = document.getElementById("fullname").value;
  let phone = document.getElementById("phone").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let terms = document.getElementById("terms").checked;

  document.getElementById("nameError").innerHTML = "";
  document.getElementById("phoneError").innerHTML = "";
  document.getElementById("emailError").innerHTML = "";
  document.getElementById("passwordError").innerHTML = "";
  document.getElementById("termsError").innerHTML = "";

  if (name === "") {
    document.getElementById("nameError").innerHTML = "Please enter your name.";
    isValid = false;
  }

  if (!/^\d{10}$/.test(phone)) {
    document.getElementById("phoneError").innerHTML =
      "Enter a 10-digit number.";
    isValid = false;
  }

  if (!email.includes("@")) {
    document.getElementById("emailError").innerHTML = "Enter a valid email.";
    isValid = false;
  }

  if (password.length < 6) {
    document.getElementById("passwordError").innerHTML =
      "Password must be at least 6 characters.";
    isValid = false;
  }

  if (!terms) {
    document.getElementById("termsError").innerHTML =
      "You must agree to the terms.";
    isValid = false;
  }

  return isValid;
}
