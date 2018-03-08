<?php
	session_start();
	# remove all session variables
	session_unset();
	# destroy the session
	session_destroy();
	$_SESSION['Authenticated']=false;

?>

<!DOCTYPE html>
<html>
<body>
<style>
h1 {
 font-family: Arial;
 text-align: center;
}
</style>
<h1>Here is the Login Page</h1>

<center>
<form action="login2.php" method="post">
<fieldset style="width:180px">
	<input type="text" name="ac" placeholder="Account" required>
	<br>
	<input type="password" name="pw" placeholder="Password" required>
	<br>
	<input type="submit" value="Log in" required> 
</fieldset>
</form>

<p>沒有帳號？</p>
<a href="./register.php">註冊</a>

</center>

</body>
</html>
