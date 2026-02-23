

<?php
include "db.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {

header("Location: HomePage.php");
exit();

} else {
echo "Invalid login.";
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Login</title>

<style>

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial;
}

body {
  min-height: 100vh;
  background: #f3f3f3;

  display: flex;
  justify-content: center;
  align-items: center;

  padding: 16px;
}

.container {
  width: 100%;
  max-width: 360px;

  background: white;
  border-radius: 20px;

  padding: 32px 24px;

  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
}

h2 {
  text-align: center;
  margin-bottom: 28px;
  font-size: 22px;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-size: 13px;
  color: #777;
  margin-bottom: 6px;
}

.input-box {
  position: relative;
}

.input-box input {
  width: 100%;
  padding: 14px 42px 14px 14px;

  border-radius: 10px;
  border: 1px solid #ddd;

  font-size: 14px;
}

.input-box input:focus {
  outline: none;
  border-color: #333;
}

.icon {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);

  font-size: 17px;
  opacity: 0.6;
}

button {
  width: 100%;
  margin-top: 10px;

  padding: 15px;

  border-radius: 12px;
  border: none;

  background: #3f3f3f;
  color: white;

  font-size: 16px;
  font-weight: 600;

  cursor: pointer;
}

button:hover {
  background: #222;
}

.login-link {
  margin-top: 18px;
  text-align: center;
  font-size: 13px;
  color: #666;
}

.login-link a {
  color: #000;
  text-decoration: underline;
  font-weight: 500;
}

@media (min-width: 640px) {
  .container {
    max-width: 400px;
    padding: 40px 32px;
  }

  h2 {
    font-size: 24px;
  }
}
</style>
</head>

<body>

<div class="container">
  <h2>Login</h2>

<form method="POST">

<div class="form-group">
<label>Email address</label>
<div class="input-box">
<input type="email" name="email" placeholder="email@address.com" required>
<span class="icon">✉️</span>
</div>
</div>

<div class="form-group">
<label>Password</label>
<div class="input-box">
<input type="password" name="password" placeholder="••••••••" id="password" required>
<span class="icon" id="toggle">👁</span>
</div>
</div>

<button type="submit">Login</button>
</form>


  <p class="login-link">
    Dont have an account?
    <a href="signup.php">Create Account</a>
  </p>
</div>

<script>
const toggle = document.getElementById("toggle");
const password = document.getElementById("password");

toggle.addEventListener("click", () => {
  password.type =
    password.type === "password" ? "text" : "password";
});
</script>

</body>
</html>
