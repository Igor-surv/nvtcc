<?php
    require_once 'config.php';

    $sql = "SELECT * FROM itens";
    $result = mysqli_query($conn, $sql);

    if (!$result){
        die("Erro ao executar a consulta: ". mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estoque.css">
    <title>Estoque</title>
</head>
<body>
    <aside>
        <div class="menu">
            <ul>
                <li><a href="home.php">Inicio</a></li>
                <li><a href="pedidos_pendentes.php">Pedidos</a></li>
                <li><a href="estoque.php">Estoque</a></li>
                <li><a href="#">Financias</a></li>
                <li><a href="#">Relatorios</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="admin.php">Administradores</a></li>
            </ul>
        </div>
    </aside>

    <h2>Gestão de itens no estoque</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Codigo</th>
                <th>Tipo</th>
            </tr>
            <tr>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['codigo']."</td>";
                echo "<td>".$row['tipo']."</td>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>