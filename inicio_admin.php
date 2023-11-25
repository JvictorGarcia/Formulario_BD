<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title></title> -->
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/dark_mode.css">
    <link rel="stylesheet" href="./css/tabela.css">
</head>

<body>
    <!-- Menu Responsive Topnav with Dropdown -->
    <!-- Fonte: https://www.w3schools.com/howto/howto_js_responsive_navbar_dropdown.asp -->
    <div class="topnav" id="myTopnav">
        <a href="login.php" class="active">Login</a>
        <a href="index.php">Home</a>        
        <a href="pag_cad_user.php">Cadastrar Usuário</a>
        <a href="pag_cad_receitas.php">Cadastrar Receita</a>
        <a href="sair.php">Logoff</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <!-- Fim - Menu Responsive Topnav with Dropdown -->
    <br><br>
    <!-- Inicio do código do Dark mode -->
    <label class="switch">
        <input type="checkbox" onclick="toggleDarkMode()">
        <span class="slider round">
            <span class="icon moon">
                <img src="img/lua.svg" alt="Lua" width="24" height="24">
            </span>
            <span class="icon sun">
                <img src="img/sol.svg" alt="Sol" width="24" height="24">
            </span>
        </span>
    </label>
    <!-- Fim do código do Dark mode -->
    <script src="./js/darkmode.js"></script>
    <script src="./js/menu.js"></script>