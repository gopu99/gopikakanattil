
<?php
$GLOBALS["page-title"] = "Dr.Lobo Musical Academy";
$GLOBALS["active-nav"] = "home";
?>

<?php include_once('./php/head.php'); ?>
<?php include_once('./php/header-and-nav.php'); ?>

<!--main section of website-->
        <main>
            <section id="section1">
                <div class="main"> <!-- section for headline, search bar and images-->
                    <div> <!-- headline and search bar section-->
                        <h1>"Learn to play musical instruments with our excellent classes"</h1>
                    </div>
                    <ul class="fourimages"> <!-- section of 4 images-->
                        <li>
                            <figure id="img1">
                                <div id="pic1" class="images"><!-- image container-->
                                    <img src="../assests/violin.png" alt="violin on a cream background" height="515">
                                </div>
                                <figcaption>
                                    <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>
                                        <div class="figwrap"><!-- wrapping figure caption-->
                                            <p>Violin</p>
                                            <img src="../assests/arrow.png" alt="Right arrow" height="16">
                                        </div>
                                    </a>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure id="img2">
                                <div class="images"><!-- image container-->
                                    <img src="../assests/piano.png" alt="samll section of piano" height="515">
                                </div>
                                <figcaption>
                                    <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>
                                        <div class="figwrap"><!-- wrapping figure caption-->
                                            <p>Piano</p>
                                            <img src="../assests/arrow.png" alt="Right arrow" height="16">
                                        </div>
                                    </a>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure id="img3">
                                <div class="images"><!-- image container-->
                                    <img src="../assests/guitar.png" alt="guitar on an wooden table" height="515">
                                </div>
                                <figcaption>
                                    <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>
                                        <div class="figwrap"><!-- wrapping figure caption-->
                                            <p>Guitar</p>
                                            <img src="../assests/arrow.png" alt="Right arrow" height="16">
                                        </div>
                                    </a>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure id="img4">
                                <div class="images"><!-- image container-->
                                    <img src="../assests/mic.png" alt="metal mic" height="515">
                                </div>
                                <figcaption>
                                    <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>
                                        <div class="figwrap"><!-- wrapping figure caption-->
                                            <p>Vocal</p>
                                            <img src="../assests/arrow.png" alt="Right arrow" height="16">
                                        </div>
                                    </a>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div><!-- 4 dashed lines-->
                    <div class="line" id="line1"></div>
                    <div class="line" id="line2"></div>
                    <div class="line" id="line3"></div>
                    <div class="line" id="line4"></div>
                </div>
                <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>
                    <div class="button"><!-- view course page button-->
                        <p>View All Courses</p>
                        <img src="../assests/arrow.png" alt="Right arrow" height="20">
                    </div>
                </a>
            </section>
            <div id="who-are-we"><!-- who are we section-->
                <section>
                    <h2>Who are we</h2>
                    <h3>Discover, Play, Excel:<br>
                        Your Music Adventure Begins Here</h3>
                    <p>
                        With a passion for nurturing musical talents, we offer a diverse range 
                        of courses specializing in violin, guitar, piano, and vocal music. Our academy 
                        stands as a harmonious blend of tradition and innovation, where students embark on 
                        a journey of self-expression and skill development. Whether you're a beginner or an 
                        aspiring virtuoso, our experienced and dedicated instructors tailor their teaching 
                        approach to your individual needs, ensuring a supportive and inspiring learning 
                        environment. At Dr.Lobo Academy of Music, we believe in the transformative power of 
                        music, and our mission is to empower students to explore their musical passions, refine 
                        their techniques, and uncover the melodies that resonate within them. Join us and 
                        discover the joy of creating music that touches the soul and lasts a lifetime.
                    </p>
                    <a href="aboutus.php"<?php echo $GLOBALS["active-nav"]=="aboutus"? 'class="active"':'';?>>
                        <div class="explore"> <!-- wrapper for explore more text-->
                            <p>Explore more </p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 16" >
                                <path d="M23.7071 8.70711C24.0976 8.31658 24.0976 7.68342 23.7071 7.29289L17.3431 0.928932C16.9526 0.538408 16.3195 0.538408 15.9289 0.928932C15.5384 1.31946 15.5384 1.95262 15.9289 2.34315L21.5858 8L15.9289 13.6569C15.5384 14.0474 15.5384 14.6805 15.9289 15.0711C16.3195 15.4616 16.9526 15.4616 17.3431 15.0711L23.7071 8.70711ZM0 9H23V7H0V9Z"/>
                            </svg>
                        </div>
                    </a>
                </section>
                <img id="bird" src="../assests/bird.png" alt="small illustartion of a bird singing" height="250">
            </div>
            <section id="we-provide">
                <div id="we"> <!-- wrapper for section showing the 4 features-->
                    <div> <!-- wrapper for 1st section inside id-we -->
                        <h2>
                            We add value to<br>
                            our student’s <br>
                            journey
                        </h2>
                        <!-- demo button -->
                        <button id="popupBtn" class="button">
                            Book a FREE Demo now
                            <img src="../assests/arrowgreen.png" alt="arrow right" height="14">
                        </button>
                        <div id="popup" class="popup">
                            <div id="popupdiv">
                                <span class="close" id="closeBtn">&times;</span>
                                <div class="popup-content">
                                    <form id="popupform" method="POST">
                                        <ul>
                                            <li>
                                                <label for="name">Name:</label>
                                                <input type="text" id="name" name="name" required>
                                            </li>
                                            <li>
                                                <label for="phone">Phone Number:</label>
                                                <input type="tel" id="phone" name="phone" required>
                                            </li>
                                            <li>
                                                <label for="email">Email:</label>
                                                <input type="email" id="email" name="email" required>
                                            </li>
                                            <li>
                                                <input id="formbutton" type="submit" value="Submit">
                                            </li>
                                        </ul>
                                    </form>
                                    <!-- The form will be inserted here via JavaScript -->
                                    <p id="thankYouMessage">Thank you for submitting the form. We will contact you soon. Have a nice day!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul id="wefeatures"><!-- grid-->
                        <li>
                            <img src="../assests/class.png" alt="icon for class" height="30">
                            <h3>Online and In-person Classes</h3>
                            <p>
                                Offering a blend of online and in-person classes accommodates 
                                different learning preferences and geographical limitations.
                            </p>
                        </li>
                        <li>
                            <img src="../assests/register.png" alt="icon for register" height="30">
                            <h3>Easy Registration</h3>
                            <p>
                                Simplifying the registration process with user-friendly online forms and clear 
                                instructions.
                            </p>
                        </li>
                        <li>
                            <img src="../assests/traine.png" alt="icon for tarine" height="30">
                            <h3>Expert Trainers</h3>
                            <p>
                                Employing seasoned and expert trainers fosters a rich learning experience.
                            </p>
                        </li>
                        <li>
                            <img src="../assests/learn.png" alt="icon for learn" height="30">
                            <h3>Easy to learn</h3>
                            <p>
                                Implementing an organised and progressive curriculum ensures that students experience a 
                                logical and effective learning journey.
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="onlinecourses"> <!-- section displying introdution to online courses-->
                <h2>Online courses</h2>
                <ul>
                    <li>
                        <button id="violinheading" class="coursesbutton">Violin</button>
                        <div class="highlighter"></div><!-- underline -->
                    </li>
                    <li>
                        <button id="guitarheading" class="coursesbutton">Guitar</button>
                        <div class="highlighter"></div><!-- underline -->
                    </li>
                    <li>
                        <button id="pianoheading" class="coursesbutton">Piano</button>
                        <div class="highlighter"></div><!-- underline -->
                    </li>
                    <li>
                        <button id="vocalheading" class="coursesbutton">Vocal</button>
                        <div class="highlighter"></div><!-- underline -->
                    </li>
                </ul>
                <section>
                    <h3 id="courseTitle">Western Violin <br>Classes</h3>
                    <div class="instrument">
                        <p id="courseDescription">
                            Embark on a musical adventure with our Western Violin classes at the music academy!
                            Whether you're starting from scratch or already have a love for melodies, our classes 
                            are tailored for all levels. From holding the violin to creating beautiful tunes, our 
                            skilled instructors guide you every step of the way. Join us in discovering the magic of
                             Western violin and unlock 
                            your musical potential!
                        </p>
                        <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>
                            <div class="button"><!-- button -->
                                <p>View Course</p>
                                <img src="../assests/arrow.png" alt="arrow right" height="18">
                            </div>
                        </a>
                    </div>
                </section>
            </section>
            <section id="review">
                <h2>Parent’s Review</h2>
                <ul id="reviewList" class="review-list">
                    <li class="review-item">
                        <p>
                            My daughter (Sarada Jayaraman, 
                            Grade 6 Keyboard student) is very 
                            happy with the keyboard lessons! 
                            The teacher is very friendly, very 
                            kind and he does his job very 
                            professionally! I will recommend 
                            them to any of my friends who 
                            want their child to learn from the 
                            best!<br>
                            <span>- Priya Jayaraman (mother)</span>
                        </p>
                    </li>
                    <li class="review-item">
                        <p>
                            Enrolling my daughter in violin classes at 
                            this academy was the best decision. The teachers 
                            have a remarkable ability to connect with young 
                            learners, making the lessons engaging and effective. 
                            Her newfound passion for the violin is truly 
                            heartwarming<br>
                            <span>- Jeeju jhon (Father)</span>
                        </p>
                    </li>
                    <li class="review-item">
                        <p>
                            My son is taking both violin and guitar lessons 
                            here, and we couldn't be happier. The academy's 
                            flexibility to offer both instruments in one place 
                            is fantastic. The instructors' dedication and the academy's 
                            warm environment have fostered a genuine love for music in him.<br>
                            <span>- Latha K P (mother)</span>
                        </p>
                    </li>
                    <li class="review-item">
                        <p>
                            The Academy of Musical Instruments has been an absolute blessing 
                            for my daughter's piano journey. The teachers are not only skilled 
                            but incredibly patient, making the learning process enjoyable. We're 
                            seeing remarkable progress, and the structured curriculum keeps her motivated.<br>
                            <span>- Jaya Mohan (mother)</span>
                        </p>
                    </li>
                    <li class="review-item">
                        <p>
                            The Academy of Musical Instruments provides top-notch guitar instruction. My son's 
                            skills have grown exponentially under their guidance. The faculty's expertise and 
                            personalized attention have truly made a difference in his playing.<br>
                            <span>- Jeena Rajesh (mother)</span>
                        </p>
                    </li>
                    <li class="review-item">
                        <p>
                            As a parent, I appreciate the convenience of having both piano and guitar lessons 
                            under one roof. The instructors' dedication and ability to adapt to my kids' learning 
                            styles have made learning these instruments a breeze.<br>
                            <span>- Geetha P K (mother)</span>
                        </p>
                    </li>
                    <li class="review-item">
                        <p>
                            My daughter's piano lessons at this academy have been exceptional. The structured 
                            approach and encouragement from the instructors have built her confidence. She looks 
                            forward to every lesson!<br>
                            <span>- Abdhul (Father)</span>
                        </p>
                    </li>
                    <li class="review-item">
                        <p>
                            The Academy of Musical Instruments has ignited a genuine passion for music in my son. 
                            His guitar lessons have been transformative, and I'm amazed by the progress he's made. 
                            The instructors' expertise and enthusiasm are truly commendable.<br>
                            <span>- Smitha Manoj (mother)</span>
                        </p>
                    </li>
                    <li class="review-item">
                        <p>
                            My son is taking both violin and guitar lessons 
                            here, and we couldn't be happier. The academy's 
                            flexibility to offer both instruments in one place 
                            is fantastic. The instructors' dedication and the academy's 
                            warm environment have fostered a genuine love for music in him.<br>
                            <span>- Neenu (mother)</span>
                        </p>
                    </li>
                </ul>
                <div class="arrow"> <!-- wrapper for right and left arrow -->
                    <button id="previous">
                        <img src="../assests/leftarrow.png" alt="arrow left icon" height="16">
                    </button>
                    <button id="next">
                        <img src="../assests/arrowgreen.png" alt="arrow right icon" height="16">
                    </button>
                </div>
            </section>
            <section id="faq"> <!-- section showing some sample faq questions -->
                <h2>FAQ’s</h2>
                <ul>
                    <li class="question">
                        <div class="qst">
                            <p>What instruments can I learn at your academy?</p>

                        </div>
                        <div></div>
                        <p>At our academy, you can learn violin, guitar, piano, and vocal skills, 
                            embracing a diverse world of musical expression. </p>
                    </li>
                    <li class="question">
                        <div class="qst">
                            <p>Do I need any prior experience to join your academy?</p>
                            
                        </div>
                        <div></div>
                        <p>No prior experience is required to join our academy – we welcome 
                            students of all levels, from beginners to those with previous musical 
                            knowledge, to embark on their musical journey with us.</p>
                    </li>
                    <li class="question">
                        <div class="qst">
                            <p>What is the lesson duration and frequency?</p>
                            
                        </div>
                        <div></div>
                        <p>Weekly one hour. We provide piano class on every monday and tuesday evening.
                            Violin class on saturday morning and wednesday evening.
                            Guitar class on friday evening. </p>
                    </li>
                    <li class="question">
                        <div class="qst">
                            <p>Who are your music instructors?</p>
                            
                        </div>
                        <div></div>
                        <p>Piano by m  j Varghese<br>
                            Violin by Subramonian & Anish<br>
                            Guitar by Haridasan<br>
                            Online class for electronic keyboard, piano and violin by Iype Mathew </p>
                    </li>
                </ul>
                <a href="faq.php"<?php echo $GLOBALS["active-nav"]=="faq"? 'class="active"':'';?>>
                    <div id="vm"> <!-- wrapper for view more text -->
                        <p>View more</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 16" >
                            <path d="M23.7071 8.70711C24.0976 8.31658 24.0976 7.68342 23.7071 7.29289L17.3431 0.928932C16.9526 0.538408 16.3195 0.538408 15.9289 0.928932C15.5384 1.31946 15.5384 1.95262 15.9289 2.34315L21.5858 8L15.9289 13.6569C15.5384 14.0474 15.5384 14.6805 15.9289 15.0711C16.3195 15.4616 16.9526 15.4616 17.3431 15.0711L23.7071 8.70711ZM0 9H23V7H0V9Z"/>
                        </svg>
                    </div>
                </a>
            </section>
        </main>

        <?php include_once('./php/cookie.php'); ?> 

        <script src="nav.js"></script>
        <script src="script1.js"></script>
        <script src="script.js"></script>
        <script src="cookie.js"></script>

        <?php include_once('./php/footer.php'); ?> 