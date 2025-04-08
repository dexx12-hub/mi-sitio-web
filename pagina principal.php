<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Principal</title>
  <!-- Enlace a Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }
    .container {
      text-align: center;
      margin-top: 100px;
    }
    .btn-lg {
      padding: 15px 40px;
      font-size: 18px;
    }
    .btn-custom {
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-custom:hover {
      background-color: #0056b3;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    .btn-alt {
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-alt:hover {
      background-color: #218838;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    .btn-secondary-custom {
      background-color: #ffc107;
      color: white;
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-secondary-custom:hover {
      background-color: #e0a800;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body>

  <div class="container">
    <h1 class="display-4 mb-4">Bienvenido a la Página Principal</h1>
    <p class="lead mb-5">Elige una opción para continuar:</p>

    <!-- Botón para redirigir a practica3.php -->
    <button onclick="window.location.href='practica1tew.php';" class="btn btn-custom btn-lg mb-3">Ir a Practica 1</button>

    <br>

    <!-- Botón para redirigir a practica4.php -->
    <button onclick="window.location.href='practica2tew.php';" class="btn btn-alt btn-lg mb-3">Ir a Practica 2</button>

    <br>

    <!-- Botón adicional 1 para redirigir a otra página -->
    <button onclick="window.location.href='practica3.php';" class="btn btn-secondary-custom btn-lg mb-3">PRACTICa 3</button>

    <br>

    <!-- Botón adicional 2 para redirigir a otra página -->
    <button onclick="window.location.href='practica4.php';" class="btn btn-info btn-lg mb-3">PRACTICA 4</button>

  </div>

  <!-- Enlace a Bootstrap JS y dependencias -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
