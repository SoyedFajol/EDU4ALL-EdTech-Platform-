<?php
    session_start();
    if (!isset($_COOKIE['name'], $_COOKIE['password'])) {
        $_COOKIE['name'] = "";
        $_COOKIE['password'] = "";
    }
?>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="../assets/style.css" />
</head>
<body>
<form method="POST" action="../controllers/signupCheck.php">
<div class="box">
<h1>EDU4ALL</h1>

<input type="text" name="name" id="name" placeholder="Name" value="soyed" onFocus="field_focus(this, 'name');" onblur="field_blur(this, 'name');" class="name" /><br>
  
<input type="text" name="email" id="email" placeholder="Email" value="soyed@gmail.com" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="name" /><br>

<input type="password" name="password" id="password" placeholder="Password" onFocus="field_focus(this, 'password');" onblur="field_blur(this, 'password');" class="name" /><br>

<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" onFocus="field_focus(this, 'confirmPassword');" onblur="field_blur(this, 'confirmPassword');" class="name" /><br>

<label for="dob"></label>
<input type="text" name="dob" id="dob" placeholder="YYYY-MM-DD" value="2000-01-22" onFocus="field_focus(this, 'dob');" onblur="field_blur(this, 'dob');" class="name" /><br>

<label for="gender">Gender:</label>
<select name="gender" id="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
</select><br>
  
<label for="userType">User Type:</label>
<select name="userType" id="userType">
    <option value="Admin">Admin</option>
    <option value="User">User</option>
    <option value="Trainer">Trainer</option>
</select><br>

<input type="submit" class="btn" name="Submit" value="Submit" onclick="signValidation()">
<button type="button" class="btn2" onclick="window.location.href='login.php';">Login</button> 

</div>

</form>


<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
<script src="../assets/authValid.js"></script>
</body>
</html>
