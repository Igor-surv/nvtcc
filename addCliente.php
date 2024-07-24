<?php
  require_once 'config.php';

  // Get form data
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $cpf = $_POST['cpf'];

  // Insert data into database
  $sql = "INSERT INTO clientes (nome, email, telefone, endereco, cpf) VALUES ('$nome', '$email', '$telefone', '$endereco', '$cpf')";
  if (mysqli_query($conn, $sql)) {
    echo "Adicionado com sucesso! <br> <a href=clientes.php> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-house' viewBox='0 0 16 16'>
            <path d='M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z'/>
        </svg>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);
?>