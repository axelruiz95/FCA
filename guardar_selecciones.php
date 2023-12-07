<?php
$votos = json_decode(file_get_contents('php://input'), true);

$csvFileName = 'voto/' . date('Ymd_His') . '_votos.csv';

$csvFile = fopen($csvFileName, 'w');
fputcsv($csvFile, array('Categoria', 'Nombre'));

foreach ($votos as $categoria => $nombres) {
    foreach ($nombres as $nombre) {
        fputcsv($csvFile, array('Categoria' => $categoria, 'Nombre' => $nombre));
    }
}

fclose($csvFile);

echo json_encode(['message' => 'Tus votos fueron guardados.']);
?>
