<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>House Shifting Registration</title>
</head>
<body>
    <form action="backend.php" method="post">
        <h2>House Shifting Registration</h2>
        <h3>Personal Information</h3>

        <div>
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" id="fullname" required>
        </div>

        <div>
            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" required>
        </div>

        <div>
            <label>Gender:</label>
            <div class="gender-options">
                <label><input type="radio" name="gender" value="Male" required> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
                <label><input type="radio" name="gender" value="Other"> Other</label>
            </div>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <h3>Address Details</h3>

        <div>
            <label for="present_address">Present Address:</label>
            <textarea name="present_address" id="present_address" rows="4" required></textarea>
        </div>

        <div>
            <label for="new_address">New Address:</label>
            <textarea name="new_address" id="new_address" rows="4" required></textarea>
        </div>

        <div>
            <label for="move_date">Preferred Moving Date:</label>
            <input type="date" name="move_date" id="move_date" required>
        </div>

        <h3>Service Details</h3>

        <div>
            <label for="residence_type">Type of Residence:</label>
            <select name="residence_type" id="residence_type" required>
                <option value="">--Select--</option>
                <option value="apartment">Apartment</option>
                <option value="office">Office</option>
                <option value="house">House</option>
            </select>
        </div>

        <div>
            <label for="rooms">Number of Rooms:</label>
            <input type="number" name="rooms" id="rooms" min="1" required>
        </div>

        <div>
            <label><input type="checkbox" name="agree_terms" required> I agree to the terms and conditions</label>
        </div>

        <div class="buttons">
            <input type="submit" value="Register">
            <input type="reset" value="Reset Form">
        </div>
    </form>

    <script>
    document.querySelector("form").addEventListener("submit", function (e) {
        const fullName = document.getElementById("fullname").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const email = document.getElementById("email").value.trim();
        const dob = document.getElementById("dob").value;
        const gender = document.querySelector("input[name='gender']:checked");
        const password = document.getElementById("password").value.trim();
        const presentAddress = document.getElementById("present_address").value.trim();
        const newAddress = document.getElementById("new_address").value.trim();
        const moveDate = document.getElementById("move_date").value;
        const residenceType = document.getElementById("residence_type").value;
        const rooms = document.getElementById("rooms").value;
        const agreeTerms = document.querySelector("input[name='agree_terms']").checked;

        let errorMessages = [];

        if (fullName === "") errorMessages.push("Full Name is required.");
        if (!/^\d{10}$/.test(phone)) errorMessages.push("Enter a valid 10-digit phone number.");
        if (!/\S+@\S+\.\S+/.test(email)) errorMessages.push("Enter a valid email address.");
        if (!dob) errorMessages.push("Date of birth is required.");
        if (!gender) errorMessages.push("Please select a gender.");
        if (password.length < 6) errorMessages.push("Password must be at least 6 characters.");
        if (presentAddress === "") errorMessages.push("Present address is required.");
        if (newAddress === "") errorMessages.push("New address is required.");
        if (!moveDate) errorMessages.push("Moving date is required.");
        if (residenceType === "") errorMessages.push("Select a type of residence.");
        if (rooms === "" || parseInt(rooms) <= 0) errorMessages.push("Enter a valid number of rooms.");
        if (!agreeTerms) errorMessages.push("You must agree to the terms and conditions.");

        if (errorMessages.length > 0) {
            e.preventDefault(); // Stop form submission
            alert(errorMessages.join("\n"));
        }
    });
</script>
</body>
</html>
