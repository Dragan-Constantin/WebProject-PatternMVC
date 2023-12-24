<div class="container-item">
    <div class="card-item">
        <img src="<?=$product['image_path']?>" alt="<?=$product['name']?>" width=35% height=35% style="float: left;"/>
        <div class="card-item-data" style="width: auto;">
            <span class="title"><?=$product['name']?></span>
            <p style="text-align: ;"><?=$product['description']?></p>
            <br>
            <div style="display: inline-block; vertical-align: middle;">
                <span class="title" style="text-align: left;">Price: $<?=$product['price']?></span>
                <button style="float: right;"><a href="/order">Order now!</a></button>
            </div>
        </div>
    </div>
</div>