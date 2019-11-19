<?php

require_once "../models/conexao.php";
//pega o id do item que o usuario quer deletar
$codigo = $_GET['id'];

//instrucao sql
$sql = "DELETE FROM tb_professores WHERE id_prof = $codigo";
$msg = '';

//executa a instrucao
if ($conn->query($sql)) {
    //se deu certo, guarda a msg
    $msg =  "Registro deletado.";
} else {
    $msg = "Erro ao deletar: " . $conn->error;
}
$conn->close();

//ao final mostra a msg
echo "<script>
        alert(\"$msg\");
        document.location='../index.php';
      </script>";


