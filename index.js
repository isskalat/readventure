document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('login-form');

    loginForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent the default form submission

        const username = document.getElementById('username').value;

        // Store the username in local storage
        localStorage.setItem('username', username);

        // Redirect to the main page
        window.location.href = 'readventure.html';
    });
});
function getUserLevel(username) {
    fetch('get_level.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username: username })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log("User Level:", data.level);
            // Use this level to continue the quiz
        } else {
            console.error("Error:", data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}
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