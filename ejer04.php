<!doctype html>
<html lang="es">
<head>
    <title></title>
</head>
<body>

<form action="ejer04.php" method="post">
    <div>
        <label for="numero1">Número 1: </label>
        <input type="text" id="numero1" name="numero1"/>
    </div>
    <div>
        <label for="numero2">Número 2: </label>
        <input type="text" id="numero2" name="numero2"/>
    </div>
    <div>
        <label for="operacion">Operación: </label>
        <select id="operacion" name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
    </div>
    <input type="submit" value="Calcular"/>
</form>

<?php

if (isset($_POST['numero1'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

    if ($operacion == 'sumar') {
        echo '<p>El resultado es: ' . $numero1 + $numero2 . '</p>';
    } elseif ($operacion == 'restar') {
        echo '<p>El resultado es: ' . $numero1 - $numero2 . '</p>';
    } elseif ($operacion == 'multiplicar') {
        echo '<p>El resultado es: ' . $numero1 * $numero2 . '</p>';
    } elseif ($operacion == 'dividir') {
        echo '<p>El resultado es: ' . $numero1 / $numero2 . '</p>';
    } else {
        echo '<p>Operación no válida</p>';
    }

}

?>

</body>
</html>
