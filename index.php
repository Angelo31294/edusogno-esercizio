<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Accedi</h1>
        <form id="loginForm" action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Accedi</button>
        </form>
    </div>

    <div id="errorMessage" class="popup">
        <p>Email o password errate.</p>
        <button id="closePopup">Chiudi</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
