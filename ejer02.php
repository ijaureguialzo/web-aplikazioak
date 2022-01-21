<!doctype html>
<html lang="es">
<head>
    <title></title>
</head>
<body>

<form action="ejer02.php" method="post">
    <label for="numero">Número: </label>
    <input type="text" id="numero" name="numero"/>
    <input type="submit"/>
</form>

<table border="1">
    <?php
    $n = $_POST['numero'];

    for ($i = 0; $i < 10; $i++) {
        echo '<tr>';
        echo "<td>$n</td>";
        echo "<td>*</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo '<td>' . $n * $i . '</td>';
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>
