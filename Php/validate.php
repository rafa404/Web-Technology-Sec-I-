<?php
$errors = [];

$adminId = "";
$adminName = "";
$gender = "";
$email = "";
$phone = "";
$fileName="";

function addError(&$errors, $field, $message) {
    $errors[$field] = $message;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_REQUEST["adminId"]) || !ctype_alnum($_REQUEST["adminId"]) || strlen($_REQUEST["adminId"]) < 3) {
        addError($errors, 'adminId', "Admin ID must be at least 3 alphanumeric characters.");
    } else {
        $adminId = $_REQUEST["adminId"];
    }

    // Admin Name: Required, Only letters, At least 2 characters
    if (empty($_REQUEST["adminName"]) || !ctype_alpha(str_replace(' ', '', $_REQUEST["adminName"])) || strlen($_REQUEST["adminName"]) < 2) {
        addError($errors, 'adminName', "Name must contain only letters and be at least 2 characters.");
    } else {
        $adminName = $_REQUEST["adminName"];
    }

    if (empty($_REQUEST["gender"]) || !in_array($_REQUEST["gender"], ['Male', 'Female', 'Other'])) {
        addError($errors, 'gender', "Please select a valid gender.");
    } else {
        $gender = $_REQUEST["gender"];
    }

    if (empty($_REQUEST["email"]) || !filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
        addError($errors, 'email', "A valid email is required.");
    } else {
        $email = $_REQUEST["email"];
    }

    if (empty($_REQUEST["phone"]) || !is_numeric($_REQUEST["phone"]) || strlen($_REQUEST["phone"]) < 10 || strlen($_REQUEST["phone"]) > 15) {
        addError($errors, 'phone', "Phone number must be numeric and between 10 to 15 digits.");
    } else {
        $phone = $_REQUEST["phone"];
    }

    
    //New Edit

    $uploadDirectory = "uploads/";
    $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
    $maxFileSize = 2 * 1024 * 1024; // 2MB

    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] === 0) {
        $fileTmpPath = $_FILES['uploadFile']['tmp_name'];
        $fileName = basename($_FILES['uploadFile']['name']);
        $fileSize = $_FILES['uploadFile']['size'];
        $fileType = $_FILES['uploadFile']['type'];

        if (!in_array($fileType, $allowedTypes)) {
            addError($errors, 'uploadFile', "Only JPG, PNG, and PDF files are allowed.");
        } elseif ($fileSize > $maxFileSize) {
            addError($errors, 'uploadFile', "File size must be less than 2MB.");
        } else {
            $targetFilePath = $uploadDirectory . $fileName;

            if (!file_exists($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }

            if (!move_uploaded_file($fileTmpPath, $targetFilePath)) {
                addError($errors, 'uploadFile', "Failed to upload the file.");
            }
        }
    } else {
        addError($errors, 'uploadFile', "Please upload a file.");
    }
}
?>

<html>
<head>
  <title>Submitted Information</title>
</head>
<body>
  <h2>Submitted Information</h2>

  <?php if (count($errors) > 0): ?>
    <p style="color:red;">Please fix the following errors:</p>
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?php echo htmlspecialchars($error); ?></li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <p><strong>Admin ID:</strong> <?php echo htmlspecialchars($adminId); ?></p>
    <p><strong>Full Name:</strong> <?php echo htmlspecialchars($adminName); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
  <?php endif; ?>

</body>
</html>
