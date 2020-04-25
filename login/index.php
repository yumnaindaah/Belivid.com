<!DOCTYPE html>
<html>
<head>
	<title>Login to BELIVID.com</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<h2>WELCOME to BELIVID-19</h2>

<form action="proses_login.php" method="post">
  <div class="imgcontainer">
    <img src="unnamed.png" height="70" width="70" style="border-radius: 50%;">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="btnlogin">Login</button>
    <input type="checkbox" checked="checked"><span>Ingat Saya</span>
  </div>

  <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Lupa <a href="#">password?</a></span>
  </div> -->
</form>

</body>
</html>
