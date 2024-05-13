<?php
    session_start();
    if (!isset($_COOKIE['name'] ,$_COOKIE['password']))
    {
        $_COOKIE['name'] ="";
        $_COOKIE['password']="";
    }
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style.css" />
    
</head>
<body>
<form method="post" action="../controllers/loginCheck.php">
<div class="box">
<h1>EDU4ALL</h1>

<input type="text" name="name" id="name"  placeholder="Name" value="<?php echo $_COOKIE['name'];?> " id="" onFocus="field_focus(this, 'name');" onblur="field_blur(this, 'name');" class="name" />
  
<input type="password" name="password" id="password" placeholder="Password" value="<?php echo $_COOKIE['password'];?> " id="" onFocus="field_focus(this, 'name');" onblur="field_blur(this, 'name');" class="name" />
  
<input type="submit" class="btn" name="Login" value="Login" onclick="loginValidation()">
<button type="button" class="btn2" onclick="window.location.href='signup.php';">Signup</button> 

</div>

</form>


<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
 </main>
<script src="../assets/authValid.js"></script>
</body>
</html>
