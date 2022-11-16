<?php
include('db_connect.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo3.css">
    <title>Página de Login</title>
</head>
<body>
<div class="container">
     <div class="form-image">
        <img src="img/Img.png">
    </div>
        
    <div class="form">
        <form method="POST" action="">
            <div class="form-header">
                <div class="title">
                    <h1>Login</h1>
                </div>
            </div>
                
            <div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                </div>
               
                <div class="input-box">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="continue-button">
                    <button type="submit"> Entrar </button>
                </div>
            </div>
    
        </form>
     </div>
</div>
</body>
</html>