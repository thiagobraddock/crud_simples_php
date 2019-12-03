<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bem Vindo</title>
  <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
<?php  session_start(); 
          if(isset($_SESSION['erro']))
            echo "<div class=\"alert\">
            <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
            <strong>Erro!</strong> Usuário ou Senha incorretos.
          </div>";
          session_destroy(); 
?>

  <div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">ACESSO SECRETO</h2>

    <form class="login-container" method="POST" action="../admin/logar.php">
      <p><input type="text" placeholder="Username" name="txt_login"></p>
      <p><input type="password" placeholder="Password" name="txt_password"></p>
      <p><input type="submit" value="Log in"></p>
    </form>
  </div>
</body>

</html>