<?php require ("conecta_bd.php"); ?>
<div class="table-container">
    <div class="recipes-container">
        <?php
        // Consulta o banco de dados para encontrar um usuário com o email fornecido
        $consulta = $db->query("SELECT * FROM receitas;");
        $receitas = $consulta->fetchAll();

        foreach ($receitas as $receita) {
            echo "<div class='recipe'>";
            echo "<a href='receita_individual.php?id_receita={$receita['id_receitas']}'>";
            echo "<img src='data:image/jpeg;base64," . base64_encode($receita['foto']) . "' alt='Foto Receita' class='recipe-img'>";
            echo "<p class='recipe-name'>" . $receita['nome'] . "</p>";
            echo "</a>";
            echo "</div>";      
        }
        ?>
    </div>
</div>
