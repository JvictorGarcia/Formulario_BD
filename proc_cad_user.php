<?php
require "validar_login.php";
if ( !empty($_POST['nome']) &&
  !empty($_POST['email']) &&
  !empty($_POST['senha'])
) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    require "conecta_bd.php";
    $stmt = $db->prepare("INSERT INTO usuarios (id_usuario, nome, email, senha) 
    VALUES (null, :nome, :email, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    if ($stmt->execute()) {
        $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);  
        if ($usuario) {
          $_SESSION['id_usuario'] = $usuario['id_usuario'];
          $_SESSION['email'] = $usuario['email'];
          $_SESSION['nome'] = $usuario['nome'];
          header("Location: pagina_administrativa.php");
          exit();
        }
    }
}else{
    echo "Por favor preencha todos os campos";
}
