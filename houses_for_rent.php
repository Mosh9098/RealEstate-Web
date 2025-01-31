<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Website - Houses for Rent</title>
    <link rel="stylesheet" type="text/css" href="css./styles.css"> 
</head>
<body>

    <div class="wrapper">
    <?php include 'header.php'; ?>

        <h3>Properties for Rent</h3>
        <div class="properties-listing spacer">
            <?php
            include 'connection.php'; 
            include 'functions.php'; 
            
            $properties = getHousesForRent($con);
            
            foreach ($properties as $property) {
                echo '<div class="owl-item active center" style="width: 350px; margin-right: 10px;">';
                echo '<div class="slider-card" style="width:350px; height: 400px;">';
                echo '<div class="d-flex justify-content-center align-items-center mb-4">';
                echo '<img src="img/' . htmlspecialchars($property['property_img']) . '" alt="properties">';
                echo '</div>';
                echo '<h4 class="mb-0 text-center">' . htmlspecialchars($property['property_title']) . '</h4>';
                echo '<p style="font-weight: 900" class="text-center p-1">Address: ' . htmlspecialchars($property['property_address']) . '</p>';
                echo '<p class="text-center p-2">Price: KSH ' . htmlspecialchars($property['price']) . '</p>';
                echo '<p class="text-center p-2"><strong>Agent Name:</strong> ' . htmlspecialchars($property['agent_name']) . '</p>';
                echo '<p class="text-center p-2"><strong>Agent Phone:</strong> ' . htmlspecialchars($property['Agent_phoneNo']) . '</p>'; 
                echo '</div>';                
                echo '</div>';
            }
            ?>
        </div>
    </div>
    
    <div>
    <?php include 'footer.php'; ?>
    </div>
</body>
</html>
