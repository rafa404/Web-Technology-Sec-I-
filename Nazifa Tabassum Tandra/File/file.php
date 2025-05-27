<?php
session_start();
$_SESSION['user'] = "Rahi";
include 'cookie.php'; 
$username = isset($_SESSION['user']) ? $_SESSION['user'] : "Guest";
?>

<!DOCTYPE html>
<html>
<head>
    <title>House Shifting Policies</title>
</head>
<body>

<h1>House Shifting Policies</h1>
<p>Hello, <strong><?php echo htmlspecialchars($username); ?></strong></p>

<?php
if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = true;
    echo "<p>This is your first visit in this session.</p>";
} else {
    echo "<p>Welcome back to our service. You have already visited this page in this session.</p>";
}
?>

<p>
    <strong>Policy 1:</strong> All bookings must be made at least 3 days in advance.<br>
    <strong>Policy 2:</strong> Cancellations within 24 hours are non-refundable.<br>
    <strong>Policy 3:</strong> The customer must be present at both the pickup and drop-off locations.<br>
    <strong>Policy 4:</strong> Damage claims must be reported within 24 hours of delivery.<br>
</p>

</body>
</html>
