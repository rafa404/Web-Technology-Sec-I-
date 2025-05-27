<?php
// Initialize variables and set empty values
$name = $address = $date = $comment = $service_type = "";
$errors = [];

// Validate input
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name validation
    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Address validation
    if (empty($_POST["address"])) {
        $errors[] = "Address is required.";
    } else {
        $address = htmlspecialchars(trim($_POST["address"]));
    }

    // Date validation
    if (empty($_POST["date"])) {
        $errors[] = "Date is required.";
    } else {
        $date = $_POST["date"];
    }

    // Comment validation (optional)
    $comment = htmlspecialchars(trim($_POST["comment"]));

    // Service type validation
    if (empty($_POST["service_type"])) {
        $errors[] = "Service type is required.";
    } else {
        $service_type = $_POST["service_type"];
    }

    // Display errors or submitted data
    if (!empty($errors)) {
        echo "<h3>Form Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul><br><a href='javascript:history.back()'>Go Back</a>";
    } else {
        echo "<h3>Submitted Data:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Address: " . $address . "<br>";
        echo "Date: " . $date . "<br>";
        echo "Comment: " . $comment . "<br>";
        echo "Service Type: " . $service_type . "<br>";
    }
}
?>
