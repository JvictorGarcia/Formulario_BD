<?php
session_start();
echo "Você está logado com ID: " . $_SESSION['id_usuario'] . "<br>";
echo "O nome do usuário é: " . $_SESSION['nome']  . "<br>";
echo "O E-mail do usuário é: " . $_SESSION['email']  . "<br>";