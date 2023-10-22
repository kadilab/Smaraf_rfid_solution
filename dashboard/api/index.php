<?php
require_once 'config.php';
// Vérifier si l'EPC est défini (reçu du lecteur RFID)
if (isset($_GET['epc'])) {
    $epc = $_GET['epc'];
    $antenne = $_GET['ant'];
    // Obtenir la date actuelle
    $date = date("Y-m-d");
    
    // Vérifier si l'EPC pour cette date existe déjà dans la base de données
    $check_sql = "SELECT * FROM rfid_data_table WHERE epc = '$epc' AND date_read = '$date'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "Cet EPC a déjà été enregistré aujourd'hui.";
    } else {
        // Préparer la requête SQL pour insérer les données dans la table
        $sql = "INSERT INTO rfid_data_table (epc,antenne,date_read) VALUES ('$epc','$antenne' ,'$date')";

        // Exécuter la requête SQL
        if ($conn->query($sql) === TRUE) {
            echo "Données de tag enregistrées avec succès.";
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "EPC non reçu. Assurez-vous que le lecteur RFID est configuré correctement.";
}

// Fermer la connexion MySQL
$conn->close();
?>
