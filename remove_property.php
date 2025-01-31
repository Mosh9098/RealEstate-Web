<?php
// session_start();
// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     header("Location: login.php");
//     exit;
// }

include_once "connection.php";

// Handle property deletion
if (isset($_POST['delete_property'])) {
    $property_id = $_POST['property_id'];
    
    // Delete property from the database
    $query = "DELETE FROM properties WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $property_id);

    if (mysqli_stmt_execute($stmt)) {
        $message = "Property deleted successfully!";
    } else {
        $message = "Error deleting property: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
}

// Fetch properties
$query = "SELECT * FROM properties";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Property</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<?php include 'admin_nav.php'; ?>

<div class="admin-container">
    <h2>Remove Property</h2>

    <?php if (isset($message)) { echo "<p>$message</p>"; } ?>

    <table border="1">
        <tr>
            <th>Property Title</th>
            <th>Price (KSH)</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['property_title']); ?></td>
            <td><?php echo htmlspecialchars($row['price']); ?></td>
            <td>
                <form method="POST" action="remove_property.php">
                    <input type="hidden" name="property_id" value="<?php echo $row['property_id']; ?>">
                    <button type="submit" name="delete_property" onclick="return confirm('Are you sure you want to delete this property?')">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
