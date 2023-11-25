<?php
session_start();
if ( 
    isset($_SESSION['id_usuario']) && 
    isset($_SESSION['email']) && 
    isset($_SESSION['nome'])
    ) {
    # nada será feito
} else {
    # caso não estiver logado é enviado para página de login!
    header("Location: login.php");
    exit();
}


