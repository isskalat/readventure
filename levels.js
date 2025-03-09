document.addEventListener("DOMContentLoaded", () => {
    fetch('progress.php')
        .then(response => response.json())
        .then(data => {
            const level = data.level || 1;

            document.querySelectorAll('.level-btn').forEach(button => {
                const level = parseInt(button.getAttribute('data-level'));

                if (level <= level) {
                    // Level is unlocked (leave href intact, remove disabled style if needed)
                    button.classList.remove('disabled');
                } else {
                    // Level is locked - disable by:
                    button.classList.add('disabled');    // Add grey-out style
                    button.removeAttribute('href');       // Remove link functionality
                }
            });
        })
        .catch(error => {
            console.error("Failed to fetch user progress:", error);
        });

    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('show');
        document.body.classList.toggle('sidebar-open');
    });
    
});