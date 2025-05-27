<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Upload Profile & Details</title>
</head>
<body>

<h2>Upload Profile Picture & Submit Details</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" required></textarea><br><br>

    <label for="date">Date of Birth:</label><br>
    <input type="date" id="date" name="date" required><br><br>

    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10,15}" title="Enter 10 to 15 digits" required><br><br>

    <label for="profile_picture">Choose Profile Picture (PNG, JPG, JPEG):</label><br>
    <input type="file" name="profile_picture" id="profile_picture" accept=".png, .jpg, .jpeg" required><br><br>

    <input type="submit" value="Submit">
</form>
<?php include 'footer.php';?>
</body>
</html>
