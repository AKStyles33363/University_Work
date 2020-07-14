<?php require 'header.php'; ?>
        <div class="left_panel">
            <div>
                <div class="category_item">
                    <input type="checkbox" id="hd-1" class="hide" />
                    <label for="hd-1">Microchips</label>
                    <div>
                        Electronic
                    </div>
                </div>
                <div class="category_item">
                    <input type="checkbox" id="hd-2" class="hide" />
                    <label for="hd-2">Phones</label>
                    <div>
                        Game
                    </div>
                </div>
                <div class="category_item">
                    <input type="checkbox" id="hd-3" class="hide" />
                    <label for="hd-3">Games</label>
                    <div>
                        <a href="games.php">Communication</a>
                    </div>
                </div>
                <div class="category_item">
                    <input type="checkbox" id="hd-4" class="hide" />
                    <label for="hd-4">Abuse</label>
                    <div>
                        Link
                    </div>
                </div>
                <div class="category_item">
                    <input type="checkbox" id="hd-5" class="hide" />
                    <label for="hd-5">Software</label>
                    <div>
                        Communication
                    </div>
                </div>
            </div>
        </div>   
        <div class="right_panel">
            <div>
                <h2 class="vip">VIP Computers</h2>

                <div align="center" class="my-content my-display-container">
                    <img class="mySlides" src="images/IMG_2888.PNG" style="width:600px" alt="">
                    <img class="mySlides" src="images/IMG_2889.PNG" style="width:600px" alt="">
                    <img class="mySlides" src="images/IMG_2890.PNG" style="width:600px" alt="">
                    <img class="mySlides" src="images/IMG_2891.PNG" style="width:600px" alt="">

                    <button class="btn btn-outline-dark" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="btn btn-outline-dark" onclick="plusDivs(1)">&#10095;</button>
                </div>
            </div>
            
            <div class="salse_hit_megacontainer">
                <h3 class="vip">Sales hit</h3>
                <div class="sales_hit_container">
                    <div class="sales_hit_item">
                        <a href="sales2.php">
                        <img src="images/n1.jpg" alt="" />
                        <p>Dualshok</p>
                        <p>$60</p>
                    </div>
                    <div class="sales_hit_item">
                        <a href="sales4.php">
                        <img src="images/n2.jpg" alt="" />
                        <p>USHY</p>
                        <p>$99</p>
                    </div>
                    <div class="sales_hit_item">
                        <a href="sales3.php">
                        <img src="images/n3.jpg" alt="" />
                        <p>bullshit</p>
                        <p>$3</p>
                    </div>
                    <div class="sales_hit_item">
                        <a href="sales.php">
                            <img src="images/n4.jpg" alt="" />
                            <p>wet dream</p>
                            <p>$2000</p>
                        </a>
                    </div>
                </div>
            </div>
            
            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) { slideIndex = 1 }
                    if (n < 1) { slideIndex = x.length }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex - 1].style.display = "block";
                }
            </script>

        </div>
    <?php require 'footer.php'; ?>

</body>

</html>