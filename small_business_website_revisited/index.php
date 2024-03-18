<?php
$GLOBALS["page-title"] = "The Richardson’s Traditional Bakery";
$GLOBALS["active-nav"] = "home";

?>
<?php include_once('./php/header.php'); ?>
<?php include_once('./php/nav.php'); ?>
<?php include_once('./php/banner.php'); ?>

            <div class="content">
                <div id="contact">
                    <p>
                        <span id="day">welcome!</span> <br> <span id="openhours">Shop is  open today from  9Am to 8Pm.</span>
                    </p>
                    <a href="contact_page.php" class="button" <?php echo $GLOBALS["active-nav"]=="about"? 'class="active"':'';?>>Come Visit Us</a>
                    <p>Freshly baked goodness awaits you at our bakery.</p>
                </div> <!-- div to wrap button and opening time -->
                <section class="best_products">
                    <h2>
                        Best of us
                    </h2>
                    <ul class="best_items">
                        <li>
                            <figure>
                                <img src="./images/muffin.png" alt="Image of blueberry muffin" width="240">
                                <figcaption>Blueberry muffin</figcaption>  
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="./images/homemade_bread.png" alt="Image of homemade bread" width="240">
                                <figcaption>Homemade bread</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="./images/applecake.png" alt="Image of Apple cake" width="240">
                                <figcaption>Apple cake</figcaption>
                            </figure>
                        </li>
                    </ul>
                </section>
                <div class="about">
                    <section>
                        <h2>
                            How we work
                        </h2>
                        <p>
                            Serving a dessert is the real culmination of the 
                            evening. Children and adults are waiting 
                            impatiently for dessert. We bake the cake and 
                            prepare the cream as you want, using only natural
                            ingredients of high quality. Putting the base cake.
                        </p>
                        <p>
                            We are awaiting for the biscuits to infuse and 
                            soak. We think over the design, the colour scheme
                            and every detail of the cake and proceed to the 
                            decor. 
                        </p>
                    </section>
                    <div class="img">
                        <div id="img">
                            <img src="./images/hww_image1.png" alt="image of a chef arranging dessert in bekery" width="268">
                            <img src="./images/hww_image2.png" alt="image of cakes and other bakery items" width="268">
                        </div> <!-- div to wrap-up 2 images-->
                        <img src="./images/hww_image3.png" alt="image of a person taking a sweet roll" width="260">
                    </div> <!-- div to wrap-up 3 images -->
                </div> <!-- end of about section -->
            </div>
            <img src="./images/center-image.png" alt="image of bakery products" width="1440">
            <div class="contact">
                <div class="map">
                    <div id="display-google-map">
                        <iframe src="https://www.google.com/maps/embed/v1/place?q=Geffrye+St,+London+E2+8HZ&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                        </iframe>
                    </div>
                    <a class="googlemaps-made" rel="nofollow" href="https://kbj9qpmy.com/bp" id="enable-maps-data">Broadband Providers</a>
                </div> <!-- map wrapper-->
                <div class="contact_details">
                    <div>
                        <section>
                            <h3>Address</h3>
                            <p>Geffrye St,</p>
                            <p>London E2 8HZ</p>
                        </section>
                        <section>
                            <h3>Open hours</h3>
                            <p>Monday - Friday  :  9am - 8pm</p>
                            <p>Saturday : 10am - 5pm</p>
                        </section>
                    </div>
                    <section>
                        <h3>Contact Us </h3>
                        <p>Email : richardsonsbakery@gmail.com</p>
                        <p>phone : +44 7694568943</p>
                    </section>
                </div> <!-- div to warp-up contact details-->
            </div>
        </main>
        <!--End of main section-->

        <script src="script.js"></script>
        <script>
            displayDay();
        </script>

<?php include_once('./php/footer.php'); ?>