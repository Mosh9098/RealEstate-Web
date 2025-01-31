<?php
session_start();
if (!$_SESSION['id']) {
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<?php include 'admin_nav.php'; ?>

    <div class="admin-container">
        <h2>Add New Property</h2>
        <form action="add_property.php" method="POST" enctype="multipart/form-data">
            <label for="property_title">Property Title:</label>
            <input type="text" id="property_title" name="property_title" required>
            
            <label for="delivery_type">Delivery Type:</label>
            <input type="text" id="delivery_type" name="delivery_type" required>
            
            <label for="price">Price (KSH):</label>
            <input type="number" id="price" name="price" required>
            
            <label for="property_img">Property Image:</label>
            <input type="file" id="property_img" name="property_img" required>
            
            <label for="property_address">Property Address:</label>
            <input type="text" id="property_address" name="property_address" required>
            
            <label for="bed_room">Bedrooms:</label>
            <input type="number" id="bed_room" name="bed_room" required>
            
            <label for="liv_room">Living Rooms:</label>
            <input type="number" id="liv_room" name="liv_room" required>
            
            <label for="parking">Parking:</label>
            <input type="number" id="parking" name="parking" required>
            
            <label for="kitchen">Kitchen:</label>
            <input type="number" id="kitchen" name="kitchen" required>
            
            <label for="utility">Utilities:</label>
            <input type="text" id="utility" name="utility" required>
            
            <label for="agent_name">Agent Name:</label>
            <input type="text" id="agent_name" name="agent_name" required>
            
            <label for="Agent_phoneNo">Agent Phone:</label>
            <input type="text" id="Agent_phoneNo" name="Agent_phoneNo" required>
            
            <button type="submit">Add Property</button>
        </form>
    </div>
</body>
</html>