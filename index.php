<?php include "templates/header.php"; ?>
<section class="order-container">
    <h2>Place Your Pizza Order</h2>
    <form action="process_order.php" method="POST">
        <p>
            <label for="customer_name">Full Name: </label>
            <input type="text" name="customer_name" required>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="phone">Phone: </label>
            <input type="tel" name="phone" id="phone" required>
        </p>
        <p>
        <label for="pizza_size">Pizza Size: </label>
            <select id="pizza_size" name="pizza_size" required>
                <option value="">Select Size</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
            </select>
        </p>
        <fieldset>
            <legend>Pizza Type:</legend>
                <input type="radio" id="veggie" name="pizza_type" value="Veggie" required>
                <label for="veggie">Veggie</label>
                <input type="radio" id="pepperoni" name="pizza_type" value="Pepperoni">
                <label for="pepperoni">Pepperoni</label>
        </fieldset>
        <fieldset>
            <legend>Toppings:</legend>
            <input type="checkbox" id="cheese" name="toppings[]" value="Cheese">
            <label for="cheese">Extra Cheese</label>
            <input type="checkbox" id="mushroom" name="toppings[]" value="Mushroom">
            <label for="mushroom">Mushroom</label>
            <input type="checkbox" id="olives" name="toppings[]" value="Olives">
            <label for="olives">Olives</label>
        </fieldset>
        <p>
            <label for="quantity">Quantity: </label>
            <input type="number" id="quantity" name="quantity" min="1" required>
        </p>
        <p>
            <label for="delivery_address">Delivery Address:</label>
            <textarea id="delivery_address" name="delivery_address" required></textarea>
        </p>
        <button type="submit">Place Order</button>
    </form>
    </section>
</main>
<?php include "templates/footer.php"; ?>