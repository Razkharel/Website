<?php
include 'db_connect.php';

// Fetch destinations from database
$sql = "SELECT * FROM destinations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Destinations Section -->
    <section class="destinations-section">
        <div class="container">
            <h2>Our Destinations</h2>
            <div class="destination-list">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='destination'>
                                <img src='".$row["image_url"]."' alt='".$row["name"]."'>
                                <h3>".$row["name"]."</h3>
                                <p>".$row["description"]."</p>
                                <p>Price: $".$row["price"]."</p>
                                <a href='book.php?destination_id=".$row["destination_id"]."' class='btn'>Book Now</a>
                              </div>";
                    }
                } else {
                    echo "<p>No destinations found.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
