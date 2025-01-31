<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="css/user.css">
  <script>
    function showPopup(message, type) {
      alert(message);
      if (type === 'success') {
        window.location.href = 'admin_dashboard.php';
      }
    }
  </script>
</head>
<body>
<form action="login.php" method="POST">
  <h1>User Login</h1>
  <input type="text" name="uname" required placeholder="Enter Your User Name"> <br>
  <input type="password" name="pass" required placeholder="Enter Your Password"> <br>
  <input type="submit" name="send" value="Login"> <br>
  <a href="register.php"> If you don't have an account </a>
</form>

<?php
  include 'connection.php';

  if (isset($_POST['send'])) {
    $username = $_POST['uname'];
    $pwd = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE email='$username' AND password='$pwd'";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
      session_start();
      $_SESSION['id'] = $username;
      echo "<script>showPopup('Welcome!', 'success');</script>";
    } else {
      echo "<script>showPopup('Username or password is incorrect!', 'error');</script>";
    }
  }
?>
</body>
</html>
