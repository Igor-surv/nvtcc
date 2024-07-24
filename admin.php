<?php
   require_once 'config.php';


    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn, $sql);

    if (!$result){
        die("Erro ao executar a consulta: ". mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    
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

    <div class="container">
        <h1>Administradores</h1>
        <table> 
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
                <tr>
                </tr>
            </thead>
            <tbody id="admin-list">
            <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['cpf']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['telefone']."</td>";
                echo "<td> 
                <a class='btn btn-sm btn-danger' href='delAdm.php?nome=$row[nome]' title='Deletar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                            </svg>
                        </a>
                </td>";
            }
            mysqli_close($conn);
            ?>
            </tbody>
        </table>
        <button> <a href="cadastroAdm.html"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg></a> </button>
    </div>
    
    <footer>
        <h6>© Site desenvolvido por InovaGest</h6>
    </footer>
</body>
</html>