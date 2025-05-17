<?php
$target_dir = "uploads/";
$uploadOk = 1;

$target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$name = $_POST["name"];
$address = $_POST["address"];
$dob = $_POST["date"];
$phone = $_POST["phone"];

$check = getimagesize($_FILES["profile_picture"]["tmp_name"]);

if ($check === false)
{
    echo "File is not an image.";
    $uploadOk = 0;
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["profile_picture"]["size"] > 2 * 1024 * 1024) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if (!in_array($imageFileType, ["jpg", "jpeg", "png"])) {
    echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars(basename($_FILES["profile_picture"]["name"])). " has been uploaded.<br>";
        echo "<strong>Name:</strong> " . htmlspecialchars($name) . "<br>";
        echo "<strong>Address:</strong> " . nl2br(htmlspecialchars($address)) . "<br>";
        echo "<strong>Date of Birth:</strong> " . htmlspecialchars($dob) . "<br>";
        echo "<strong>Phone Number:</strong> " . htmlspecialchars($phone) . "<br>";
        echo "<img src='$target_file' alt='Profile Picture' style='max-width:200px; margin-top:10px;'>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
