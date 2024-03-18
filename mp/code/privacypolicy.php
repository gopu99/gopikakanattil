
<?php
$GLOBALS["page-title"] = "Privacy Policy";
$GLOBALS["active-nav"] = "privacypolicy";
?>

<?php include_once('./php/head.php'); ?>
<?php include_once('./php/header-and-nav.php'); ?>

<!--main section of website-->
<main id="pp">
            <!--back to home page section-->
            <a href="index.php" <?php echo $GLOBALS["active-nav"]=="home"? 'class="active"':'';?>>
                <div class="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 16" >
                        <path d="M23.7071 8.70711C24.0976 8.31658 24.0976 7.68342 23.7071 7.29289L17.3431 0.928932C16.9526 0.538408 16.3195 0.538408 15.9289 0.928932C15.5384 1.31946 15.5384 1.95262 15.9289 2.34315L21.5858 8L15.9289 13.6569C15.5384 14.0474 15.5384 14.6805 15.9289 15.0711C16.3195 15.4616 16.9526 15.4616 17.3431 15.0711L23.7071 8.70711ZM0 9H23V7H0V9Z"/>
                    </svg>
                    <p>Back to Homepage</p>
                </div>
            </a>
            <!--content in the page-->
            <h1>Privacy Policy</h1>
            <p>Last Updated: 9th September 2023</p>
            <h2>Introduction</h2>
            <p>
                Dr.Lobo Academy(Dr.Lobo Memorial Musical Academy) is committed to protecting your privacy and ensuring 
                the security of your personal information. This Privacy Policy outlines how we collect, use, disclose, 
                and safeguard your personal information when you visit our website <a href="index.php" <?php echo $GLOBALS["active-nav"]=="home"? 'class="active"':'';?>>
                www.drloboacademy.com</a> or interact with our services. By accessing or using our website, you agree 
                to the terms and practices described in this Privacy Policy.
            </p>
            <h2>Information We Collect</h2>
            <p>We may collect the following types of personal information:</p>
            <ol type="1">
                <li>
                    <p>
                        <span>Information You Provide:</span> When you register for our music lessons, make inquiries, 
                        or contact us through forms on our website, we may collect personal information such as your name, 
                        email address, phone number, and any additional information you provide voluntarily.
                    </p>
                </li>
                <li>
                    <p>
                        <span>Usage Information:</span>We may collect information about how you interact with our website, 
                        including your IP address, browser type, operating system, referring URLs, pages viewed, and the 
                        duration of your visits.
                    </p>
                </li>
                <li>
                    <p>
                        <span>Cookies and Tracking Technologies:</span> We use cookies and similar tracking technologies to 
                        enhance your browsing experience, analyze website traffic, and understand user behavior. You can 
                        control your cookie preferences through your browser settings.
                    </p>
                </li>
            </ol>
            <h2>How We Use Your Information</h2>
            <p>We may use your personal information for the following purposes:</p>
            <ol type="1">
                <li>
                    <p>
                        To provide you with information and services related to our music academy, including processing 
                        lesson registrations and inquiries.
                    </p>
                </li>
                <li>
                    <p>
                        To improve and personalize your experience on our website.
                    </p>
                </li>
                <li>
                    <p>
                        To send you newsletters, updates, and marketing communications (if you have consented to receive them).
                    </p>
                </li>
                <li>
                    <p>
                        To analyze website usage and trends, optimize our website, and monitor the effectiveness of our 
                        marketing efforts.
                    </p>
                </li>
            </ol>
            <h2>Disclosure of Your Information</h2>
            <p>
                We do not sell, trade, or otherwise transfer your personal information to third parties without your 
                consent, except as described below:
            </p>
            <ol type="1">
                <li>
                    <p>
                        <span>Service Providers: </span>We may share your information with trusted third-party service providers 
                        who assist us in operating our website, conducting our business, or servicing you.
                    </p>
                </li>
                <li>
                    <p>
                        <span>Legal Requirements:</span>We may disclose your information when required by law or in response 
                        to legal requests, such as court orders or subpoenas.
                    </p>
                </li>
            </ol>
            <h2>Data Security</h2>
            <p>
                We take reasonable measures to protect your personal information from unauthorized access, disclosure, 
                alteration, or destruction. However, no data transmission over the internet or method of storage is 
                completely secure. We cannot guarantee the absolute security of your data.
            </p>
            <h2>Your Choices</h2>
            <p>You have the following rights concerning your personal information:</p>
            <ol type="1">
                <li>
                    <p>
                        <span>Access: </span>You can request access to the personal information we hold about you.
                    </p>
                </li>
                <li>
                    <p>
                        <span>Correction: </span>You can request corrections to inaccurate or incomplete personal information.
                    </p>
                </li>
                <li>
                    <p>
                        <span>Deletion: </span>You can request the deletion of your personal information, subject to legal requirements.
                    </p>
                </li>
            </ol>
            <h2>Contact Us</h2>
            <p>
                If you have questions, concerns, or requests related to this Privacy Policy or your personal information, 
                please contact us at: <span id="span1">+91 9037697195 </span>or email 
                    <span id="span2">drloboacademy@gmail.com</span>.
            </p>
            <h2>Changes to this Privacy Policy</h2>
            <p>
                We reserve the right to update or modify this Privacy Policy at any time. We will post any changes on this 
                page, and the revised policy will be effective upon posting.
            </p>
            <p>Please check this Privacy Policy periodically for updates.</p>
        </main>

        <?php include_once('./php/cookie.php'); ?> 

        <div id="footerline"></div>

<script src="nav.js"></script>
<script src="cookie.js"></script>

<?php include_once('./php/footer.php'); ?> 