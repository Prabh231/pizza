<?php include "templates/header.php"; ?>
<main>
<section class="order-container">
    <h2>Place Your Pizza Order</h2>
    <form action="process_order.php" method="POST">
        <label>Full Name: </label>
        <input type="text" name="customer_name" required>
        <label>Email: </label>
        <input type="email" name="email"required>
        <label>Phone: </label>
        <input type="tel" name="phone" required>
        <label>Pizza Size:</label>
        <select name="pizza_size" required>
            <option value="">Select Size</option>
            <option>Small</option>
            <option>Medium</option>
            <option>Large</option>
        </select>
        <label>Pizza Type:</label>
        <input type="radio" name="pizza_type" value="Veggie" required>Veggie
        <input type="radio" name="pizza_type" value="Pepperoni">Pepperoni
        <label>Toppings:</label>
        <input type="checkbox" name="toppings[]" value="Cheese">Extra Cheese
        <input type="checkbox" name="toppings[]" value="Mushroom">Mushroom
        <input type="checkbox" name="toppings[]" value="Olives">Olives
        <label>Quantity:</label>
        <input type="number" name="quantity" min="1"required>
        <label>Delivery Address:</label>
        <textarea name="delivery_addressaddress" required></textarea>
        <button type="submit">Place Order</button>
    </form>
    </section>
</main>
<?php include "templates/footer.php"; ?>