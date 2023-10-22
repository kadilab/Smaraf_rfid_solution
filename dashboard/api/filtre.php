<?php
 require_once 'config.php';
// Vérifier si le filtre de date est défini (reçu depuis le formulaire)
// Vérifier si le filtre de date est défini (reçu depuis le formulaire)
if (isset($_GET['date'])) {
    $date = $_GET['date'];

    if ($date === '') {
        // Si le filtre de date est vide, sélectionner tous les enregistrements
        $sql = "SELECT * FROM rfid_data_table";
    } else {
        // Requête SQL pour sélectionner les enregistrements en fonction du filtre de date
        $sql = "SELECT * FROM rfid_data_table WHERE date_read = '$date'";
    }

    $result = $conn->query($sql);

    $output = ""; // Variable pour stocker le contenu HTML des enregistrements

    if ($result->num_rows > 0) {
        // Boucle pour ajouter chaque enregistrement au contenu HTML
        $i = 1;
        while ($row = $result->fetch_assoc()) {

            $output .= "<tr>";
            $output .= "<td>" . $i++ . "</td>";
            $output .= "<td>" . $row['antenne'] . "</td>";
            $output .= "<td>" . $row['epc'] . "</td>";
            $output .= "<td>" . $row['date_read'] . "</td>";
            $output .= "</tr>";
        }
    } else {
        $output = "<tr><td colspan='2'>Aucun enregistrement trouvé pour la date sélectionnée.</td></tr>";
    }

    // Retourner le contenu HTML des enregistrements
    echo $output;
}

// Fermer la connexion MySQL
$conn->close();
?>
