<?php
session_start();
if ( !empty($_POST['email']) &&  !empty($_POST['senha']) ) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    require "conecta_bd.php";
      // Consulta o banco de dados para encontrar um usuário com o email fornecido
      $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
      $stmt->execute([$email]);
      $usuario = $stmt->fetch(PDO::FETCH_ASSOC);  
      if ($usuario) {
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['nome'] = $usuario['nome'];
        header("Location: pagina_administrativa.php");
        exit();      
      }else{
        header("Location: login.php");
        exit();
      }       
}else{
    echo "Por favor preencha todos os campos";
}
