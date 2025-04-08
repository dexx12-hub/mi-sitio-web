<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Prácticas TEW-500</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Prácticas TEW-500</h1>
        <div class="row mt-4">
            <!-- Formulario para los ejercicios -->
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Ejercicios</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <!-- Ejercicio A -->
                            <div class="form-group">
                                <label for="numeros">Ingrese números positivos (separados por comas):</label>
                                <input type="text" class="form-control" id="numeros" name="numeros" placeholder="Ejemplo: 1,2,3">
                                <button type="submit" class="btn btn-primary mt-2" name="calcularA">Calcular A</button>
                            </div>

                            <!-- Ejercicio B -->
                            <div class="form-group">
                                <label for="numerosB">Ingrese N números enteros positivos (separados por comas):</label>
                                <input type="text" class="form-control" id="numerosB" name="numerosB" placeholder="Ejemplo: 6,28,12">
                                <button type="submit" class="btn btn-primary mt-2" name="calcularB">Calcular B</button>
                            </div>

                            <!-- Ejercicio C -->
                            <div class="form-group">
                                <label for="numerosC">Ingrese T números positivos (separados por comas):</label>
                                <input type="text" class="form-control" id="numerosC" name="numerosC" placeholder="Ejemplo: 123,456">
                                <button type="submit" class="btn btn-primary mt-2" name="calcularC">Calcular C</button>
                            </div>

                            <!-- Ejercicio D -->
                            <div class="form-group">
                                <label for="numerosD">Ingrese P números (separados por comas):</label>
                                <input type="text" class="form-control" id="numerosD" name="numerosD" placeholder="Ejemplo: 2468">
                                <button type="submit" class="btn btn-primary mt-2" name="calcularD">Calcular D</button>
                            </div>

                            <!-- Ejercicio E -->
                            <div class="form-group">
                                <label for="numerosE">Ingrese dos números A y B (separados por coma):</label>
                                <input type="text" class="form-control" id="numerosE" name="numerosE" placeholder="Ejemplo: 123,456">
                                <button type="submit" class="btn btn-primary mt-2" name="calcularE">Calcular E</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ejercicio A
            if (isset($_POST['calcularA'])) {
                if (!empty($_POST['numeros'])) {
                    $numeros = array_map('intval', explode(',', $_POST['numeros']));
                    echo "<div class='mt-4'><h3>Resultados Ejercicio A:</h3>";
                    echo "<div class='alert alert-info'>Primos: " . contarPrimos($numeros) . "</div>";
                    echo "<div class='alert alert-info'>Suma de primos: " . sumaPrimos($numeros) . "</div>";
                    echo "<div class='alert alert-info'>Perfectos: " . contarPerfectos($numeros) . "</div>";
                    echo "<div class='alert alert-info'>Suma de perfectos: " . sumaPerfectos($numeros) . "</div>";
                    echo "<div class='alert alert-info'>No primos: " . contarNoPrimos($numeros) . "</div>";
                    echo "<div class='alert alert-info'>Suma de no primos: " . sumaNoPrimos($numeros) . "</div>";
                    echo "<div class='alert alert-info'>Promedio: " . promedio($numeros) . "</div></div>";
                } else {
                    echo "<div class='mt-4'><h3>Error:</h3> <div class='alert alert-danger'>Debe ingresar números para el Ejercicio A.</div></div>";
                }
            }

            // Ejercicio B
            if (isset($_POST['calcularB'])) {
                if (!empty($_POST['numerosB'])) {
                    $numerosB = array_map('intval', explode(',', $_POST['numerosB']));
                    echo "<div class='mt-4'><h3>Resultados Ejercicio B:</h3>";
                    $m = '';
                    foreach ($numerosB as $n) {
                        if (esPerfecto($n)) {
                            $divisores = divisores($n);
                            $m .= implode('', $divisores);
                        }
                    }
                    echo "<div class='alert alert-info'>Número M formado por los divisores de los números perfectos: " . $m . "</div></div>";
                } else {
                    echo "<div class='mt-4'><h3>Error:</h3> <div class='alert alert-danger'>Debe ingresar números para el Ejercicio B.</div></div>";
                }
            }

            // Ejercicio C
            if (isset($_POST['calcularC'])) {
                if (!empty($_POST['numerosC'])) {
                    $numerosC = array_map('intval', explode(',', $_POST['numerosC']));
                    echo "<div class='mt-4'><h3>Resultados Ejercicio C:</h3>";
                    foreach ($numerosC as $n) {
                        $rotaciones = rotarNumeros($n);
                        $primos = array_filter($rotaciones, 'esPrimo');
                        if ($primos) {
                            echo "<div class='alert alert-info'>Número: $n - Rotaciones: " . implode(', ', $rotaciones) . " - Primos: " . implode(', ', $primos) . "</div>";
                        } else {
                            echo "<div class='alert alert-info'>Número: $n - Rotaciones: " . implode(', ', $rotaciones) . " - No hay números primos.</div>";
                        }
                    }
                    echo "</div>";
                } else {
                    echo "<div class='mt-4'><h3>Error:</h3> <div class='alert alert-danger'>Debe ingresar números para el Ejercicio C.</div></div>";
                }
            }

            // Ejercicio D
            if (isset($_POST['calcularD'])) {
                if (!empty($_POST['numerosD'])) {
                    $numerosD = array_map('intval', explode(',', $_POST['numerosD']));
                    echo "<div class='mt-4'><h3>Resultados Ejercicio D:</h3>";
                    foreach ($numerosD as $n) {
                        $descendente = generarDescendentePares($n);
                        echo "<div class='alert alert-info'>Número: $n - Números descendentes de dígitos pares: " . implode(', ', $descendente) . "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<div class='mt-4'><h3>Error:</h3> <div class='alert alert-danger'>Debe ingresar números para el Ejercicio D.</div></div>";
                }
            }

            // Ejercicio E
            if (isset($_POST['calcularE'])) {
                if (!empty($_POST['numerosE'])) {
                    $numerosE = array_map('intval', explode(',', $_POST['numerosE']));
                    if (count($numerosE) == 2) {
                        $resultadoE = procesarNumerosE($numerosE[0], $numerosE[1]);
                        echo "<div class='mt-4'><h3>Resultados Ejercicio E:</h3>";
                        echo "<div class='alert alert-info'>A: " . $resultadoE['A'] . " - Ordenado: " . $resultadoE['ordenadoA'] . "</div>";
                        echo "<div class='alert alert-info'>B: " . $resultadoE['B'] . " - Ordenado: " . $resultadoE['ordenadoB'] . "</div>";
                        echo "<div class='alert alert-info'>W: " . $resultadoE['W'] . "</div></div>";
                    } else {
                        echo "<div class='mt-4'><h3>Error:</h3> <div class='alert alert-danger'>Debe ingresar exactamente dos números.</div></div>";
                    }
                } else {
                    echo "<div class='mt-4'><h3>Error:</h3> <div class='alert alert-danger'>Debe ingresar números para el Ejercicio E.</div></div>";
                }
            }
        }

        // Funciones
        function esPrimo($n) {
            if ($n <= 1) return false;
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) return false;
            }
            return true;
        }

        function contarPrimos($numeros) {
            return count(array_filter($numeros, 'esPrimo'));
        }

        function sumaPrimos($numeros) {
            return array_sum(array_filter($numeros, 'esPrimo'));
        }

        function esPerfecto($n) {
            $suma = 0;
            for ($i = 1; $i < $n; $i++) {
                if ($n % $i == 0) $suma += $i;
            }
            return $suma == $n;
        }

        function contarPerfectos($numeros) {
            return count(array_filter($numeros, 'esPerfecto'));
        }

        function sumaPerfectos($numeros) {
            return array_sum(array_filter($numeros, 'esPerfecto'));
        }

        function contarNoPrimos($numeros) {
            return count(array_filter($numeros, function($n) { return !esPrimo($n); }));
        }

        function sumaNoPrimos($numeros) {
            return array_sum(array_filter($numeros, function($n) { return !esPrimo($n); }));
        }

        function promedio($numeros) {
            return array_sum($numeros) / count($numeros);
        }

        function divisores($n) {
            $divisores = [];
            for ($i = 1; $i < $n; $i++) {
                if ($n % $i == 0) {
                    $divisores[] = $i;
                }
            }
            return $divisores;
        }

        function rotarNumeros($n) {
            $rotaciones = [];
            $numStr = strval($n);
            $longitud = strlen($numStr);
            for ($i = 0; $i < $longitud; $i++) {
                $rotaciones[] = intval(substr($numStr, $i) . substr($numStr, 0, $i));
            }
            return $rotaciones;
        }

        function generarDescendentePares($n) {
            $numStr = strval($n);
            $pares = array_filter(str_split($numStr), function($digit) {
                return $digit % 2 == 0;
            });
            sort($pares);
            $descendente = implode('', array_reverse($pares));
            return $pares ? [$descendente] : [];
        }

        function procesarNumerosE($A, $B) {
            $ordenadoA = ordenarDigitos($A);
            $ordenadoB = ordenarDigitos($B);
            $W = unirYOrdenar($ordenadoA, $ordenadoB);
            return [
                'A' => $A,
                'ordenadoA' => $ordenadoA,
                'B' => $B,
                'ordenadoB' => $ordenadoB,
                'W' => $W
            ];
        }

        function ordenarDigitos($n) {
            $digitos = str_split($n);
            sort($digitos);
            return implode('', array_unique($digitos));
        }

        function unirYOrdenar($A, $B) {
            $union = str_split($A . $B);
            sort($union);
            return implode('', array_unique($union));
        }
        ?>
    </div>
</body>
</html>
