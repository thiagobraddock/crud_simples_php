<?php
//verifica se o usuario fez o login
session_start();
if (empty($_SESSION['user'])) {
    header('location: ../views/login.php');
}

require_once "../models/conexao.php";
$sql = "SELECT id_prof,nome, email, frase_foda FROM tb_professores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "0 resultados";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="container">
            <nav class="menu">
                <a href="">Home</a>
                <a href="">Cadastros</a>
                <a href="">Consultas</a>
            </nav>
            <div class="logout"><i class="fa fa-user" style="font-size:24px"></i> Olá <?php echo $_SESSION['user']; ?>, <a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></div>
        </div>
    </header>

    <div class="container">
         <!-- Cabecalho da tabela -->
    <table style="border-collapse: collapse">
            <tr>
                <th colspan="2">AÇÃO</th>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Frase Foda</th>
            </tr>
    <!-- loop para buscar os registros e printar dentro da tabela -->
    <?php
    foreach ($row as $teacher) {
        ?>
        
            <tr>
                <td class="acao"><a href="deletar.php?id=<?php echo $teacher["id_prof"]; ?>" onclick="return confirm('Deseja excluir')"><i class="fa fa-trash"></i></a></td>
                <td class="acao"><i class="fa fa-edit"></i></td>
                <td><?php echo $teacher["nome"]; ?></td>
                <td><?php echo $teacher["email"]; ?></td>
                <td><?php echo $teacher["frase_foda"]; ?></td>
            </tr>
    <?php        
        }
    ?>
    </table>


    </div>

</body>

</html>