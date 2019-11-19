<?php

require_once "models/conexao.php";
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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        table{
            border: 1px solid black;
            font-size: 18px;
            font-family: tahoma;
            width: 60%;
            margin: 20px auto;
            table-layout: auto;
        }
        table th{
            background-color: #1E90FF;
            color: #fff
        }
        table th, td{
            padding: 10px;
            border: 1px solid black;
        }
        .fa{
            font-size: 20px; 
        }

        .fa-trash{color: red;}
        .fa-edit{color: green}
        .acao{text-align: center}
    </style>
</head>

<body>

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
                <td class="acao"><a href="admin/deletar.php?id=<?php echo $teacher["id_prof"]; ?>" onclick="return confirm('Deseja excluir')"><i class="fa fa-trash"></i></a></td>
                <td class="acao"><i class="fa fa-edit"></i></td>
                <td><?php echo $teacher["nome"]; ?></td>
                <td><?php echo $teacher["email"]; ?></td>
                <td><?php echo $teacher["frase_foda"]; ?></td>
            </tr>
    <?php        
        }
    ?>
    </table>

</body>

</html>