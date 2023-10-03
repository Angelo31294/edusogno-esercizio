<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nome_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Recupera info inviate
$email = $_POST['email'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Accesso riuscito
    echo "Accesso riuscito!";
} else {
    // Accesso fallito
    header("Location: login.html");
    exit;
}

$conn->close();
?>
