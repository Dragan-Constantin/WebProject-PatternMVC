<h1 style="text-align: center; font-size: 48px;">Our products</h1>
<div class="product-container">
    <?php foreach ($products as $product) {?>
    <div class="product-card">
        <img src="<?php echo $product['image_path']; ?>" alt="<?php echo $product['name']; ?>">
        <hr>
        <div class="product-info">
            <h2><?php echo $product['name']; ?></h2>
            <p>$<?php echo $product['price']; ?></p>
        </div>
        <hr>
        <div class="buttons">
            <a href="/products?id=<?php echo $product['id']; ?>" class="details-btn">More Details</a>
            <a href="/order" class="order-btn">Order</a>
        </div>
    </div>
    <?php }?>
</div>
<br><br>