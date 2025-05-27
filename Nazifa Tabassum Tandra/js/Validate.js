function validateForm() {
  const name = document.getElementById("name").value.trim();
  const address = document.getElementById("address").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const comment = document.getElementById("comment").value.trim();
  const serviceType = document.getElementById("serviceType").value;
  const errorMsg = document.getElementById("errorMsg");

  if (name === "") {
    errorMsg.textContent = "Name is required.";
    return false;
  }

  if (address === "") {
    errorMsg.textContent = "Address is required.";
    return false;
  }

  const phoneRegex = /^\d{10}$/;
  if (!phoneRegex.test(phone)) {
    errorMsg.textContent = "Phone number must be 10 digits.";
    return false;
  }

  if (comment.length < 10) {
    errorMsg.textContent = "Comment must be at least 10 characters.";
    return false;
  }

  if (serviceType === "") {
    errorMsg.textContent = "Please select a service type.";
    return false;
  }

  errorMsg.textContent = ""; // Clear any previous errors
  alert("Form submitted successfully!");
  return true;
}
