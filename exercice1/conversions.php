<?php
$jsonFilePath='fichier.json';
$csvFilePath='fichier.csv';
function jsonToCsv($jsonFilePath, $csvFilePath) {

    $jsonFile = fopen($jsonFilePath, 'r');
    if (!$jsonFile) {
        die('Impossible d\'ouvrir le fichier JSON.');
    }

    $jsonContent = fread($jsonFile, filesize($jsonFilePath));
    fclose($jsonFile);

    $data = json_decode($jsonContent, true);

    if ($data === null) {
        die();
    }

    $csvFile = fopen($csvFilePath, 'w');
    if (!$csvFile) {
        die();
    }

    fputcsv($csvFile, array_keys($data[0]));

    foreach ($data as $row) {
        fputcsv($csvFile, $row);
    }
    header('Location: ' . $csvFilePath);
    fclose($csvFile);

}


jsonToCsv($jsonFilePath, $csvFilePath); 





?>
