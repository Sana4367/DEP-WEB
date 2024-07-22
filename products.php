<?php include 'include/header.php'; ?>

<section class="intro">
    <h1>Our Products</h1>
</section>

<section class="featured-section">
    <h2>Featured Products</h2>
    <div class="products">
        <div class="product">
            <img src="images/product1.jpg" alt="Product 1">
            <h3>Product 1</h3>
            <p>$10.00</p>
            <p>Short description of Product 1</p>
            <button onclick="addToCart(1)">Add to Cart</button>
            <a href="single_product.php?id=1">View Details</a>
        </div>
        <div class="product">
            <img src="images/product2.jpg" alt="Product 2">
            <h3>Product 2</h3>
            <p>$20.00</p>
            <p>Short description of Product 2</p>
            <button onclick="addToCart(2)">Add to Cart</button>
            <a href="single_product.php?id=2">View Details</a>
        </div>
        <div class="product">
            <img src="images/monsoon2.png" alt="Product 3">
            <h3>Product 3</h3>
            <p>$30.00</p>
            <p>Short description of Product 3</p>
            <button onclick="addToCart(3)">Add to Cart</button>
            <a href="single_product.php?id=3">View Details</a>
        </div>
        <div class="product">
            <img src="images/product4.jpg" alt="Product 4">
            <h3>Product 4</h3>
            <p>$40.00</p>
            <p>Short description of Product 4</p>
            <button onclick="addToCart(4)">Add to Cart</button>
            <a href="single_product.php?id=4">View Details</a>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>
