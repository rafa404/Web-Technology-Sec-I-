<?php
$errors = [];
$adminId = $adminName = $gender = $email = $phone = "";

function addError(&$errors, $field, $message) {
    $errors[$field] = $message;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["adminId"]) || !ctype_alnum($_POST["adminId"]) || strlen($_POST["adminId"]) < 3) {
        addError($errors, 'adminId', "Admin ID must be at least 3 alphanumeric characters.");
    } else {
        $adminId = $_POST["adminId"];
    }

    if (empty($_POST["adminName"]) || !ctype_alpha(str_replace(' ', '', $_POST["adminName"])) || strlen($_POST["adminName"]) < 2) {
        addError($errors, 'adminName', "Name must contain only letters and be at least 2 characters.");
    } else {
        $adminName = $_POST["adminName"];
    }

    if (empty($_POST["gender"]) || !in_array($_POST["gender"], ['Male', 'Female'])) {
        addError($errors, 'gender', "Please select a valid gender.");
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        addError($errors, 'email', "A valid email is required.");
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["phone"]) || !is_numeric($_POST["phone"]) || strlen($_POST["phone"]) < 10 || strlen($_POST["phone"]) > 15) {
        addError($errors, 'phone', "Phone number must be numeric and between 10 to 15 digits.");
    } else {
        $phone = $_POST["phone"];
    }


//New Edit;

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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2 style="text-align: center;">Admin Registration Form</h2>


<?php if ($_SERVER["REQUEST_METHOD"] === "POST" && count($errors) > 0): ?>
    <p style="color:red;">Please fix the following errors:</p>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post" action="" enctype="multipart/form-data">
    <label>Admin ID:</label>
    <input type="text" name="adminId" value="<?php echo htmlspecialchars($adminId); ?>"><br><br>

    <label>Full Name:</label>
    <input type="text" name="adminName" value="<?php echo htmlspecialchars($adminName); ?>"><br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') echo 'checked'; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') echo 'checked'; ?>> Female<br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

    <label>Phone:</label>
    <input type="tel" name="phone" value="<?php echo htmlspecialchars($phone); ?>"><br><br>

 
    
    <label>Upload File:</label>
    <input type="file" name="uploadFile"><br><br>


    <input type="submit" value="Submit">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST" && count($errors) === 0): ?>
    <h2>Submitted Information</h2>
    <p><strong>Admin ID:</strong> <?php echo htmlspecialchars($adminId); ?></p>
    <p><strong>Full Name:</strong> <?php echo htmlspecialchars($adminName); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
    <p><strong>Uploaded File:</strong> <?php echo htmlspecialchars($fileName); ?></p>
<?php endif; ?>

</body>
</html>
