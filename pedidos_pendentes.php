<?php
    require_once 'config.php';


    $sql = "SELECT * FROM pedidos";
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
    <link rel="stylesheet" type="text/css" href="pendentes.css">
    <title>Pendentes</title>
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

    <h2>Lista de pedidos</h2>
</form>
</form>
    </div>
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Item</th>
                <th>Quantidade</th>
                <th>ID do cliente</th>
                <th>Nome do cliente</th>
                <th>ID do administrador</th>
                <th>Detalhe do pedido</th>
                <th></th>
            </tr>
            <tr>
            </tr> 
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['item']."</td>";
                echo "<td>".$row['quantidade']."</td>";
                echo "<td>".$row['id_do_cliente']."</td>";
                echo "<td>".$row['nome_do_cliente']."</td>";
                echo "<td>".$row['id_do_admin']."</td>";
                echo "<td>".$row['detalhes']."</td>";
                echo "<td> 
                        <a class='btn btn-sm btn-primary' href='edit.php?id=$row[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                            <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
                            </svg>
                        </a>
                        <a class='btn btn-sm btn-danger' href='delete.php?id=$row[id]' title='Deletar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                            </svg>
                        </a>

                    </td>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>

    <button> 
        <br>
        <a href="addPedido.php"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7"/>
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
        </svg> </a> 
    </button>
    <footer>
        <h6>© Site desenvolvido por InovaGest</h6>
    </footer>
    
</body>
</html>