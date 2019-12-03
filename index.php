<?php
session_start();
$_SESSION['login'] = 'admin';

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
    <title>Site do Professor Foda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">

</head>

<body>

    <div class="container">


    <!-- loop para buscar os registros e printar dentro da tabela -->
    <?php
    foreach ($row as $teacher) {
        ?>
        <!-- Inicio da section -->
        <div class="referencia">
            <blockquote class="quote-box">
                <p class="origem">
                    <b><?php echo $teacher["nome"]; ?></b>
                </p>
                <p class="quotation-mark">
                    “
                </p>
                <p class="quote-text">
                    <?php echo $teacher["frase_foda"]; ?>
                </p>
                <p class="descricao">
                    — <?php echo $teacher["email"]; ?>
                </p>
            </blockquote>

        </div>
    <?php
    }
    ?>
</div>

</body>

</html>