<?php
 require_once 'config.php';
// Vérifier si le filtre de date est défini (reçu depuis le formulaire)
// Vérifier si le filtre de date est défini (reçu depuis le formulaire)
if (isset($_GET['get'])) {

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $output = ""; // Variable pour stocker le contenu HTML des enregistrements

    if ($result->num_rows > 0) {
        // Boucle pour ajouter chaque enregistrement au contenu HTML
        $i = 1;
        while ($row = $result->fetch_assoc()) {

            $output .= "<tr>";
            $output .= "<td>" . $i++ . "</td>";
            $output .= "<td>" . $row['nom'] . "</td>";
            $output .= "<td>" . $row['username'] . "</td>";
            $output .= "<td>" . $row['created_at'] . "</td>";
            $output .= "<td>" . $row['last_login'] . "</td>";
            $output .= "<td class='d-flex flex-row'>
               <form action='/edit' method='get'>
                <button type='submit'  class='btn btn-primary p-3 mr-1'>Primary</button>
                <button type='submit'  class='btn btn-danger p-3'>Danger</button>
              </form>
            </td>";
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
