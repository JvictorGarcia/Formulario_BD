<?php require('inicio.php'); ?>
<?php require("conecta_bd.php");

if (isset($_GET['id_receita'])) {
    $id_receita = $_GET['id_receita'];

    $stmt = $db->prepare("SELECT * FROM receitas WHERE id_receitas = ?");
    $stmt->execute([$id_receita]);
    $receita = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$receita) {
        // Redireciona para uma página de erro ou algo semelhante
        header("Location: erro.php");
        exit();
    }
} else {
    // Redireciona para uma página de erro ou algo semelhante
    header("Location: erro.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita:
        <?php echo $receita['nome']; ?>
    </title>
    <link rel="stylesheet" href="caminho/do/seu/arquivo/estilo.css">
</head>

<body>

    <div class="recipe-individual">
        <img src='data:image/jpeg;base64,<?php echo base64_encode($receita['foto']); ?>' alt='Foto Receita'
            class='recipe-img'>
        <h2 class='recipe-name'>
            <?php echo $receita['nome']; ?>
        </h2>
        <p class='recipe-ingredients'>
        <h2>Ingredientes:</h2>
        <?php echo nl2br($receita['ingredientes']); ?>
        </p>
        <p class='recipe-instructions'>
        <h2>Instruções:</h2>
        <?php echo nl2br($receita['receita']); ?>
        </p>
        <p class='recipe-category'>
        <h2>Categoria:</h2>
        <?php echo $receita['categoria']; ?>
        </p>
    </div>

</body>

</html>