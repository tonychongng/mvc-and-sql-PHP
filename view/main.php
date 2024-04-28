<?php
require_once 'controller/User.php';

$userController = new User();
$usuarios = $userController->obtenerUsuarios();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Lista de Usuarios</h2>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>País</th>
        <th>Funciones</th>
    </tr>

    <?php
    if ($usuarios && count($usuarios) > 0) {
        foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['apellido'] ?></td>
                <td><?= $usuario['pais'] ?></td>
                <td>
                    <a href=" ">Eliminar</a>
                    <a>Editar</a>
                </td>
            </tr>
        <?php } ?>

    <?php } else { ?>
        <h2>Ningún usuario encontrado</h2>
    <?php } ?>
</table>

</body>
</html>