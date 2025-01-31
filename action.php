<?php
include 'connection.php';

$username = $_POST['name'];  
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $con->prepare("INSERT INTO messages (username, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $message);

if ($stmt->execute()) {
    header('Location: contact.php?status=success');
} else {
    header('Location: contact.php?status=error');
}

$stmt->close();
$con->close();
?>
