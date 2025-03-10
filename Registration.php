<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
   
<body style="background-image: url('../images/bghouseshift11.jpg'); background-size: contain; background-position: center; background-repeat: no-repeat; background-attachment: fixed; margin: 0; height: 100vh;">
    
<form action="backend.php">
    <h2>House Shifting Registration Page</h2>
    <h3>Personal Information</h3>
        <div>
        Full Name:  <input type="text">
        </div>

        <br>

        <div>
        Phone Number:  <input type="text">
        </div>
        
        <br>
        
        <div>
        E-mail:  <input type="text">
        </div>
        
        <br>
        
        <div>
        Date of Birth: <input type="date" name="" id="">
        </div>
        
        <br>

        <div>
        Gender:
        Male<input type="radio" name="gender" id="male">  
        Female<input type="radio" name="gender" id="female">
        Other<input type="radio" name="gender" id="other">    
        </div>
        <br>
        <div>
        PASSWORD:  <input type="text">
        </div>

<h3>Adress Details</h3>
Present Adress <br> <textarea name=""  rows="4" cols="40"></textarea>
<br>
New Adress <br> <textarea name="" rows="4" cols="40"></textarea>
<br>
<br>
Preferred Moving Date: <input type="date" name="" id="">
<br>
<h3>Service Details</h3>
Type of Residence: <select name="text">
    <option value="aaprt"> Appartment</option>
    <option value="offi">Office</option>
    <option value="house">House</option>
</select>
<br>
<br>
<div>
Number of Rooms:<input type="number">
</div>
<br>
<div>
  Do you agree to the terms and condition?  <input type="checkbox" name="" id="">
</div>

<br>
<div>
            <input type="submit" value="Save"> 
            <input type="reset" value="Reset Now">
        </div>
</form>
</body>
</html>
