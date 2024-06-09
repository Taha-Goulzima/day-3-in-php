<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="feedback.php">
  <label for="feedback">Your Feedback:</label><br>
  <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = htmlspecialchars($_POST['feedback']);
    echo "Thank you for your feedback:<br>";
    echo nl2br($feedback);
}
?>

</body>
</html>
