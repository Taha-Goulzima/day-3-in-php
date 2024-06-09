<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="register.php">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br>
  <input type="submit" value="Register">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // Here you would typically hash the password and save the user data to a database
    echo "Registration successful!<br>";
    echo "Username: $username<br>";
    echo "Email: $email<br>";
}
?>

</body>
</html>
