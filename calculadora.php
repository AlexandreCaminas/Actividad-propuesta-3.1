<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números</title>
</head>
<body>
    <h2>Calculadora de Suma</h2>
    
    <?php
    $resultado = '';

    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        if (is_numeric($num1) && is_numeric($num2)) {
            $suma = $num1 + $num2;
            $resultado = "La suma de $num1 y $num2 es: $suma";
        } else {
            $resultado = "Por favor, asegúrate de ingresar números válidos.";
        }
    }
    ?>

    <form method="get" action="">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="text" name="num2" id="num2" required>
        <br>
        <button type="submit">Calcular la Suma</button>
    </form>

    <p><?php echo $resultado; ?></p>
</body>
</html>
