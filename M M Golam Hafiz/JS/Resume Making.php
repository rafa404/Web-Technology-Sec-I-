<!DOCTYPE html>
<html>
<head>
    <title>Resume Builder</title>
    <style>
        fieldset {
            width: 50%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid black; 
        }
        legend {
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        .duration-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <h2>Resume Builder</h2>
    <form action="/action_page.php" method="get">
        
        <fieldset>
            <legend>Personal Information</legend>
            <label>Full Name: <input type="text" name="fullname" required></label>
            <label>Email: <input type="email" name="email" required></label>
            <label>Phone: <input type="tel" name="phone" required></label>
            <label>Date of Birth: <input type="date" name="dob" required></label>
            <label>Gender: 
                <select name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </label>
            <label>Address: <input type="text" name="address" required></label>
        </fieldset>
        
        <fieldset>
            <legend>Education</legend>
            <label>Highest Degree: <input type="text" name="degree" required></label>
            <label>Institution: <input type="text" name="institution" required></label>
            <label>Year of Graduation: <input type="number" name="graduation_year" required></label>
        </fieldset>
        
        <fieldset>
            <legend>Work Experience</legend>
            <label>Company Name: <input type="text" name="company"></label>
            <label>Job Title: <input type="text" name="job_title"></label>
            <label>Duration:</label>
            <div class="duration-container">
                <input type="date" name="start_date"> to <input type="date" name="end_date">
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Skills</legend>
            <label>
                <input type="checkbox" name="skills" value="HTML"> HTML
                <input type="checkbox" name="skills" value="CSS"> CSS
                <input type="checkbox" name="skills" value="JavaScript"> JavaScript
                <input type="checkbox" name="skills" value="Python"> Python
                <input type="checkbox" name="skills" value="Java"> Java
            </label>
        </fieldset>
        
        <input type="submit" value="Submit Resume">
        <input type="reset" value="Clear Form">
    </form>
</body>
</html>
