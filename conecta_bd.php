<?php
$servername = "localhost";
$username = "root";
$password = "";
$banco_de_dados = "site_receitas";

try {
  $db = new PDO("mysql:host=$servername;dbname=$banco_de_dados;charset=utf8", 
  $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Falha ao conectar no Banco de dados: " . $e->getMessage();
}
?>