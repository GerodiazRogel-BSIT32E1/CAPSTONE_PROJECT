window.addEventListener('load', function() {
    let alert = document.querySelector('.alert');
    if (alert) {
        setTimeout(function() {
            alert.style.display = 'none';
        }, 3000); // Hide the alert after 5 seconds
    }
});