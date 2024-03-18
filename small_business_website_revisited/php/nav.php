<!--Header with logo and navigation bar-->
<header>
    <img src="./images/logo.png" alt="the richardson's logo" width="278"> <!--Website logo-->
    <!--Start of navigation bar-->
    <nav>
        <ul id="nav">
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
    </nav>
    <!--End of navigation bar-->
</header>
