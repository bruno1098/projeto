<?php
$con = mysqli_connect("localhost","id19676850_root","SampaBlast-2022","id19676850_blast");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$senha = $_POST['password'];
$genero = $_POST['confirmpassword'];

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
?>