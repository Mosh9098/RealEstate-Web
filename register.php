<!DOCTYPE html>
<html>
<head>
  <title>REGISTER</title>
  <link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
<form method="post" action="register.php">
  <h1>Account Registration</h1>
  <input type="text" name="f_name" placeholder="Enter Your First Name" required> <br>
  <input type="text" name="l_name" required placeholder="Enter Your Last Name"> <br>
  <input type="email" name="email" required placeholder="Enter Your Email"> <br>
  Male: <input type="radio" name="gender" value="Male" required> 
  Female: <input type="radio" name="gender" value="Female" required> <br>
  <select name="county" required>
    <option value="">Choose County...</option>
    <option value="Nairobi">Nairobi</option>
    <option value="Mombasa">Mombasa</option>
    <option value="Kisumu">Kisumu</option>
  </select><br>
  <input type="date" name="dob" required> <br>
  <input type="password" name="pwd" placeholder="Enter Password" required><br>
  <button name="send">Register</button> <br>
  <a href="login.php">Already registered? Click here to login</a>
</form>
</body>
</html>

<?php
include 'connection.php';

if (isset($_POST['send'])) {
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $county = $_POST['county'];
  $dob = $_POST['dob'];
  $pwd = $_POST['pwd'];

  $sql = "INSERT INTO users (fname, lname, email, gender, county, dob, password) VALUES ('$f_name', '$l_name', '$email', '$gender', '$county', '$dob', '$pwd')";
  $query = mysqli_query($con, $sql);

  if ($query) {
    echo "User registration was successful";
  } else {
    echo "Registration failed. Please consult the admin.";
  }
}
?>
