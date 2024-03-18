<body>
        <!--Header with navigation bar-->
        <header>
            <a href="index.php" <?php echo $GLOBALS["active-nav"]=="home"? 'class="active"':'';?>>
                <img id="logo" src="../assests/headerlogo.png" alt="academy logo" width="100"><!--logo-->
            </a>
            <div id="menu-toggle" class="menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div id="mobile-menu" class="hiddenNav">
                <ul>
                    <li>
                        <a href="index.php" <?php echo $GLOBALS["active-nav"]=="home"? 'class="active"':'';?>>Home</a>
                    </li>
                    <li>
                        <a href="course.php" <?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>Courses</a>
                    </li>
                    <li>
                        <a href="faq.php" <?php echo $GLOBALS["active-nav"]=="faq"? 'class="active"':'';?>>FAQ</a>
                    </li>
                    <li>
                        <a href="aboutus.php" <?php echo $GLOBALS["active-nav"]=="aboutus"? 'class="active"':'';?>>About Us</a>
                    </li>
                </ul>
            </div>
            <nav id="nav"><!--header navigation bar-->
                <ul>
                    <li>
                        <a href="index.php" <?php echo $GLOBALS["active-nav"]=="home"? 'class="active"':'';?>>Home</a>
                    </li>
                    <li>
                        <a href="course.php" <?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>Courses</a>
                    </li>
                    <li>
                        <a href="faq.php" <?php echo $GLOBALS["active-nav"]=="faq"? 'class="active"':'';?>>FAQ</a>
                    </li>
                    <li>
                        <a href="aboutus.php" <?php echo $GLOBALS["active-nav"]=="aboutus"? 'class="active"':'';?>>About Us</a>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End of header-->