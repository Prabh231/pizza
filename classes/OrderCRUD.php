<?php
/**
   * OrderCRUD Class
   * This class handles the actual SQL data logic, It DOES NOT know how to connect to a database
   */
require_once 'Database.php';
class OrderCRUD {
    // this class is responsible for installing pizza orders into database
    private PDO $conn;
    private string $table_name = "orders";
    public function __construct(Database $db) {
        $this->conn = $db->connect();
    }
    // replacing placeholder with actual value entered in form
    public function createOrder(string $customer_name,string $email,string $phone,string $pizza_size,string $pizza_type,string $toppings,int $quantity,string $delivery_address): bool {
        $query = "INSERT INTO " . $this->table_name . "
        (customer_name, email, phone, pizza_size, pizza_type, toppings, quantity, delivery_address)
        VALUES
        (:customer_name, :email, :phone, :pizza_size, :pizza_type, :toppings, :quantity, :delivery_address)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':customer_name', $customer_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':pizza_size', $pizza_size);
        $stmt->bindParam(':pizza_type', $pizza_type);
        $stmt->bindParam(':toppings', $toppings);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':delivery_address', $delivery_address);
        // if everything went good
        if ($stmt->execute()) {
            return true;
        }
        //if something went wrong
        throw new Exception("Unable to save the pizza order.");
    }
}
?>