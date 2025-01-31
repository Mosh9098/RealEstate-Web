<?php

function getHousesForSale($con) {
    $query = "SELECT * FROM properties WHERE delivery_type='Sale'";
    $result = mysqli_query($con, $query);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    $properties = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $properties[] = $row;
    }
    
    return $properties;
}


function getHousesForRent($con) {
    $query = "SELECT * FROM properties WHERE delivery_type='Rent'";
    $result = mysqli_query($con, $query);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    $properties = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $properties[] = $row;
    }
    
    return $properties;
}
?>

