document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Richiesta AJAX
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Controllo le credenziali
    if (email === 'utente@example.com' && password === 'passwordsegreta') {
        // Accesso riuscito
        window.location.href = 'dashboard.php';
    } else {
        // Accesso fallito
        document.getElementById('errorMessage').style.display = 'block';
    }
});

document.getElementById('closePopup').addEventListener('click', function() {
    document.getElementById('errorMessage').style.display = 'none';
});
