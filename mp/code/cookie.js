// JavaScript for the cookie consent banner
document.addEventListener("DOMContentLoaded", function () {
    const cookieBanner = document.getElementById("cookie-banner");
    const acceptButton = document.getElementById("accept-cookie");
    const rejectButton = document.getElementById("reject-cookie");

    // Check if the user has previously made a choice
    const userChoice = localStorage.getItem("cookieConsent");

    if (!userChoice) {
        // Show the consent banner if the user hasn't made a choice yet
        cookieBanner.classList.remove("hidden");
    } else {
        // Hide the consent banner
        cookieBanner.classList.add("hidden");
    }

    // Handle the "Accept" button click
    acceptButton.addEventListener("click", function () {
        // Function to set a cookie
        function setCookie(cookieName, cookieValue, expirationDays) {
            const d = new Date();
            d.setTime(d.getTime() + expirationDays * 24 * 60 * 60 * 1000);
            const expires = "expires=" + d.toUTCString();
            document.cookie =
                cookieName + "=" + cookieValue + ";" + expires + ";path=/";
        }

        // Function to get a cookie by name
        function getCookie(cookieName) {
            const name = cookieName + "=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const cookieArray = decodedCookie.split(";");
            for (let i = 0; i < cookieArray.length; i++) {
                let cookie = cookieArray[i];
                while (cookie.charAt(0) === " ") {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(name) === 0) {
                    return cookie.substring(name.length, cookie.length);
                }
            }
            return "";
        }

        // Example: Set a cookie to remember the user's preferred music genre
        const preferredGenre = "Classical"; // You can replace this with the actual user's preference
        const expirationDays = 30; // Adjust the expiration time as needed

        setCookie("userPreferredGenre", preferredGenre, expirationDays);

        // Example: Retrieve the user's preferred genre from the cookie
        const userPreferredGenre = getCookie("userPreferredGenre");

        if (userPreferredGenre !== "") {
            // You can use this information to customize the user's experience on your website
            console.log("User's preferred music genre: " + userPreferredGenre);
        }

        // Store the user's consent choice in localStorage
        localStorage.setItem("cookieConsent", "accepted");

        cookieBanner.classList.add("hidden");
    });

    // Handle the "Reject" button click
    rejectButton.addEventListener("click", function () {
        // Handle the user's rejection, do not set cookies
        // Store the user's consent choice in localStorage
        localStorage.setItem("cookieConsent", "rejected");

        cookieBanner.classList.add("hidden");
    });
});
