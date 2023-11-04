<?php
if (isset($_POST['cadastrar'])) {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $check_senha = $_POST["senha"];
}

if ($senha != $check_senha) {

    die("As senhas não correspondem.");
}
$host = "localhost";
$banco = "formulario";
$user = "root";
$senha_user = "";

$con = mysqli_connect($host, $user, $senha_user, $banco);
if (!$con) {
    die("Conexão falhou." . mysqli_connect_errno());
}
$sql = "INSERT INTO usuarios(id_usuario, nome, cpf, senha) VALUES(null, '$nome', '$cpf', '$senha')";

$rs = mysqli_query($con, $sql);
if ($rs) {

    echo "Cadastrado realizado com sucesso!!";
}
