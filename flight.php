<?php
include 'db_connect.php';

// Fetch flights from database
$sql = "SELECT * FROM flights";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Flights Section -->
    <section class="flights-section">
        <div class="container">
            <h2>Available Flights</h2>
            <div class="flight-list">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='flight'>
                                <h3>".$row["flight_name"]."</h3>
                                <p>From: ".$row["departure"]." To: ".$row["destination"]."</p>
                                <p>Date: ".$row["flight_date"]."</p>
                                <p>Price: $".$row["price"]."</p>
                                <a href='book.php?flight_id=".$row["flight_id"]."' class='btn'>Book Now</a>
                              </div>";
                    }
                } else {
                    echo "<p>No flights available.</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
