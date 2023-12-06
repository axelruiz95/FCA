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
    
    <table id="Prieto">
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
                echo '<label for="check' . $nombre . '" onclick="bloquearOtrasOpciones(this)">';
                echo   '<img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"> ';
                echo '</label>';
                echo '<input type="checkbox" id="check' . $nombre . '" onclick="seleccionarUnico(\'check' . $nombre . '\')">';
                echo '</td>';
                

            }
            ?>
        </tr>
    </table>

    <table id="Guapo" style="display: none;">
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
        function seleccionarUnico(id) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');

            checkboxes.forEach(function(checkbox) {
                if (checkbox.id !== id) {
                    checkbox.checked = false;
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

<script>
    function guardarSeleccion() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var nombreSeleccionado = '';

        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                nombreSeleccionado = checkbox.id.replace('check', ''); // Extraer el nombre
            }
        });

        if (nombreSeleccionado !== '') {
            // Crear el botón y el campo de texto
            var guardarBtn = document.getElementById('guardarBtn');
            var nombreSeleccionadoInput = document.getElementById('nombreSeleccionado');
            var csvContent = 'data:text/csv;charset=utf-8,Categoria,Nombre\n';

            // Agregar la fila al CSV
            csvContent += 'El Más Prieto,' + nombreSeleccionado + '\n';

            // Crear el enlace de descarga
            var encodedUri = encodeURI(csvContent);
            var link = document.createElement('a');
            link.setAttribute('href', encodedUri);
            link.setAttribute('download', 'seleccion.csv');
            document.body.appendChild(link);

            // Simular clic en el enlace para iniciar la descarga
            link.click();

            // Ocultar el botón después de guardar
            guardarBtn.style.display = 'none';

            // Desactivar los demás checkboxes
            checkboxes.forEach(function (checkbox) {
                checkbox.disabled = true;
            });

            // Mostrar el nombre seleccionado en el campo de texto
            nombreSeleccionadoInput.value = 'Nombre seleccionado: ' + nombreSeleccionado;
        }
    }
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