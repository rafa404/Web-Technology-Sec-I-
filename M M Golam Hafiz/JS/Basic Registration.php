<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="Registration.css">
</head>
<body>

<h2>Registration Form</h2>

<form action="submitted.php" method="POST" onsubmit="return validateForm();">
    <label>Full Name:</label><br>
    <input type="text" id="fullname" name="fullname"><br>
    <span id="nameError" class="error"></span><br>

    <label>Phone Number:</label><br>
    <input type="text" id="phone" name="phone"><br>
    <span id="phoneError" class="error"></span><br>

    <label>Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <span id="emailError" class="error"></span><br>

    <label>Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <span id="passwordError" class="error"></span><br>

    <label>
        <input type="checkbox" id="terms" name="terms"> I agree to the terms
    </label><br>
    <span id="termsError" class="error"></span><br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<script src="Registration.js"></script>

</body>
</html>
