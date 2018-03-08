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

<center>
<h1>Here is the Register Page</h1>

<form action="check_reg.php" method="post">
<fieldset style="width:370px">
<legend>Register</legend>
    <input type="text"     name="ac" 
            placeholder="Account" 
            required pattern="^\w+$" 
            title="請輸入英文、數字或底線"><br>

    <input type="password" name="pw"     id="pw" 
            placeholder="Password" 
            required pattern="^\w+$" 
            title="請輸入英文、數字或底線"><br>

    <input type="password" name="confpw" id="confpw" 
            placeholder="Confirm Password" 
            required pattern="^\w+$" 
            title="再輸入一次密碼" onkeyup="validatePassword()"><br>

    <input type="text"     name="usrname" 
            placeholder="Name" 
            required pattern="^\w+$" title="請輸入英文、數字或底線"><br>

    <input type="email"    name="email"   
            placeholder="Email" 
            required pattern="^\w+(\.\w+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)+$" 
            title="user@example.com"><br>



    <input type="submit" value="Register"> 
</fieldset>
</form>

<p>已有帳號?</p>
<a href="./index.php">登入</a>

</center>

<script>
var password = document.getElementById("pw");
var confirm_password = document.getElementById("confpw");

function validatePassword(){
    if(password.value == confirm_password.value) {
        confirm_password.setCustomValidity("");
  } else {
      confirm_password.setCustomValidity("Password not Match");
  }
}

</script>


</body>
</html>
