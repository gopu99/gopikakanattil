        <!--Footer-->
        <footer>
            <img src="./images/logo.png" alt="the richardson's logo" width="123">
            <div>
                <ul>
                    <li>
                        <a href="index.php" <?php echo $GLOBALS["active-nav"]=="home"? 'class="active"':'';?>>Home</a>
                    </li>
                    <li>
                        <a href="about_page.php" <?php echo $GLOBALS["active-nav"]=="about"? 'class="active"':'';?>>About us</a>
                    </li>
                    <li>
                        <a href="product_page.php" <?php echo $GLOBALS["active-nav"]=="products"? 'class="active"':'';?>>Products</a>
                    </li>
                    <li>
                        <a href="contact_page.php" <?php echo $GLOBALS["active-nav"]=="contact"? 'class="active"':'';?>>Contact</a>
                    </li>
                </ul>
            </div>
            <ul>
                <li>Geffrye St,</li>
                <li>London E2 8HZ</li>
                <li>+44 7694568943</li>
                <li>richardsonsbakery@gmail.com</li>
            </ul>
        </footer>
        <!--End of footer-->

    </body>


</html>
