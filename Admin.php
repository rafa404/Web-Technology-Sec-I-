<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>Admin Dashboard</h2>
    <form action="admin_backend.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        
        <label>Email:</label>
        <input type="email" name="email"><br><br>
        
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        
        <label>Role:</label>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="moderator">Moderator</option>
            <option value="viewer">Viewer</option>
        </select><br><br>
        
        <input type="submit" value="Save">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
