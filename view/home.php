<!-- <div class="container"> -->
    <div class="card">
        <img src="<?=$product['image_path']?>" alt="<?=$product['name']?>" width=35% style="align:center;"/>
        <span class="title"><?=$product['name'];?></span>
        <form class="form" method="get" action="/products">
            <div class="group">
                <input value="<?=$product['id'];?>" name="id" type="text" style="display:none;">
            </div>
            <button style="padding: 15px 25px 15px 25px;" type="submit">Discover our latest bike!</button>
        </form>
    </div>
<!-- </div> -->