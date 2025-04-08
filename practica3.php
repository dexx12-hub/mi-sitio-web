<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palíndromo y Manipulación de Cadenas</title>
    <!-- Agregar enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-4">

        <!-- Título principal -->
        <h1 class="text-center mb-4">Verificar Palíndromo y Manipulación de Cadenas</h1>

        <!-- Formulario para verificar palíndromo -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="palabra" class="form-label">Introduce una palabra:</label>
                        <input type="text" class="form-control" name="palabra" required>
                    </div>
                    <button type="submit" name="verificar_palindromo" class="btn btn-primary">Verificar</button>
                </form>

                <?php
                if (isset($_POST["verificar_palindromo"])) {
                    $palabra = $_POST["palabra"];
                    $palabra_limpia = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $palabra)); // Quitar espacios y símbolos

                    $reversa = strrev($palabra_limpia);

                    if ($palabra_limpia === $reversa) {
                        echo "<p class='mt-3 text-success'><strong>'$palabra'</strong> es un palíndromo.</p>";
                    } else {
                        echo "<p class='mt-3 text-danger'><strong>'$palabra'</strong> no es un palíndromo.</p>";
                    }
                }
                ?>
            </div>
        </div>

        <!-- Formulario para manipular cadenas -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="cadena1" class="form-label">Cadena 1:</label>
                        <input type="text" class="form-control" name="cadena1" required>
                    </div>
                    <div class="mb-3">
                        <label for="cadena2" class="form-label">Cadena 2:</label>
                        <input type="text" class="form-control" name="cadena2" required>
                    </div>
                    <button type="submit" name="procesar_cadenas" class="btn btn-primary">Procesar</button>
                </form>

                <?php
                if (isset($_POST["procesar_cadenas"])) {
                    $cadena1 = $_POST["cadena1"];
                    $cadena2 = $_POST["cadena2"];

                    echo "<h3>Resultados:</h3>";

                    // a) Comparación alfabética
                    if (strcmp($cadena1, $cadena2) < 0) {
                        echo "a) <strong>Menor alfabéticamente:</strong> \"$cadena1\"<br>";
                        echo "   <strong>Mayor alfabéticamente:</strong> \"$cadena2\"<br>";
                    } elseif (strcmp($cadena1, $cadena2) > 0) {
                        echo "a) <strong>Menor alfabéticamente:</strong> \"$cadena2\"<br>";
                        echo "   <strong>Mayor alfabéticamente:</strong> \"$cadena1\"<br>";
                    } else {
                        echo "a) Ambas cadenas son iguales alfabéticamente<br>";
                    }

                    // b) Primera cadena: vocales a mayúsculas
                    $cadena1_mod = preg_replace_callback('/[aeiouáéíóú]/i', function($v) {
                        return strtoupper($v[0]);
                    }, $cadena1);
                    echo "b) Cadena 1 con vocales en mayúsculas: \"$cadena1_mod\"<br>";

                    // c) Segunda cadena: consonantes a mayúsculas
                    $cadena2_mod = preg_replace_callback('/[bcdfghjklmnñpqrstvwxyz]/i', function($c) {
                        return strtoupper($c[0]);
                    }, $cadena2);
                    echo "c) Cadena 2 con consonantes en mayúsculas: \"$cadena2_mod\"<br>";

                    // d) Concatenar ambas cadenas modificadas
                    $cadena_concatenada = $cadena1_mod . $cadena2_mod;
                    echo "d) Cadena concatenada: \"$cadena_concatenada\"<br>";

                    // e) Invertir la concatenada
                    $cadena_invertida = strrev($cadena_concatenada);
                    echo "e) Cadena concatenada invertida: \"$cadena_invertida\"<br>";
                }
                ?>
            </div>
        </div>

        <!-- Formulario para contar letras -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="frase" class="form-label">Escribe una frase:</label>
                        <input type="text" class="form-control" name="frase" required>
                    </div>
                    <div class="mb-3">
                        <label for="letra" class="form-label">Letra a buscar:</label>
                        <input type="text" class="form-control" name="letra" maxlength="1" required>
                    </div>
                    <button type="submit" name="contar" class="btn btn-primary">Contar letra</button>
                </form>

                <?php
                if (isset($_POST["contar"])) {
                    $frase = strtolower($_POST["frase"]);
                    $letra = strtolower($_POST["letra"]);

                    $contador = substr_count($frase, $letra);

                    echo "<p class='mt-3'>La letra '<strong>$letra</strong>' se repite <strong>$contador</strong> veces en la frase.</p>";
                }
                ?>
            </div>
        </div>

        <!-- Formulario para generar código -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="frase" class="form-label">Introduce tu frase (nombre apellido fecha carnet):</label>
                        <input type="text" class="form-control" name="frase" required>
                    </div>
                    <button type="submit" name="generar" class="btn btn-primary">Generar Código</button>
                </form>

                <?php
                if (isset($_POST["generar"])) {
                    $entrada = $_POST["frase"];
                    $partes = explode(" ", $entrada);

                    // Validar que al menos haya 4 elementos
                    if (count($partes) >= 4) {
                        $nombre = $partes[0];
                        $apellido_paterno = $partes[1];
                        $fecha = $partes[2];
                        $carnet = $partes[3];

                        // Extraer iniciales
                        $inicial_nombre = strtoupper(substr($nombre, 0, 1));
                        $inicial_apellido = strtoupper(substr($apellido_paterno, 0, 1));

                        // Extraer día de la fecha
                        $dia = substr($fecha, 0, 2); // 12/06/99 → "12"

                        // Extraer dos primeros dígitos del carnet
                        $ci_dos = substr($carnet, 0, 2);

                        // Concatenar para formar el código
                        $codigo = $inicial_nombre . $inicial_apellido . $dia . $ci_dos;

                        echo "<p class='mt-3'><strong>Código generado:</strong> $codigo</p>";
                    } else {
                        echo "<p class='mt-3 text-danger'>Por favor introduce al menos: nombre, apellido, fecha y carnet.</p>";
                    }
                }
                ?>
            </div>
        </div>

        <!-- Formulario para contar palabras pentavocálicas -->
