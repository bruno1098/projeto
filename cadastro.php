<?php
require_once 'db_connect.php';
session_start();
    if(isset($_POST['bnt'])){
        $erros = array();
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $numero = mysqli_escape_string($connect, $_POST['numero']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);
        $confirm = mysqli_escape_string($connect, $_POST['confirm']);

        if(empty($nome) or empty($sobrenome) or empty($email) or empty($numero) or empty($senha) or empty($confirm)){
        $erros[] = "Campo precisa ser preenchido";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo2.css">
    <title>Cadastro</title>
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
                    <h1>Cadastre-se</h1>
                </div>
                <!--<div class="login-button">
                    <button><a href="login.html"> Entrar </a></button>
                </div>-->
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="firstname">Primeiro nome</label>
                    <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                </div>
                <div class="input-box">
                    <label for="lastname">Sobrenome</label>
                    <input id="lastname" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="input-box">
                    <label for="number">Celular</label>
                    <input id="number" type="tel" name="numero" placeholder="(xx) xxxx-xxxx" required>
                </div>
                <div class="input-box">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="input-box">
                    <label for="confirmpassword">Confirme sua senha</label>
                    <input id="confirmpassword" type="password" name="confirm" placeholder="Confirme sua senha" required>
                </div>
            </div>
            <div class="gender-group">
                <div class="gender-input">
                    <input type="radio" id="female" name="gender">
                    <label for="female">Feminino</label>
                </div>
                <div class="gender-input">
                    <input type="radio" id="male" name="gender">
                    <label for="male">Masculino</label>
                </div>
                <div class="gender-input">
                    <input type="radio" id="others" name="gender">
                    <label for="others">Outros</label>
                </div>
                <div class="gender-input">
                    <input type="radio" id="none" name="gender">
                    <label for="none">Prefiro não dizer</label>
                </div>

            </div>
            <div class="continue-button">
                <button type="submit" value="Verificar" name="btn">Continuar</button>
            </div>
        </form>
     </div>
</div>
</body>
isa
</html>