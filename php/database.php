<?php
// Configurazione per la connessione al database
$servername = "localhost";
$username = "root"; // Inserisci il tuo nome utente del database
$password = ""; // Inserisci la tua password del database
$dbname = "user_management_2"; // Inserisci il nome del tuo database

// Connessione al database MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione al database
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}
?>
