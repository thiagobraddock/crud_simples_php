<?php

session_start();
//se o usuario nao fez login e tentar acessar esta pagina
if((!isset ($_SESSION['user'])) )
{
    //mostra a msg de erro
    echo 'VC NAO TEM PERMISSAO';
    //após 3 segundos direciona o usuario para fazer login
    header("refresh:3;url=http://localhost/teste-script/views/login.php");
    exit();
}

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
        document.location='index.php';
      </script>";


