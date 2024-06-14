<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> :|:CalculaDORA:|: </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #789FFA;
        }
        .card-header {
            background-color: #4A13B2;
            color: white;
        }
        .btn-suma {
            background-color: #E777FF;
            border-color: #BE43D8;
            color: white;
        }
        .btn-suma:hover {
            background-color: #CC78FA;
            border-color: #B22CFA;
        }
        .btn-resta {
            background-color: #8961FF;
            border-color: #6030EB;
            color: white;
        }
        .btn-resta:hover {
            background-color: #5D92E9;
            border-color: #1868E9;
        }
        .img-fluid {
            border-radius: 25px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
<span class="navbar-brand mb-0 h1">Calculadora</span>
</nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">.::Calculadora::.</h1>
                    </div>
                    <!-- Formulario para ingresar los datos -->
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="numero1">Dato 1:</label>
                                <input type="number" step="any" id="numero1" name="numero1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="numero2">Dato 2:</label>
                                <input type="number" step="any" id="numero2" name="numero2" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" name="operacion" value="suma" class="btn btn-suma mr-2">Sumar</button>
                                <button type="submit" name="operacion" value="resta" class="btn btn-resta">Restar</button>
                            </div>
                            <!-- Metodos para realizar Suma y resta -->
                        </form>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $numero1 = $_POST['numero1'];
                            $numero2 = $_POST['numero2'];
                            $operacion = $_POST['operacion'];
                            $resultado = 0;

                            switch ($operacion) {
                                case 'suma':
                                    $resultado = $numero1 + $numero2;
                                    break;
                                case 'resta':
                                    $resultado = $numero1 - $numero2;
                                    break;
                                default:
                                    echo "<div class='alert alert-danger mt-3'>Operación no válida</div>";
                                    exit();
                            }
                            echo "<div class='alert alert-success mt-3'>El resultado de la operación es: $resultado</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="arquitectura-ciudad-arte-digital-paisaje.jpg" alt="Imagen de Calculadora" class="img-fluid">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>