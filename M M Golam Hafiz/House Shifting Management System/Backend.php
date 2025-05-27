<?php
$conn = new mysqli("localhost", "root", "", "house_shifting_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Full_Name = $_POST['fullname'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$DOB = $_POST['dob'];
$Gender = $_POST['gender'];
$Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$Present_Address = $_POST['present_address'];
$New_Address = $_POST['new_address'];
$Move_Date = $_POST['move_date'];
$Residence_Type = $_POST['residence_type'];
$Rooms = $_POST['rooms'];
$Agree_Terms = isset($_POST['agree_terms']) ? 1 : 0;


$sql = "INSERT INTO registration (
    Full_Name, Phone, Email, DOB, Gender, Password, Present_Address, New_Address, Move_Date, Residence_Type, Rooms, Agree_Terms
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssii", $Full_Name, $Phone, $Email, $DOB, $Gender, $Password, $Present_Address, $New_Address, $Move_Date, $Residence_Type, $Rooms, $Agree_Terms);

if ($stmt->execute()) {
    echo "<h2>Registration Successful!</h2>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
