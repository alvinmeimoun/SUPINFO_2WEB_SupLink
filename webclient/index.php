<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VCard Manager</title>
<script type="text/javascript" src="index.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>

<div id="wrapper">
<header>
	<p id="title_text">VCard Manager</p>
    
    <div id="header_buttons">
        <p class="header_text" style="margin-right:15px;" onClick="showLogin()">Login</p>
        <p class="header_text" onClick="showRegister()">Register</p>
    </div>
</header>

<div id="form_wrapper">
<div id="div_login">
	<form action="controller/login.php" method="post">
     <p>Username : <input type="text" name="username" /></p>
     <p>Password : <input type="password" name="passw" /></p>
     <p><input type="submit" value="Submit"></p>
    </form>
</div>

<div id="div_register">
    <form action="controller/register.php" method="post">
     <p>E-mail : <input type="email" name="email" /></p>
     <p>Username : <input type="text" name="username" /></p>
     <p>Password : <input type="password" name="passw" /></p>
     <p>Confirm password : <input type="password" name="passwc" /></p>
     <p><input type="submit" value="Submit"></p>
    </form>
</div>
</div>

</div>
</body>
</html>