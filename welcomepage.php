<?php
session_start();
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:signupform.php');
}
?>
<html>
<head>
<title>Welcome page</title>
</head>
<body>
	
	<center>
	<h2>Welcome page
	</h2>
	<form action = "welcomepage.php" method = "post"><input type = "submit" name="logout" value = "Logout" ></form>
	</center>
</body>
</html>