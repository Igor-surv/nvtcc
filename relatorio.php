<!DOCTYPE html>
<html>
<head>
    <title>Últimas Alterações do Banco de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Últimas Alterações do Banco de Dados</h1>
    <table>
        <tr>
            <th>Data</th>
            <th>Tabela</th>
            <th>Alteração</th>
        </tr>
        <?php
            // Inclui o arquivo de conexão com o banco de dados
            require_once 'config.php';

            // Executa uma consulta para recuperar as últimas alterações
            $sql = "SELECT * FROM alterations ORDER BY data DESC LIMIT 10";
            $result = mysqli_query($conn, $sql);

            // Verifica se a consulta foi bem-sucedida
            if ($result) {
                // Loop através dos resultados e exibe-os na tabela
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['data'] . "</td>";
                    echo "<td>" . $row['tabela'] . "</td>";
                    echo "<td>" . $row['alteracao'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Erro ao recuperar alterações: " . mysqli_error($conn) . "</td></tr>";
            }

            // Fecha a conexão com o banco de dados
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>