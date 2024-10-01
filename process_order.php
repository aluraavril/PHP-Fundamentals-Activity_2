<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $prices = [
        'Burger' => 50,
        'Fries' => 75,
        'Steak' => 150
    ];

    $unit_price = $prices[$order];
    $total_price = $unit_price * $quantity;

    if ($cash < $total_price) {
        echo "<p class='error'>Sorry, balance not enough.</p>";
    } else {
        $change = $cash - $total_price;
        $date = date("Y-m-d H:i:s");

        echo "<div class='receipt'>";
        echo "<h2>RECEIPT</h2>";
        echo "<p><strong>Total Price:</strong> $total_price</p>";
        echo "<p><strong>You Paid:</strong> $cash</p>";
        echo "<p><strong>Change:</strong> $change</p>";
        echo "<p><strong>Date & Time:</strong> $date</p>";
        echo "</div>";
    }
}
?>
