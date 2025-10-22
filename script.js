// script.js
console.log("Form script loaded");

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registrationForm");
    form.addEventListener("submit", () => {
        console.log("Form submitted, redirecting to submit.php...");
    });
});
