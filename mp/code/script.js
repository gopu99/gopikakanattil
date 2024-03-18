const screenWidth = window.innerWidth;



// demo button 
document.addEventListener('DOMContentLoaded', function() {
    const popupBtn = document.getElementById('popupBtn');
    const popup = document.getElementById('popup');
    const closeBtn = document.getElementById('closeBtn');
    const form = document.getElementById('popupform');
    const message = document.getElementById('thankYouMessage');

    popupBtn.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting

        // Hide the form
        form.style.display = 'none';

        // Display the "Thank you" message
        message.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

});


//parents review on home page
// Get the list of review items and buttons
const reviewList = document.getElementById('reviewList');
const reviewItems = document.querySelectorAll('.review-item');
const nextButton = document.getElementById('next');
const previousButton = document.getElementById('previous');

// Initialize variables to keep track of the current group of reviews
let currentIndex = 0;
// Function to update the reviewsPerPage based on the screen width and orientation
function updateReviewsPerPage() {
    if (Math.min(window.innerWidth, window.screen.width) <= 1024) {
        reviewsPerPage = 2;
    } else {
        reviewsPerPage = 3; // Default value for other cases
    }
}

// Event listener for window resize and orientation change
window.addEventListener('resize', updateReviewsPerPage);
window.addEventListener('orientationchange', updateReviewsPerPage);

// Initial call to set the initial value
updateReviewsPerPage();

// Function to display the current group of reviews
function displayCurrentReviews() {
    reviewItems.forEach((item, index) => {
        if (index >= currentIndex && index < currentIndex + reviewsPerPage) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

// Event listener for the "Next" button
nextButton.addEventListener('click', () => {
    if (currentIndex + reviewsPerPage < reviewItems.length) {
        currentIndex += reviewsPerPage;
        displayCurrentReviews();
    }
});

// Event listener for the "Previous" button
previousButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex -= reviewsPerPage;
        displayCurrentReviews();
    }
});


// Initially display the first group of reviews
displayCurrentReviews();




document.getElementById("popupform").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the form from submitting normally

    // Collect form data
    const formData = new FormData(this);

    // Send the data to a server-side script using AJAX
    fetch("process_form.php", {
        method: "POST",
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                // Hide the form and display the thank you message
                document.getElementById("popupform").style.display = "none";
                document.getElementById("thankYouMessage").style.display = "block";
            } else {
                alert("An error occurred. Please try again later.");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("An error occurred. Please try again later.");
        });
});



