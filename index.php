<?php
// Include database connection
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <h1>Welcome to Travel Booking</h1>
            <p>Explore the world with our amazing travel packages.</p>
            <a href="destinations.php" class="btn">View Destinations</a>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
