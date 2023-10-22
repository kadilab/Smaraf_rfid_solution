<?php
if(isset($_GET['latitude']) && isset($_GET['longitude'])) {
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    
    $data = "Latitude: $latitude, Longitude: $longitude\r\n";
    
    $filename = 'gps_data.txt';
    
    // Ajouter les données au fichier
    file_put_contents($filename, $data, FILE_APPEND);
    
    echo "Données enregistrées avec succès.";
} else {
    echo "Erreur : Les données de latitude et de longitude sont manquantes.";
}
?>
