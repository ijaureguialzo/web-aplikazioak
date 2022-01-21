<!doctype html>
<html lang="es">
<head>
    <title></title>
</head>
<body>

<form action="ejer01.php" method="post">
    <input type="text" name="A"/>
    <input type="text" name="B"/>
    <input type="submit"/>
</form>

<?php
$a = $_POST['A'];
$b = $_POST['B'];

if ($a == $b) {
    echo '<p>A y B son iguales</p>';
} else {
    if ($a > $b) {
        echo '<p>A es mayor que B</p>';
    } else {
        echo '<p>B es mayor que A</p>';
    }
}
?>

</body>
</html>
