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

    <div id="centradoDiv">
        <button id="botonMostrar" onclick="mostrarTabla()" class="my-button">Mostrar Categorias</button>
    </div>

    <table id="miTabla">
        <tr>
            <td colspan="3"><h1>El Más Prieto</h1></td>
        </tr>
        <tr>
        <?php
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <div id="centradoDiv">
        <button id="botonSiguiente" onclick="mostrarSegundaTabla()" class="my-button1">Siguiente Categoría</button>
    </div>

    <table id="segundaTabla" style="display: none;">
        <tr>
            <td colspan="3"><h1>El Más Guap@</h1></td>
        </tr>
        <tr>
            <?php
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <div id="centradoDiv">
        <button id="botonSiguiente" onclick="mostrar3Tabla()" class="my-button1">Siguiente Categoría</button>
    </div>

    <table id="Buena">
        <tr>
            <td colspan="3"><h1>El Más Buena Onda</h1></td>
        </tr>
        <tr>
        <?php
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
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
                // Genera 3 opciones con las imágenes
                $nombres = array("axel", "Eliot", "Sergio","Tony","Ana","Rogelio","Pancho","Octavio","Jaz","Cari","Cejota","Pako","Olimpia","Alan","Mari","Miguel","Markitos","Toño","Ubaldo","Braian","Jax");
                shuffle($nombres);
                foreach ($nombres as $nombre) {
                    echo '<td>';
                    echo '<div class="text-overlay">'. ucfirst($nombre) .'</div>';
                    echo '<label for="check' . $nombre . '"><img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '"></label>';
                    echo '<input type="checkbox" id="check' . $nombre . '" onchange="mostrarBotonSiguiente(this)">';
                    echo '</td>';
                }
            ?>
        </tr>
    </table>

    <script>
        function mostrarBotonSiguiente(checkbox) {
            // Implementa la lógica según tus necesidades
            // Puedes modificar esta función para que haga lo que desees al seleccionar un checkbox
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
        function mostrarTabla() {
            var tabla = document.getElementById("miTabla");
            var botonMostrar = document.getElementById("botonMostrar");
        
            botonMostrar.style.display = "none";
        
            tabla.style.display = "table";
        }

        function mostrarBotonSiguiente(checkbox) {
            var botonSiguiente = document.getElementById("botonSiguiente");
            var botonMostrar = document.getElementById("botonMostrar");

            botonSiguiente.style.display = checkbox.checked ? "inline-block" : "none";

            botonMostrar.style.display = checkbox.checked ? "none" : "block";
        }

        function mostrarSegundaTabla() {
            var segundaTabla = document.getElementById("segundaTabla");

            segundaTabla.style.display = "table";
        }
        function mostrar3Tabla() {
            var Buena = document.getElementById("Buena");

            Buena.style.display = "table";
        }
    </script>
    
</body>
</html>