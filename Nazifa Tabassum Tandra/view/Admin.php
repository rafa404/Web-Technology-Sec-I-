<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mycss.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #message 
        {
            margin-top: 15px;
            font-weight: bold;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body style="background-image: url('../images/bghouseshift11.jpg'); background-size: contain; background-position: center; background-repeat: no-repeat; background-attachment: fixed; margin: 0; height: 100vh;">

    <h2>Admin Dashboard</h2>

    <form onsubmit="return validateForm()" action="admin.php" method="post">
        <label>Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label>Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label>Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label>Role:</label>
        <select id="role" name="role">
            <option value="">--Select--</option>
            <option value="Admin">Admin</option>
            <option value="Moderator">Moderator</option>
            <option value="viewer">Viewer</option>
        </select><br><br>

        
        <input type="submit" value="Save" style="background-color: lightblue; border: none; padding: 8px 16px; cursor: pointer;">
        <input type="Reset" value="Reset" style="background-color: lightgreen; border: none; padding: 8px 16px; cursor: pointer;">
        
    </form>

    <div id="message"></div>

    <script>
    function validateForm() {
        const username = document.getElementById("username").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const role = document.getElementById("role").value;
        const message = document.getElementById("message");

        // Clear previous messages
        message.innerHTML = "";
        message.className = "";

        // 1. Username validation - not empty & only alphabets
        const usernamePattern = /^[A-Za-z]+$/; 
        if (username === "") {
            message.innerHTML = "Username is required.";
            message.className = "error";
            return false;
        } else if (!usernamePattern.test(username)) {
            message.innerHTML = "Username must only contain alphabets.";
            message.className = "error";
            return false;
        }

        // 2. Email validation - not empty & valid format
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
        if (email === "") {
            message.innerHTML = "Email is required.";
            message.className = "error";
            return false;
        } else if (!emailPattern.test(email)) {
            message.innerHTML = "Please enter a valid email address.";
            message.className = "error";
            return false;
        }

        // 3. Password length check
        if (password.length < 6) {
            message.innerHTML = "Password must be at least 6 characters.";
            message.className = "error";
            return false;
        }

        // 4. Role selection check
        if (role === "") {
            message.innerHTML = "Please select a role.";
            message.className = "error";
            return false;
        } 
        else if (role === "viewer") {
            alert("Come explore Our Webpage");
            return false;
        }

        // 5. All validations passed
        message.innerHTML = "Form submitted successfully!";
        message.className = "success";
        return true;
    }
</script>
</body>
</html>