<div class="card mb-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
                <label for="frase_penta" class="form-label">Introduce una frase para contar palabras pentavocálicas:</label>
                <input type="text" class="form-control" name="frase_penta" required>
            </div>
            <button type="submit" name="contar_penta" class="btn btn-success">Contar Pentavocálicas</button>
        </form>

        <?php
        // Función para verificar si una palabra es pentavocálica
        function esPentavocalica($palabra) {
            $palabra = strtolower($palabra);
            $vocales = ['a', 'e', 'i', 'o', 'u'];
            foreach ($vocales as $v) {
                if (strpos($palabra, $v) === false) {
                    return false;
                }
            }
            return true;
        }

        if (isset($_POST["contar_penta"])) {
            $frase = $_POST["frase_penta"];
            $frase = strtolower($frase);
            $frase = preg_replace('/[^a-záéíóúüñ\s]/u', '', $frase); // quitar signos
            $palabras = explode(" ", $frase);

            $contador = 0;
            $encontradas = [];

            foreach ($palabras as $p) {
                if (esPentavocalica($p)) {
                    $contador++;
                    $encontradas[] = $p;
                }
            }

            echo "<p class='mt-3'><strong>La frase tiene $contador palabra(s) pentavocálica(s).</strong></p>";
            if ($contador > 0) {
                echo "<p><strong>Palabras encontradas:</strong> " . implode(", ", $encontradas) . "</p>";
            }
        }
        ?>
    </div>
</div>

<!-- Formulario para calcular dígito de control ISBN-10 -->
<div class="card mb-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
                <label for="isbn" class="form-label">Introduce los primeros 9 dígitos del ISBN-10 (solo números):</label>
                <input type="text" class="form-control" name="isbn_base" maxlength="9" required>
            </div>
            <button type="submit" name="calcular_isbn" class="btn btn-warning">Calcular Dígito de Control</button>
        </form>

        <?php
        if (isset($_POST["calcular_isbn"])) {
            $isbn = $_POST["isbn_base"];

            // Validar que tiene 9 dígitos numéricos
            if (preg_match('/^\d{9}$/', $isbn)) {
                $suma = 0;
                for ($i = 0; $i < 9; $i++) {
                    $digito = intval($isbn[$i]);
                    $peso = 10 - $i;
                    $suma += $digito * $peso;
                }

                $residuo = $suma % 11;
                $digito_control = 11 - $residuo;

                if ($digito_control == 10) {
                    $digito_control = "X";
                } elseif ($digito_control == 11) {
                    $digito_control = "0";
                }

                echo "<p class='mt-3'><strong>ISBN completo:</strong> $isbn-$digito_control</p>";
            } else {
                echo "<p class='mt-3 text-danger'>Debes ingresar exactamente 9 dígitos numéricos.</p>";
            }
        }
        ?>
    </div>
</div>


<!-- Formulario para contar repeticiones de una palabra -->
<div class="card mb-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
                <label for="frase" class="form-label">Introduce la frase:</label>
                <input type="text" class="form-control" name="frase" required>
            </div>
            <div class="mb-3">
                <label for="palabra" class="form-label">Introduce la palabra a buscar:</label>
                <input type="text" class="form-control" name="palabra" required>
            </div>
            <button type="submit" name="contar" class="btn btn-success">Contar Repeticiones</button>
        </form>

        <?php
        if (isset($_POST["contar"])) {
            $frase = strtolower($_POST["frase"]);
            $palabra = strtolower(trim($_POST["palabra"]));

            // Dividir la frase en palabras ignorando signos de puntuación
            $palabras = preg_split("/[\s,.;:!?]+/", $frase);
            $contador = 0;

            foreach ($palabras as $p) {
                if ($p === $palabra) {
                    $contador++;
                }
            }

            echo "<p class='mt-3'><strong>\"$palabra\"</strong> se repite <strong>$contador</strong> vez(es) en la frase.</p>";
        }
        ?>
    </div>
</div>
    
    <!-- Formulario para modificar la palabra del centro -->
<div class="card mb-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
                <label for="frase" class="form-label">Introduce una frase:</label>
                <input type="text" class="form-control" name="frase" required>
            </div>
            <button type="submit" name="modificar" class="btn btn-danger">Modificar Frase</button>
        </form>

        <?php
        if (isset($_POST["modificar"])) {
            $frase_original = trim($_POST["frase"]);

            // Separar palabras ignorando puntuación
            $palabras = preg_split('/\s+/', $frase_original);
            $cantidad = count($palabras);

            if ($cantidad % 2 == 1) {
                $indice_central = floor($cantidad / 2);
                $palabras[$indice_central] = "MECA";
                $frase_modificada = implode(" ", $palabras);

                echo "<p class='mt-3'><strong>Frase modificada:</strong> $frase_modificada</p>";
            } else {
                echo "<p class='mt-3'><strong>Frase original (cantidad par de palabras):</strong> $frase_original</p>";
            }

            echo "<p class='mt-2'><strong>Total de palabras:</strong> $cantidad</p>";
        }
        ?>
    </div>
</div>

    

    </div>

    <!-- Agregar enlace a Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
