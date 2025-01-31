<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Website - Properties</title>
    <link rel="stylesheet" type="text/css" href="css./styles.css"> 
</head>
<body>
<?php include 'header.php'; ?>

    <h2 style="margin-left:50px;">ALL PROPERTIES</h2>

<div class="properties-listing spacer">

    <!-- properties -->
    <?php
    include_once "connection.php";

    $query = "SELECT * FROM properties";
    $result = mysqli_query($con, $query);
        
    if(!$result){
        echo "<p>Error Found: " . mysqli_error($con) . "</p>";
    } else {
        while($property_result = mysqli_fetch_assoc($result)){
            $id = $property_result['property_id'];
            $property_title = $property_result['property_title'];
            $delivery_type = $property_result['delivery_type'];
            $availablity = $property_result['availablity'];
            $price = $property_result['price'];
            $property_img = $property_result['property_img'];
            $property_address = $property_result['property_address'];
            $bed_room = $property_result['bed_room'];
            $liv_room = $property_result['liv_room'];
            $parking = $property_result['parking'];
            $kitchen = $property_result['kitchen'];
            $utility = $property_result['utility'];
            $agent_name = $property_result['agent_name']; 
            $Agent_phoneNo = $property_result['Agent_phoneNo'];
    ?>
    
    <div class="owl-item active center" style="width: 350px; margin-right: 10px; height:500px">
        <div class="slider-card" style="width:370px; height: 470px;">
            <div class="d-flex justify-content-center align-items-center mb-4">
            <img src="<?php echo 'img/' . $property_img; ?>" alt="properties">
            </div>

            <?php if($availablity == 0){ ?>
                <p class="text-center p-2">Available</p>
            <?php } else { ?>
                <p class="text-center p-2">Not Available</p>
            <?php } ?>

            <h4 class="mb-0 text-center"><?php echo $property_title; ?></h4>
            <p style="font-weight: 900" class="text-center p-2">Location: <?php echo $property_address; ?></p>
            <p class="text-center p-2"><strong>Agent Name:</strong> <?php echo $agent_name; ?></p>
            <p class="text-center p-2"><strong>Agent Phone:</strong> <?php echo $Agent_phoneNo; ?></p>
            <p class="text-center p-2">Price: KSH <?php echo $price; ?></p>
            <p class="text-center p-2">Delivery Type: <?php echo $delivery_type; ?></p>
            <p class="text-center p-2">Utilities: <?php echo $utility; ?></p>
            <div class="listing-detail">
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">B: <?php echo $bed_room; ?></span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">LR: <?php echo $liv_room; ?></span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">P: <?php echo $parking; ?></span>
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">K: <?php echo $kitchen; ?></span>
            </div>
        </div>
    </div>

    <?php 
        }
    }
    mysqli_close($con);
    ?>

</div>

<div>
    <?php include 'footer.php'; ?>
</div>

</body>
</html>
