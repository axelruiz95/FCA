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
    
    <?php
    $categorias = array("El Mas Prieto","El Más Guapo","La Mas Guapa", "El Más Buena Onda","Más Odios@","El Más Puto o Todas mías","El Más Borracho","El Más Mala Copa","El Más Fiester","El o La Más Intens@","El Más Carismatico","El o La Más Peleoner@","El Más Venenos@"); // Agrega aquí tus categorías
    foreach ($categorias as $categoria) {
        echo '<table id="' . $categoria . '" class="miTabla">';
        echo '  <tr id="encabezado">';
        echo '      <td colspan="3"><h1>' . str_replace('_', ' ', $categoria) . '</h1></td>';
        echo '  </tr>';
        echo '  <tr class="opcion">';
        
        $nombres = array("axel", "Eliot", "Sergio", "Tony", "Ana", "Rogelio", "Pancho", "Octavio", "Jaz", "Cari", "Cejota", "Pako", "Olimpia", "Alan", "Mari", "Miguel", "Markitos", "Toño", "Ubaldo", "Braian", "Jax");
        shuffle($nombres);

        foreach ($nombres as $nombre) {
            echo '      <td class="opcion">';
            echo '          <div class="text-overlay">' . ucfirst($nombre) . '</div>';
            echo '          <label for="check' . $nombre . '">';
            echo '              <img src="image/' . $nombre . '.jpeg" alt="' . ucfirst($nombre) . '" style="width: 100px; height: 150px;"> ';
            echo '          </label>';
            echo '          <input type="checkbox" id="check' . $nombre . '" onclick="seleccionarUnico(\'check' . $nombre . '\')">';
            echo '      </td>';
        }

        echo '  </tr>';
        echo '</table>';
    }
    ?>

    <button id="guardarBtn" onclick="guardarSelecciones()">Guardar Votos</button>

    <script>
    var votos = {};

    function seleccionarUnico(id) {
        // ... tu código existente ...
        actualizarVotos();
    }

    function actualizarVotos() {
        votos = {};
        // Recorre todas las tablas y obtén las opciones seleccionadas
        <?php
        foreach ($categorias as $categoria) {
            echo 'votos.' . $categoria . ' = obtenerSeleccion(\'' . $categoria . '\');' . PHP_EOL;
        }
        ?>

        console.log(votos);
    }

    function obtenerSeleccion(categoria) {
        var opciones = document.querySelectorAll('#' + categoria + ' input[type="checkbox"]');
        var seleccion = [];

        opciones.forEach(function (opcion) {
            if (opcion.checked) {
                seleccion.push(opcion.id.replace('check', ''));
            }
        });

        return seleccion;
    }

    function guardarVotos() {
        actualizarVotos();

        // Envía los datos al archivo PHP para procesar y guardar en CSV
        fetch('guardar_selecciones.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(votos),
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch((error) => {
            console.error('Error:', error);
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
    function guardarSelecciones() {
        // Obtén las selecciones de todas las tablas
        var selecciones = [];
        var tablas = document.querySelectorAll('table');

        tablas.forEach(function (tabla) {
            var categoria = tabla.id;
            var seleccion = tabla.querySelector('input:checked');

            if (seleccion) {
                var nombre = seleccion.id.replace('check', '');
                selecciones.push({ 'Categoria': categoria, 'Nombre': nombre });
            }
        });

        // Realiza la solicitud para guardar las selecciones
        fetch('guardar_selecciones.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(selecciones)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Tus votos fueron guardados. Recuerda un chaqueton pal frio');
            } else {
                alert('Error al guardar los votos: ' + data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
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