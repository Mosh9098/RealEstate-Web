<?php
// session_start();

// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // header("Location: login.php");
    // exit;
// }

include_once "connection.php";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $property_title = $_POST['property_title'];
    $delivery_type = $_POST['delivery_type'];
    $price = $_POST['price'];
    $property_address = $_POST['property_address'];
    $bed_room = $_POST['bed_room'];
    $liv_room = $_POST['liv_room'];
    $parking = $_POST['parking'];
    $kitchen = $_POST['kitchen'];
    $utility = $_POST['utility'];
    $agent_name = $_POST['agent_name'];
    $Agent_phoneNo = $_POST['Agent_phoneNo'];

    // Handle file upload
    $property_img = $_FILES['property_img']['name'];
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["property_img"]["name"]);
    move_uploaded_file($_FILES["property_img"]["tmp_name"], $target_file);

    // Insert into database
    $query = "INSERT INTO properties (property_title, delivery_type, price, property_img, property_address, bed_room, liv_room, parking, kitchen, utility, agent_name, Agent_phoneNo) 
              VALUES ('$property_title', '$delivery_type', '$price', '$property_img', '$property_address', '$bed_room', '$liv_room', '$parking', '$kitchen', '$utility', '$agent_name', '$Agent_phoneNo')";

    if (mysqli_query($con, $query)) {
        echo "Property added successfully! <a href='admin_dashboard.php'>Go back</a>";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>