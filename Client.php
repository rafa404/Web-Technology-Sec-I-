<!DOCTYPE html>
<html>
<head>
    <title>Service Request Form</title>
    <style>
        body {
            background-color: #fffdd0; /* Cream background */
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        input[type="text"], input[type="date"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            background:rgba(125, 132, 99, 0.6);
            padding: 40px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Service Request Form</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">

        <label for="date">Date:</label>
        <input type="date" id="date" name="date">

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4"></textarea>

        <label for="service_type">Service Type:</label>
        <select id="service_type" name="service_type">
            <option value="standard">Standard</option>
            <option value="premium">Premium</option>
        </select>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Form Submitted:</h3>";
        echo "Name: " . $_POST["name"] . "<br>";
        echo "Address: " . $_POST["address"] . "<br>";
        echo "Date: " . $_POST["date"] . "<br>";
        echo "Comment: " . $_POST["comment"] . "<br>";
        echo "Service Type: " . $_POST["service_type"] . "<br>";
    }
    ?>
</div>

</body>
</html>
