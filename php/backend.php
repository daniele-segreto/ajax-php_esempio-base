<?php
// Includi il file per la connessione al database
require_once 'database.php';

// Query per ottenere tutti gli utenti dalla tabella "users"
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Controlla se ci sono risultati
if ($result->num_rows > 0) {
    // Crea un array per i risultati
    $users = array();

    // Scandisci i risultati della query
    while ($row = $result->fetch_assoc()) {
        // Aggiungi ciascun utente all'array
        $users[] = $row;
    }

    // Chiudi il risultato della query
    $result->close();
} else {
    // Nessun risultato trovato
    $users = array();
}

// Chiudi la connessione al database
$conn->close();

// Imposta l'intestazione HTTP per i dati JSON
header('Content-Type: application/json');

// Restituisci i dati come JSON
echo json_encode($users);
?>
