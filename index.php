<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Website</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css./styles.css">
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>
<body>
    <?php include 'header.php'; ?>

    <section id="company-name">
        <div class="container">
            <h1>INNER HOME</h1>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to our real estate website. We are committed to providing you with the best property options that meet your needs. Our team of experts works tirelessly to ensure that you find the perfect home or investment property. With a focus on quality and customer satisfaction, we aim to make your real estate experience seamless and enjoyable.</p>
            <p>Our website features a wide range of properties including residential, commercial, and investment options. We strive to keep our listings up-to-date and offer detailed information to help you make informed decisions.</p>
            <p>Thank you for choosing us. If you have any questions or need assistance, please do not hesitate to contact us.</p>
        </div>
    </section>

    <h2 style="margin-left:50px;">Featured Properties</h2>
    <a href="properties.php" style="color: #ff7f00;text-decoration: none;font-weight: bold;padding: 10px 20px; 
    display: flex;align-items: center;border-radius: 5px;">View All Listings</a>
    <div class="properties-listing spacer">

        <!-- Owl Carousel wrapper -->
        <div class="owl-carousel owl-theme">
            <?php
            include_once "connection.php";

            $query = "SELECT * FROM properties";
            $result = mysqli_query($con, $query);
            
            if(!$result){
                echo "Error Found!!!";
            }
            
            while($property_result = mysqli_fetch_assoc($result)){
                $id = $property_result['property_id'];
                $property_title = $property_result['property_title'];
                $delivery_type = $property_result['delivery_type'];
                $property_address = $property_result['property_address'];
                $availablity = $property_result['availablity'];
                $price = $property_result['price'];
                $property_img = $property_result['property_img'];
            ?>
            
            <div class="slider-card" style="height: 350px;">
                <div class="property-image">
                <img src="<?php echo 'img/' . $property_img; ?>" alt="properties">
                </div>
                <div class="property-details">
                    <?php if($availablity == 0){ ?>
                        <p class="text-center p-2">Available</p> 
                    <?php } else { ?>
                        <p class="text-center p-2">Not Available</p>
                    <?php } ?>

                    <h4 class="text-center"><?php echo $property_title; ?></h4>
                    <p class="text-center">Location: <?php echo $property_address; ?></p>
                    <p class="text-center">Price: KSH <?php echo $price; ?></p>
                    <p class="text-center">Delivery Type: <?php echo $delivery_type; ?></p>
                </div>
            </div>
            
            <?php } ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 2,
            nav: true,
            autoplay: true,          
            autoplayTimeout: 2000,  
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

</body>
</html>
