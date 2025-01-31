<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Website</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navigationbar">
            <div class="navbar-container">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt="Company Logo"></a>
                </div>
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li class="dropdown">
                        <a href="properties.php" class="dropbtn"><i class="fa fa-building"></i> Properties 
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="houses_for_sale.php">Properties for Sale</a>
                            <a href="houses_for_rent.php">Properties for Rent</a>
                        </div>
                    </li>
                    <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact</a></li>
                    <li><a href="login.php"><i class="fa fa-user-shield"></i> Admin</a></li>
                    <!-- <li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li> -->
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
