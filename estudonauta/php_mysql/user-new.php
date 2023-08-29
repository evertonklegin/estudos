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
    <title>Cadastrar Novo Usuário</title>
</head>
<body>
    
    <div id="corpo">
        <?php 
            if(!is_admin()) {
                echo msg_erro('Você não é administrador');
            } else {
                if (!isset($_POST['usuario'])) {
                    require "user-new-form.php";
                } else {
                    $usuario = $_POST['usuario'] ?? null;
                    $nome = $_POST['nome'] ?? null;
                    $senha1 = $_POST['senha1'] ?? null;
                    $senha2 = $_POST['senha2'] ?? null;
                    $tipo = $_POST['tipo'] ?? null;
                    
                    if($senha1 === $senha2) {
                        echo msg_sucesso("Tudo certo pra gravar");
                    } else {
                        echo msg_erro("Senhas não conferem. Repita o procedimento");
                    }

                    echo "Pronto para salvar dados";
                }
            }
            echo voltarHome();
        ?>
    </div>
</body>
</html>