// Define darkLightToggle and body variables
const darkLightToggle = document.getElementById("dark-light-toggle");
const body = document.body;

// Function to toggle dark mode
function toggleDarkMode() {
    const isDarkMode = body.classList.toggle("dark-mode");

    document.cookie = "darkMode=" + isDarkMode + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
}

// Function to apply dark mode based on user preference stored in cookie
function applyDarkModePreference() {
    const cookies = document.cookie.split(';');
    let isDarkMode = false;
    cookies.forEach(cookie => {
        const [name, value] = cookie.split('=');
        if (name.trim() === 'darkMode') {
            isDarkMode = value === 'true';
        }
    });

    if (isDarkMode) {
        body.classList.add("dark-mode");
    } else {
        body.classList.remove("dark-mode");
    }
}

// Check for user preference on page load
document.addEventListener("DOMContentLoaded", function() {
    applyDarkModePreference();
});

// Check if darkLightToggle exists before adding event listener
if (darkLightToggle) {
    // Event listener for dark/light mode toggle button
    darkLightToggle.addEventListener("click", toggleDarkMode);
}
