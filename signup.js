document.addEventListener('DOMContentLoaded', () => {
    const signupForm = document.getElementById('signup-form');

    signupForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent the default form submission

        const newUsername = document.getElementById('new-username').value;
        const newPassword = document.getElementById('new-password').value;

        // Store the new user's information in local storage
        localStorage.setItem('username', newUsername);
        localStorage.setItem('password', newPassword); // Note: Storing passwords in local storage is not secure

        // Redirect to the main page
        window.location.href = 'readventure.php';
    });
});
const toggleEye = document.getElementById('toggle-eye');
const passwordInput = document.getElementById('new-password');

toggleEye.addEventListener('click', function() {
    // Toggle password field visibility
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text'; // Show password
        toggleEye.classList.remove('bxs-hide');  // Change the icon
        toggleEye.classList.add('bx-show'); // Change to eye-off icon
    } else {
        passwordInput.type = 'password'; // Hide password
        toggleEye.classList.remove('bx-show');
        toggleEye.classList.add('bxs-hide');
    }
});