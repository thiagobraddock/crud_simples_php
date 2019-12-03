<?php
       
    if(isset($_POST['txt_login']) && isset($_POST['txt_password'])){
        
        //recupera usuario e senha digitados
        $login = stripslashes($_POST['txt_login']);
        $senha = stripslashes($_POST['txt_password']);

        //adiciona a conexao
        require_once "../models/conexao.php";

        //instruçao de consulta
        $sql = "SELECT nome, username, passwd, status FROM tb_usuarios WHERE username = '$login' AND passwd = '$senha' AND STATUS = 1 ";
        echo $sql;
        //executa o sql
        $result = $conn->query($sql);

        //se foi retornado algum registro
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            //cria a sessao
            session_start();
            $_SESSION['user'] = $row['nome'];

            header('location: index.php');
        } else {
            session_start();
            $_SESSION['erro'] = 'Erro ao logar';
            header('location: ../views/login.php');
        }
        $conn->close();
        
    }
    else
    {
       header('location: ../views/login.php');
    }