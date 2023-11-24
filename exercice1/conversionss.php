<?php



$jsonFilePathh = 'fichierr.json';
$csvFilePathh = 'fichierput.csv';

function jsonToCsv2($jsonFilePathh, $csvFilePathh) {

    $jsonContentt = file_get_contents($jsonFilePathh);


    $datta = json_decode($jsonContentt, true);

    if ($datta === null) {
        die();
    }

    $csvContentt = implode(',', array_keys($datta[0])) . PHP_EOL;

    foreach ($datta as $row) {
        $csvContentt .= implode(',', $row) . PHP_EOL;
    }

    file_put_contents($csvFilePathh, $csvContentt);

    header('Location: ' . $csvFilePathh);
    exit;
}

jsonToCsv2($jsonFilePathh, $csvFilePathh);
?>