<?php require('inicio.php'); ?>
<form action="proc_login.php" method="post">
<div class="table-container">    
    <table class="tabela">
        <tr>
            <th><label for="email">E-mail: </label></th>
            <th><input type="email" name="email" id="email"></th>
        </tr>
        <tr>
            <th><label for="senha">Senha: </label></th>
            <th><input type="password" name="senha"></th>
        </tr>
        <tr>
            <th></th>
            <th><button class="button" type="submit">Login</button></th>
        </tr>
    </table>
</div>    
</form>    

