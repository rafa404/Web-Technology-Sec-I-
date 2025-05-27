<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Styled Submit Button</title>
  <style>
    .btn {
      border-radius: 5px;
      width: 80px;
    }
    .submit {
      color: white;
      background-color: greenyellow;
    }
    body {
      background-color: lightblue;
      text-align: center;
    }
    h1 {
      color: white;
    }
    p {
      font-family: Verdana, sans-serif;
      font-size: 20px;
    }
    .box {
      background-color: white;
      padding: 20px;
      width: 250px;
      margin: 20px auto;
      border-radius: 10px;
      box-shadow: 2px 2px 10px gray;
    }
    select {
      padding: 5px;
      margin-top: 10px;
    }
    #message {
      margin-top: 10px;
      font-size: 16px;
    }
    .error {
      color: red;
    }
    .success {
      color: green;
    }
  </style>
</head>
<body>
  <h1>Submit The Form</h1>
  <p>PUT ALL ESSENTIAL INFORMATION AS PER INSTRUCTION</p>

  <div class="box">
    <h2>Ready To Go</h2>
    <label for="role">Choose your role:</label>
    <select id="role">
      <option value="">--Select--</option>
      <option value="admin">Admin</option>
      <option value="client">Client</option>
      <option value="moderator">Moderator</option>
    </select>
    <div id="message"></div>
  </div>

  <button class="btn submit" onclick="validateForm()">Submit</button>

  <script>
    function validateForm() {
      const role = document.getElementById("role").value;
      const message = document.getElementById("message");

      // 1. Check if a role is selected
      if (role === "") {
        message.innerHTML = "Please select a role.";
        message.className = "error";
        return;
      }

      // 2. Confirmation Message
      message.innerHTML = "You selected the role: <strong>" + role + "</strong>";
      message.className = "success";

      // 3. Check if selected role is valid (just in case options are modified)
      const validRoles = ["admin", "client", "moderator"];
      if (!validRoles.includes(role)) {
        message.innerHTML = "Invalid role selected!";
        message.className = "error";
        return;
      }

      // 4. Simulate successful submission
      setTimeout(() => {
        message.innerHTML = "Form submitted successfully!";
        message.className = "success";
      }, 1000);

      // 5. Disable button after submit 
      document.querySelector(".submit").disabled = true;
      setTimeout(() => 
      { document.querySelector(".submit").disabled = false; }, 3000); 
    }
  </script>
</body>
</html>
