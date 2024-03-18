
// for mabile navigation
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hiddenNav');
});

// Close the mobile menu when a link is clicked
const mobileLinks = document.querySelectorAll('#mobile-menu ul li a');

mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hiddenNav');
    });
});

// to give a specific font weight
// Get the current page's filename (e.g., "index.html", "courses.html")
var currentPage = window.location.href.split("/").pop();

// Remove the ".html" extension if it exists
currentPage = currentPage.replace(".html", "");

// Add the "active-link" class to the corresponding navigation link
var navLinks = document.querySelectorAll("nav ul li a");
navLinks.forEach(function(link) {
    var linkText = link.textContent.toLowerCase();
    if (linkText === currentPage) {
        link.classList.add("active-link");
    }
});