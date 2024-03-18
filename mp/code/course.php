<?php
$GLOBALS["page-title"] = "Courses";
$GLOBALS["active-nav"] = "course";
?>

<?php include_once('./php/head.php'); ?>
<?php include_once('./php/header-and-nav.php'); ?>

        <!--main section of website-->
        <main>
            <section id="coursesection">
                <div class="bgimage">
                    <h1>Welcome to the 
                        music courses
                    </h1>
                </div>
                <ul id="instrumentButtons">
                    <li><button id="pianoButton">Piano</button></li>
                    <li><button id="violinButton">Violin</button></li>
                    <li><button id="guitarButton">Guitar</button></li>
                </ul>
            </section>
            <ul>
                <li id="coursecards">
                    <!-- courses will be displayed here -->
                </li>
            </ul>
        </main>

        <?php include_once('./php/cookie.php'); ?> 

        <script src="script2.js"></script>
        <script src="nav.js"></script>
        <script src="cookie.js"></script>

        <?php include_once('./php/footer.php'); ?>   
    