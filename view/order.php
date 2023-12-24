<div class="container">
    <div class="card">
        <span class="title">What would you like to order?</span>
        <form class="form" method="post" action="">
            <div class="group-select">
                <p class="select-label" for="item">Select item</p>
                <select placeholder="" type="text" required="">
                <option value="">-- Choose item --</option>
                <?php foreach ($products as $product) {?>
                    <option value="<?=$product['id']?>"><?=$product['name']?></option>
                    <?php }?>
                </select>
            </div>
            <div class="group">
                <input placeholder="" type="text" required="">
                <label for="name">Nom</label>
            </div>
            <div class="group">
                <input placeholder="" type="text" required="">
                <label for="name">Prénom</label>
            </div>
            <div class="group">
                <input placeholder="" type="email" id="email" name="email" required="">
                <label for="email">Email</label>
            </div>
            <div class="group">
                <textarea placeholder="" id="comment" name="Message" rows="5" maxlength="255" required=""></textarea>
                <label for="comment">Message (max. 250)</label>
            </div>
            <button type="submit">Send your order</button>
        </form>
    </div>
</div>
