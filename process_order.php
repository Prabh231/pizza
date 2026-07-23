<?php
require_once 'classes/Database.php';
require_once 'classes/OrderCRUD.php';
include_once 'templates/header.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {header('Location: index.php');exit;}
echo "<section>Pizza Order Processing Status</section>";
try {
    // Collect data from form submission
    $customer_name = trim($_POST['customer_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $pizza_size = $_POST['pizza_size'];
    $pizza_type = $_POST['pizza_type'];
    // Convert  array into a string
    if(isset($_POST['toppings'])) {
        $toppings = implode(", ", $_POST['toppings']);
    } else {
        $toppings = "None";
    }
    $quantity = $_POST['quantity'];
    $delivery_address = trim($_POST['delivery_address']);
    // Create database connection
    $database = new Database();
    // Create CRUD object
    $order = new OrderCRUD($database);
    // Insert order into database
    if($order->createOrder($customer_name,$email,$phone,$pizza_size,$pizza_type,$toppings,$quantity,$delivery_address)) {
        echo "<div class='alert alert-success'> Your pizza order has been received successfully!</div>";
    }
}
catch(PDOException $e) {
    echo "<div class='alert alert-danger'>Database Error: " . htmlspecialchars($e->getMessage()) . "</div>";
}
catch(Exception $e) {
    echo "<div class='alert alert-danger'>Error: " . htmlspecialchars($e->getMessage()) . "</div>";
}
include_once 'templates/footer.php';
?>