<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vectores en PHP</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container py-5">
    <h1 class="text-center mb-5 text-warning">Vectores en PHP</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">

        <!-- Generar Impares -->
        <div class="col">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Números Impares</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="n_impares" class="form-label">Ingrese N:</label>
                            <input type="number" class="form-control" name="n_impares" id="n_impares" required min="1">
                        </div>
                        <button type="submit" name="gen_impares" class="btn btn-warning w-100">Generar Impares</button>
                    </form>
                    <?php
                    if (isset($_POST["gen_impares"])) {
                        $n = intval($_POST["n_impares"]);
                        if ($n > 0) {
                            $A = [];
                            $num = 1;
                            for ($i = 0; $i < $n; $i++) {
                                $A[] = $num;
                                $num += 2;
                            }
                            echo "<div class='mt-3'><strong>Resultado:</strong><br>[ " . implode(", ", $A) . " ]</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Fibonacci -->
        <div class="col">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Serie Fibonacci</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="n_fibo" class="form-label">Ingrese N:</label>
                            <input type="number" class="form-control" name="n_fibo" id="n_fibo" required min="1">
                        </div>
                        <button type="submit" name="gen_fibo" class="btn btn-info w-100">Generar Fibonacci</button>
                    </form>
                    <?php
                    if (isset($_POST["gen_fibo"])) {
                        $n = intval($_POST["n_fibo"]);
                        if ($n > 0) {
                            $B = [];
                            for ($i = 0; $i < $n; $i++) {
                                $B[] = ($i < 2) ? $i : $B[$i - 1] + $B[$i - 2];
                            }
                            echo "<div class='mt-3'><strong>Resultado:</strong><br>[ " . implode(", ", $B) . " ]</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Patrón 1,0,1,1,0... -->
        <div class="col">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Patrón 1,0,1,1,0...</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="m" class="form-label">Ingrese M:</label>
                            <input type="number" class="form-control" name="m" id="m" required min="1">
                        </div>
                        <button type="submit" name="gen_patron" class="btn btn-success w-100">Generar Patrón</button>
                    </form>
                    <?php
                    if (isset($_POST["gen_patron"])) {
                        $m = intval($_POST["m"]);
                        $B = [];
                        $countOnes = 1;
                        while (count($B) < $m) {
                            for ($i = 0; $i < $countOnes && count($B) < $m; $i++) $B[] = 1;
                            if (count($B) < $m) $B[] = 0;
                            $countOnes++;
                        }
                        echo "<div class='mt-3'><strong>Resultado:</strong><br>[ " . implode(", ", $B) . " ]</div>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Invertir Vector -->
        <div class="col">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Invertir Vector</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="r" class="form-label">Ingrese M elementos (separados por comas):</label>
                            <input type="text" class="form-control" name="r" id="r" placeholder="Ej: 1,2,3,4" required>
                        </div>
                        <button type="submit" name="invertir" class="btn btn-primary w-100">Invertir</button>
                    </form>
                    <?php
                    if (isset($_POST["invertir"])) {
                        $R = array_map("intval", explode(",", trim($_POST["r"])));
                        for ($i = 0, $j = count($R) - 1; $i < $j; $i++, $j--) {
                            $temp = $R[$i];
                            $R[$i] = $R[$j];
                            $R[$j] = $temp;
                        }
                        echo "<div class='mt-3'><strong>Resultado:</strong><br>[ " . implode(", ", $R) . " ]</div>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Eliminar Duplicados -->
        <div class="col">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Eliminar Duplicados</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="j" class="form-label">Ingrese elementos (separados por comas):</label>
                            <input type="text" class="form-control" name="j" id="j" placeholder="Ej: 2,3,2,5" required>
                        </div>
                        <button type="submit" name="limpiar" class="btn btn-danger w-100">Limpiar</button>
                    </form>
                    <?php
                    if (isset($_POST["limpiar"])) {
                        $J = array_map("intval", explode(",", trim($_POST["j"])));
                        $M = count($J);
                        for ($i = 0; $i < $M; $i++) {
                            for ($j = $i + 1; $j < $M; $j++) {
                                if ($J[$i] == $J[$j]) {
                                    for ($k = $j; $k < $M - 1; $k++) $J[$k] = $J[$k + 1];
                                    $J[$M - 1] = 0;
                                    $M--;
                                    $j--;
                                }
                            }
                        }
                        echo "<div class='mt-3'><strong>Resultado:</strong><br>[ " . implode(", ", $J) . " ]</div>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Pares a la izquierda -->
        <div class="col">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Pares a la izquierda</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="b" class="form-label">Ingrese elementos (separados por comas):</label>
                            <input type="text" class="form-control" name="b" id="b" placeholder="Ej: 3,4,5,2" required>
                        </div>
                        <button type="submit" name="ordenar" class="btn btn-light text-dark w-100">Reordenar</button>
                    </form>
                    <?php
                    if (isset($_POST["ordenar"])) {
                        $B = array_map("intval", explode(",", trim($_POST["b"])));
                        $i = 0;
                        for ($j = 0; $j < count($B); $j++) {
                            if ($B[$j] % 2 == 0) {
                                $temp = $B[$i];
                                $B[$i] = $B[$j];
                                $B[$j] = $temp;
                                $i++;
                            }
                        }
                        echo "<div class='mt-3'><strong>Resultado:</strong><br>[ " . implode(", ", $B) . " ]</div>";
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap JS (opcional, por si usas componentes interactivos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
