<?php
require_once 'config.php';


// Obtenir la date actuelle
$dateCourante = date("Y-m-d");

// Requête SQL pour récupérer le nombre d'EPC scannés pour la date courante
$sql = "SELECT COUNT(DISTINCT epc) AS nbEPC FROM rfid_data_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nbEPC = $row['nbEPC'];
    echo $nbEPC;
} else {
    echo "Aucun EPC scanné pour la date courante.";
}

// Fermer la connexion MySQL
$conn->close();
?>
