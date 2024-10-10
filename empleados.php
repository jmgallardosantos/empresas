<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <?php
    $pdo = new PDO('pgsql:host=localhost;dbname=datos', 'datos', 'datos');
    $stmt = $pdo->query('SELECT e.*, d.denominacion
                           FROM empleados e left join departamentos d
                           ON e.departamento_id=d.id
                       ORDER BY numero');
    ?>
    <table border="1">
        <thead>
            <th>Numero</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Id del departamento</th>
            <th>Departamentos</th>
        </thead>
        <tbody>
            <?php foreach ($stmt as $fila): ?>
                <tr>
                    <td><?= $fila['numero'] ?></td>
                    <td><?= $fila['nombre'] ?></td>
                    <td><?= $fila['apellidos'] ?></td>
                    <td><?= $fila['departamento_id'] ?></td>
                    <td><?= $fila['denominacion'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- // $filas = $stmt->fetchAll();
    // foreach ($filas as $fila) {
    //     var_dump($fila);
    // }
    // while ($fila = $stmt->fetch()) {
    //     var_dump($fila);
    // } -->
</body>
</html>
