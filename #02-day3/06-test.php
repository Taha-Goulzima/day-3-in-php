<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="subscribe.php">
  <label for="email">Subscribe to our newsletter:</label>
  <input type="email" id="email" name="email" required><br>
  <input type="submit" value="Subscribe">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    echo "You have successfully subscribed with email: $email";
}
?>

</body>
</html>
