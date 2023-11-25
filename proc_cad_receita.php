<?php
require('validar_login.php');

if (
    !empty($_POST['nome']) &&
    !empty($_POST['ingredientes']) &&
    !empty($_POST['receita']) &&
    !empty($_FILES['foto']) &&
    !empty($_POST['categoria'])
) {
    $nome = $_POST['nome'];
    $ingredientes = $_POST['ingredientes'];
    $receita = $_POST['receita'];
    $categoria = $_POST['categoria'];

    // Processamento do upload da foto
    $foto = $_FILES['foto']['tmp_name'];
    $fotoConteudo = file_get_contents($foto);

    require 'conecta_bd.php';

    $stmt = $db->prepare("INSERT INTO receitas (id_receitas, nome, ingredientes, receita, foto, categoria, usuarios_id_usuario) 
    VALUES (null, :nome, :ingredientes, :receita, :foto, :categoria, :id_usuario)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':ingredientes', $ingredientes);
    $stmt->bindParam(':receita', $receita);
    $stmt->bindParam(':foto', $fotoConteudo);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->bindParam(':id_usuario', $_SESSION['id_usuario']); // Obtém o ID do usuário logado

    if ($stmt->execute()) {
        header("Location: pagina_administrativa.php");
        exit();
    } else {
        echo "Erro ao cadastrar a receita.";
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
