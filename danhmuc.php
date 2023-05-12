<div class="home-product">
    <div class="grid__row">
        <?php
        $sql = "select * from products";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            $name = $row['productName'];
            $price = $row['productPrice'];
            $img = $row['productImage'];
        ?>  
        <div class="grid__column-2-4">
            <div class="product home-product-item">
                <div class="home-product-item__img">
                    <a class="product-img" href="#" >
                        <img src="./assets/img/<?php echo $img?>" alt="<?php echo $name ?>" title="<?php echo $name ?>">
                    </a>
                </div>
                <div class="home-product-item__info">
                    <h1>
                        <a href="" class="product_name" title="<?php echo $name ?>">
                        <?php echo $name?>
                        </a>
                    </h1>
                    <div class="product__memory">
                        <div class="product__memory__item item-group active">
                            <strong>128GB</strong>
                        </div>
                        <div class="product__memory__item item-group ">
                            <strong>256GB</strong>
                        </div>
                        <div class="product__memory__item item-group ">
                            <strong>512GB</strong>
                        </div>
                        <div class="product__memory__item item-group ">
                            <strong>1TB</strong>
                        </div>
                    </div>
                    <div class="product_price">
                    <?php echo $price?> <u> đ</u>
                    </div>
                    <div class="product__btn">
                        <a href="" class="btn product__btn-link">THÊM</a>
                        <a href="" class="btn product__btn-link">MUA</a>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        }
        ?>
    </div>
</div>