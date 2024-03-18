<?php
$GLOBALS["page-title"] = "FAQ";
$GLOBALS["active-nav"] = "faq";
?>

<?php include_once('./php/head.php'); ?>
<?php include_once('./php/header-and-nav.php'); ?>

                 <!--main section of website-->
                 <main>
            <section id="faqsection">
                <div id="banner"> <!-- wrapper for h1 and image -->
                    <img src="../assests/minion.png" alt="A samll illustration of minion characters with question mark" height="100">
                    <h1>I have a Question</h1>
                </div>
            </section>
            <section>
                <h2>Frequently Asked Questions</h2>
                <ul id="question">
                    <li>
                        <div class="qst"> <!-- wrapper for question section -->
                            <div>
                                <img src="../assests/pen.png" alt="image of a pen on a green circle" height="20">
                                <p>What instruments can I learn at your academy?</p>
                            </div>
                        </div>
                        <div class="answer"><!-- wrapper for answer section -->
                            <div></div><!-- line seperating question and answer -->
                            <p >At our academy, you can learn violin, guitar, piano, and also explore the 
                                world of vocal music to unleash your singing talents.</p>
                        </div>
                    </li>
                    <li>
                        <div class="qst"><!-- wrapper for question section -->
                            <div>
                                <img src="../assests/pen.png" alt="image of a pen on a green circle" height="20">
                                <p>Do I need any prior experience to join your academy?</p>
                            </div>
                        </div>
                        <div class="answer"><!-- wrapper for answer section -->
                            <div></div><!-- line seperating question and answer -->
                            <p >No prior experience is required to join our academy we welcome students of all levels, 
                                from beginners to those with previous musical knowledge, to embark on their musical 
                                journey with us.</p>
                        </div>
                    </li>
                    <li>
                        <div class="qst"><!-- wrapper for question section -->
                            <div>
                                <img src="../assests/pen.png" alt="image of a pen on a green circle" height="20">
                                <p>What is the tuition fee for lessons?</p>
                            </div>
                        </div>
                        <div class="answer"><!-- wrapper for answer section -->
                            <div></div><!-- line seperating question and answer -->
                            <p>1000 rupees for one hour class.<br>
                                There is an admission fee of 1650 rupees in which includes music book , 
                                diary , and the grade book according to the ability of the student .</p>
                        </div>
                    </li>
                    <li>
                        <div class="qst"><!-- wrapper for question section -->
                            <div>
                                <img src="../assests/pen.png" alt="image of a pen on a green circle" height="20">
                                <p>What is the lesson duration and frequency?</p>
                            </div>
                        </div>
                        <div class="answer"><!-- wrapper for answer section -->
                            <div></div><!-- line seperating question and answer -->
                            <p>Weekly one hour. We provide piano class on every monday and tuesday evening.
                                Violin class on saturday morning and wednesday evening.
                                Guitar class on friday evening.</p>
                        </div>
                    </li>
                    <li>
                        <div class="qst"><!-- wrapper for question section -->
                            <div>
                                <img src="../assests/pen.png" alt="image of a pen on a green circle" height="20">
                                <p>Who are your music instructors?</p>
                            </div>
                        </div>
                        <div class="answer"><!-- wrapper for answer section -->
                            <div></div><!-- line seperating question and answer -->
                            <p>Piano by m  j Varghese<br>
                                Violin by Subramonian & Anish<br>
                                Guitar by Haridasan<br>
                                Online class for electronic keyboard, piano and violin by Iype Mathew</p>
                        </div>
                    </li>
                    <li>
                        <div class="qst"><!-- wrapper for question section -->
                            <div>
                                <img src="../assests/pen.png" alt="image of a pen on a green circle" height="20">
                                <p>Do you offer online lessons?</p>
                            </div>
                        </div>
                        <div class="answer"><!-- wrapper for answer section -->
                            <div></div><!-- line seperating question and answer -->
                            <p>Yes, we provide online classes for violin,guitar, piano and keyboard.fees 
                                for one hour class is 1500 INR.</p>
                        </div>
                    </li>
                    <li>
                        <div class="qst"><!-- wrapper for question section -->
                            <div>
                                <img src="../assests/pen.png" alt="image of a pen on a green circle" height="20">
                                <p>Are there performance opportunities for students?</p>
                            </div>
                        </div>
                        <div class="answer"><!-- wrapper for answer section -->
                            <div></div><!-- line seperating question and answer -->
                            <p >Yes , there is yearly students concerts.</p>
                        </div>
                    </li>
                    <li>
                        <div class="qst"><!-- wrapper for question section -->
                            <div>
                                <img src="../assests/pen.png" alt="image of a pen on a green circle" height="20">
                                <p>Can I rent instruments through your academy?</p>
                            </div>
                        </div>
                        <div class="answer"><!-- wrapper for answer section -->
                            <div></div><!-- line seperating question and answer -->
                            <p>No, students have to buy their own instruments.
                                We provide only piano for practice and class</p>
                        </div>
                    </li>
                </ul>
            </section>
        </main>

        <?php include_once('./php/cookie.php'); ?> 

        <script src="nav.js"></script>
        <script src="cookie.js"></script>

        <div id="footerline"></div>

<?php include_once('./php/footer.php'); ?> 