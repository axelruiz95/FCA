<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selecciones = json_decode(file_get_contents('php://input'), true);

    // Crear el contenido del CSV
    $csvContent = "Categoria,Nombre\n";
    foreach ($selecciones as $seleccion) {
        $csvContent .= "{$seleccion['categoria']},{$seleccion['nombre']}\n";
    }

    // Ruta del archivo en el servidor
    $archivoCSV = 'voto/selecciones.csv';

    // Guardar el archivo CSV en el servidor
    file_put_contents($archivoCSV, $csvContent);

    http_response_code(200);
} else {
    http_response_code(400);
}
?>
