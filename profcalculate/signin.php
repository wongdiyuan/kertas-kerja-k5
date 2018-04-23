<?php
include('config.php')
?>

<html>
<head>
<title>Sign In</title>
<meta charset="utf-8">
</head>
<body>
<form action="pros_signin.php" method="post">

<center>
<h1>WELCOME TO Prof.Calculate</h1>
<h4>Please fill your Username and Password</h4>


<table width="400" border="1">
<tr>
<th scope="col">Username :</th>
<th scope="col"><div align="left">
<input type="text" name="username" size="20"/>
</div>
</th>
</tr>

<tr>
<th scope="col">Password :</th>
<th scope="col"><div align="left">
<input  type="password" name="password" size="20"/>
</div>
</th>
</tr>
</table>

<a href="signup.php">Create a new one ?</a>
<button type="submit">Sign In</button>


</center>
</form>
</body>
</html>
