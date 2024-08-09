<?php
include 'db_connect.php';
session_start();

// Handle payment processing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO payments (user_id, amount, payment_method) VALUES ('$user_id', '$amount', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment successful!";
        header('Location: confirmation.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Payment Section -->
    <section class="payment-section">
        <div class="container">
            <h2>Payment Gateway</h2>
            <form action
