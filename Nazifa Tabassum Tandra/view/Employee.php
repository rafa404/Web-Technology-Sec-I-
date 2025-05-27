<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Data Form</title>
  <style>
    body {
      font-family: sans-serif;
      background:rgb(190, 190, 190);
      margin: 40px;
    }

    h2 { text-align: center; }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background: Green;
      border: none;
      cursor: pointer;
    }

    .error {
      color: red;
    }

    form {
      background:rgb(200, 200, 255);
      padding: 20px 30px;
      border-radius: 10px;
      max-width: 500px;
      margin: auto;
      box-shadow: 0 0 10px #000000;
    }
  </style>
</head>
<body>

<h2>Employee Registration Form</h2>
<form id="employeeForm" onsubmit="return validateForm(event)">
  <label>Full Name:
    <input type="text" id="name" oninput="validateField('name', /^[A-Za-z\s]{3,}$/, 'Name must be at least 3 letters.')">
    <span class="error" id="nameError"></span>
  </label>

  <label>Email:
    <input type="email" id="email" oninput="validateField('email', /^[^\s@]+@[^\s@]+\.[^\s@]+$/, 'Enter a valid email.')">
    <span class="error" id="emailError"></span>
  </label>

  <label>Phone Number:
    <input type="tel" id="phone" oninput="validateField('phone', /^\d{10}$/, 'Phone must be 10 digits.')">
    <span class="error" id="phoneError"></span>
  </label>

  <label>Designation:
    <input type="text" id="designation" oninput="validateField('designation', /.+/, 'Designation must be filled.')">
    <span class="error" id="designationError"></span>
  </label>

  <input type="submit" value="Submit">
</form>

<script>
  function validateField(id, regex, message) {
    const input = document.getElementById(id);
    const error = document.getElementById(id + 'Error');
    const valid = regex.test(input.value.trim());
    error.textContent = valid ? '' : message;
    error.style.display = valid ? 'none' : 'block';
    return valid;
  }

  function validateForm(event) {
    event.preventDefault();
    const isValid =
      validateField('name', /^[A-Za-z\s]{3,}$/, '') &&
      validateField('email', /^[^\s@]+@[^\s@]+\.[^\s@]+$/, '') &&
      validateField('phone', /^\d{10}$/, '') &&
      validateField('designation', /.+/, '');
    if (isValid) alert("Form submitted successfully!");
    else alert("Please correct the highlighted fields.");
    return isValid;
  }
</script>

</body>
</html>
