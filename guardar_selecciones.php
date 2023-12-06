<?php
// Recibe datos JSON del cuerpo de la solicitud POST
$data = json_decode(file_get_contents("php://input"), true);

// Verifica si hay datos recibidos
if (!empty($data)) {
    // Genera un nombre de archivo único usando un timestamp
    $nombreArchivo = 'selecciones_' . date('Ymd_His') . '.csv';

    // Abre o crea el archivo CSV para escritura
    $archivoCSV = fopen('voto/' . $nombreArchivo, 'a');

    // Encabezados si es un archivo nuevo
    if (filesize('voto/' . $nombreArchivo) == 0) {
        fputcsv($archivoCSV, array('Categoria', 'Nombre'));
    }

    // Escribe las selecciones en el archivo CSV
    foreach ($data as $seleccion) {
        fputcsv($archivoCSV, $seleccion);
    }

    // Cierra el archivo CSV
    fclose($archivoCSV);

    // Responde con el nombre del archivo guardado
    echo json_encode(array('success' => true, 'filename' => $nombreArchivo));
} else {
    // Responde con error si no hay datos
    echo json_encode(array('success' => false, 'error' => 'No se recibieron datos.'));
}
?>
