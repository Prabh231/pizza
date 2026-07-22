CREATE DATABASE pizza_database;

USE pizza_database;

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    pizza_size VARCHAR(50) NOT NULL,
    pizza_type VARCHAR(50) NOT NULL,
    toppings TEXT,
    quantity INT NOT NULL,
    delivery_address TEXT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);