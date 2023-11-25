<?php 
require('inicio_admin.php'); 
require("validar_login.php");
?>
<form action="proc_cad_user.php" method="post">
    <div class="table-container">
        <table class="tabela">
                <tr>
                    <th><label for="nome">Nome</label></th>
                    <th><input type="nome" name="nome" id="nome"></th>
                </tr>
                <tr>
                    <th><label for="email">E-mail</label></th>
                    <th><input type="email" name="email" id="email"></th>
                </tr>
                <tr>
                    <th><label for="senha">Senha</label></th>
                    <th><input type="password" name="senha"></th>
                </tr>
                <tr>
                    <th></th>
                    <th><button class="button" type="submit">Cadastrar</button></th>
                </tr>
    </div>
</form>