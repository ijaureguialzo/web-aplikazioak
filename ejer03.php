<!doctype html>
<html lang="es">
<head>
    <title></title>
</head>
<body>

<form action="ejer03.php" method="post">
    <div>
        <label for="usuario">Usuario: </label>
        <input type="text" id="usuario" name="usuario"/>
    </div>
    <div>
        <label for="contrasenya">Contraseña: </label>
        <input type="password" id="contrasenya" name="contrasenya"/>
    </div>
    <input type="submit"/>
</form>

<?php

if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $contrasenya = $_POST['contrasenya'];

    if (!isset($_POST['contrasenya'])) {
        echo '<p>Falta la contraseña</p>';
    } else {
        if ($usuario == 'admin' && $contrasenya == 'secret') {
            echo '<p>Ok, estás dentro</p>';
        } else {
            echo '<p>Vuelve a intentarlo...</p>';
        }
    }
}

?>

</body>
</html>
