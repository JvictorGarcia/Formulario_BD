<?php 
require('inicio_admin.php'); 
require('validar_login.php');
?>
<form action="proc_cad_receita.php" method="post" enctype="multipart/form-data">
    <div class="table-container">
        <table class="tabela">
            <tr>
                <th><label for="nome">Nome da Receita:</label></th>
                <th><input type="text" name="nome" id="nome"></th>
            </tr>
            <tr>
                <th><label for="ingredientes">Ingredientes:</label></th>
                <th><textarea name="ingredientes" id="ingredientes" rows="4"></textarea></th>
            </tr>
            <tr>
                <th><label for="receita">Modo de Preparo:</label></th>
                <th><textarea name="receita" id="receita" rows="8"></textarea></th>
            </tr>
            <tr>
                <th><label for="foto">Foto:</label></th>
                <th><input type="file" name="foto" id="foto"></th>
            </tr>
            <tr>
                <th><label for="categoria">Categoria:</label></th>
                <th><input type="text" name="categoria" id="categoria"></th>
            </tr>
            <tr>
                <th></th>
                <th><button class="button" type="submit">Cadastrar Receita</button></th>
            </tr>
        </table>
    </div>
</form>
