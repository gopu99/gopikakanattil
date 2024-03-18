<?php
$GLOBALS["page-title"] = "Classes";
$GLOBALS["active-nav"] = "class";
?>

<?php include_once('./php/head.php'); ?>
<?php include_once('./php/header-and-nav.php'); ?>

<!--main section of website-->
<main>
            <section id="classsection">
                <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>    
                    <div class="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 16" >
                            <path d="M23.7071 8.70711C24.0976 8.31658 24.0976 7.68342 23.7071 7.29289L17.3431 0.928932C16.9526 0.538408 16.3195 0.538408 15.9289 0.928932C15.5384 1.31946 15.5384 1.95262 15.9289 2.34315L21.5858 8L15.9289 13.6569C15.5384 14.0474 15.5384 14.6805 15.9289 15.0711C16.3195 15.4616 16.9526 15.4616 17.3431 15.0711L23.7071 8.70711ZM0 9H23V7H0V9Z"/>
                        </svg>
                        <p>Back to course page</p>
                    </div>
                </a>
                <div>
                    <div>
                        <iframe src="<?php echo $_GET['video']; ?>" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <h2><?php echo $_GET['songName']; ?></h2>
                <p><?php echo $_GET['className'] . ' > ' . $_GET['bookName']; ?></p>
            </section>
            <section id="class">
                <h2>More classes</h2>
                <ul>
                    <li>
                        <section>
                            <div></div>
                            <h2>Violin Class</h2>
                            <p>Class 1 beginner part 1</p>
                        </section>
                    </li>
                    <li>
                        <section>
                            <div></div>
                            <h2>Violin Class</h2>
                            <p>Class 1 beginner part 1</p>
                        </section>
                    </li>
                    <li>
                        <section>
                            <div></div>
                            <h2>Violin Class</h2>
                            <p>Class 1 beginner part 1</p>
                        </section>
                    </li>
                    <li>
                        <section>
                            <div></div>
                            <h2>Violin Class</h2>
                            <p>Class 1 beginner part 1</p>
                        </section>
                    </li>
                </ul>

            </section>

        </main>

        <?php include_once('./php/cookie.php'); ?> 

        <script src="cookie.js"></script>
        <script src="nav.js"></script>

        <div id="footerline"></div>
        
        <?php include_once('./php/footer.php'); ?>  