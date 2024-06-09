<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="survey.php">
  <label for="age">Age:</label>
  <input type="number" id="age" name="age" required><br>
  <label for="gender">Gender:</label>
  <select id="gender" name="gender" required>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select><br>
  <input type="submit" value="Submit Survey">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    echo "Age: $age<br>";
    echo "Gender: $gender<br>";
}
?>

</body>
</html>