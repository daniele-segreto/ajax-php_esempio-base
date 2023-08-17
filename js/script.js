// Attendi che il documento sia pronto
$(document).ready(function() {
    // Gestisci il click sul pulsante
    $("#getDataButton").on("click", function() {
        // Effettua una richiesta AJAX al backend
        $.ajax({
            url: "php/backend.php", // URL del backend PHP nella cartella "php"
            type: "GET", // Metodo HTTP
            dataType: "json", // Tipo di dati atteso come risposta
            
            // Funzione da eseguire in caso di successo
            success: function(data) {
                // Genera il contenuto da mostrare nel div "output"
                var outputHTML = "";
                
                // Scandisci i dati per creare una card Bootstrap per ciascun utente
                $.each(data, function(index, user) {
                    outputHTML += `
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">ID: ${user.id}</h5>
                                <p class="card-text">Nome: ${user.name}</p>
                                <p class="card-text">Email: ${user.email}</p>
                            </div>
                        </div>
                    `;
                });
                
                // Inserisci il contenuto nel div con id "output"
                $("#output").html(outputHTML);
            },
            
            // Funzione da eseguire in caso di errore
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Errore AJAX: " + textStatus, errorThrown);
            }
        });
    });
});
