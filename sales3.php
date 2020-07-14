<?php require 'header.php'; 
?>
<body>
            <div class="test_container"></div>
           <?php
           $sales_hit = get_sales_hit_third();
            foreach ($sales_hit as $sale_hit): ?>
            <h2><a href="#"><?php echo $sale_hit["title"] ?></a></h2>
            <div class="img_for">
                <a href="#">
                <img src="<?php echo $sale_hit["img"] ?>" />
                </a>
            </div>
            <p class = "text">
                <?php echo $sale_hit["text"] ?>
            </p>
            <div class="about_shit">
                
                <h2><s>$3500</s></h2>
                <p><strong><?php echo $sale_hit["price"] ?>$</strong></p>
            </div>
             <?php endforeach; ?>
</body>

</html>