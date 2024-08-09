<?php
include 'db_connect.php';

// Fetch activities from database
$sql = "SELECT * FROM activities";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Activities Section -->
    <section class="activities-section">
        <div class="container">
            <h2>Our Activities</h2>
            <div class="activity-list">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='activity'>
                                <img src='".$row["image_url"]."' alt='".$row["name"]."'>
                                <h3>".$row["name"]."</h3>
                                <p>".$row["description"]."</p>
                                <p>Price: $".$row["price"]."</p>
                                <a href='book.php?activity_id=".$row["activity_id"]."' class='btn'>Book Now</a>
                              </div>";
                    }
                } else {
                    echo "<p>No activities found.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
