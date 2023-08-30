<!DOCTYPE html>
<?php
    require_once 'includes/login.php';
    require_once 'includes/banco.php';
    require_once 'includes/funcoes.php';
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <title>Editar Usúario</title>
</head>
<body>
    <div id="corpo">
        <?php
        if(!is_logado()) {
            echo msg_erro("Efetue <a href='user-login.php'>login</a> para poder editar os dados");
        } else {
            if(!isset($_POST['usuario'])) {
                include_once "user-edit-form.php";
            } else {
                echo msg_sucesso("Dados foram recebidos");
            }
        }
        ?>
        <?=voltarHome()?>
    </div>
    <?=require_once "rodape.php"?>
</body>
</html>