<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Prácticas TEW-500 - Ejercicios</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Prácticas TEW-500 - Ejercicios</h1>
        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Ejercicios</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <!-- Ejercicio 1 -->
                            <div class="form-group">
                                <label for="P">Ingrese P:</label>
                                <input type="number" class="form-control" id="P" name="P" placeholder="Ejemplo: 5">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular1">Calcular</button>
                            </div>

                            <!-- Ejercicio 2 -->
                            <div class="form-group">
                                <label for="M">Ingrese M:</label>
                                <input type="number" class="form-control" id="M" name="M" placeholder="Ejemplo: 10">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular2">Calcular</button>
                            </div>

                            <!-- Ejercicio 3 -->
                            <div class="form-group">
                                <label for="K">Ingrese K:</label>
                                <input type="number" class="form-control" id="K" name="K" placeholder="Ejemplo: 7">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular3">Calcular</button>
                            </div>

                            <!-- Ejercicio 4 -->
                            <div class="form-group">
                                <label for="N">Ingrese N:</label>
                                <input type="number" class="form-control" id="N" name="N" placeholder="Ejemplo: 8">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular4">Calcular</button>
                            </div>

                            <!-- Ejercicio 5 -->
                            <div class="form-group">
                                <label for="A">Ingrese A:</label>
                                <input type="number" class="form-control" id="A" name="A" placeholder="Ejemplo: 6">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular5">Calcular</button>
                            </div>

                            <!-- Ejercicio 6 -->
                            <div class="form-group">
                                <label for="N6">Ingrese N:</label>
                                <input type="number" class="form-control" id="N6" name="N6" placeholder="Ejemplo: 4">
                                <label for="J">Ingrese J:</label>
                                <input type="number" class="form-control" id="J" name="J" placeholder="Ejemplo: 2">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular6">Calcular</button>
                            </div>

                            <!-- Ejercicio 7 -->
                            <div class="form-group">
                                <label for="N7">Ingrese N:</label>
                                <input type="number" class="form-control" id="N7" name="N7" placeholder="Ejemplo: 5">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular7">Calcular</button>
                            </div>

                            <!-- Ejercicio 8 -->
                            <div class="form-group">
                                <label for="K8">Ingrese K:</label>
                                <input type="number" class="form-control" id="K8" name="K8" placeholder="Ejemplo: 9">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular8">Calcular</button>
                            </div>

                            <!-- Ejercicio 9 -->
                            <div class="form-group">
                                <label for="F">Ingrese F:</label>
                                <input type="number" class="form-control" id="F" name="F" placeholder="Ejemplo: 10">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular9">Calcular</button>
                            </div>

                            <!-- Ejercicio 10 -->
                            <div class="form-group">
                                <label for="G">Ingrese G:</label>
                                <input type="number" class="form-control" id="G" name="G" placeholder="Ejemplo: 12">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular10">Calcular</button>
                            </div>

                            <!-- Ejercicio 11 -->
                            <div class="form-group">
                                <label for="B">Ingrese B:</label>
                                <input type="number" class="form-control" id="B" name="B" placeholder="Ejemplo: 6">
                                <button type="submit" class="btn btn-primary mt-2" name="calcular11">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ejercicio 1
            if (isset($_POST['calcular1']) && !empty($_POST['P'])) {
                $P = intval($_POST['P']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 1:</h3><div class='alert alert-info'>" . generarSecuencia1($P) . "</div></div>";
            }

            // Ejercicio 2
            if (isset($_POST['calcular2']) && !empty($_POST['M'])) {
                $M = intval($_POST['M']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 2:</h3><div class='alert alert-info'>" . generarSecuencia2($M) . "</div></div>";
            }

            // Ejercicio 3
            if (isset($_POST['calcular3']) && !empty($_POST['K'])) {
                $K = intval($_POST['K']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 3:</h3><div class='alert alert-info'>" . generarSecuencia3($K) . "</div></div>";
            }

            // Ejercicio 4
            if (isset($_POST['calcular4']) && !empty($_POST['N'])) {
                $N = intval($_POST['N']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 4:</h3><div class='alert alert-info'>" . generarSecuencia4($N) . "</div></div>";
            }

            // Ejercicio 5
            if (isset($_POST['calcular5']) && !empty($_POST['A'])) {
                $A = intval($_POST['A']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 5:</h3><div class='alert alert-info'>" . generarSecuencia5($A) . "</div></div>";
            }

            // Ejercicio 6
            if (isset($_POST['calcular6']) && !empty($_POST['N6']) && !empty($_POST['J'])) {
                $N6 = intval($_POST['N6']);
                $J = intval($_POST['J']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 6:</h3><div class='alert alert-info'>" . generarSecuencia6($N6, $J) . "</div></div>";
            }

            // Ejercicio 7
            if (isset($_POST['calcular7']) && !empty($_POST['N7'])) {
                $N7 = intval($_POST['N7']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 7:</h3><div class='alert alert-info'>" . generarSecuencia7($N7) . "</div></div>";
            }

            // Ejercicio 8
            if (isset($_POST['calcular8']) && !empty($_POST['K8'])) {
                $K8 = intval($_POST['K8']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 8:</h3><div class='alert alert-info'>" . generarSecuencia8($K8) . "</div></div>";
            }

            // Ejercicio 9
            if (isset($_POST['calcular9']) && !empty($_POST['F'])) {
                $F = intval($_POST['F']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 9:</h3><div class='alert alert-info'>" . generarSecuencia9($F) . "</div></div>";
            }

            // Ejercicio 10
            if (isset($_POST['calcular10']) && !empty($_POST['G'])) {
                $G = intval($_POST['G']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 10:</h3><div class='alert alert-info'>" . generarSecuencia10($G) . "</div></div>";
            }

            // Ejercicio 11
            if (isset($_POST['calcular11']) && !empty($_POST['B'])) {
                $B = intval($_POST['B']);
                echo "<div class='mt-4'><h3>Resultados Ejercicio 11:</h3><div class='alert alert-info'>" . generarTriangulo($B) . "</div></div>";
            }
        }

        // Funciones
        function generarSecuencia1($P) {
            $resultado = [];
            for ($i = 1; $i <= $P; $i++) {
                $resultado[] = ($i - 1) % 3 + 1; // 1, 2, 3, ...
            }
            return implode(',', $resultado);
        }

        function generarSecuencia2($M) {
            $resultado = [];
            for ($i = 1; $i <= $M; $i++) {
                if ($i <= 3) {
                    $resultado[] = $i;
                } else {
                    $resultado[] = 4 - ($i - 3) % 3; // 1, 2, 3, 3, 2, 1, ...
                }
            }
            return implode(',', $resultado);
        }

        function generarSecuencia3($K) {
            $resultado = [];
            for ($i = 0; $i < $K; $i++) {
                $resultado[] = $i < 5 ? 0 : 1; // 0s y 1s
            }
            return implode(',', $resultado);
        }

        function generarSecuencia4($N) {
            $resultado = [];
            for ($i = 0; $i < $N; $i++) {
                if ($i % 4 == 0) {
                    $resultado[] = 0;
                } else if ($i % 4 == 1) {
                    $resultado[] = 1;
                } else {
                    $resultado[] = 0;
                }
            }
            return implode(',', $resultado);
        }

        function generarSecuencia5($A) {
            $resultado = [];
            for ($i = 0; $i < $A; $i++) {
                if ($i % 3 == 0) {
                    $resultado[] = 0;
                } else if ($i % 3 == 1) {
                    $resultado[] = 1;
                } else {
                    $resultado[] = 0;
                }
            }
            return implode(',', $resultado);
        }

        function generarSecuencia6($N, $J) {
            $resultado = [];
            for ($i = 1; $i <= $N; $i++) {
                if ($i % $J == 0) {
                    $resultado[] = $i * 2; // Ejemplo: múltiplos de J
                } else {
                    $resultado[] = $i; // Números normales
                }
            }
            return implode(',', $resultado);
        }

        function generarSecuencia7($N) {
            $resultado = [];
            for ($i = 1; $i <= $N; $i++) {
                if ($i <= ($N + 1) / 2) {
                    $resultado[] = $i; // Ascendente
                } else {
                    $resultado[] = $N - ($i - 1); // Descendente
                }
            }
            return implode(',', $resultado);
        }

        function generarSecuencia8($K) {
            $resultado = [];
            for ($i = 1; $i <= $K; $i++) {
                if (sqrt($i) == floor(sqrt($i))) {
                    $resultado[] = $i; // Cuadrados perfectos
                } else {
                    $resultado[] = $i; // Números normales
                }
            }
            return implode(',', $resultado);
        }

        function generarSecuencia9($F) {
            $resultado = [];
            $a = 0;
            $b = 1;
            $c = 1;
            for ($i = 0; $i < $F; $i++) {
                if ($i < 2) {
                    $resultado[] = $i; // 0, 1, 1
                } else {
                    $resultado[] = $c; // Secuencia
                    $c = $a + $b; // Sumar los dos anteriores
                    $a = $b;
                    $b = $c;
                }
            }
            return implode(',', $resultado);
        }

        function generarSecuencia10($G) {
            $resultado = [];
            for ($i = 0; $i < $G; $i++) {
                if ($i < 2) {
                    $resultado[] = $i; // 0, 1
                } else {
                    $resultado[] = ($i % 2 == 0) ? pow($i, 2) : $i; // Cuadrados en posiciones pares
                }
            }
            return implode(',', $resultado);
        }

        function generarTriangulo($B) {
            $resultado = [];
            for ($i = $B; $i >= 1; $i--) {
                $fila = [];
                for ($j = 1; $j <= $i; $j++) {
                    $fila[] = 2 * $j - 1; // Números impares
                }
                $resultado[] = implode(', ', $fila);
            }
            return implode('<br>', $resultado);
        }
        ?>
    </div>
</body>
</html>
