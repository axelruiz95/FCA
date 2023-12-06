<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCA</title>
    <link rel="stylesheet" href="styles\styles.css">
    
</head>
<body>

    <div id="header-container"></div>

    <table>
        <div  id="centradoDiv">
            <div><h1>Esta son las nominaciones de la Posada 2023</h1></div>
        </div>
        <div class="cat">
            <div><h1>Categorias a elegir</h1></div>
        </div>
    </table>

    <table id="miTabla">
        <tr>
            <td colspan="3"><h1>El Más Prieto</h1></td>
        </tr>
        <tr class="opcion">
            <?php
            $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
            shuffle($nombres);

            for ($i = 0; $i < 21; $i++) {
                $nombre = $nombres[$i];
                echo '<td class="opcion">';
                echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                echo '<label for="check' . $nombre . '" c>';
                echo   '<img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"> ';
                echo '</label>';
                echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                echo '</td>';
            }
            ?>
        </tr>
    </table>

    <table id="segundaTabla" style="display: none;">
        <tr>
            <td colspan="3"><h1>El Más Guap@</h1></td>
        </tr>
        <tr>
            <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <table id="Buena">
        <tr>
            <td colspan="3"><h1>El Más Buena Onda</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <table id="Odioso">
        <tr>
            <td colspan="3"><h1>El Más Odioso</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>


    <table id="Put">
        <tr>
            <td colspan="3"><h1>El Más Puto o Todas mías</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>


    <table id="Borracho">
        <tr>
            <td colspan="3"><h1>El Más Borracho</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>


    <table id="Mala">
        <tr>
            <td colspan="3"><h1>El Más Mala Copa</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <table id="Fiestero">
        <tr>
            <td colspan="3"><h1>El Más Fiester@</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <table id="Intenso">
        <tr>
            <td colspan="3"><h1>El Más Intens@</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <table id="Carismatico">
        <tr>
            <td colspan="3"><h1>El Más Carismatico</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <table id="Peleonero">
        <tr>
            <td colspan="3"><h1>El Más Peleoner@</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <table id="Venenoso">
        <tr>
            <td colspan="3"><h1>El Más Venenos@</h1></td>
        </tr>
        <tr>
        <?php
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <script>
        function bloquearOtrasOpciones(label) {
            // Obtener todas las etiquetas de la tabla
            var etiquetas = document.querySelectorAll('#miTabla label');

            // Desactivar todas las etiquetas excepto la que se hizo clic
            etiquetas.forEach(function(etiqueta) {
                if (etiqueta !== label) {
                    etiqueta.style.pointerEvents = 'none';
                    etiqueta.style.opacity = '0.5';  // Opcional: Puedes ajustar la opacidad para indicar visualmente que está desactivado
                }
            });
        }
    </script>
    <script>
        fetch('styles/header.html')
            .then(response => response.text())
            .then(html => {
                document.getElementById('header-container').innerHTML = html;
            });
    </script>

    <script src="script.js"></script> 

    <script>
        function mostrarTodasLasTablas() {
            var tablas = document.querySelectorAll('table');
            tablas.forEach(function(tabla) {
                tabla.style.display = "table";
            });
        }
    </script>

</body>
</html>