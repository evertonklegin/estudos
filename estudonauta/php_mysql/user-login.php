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
    <title>Página de Login</title>
    <style>
        div#corpo {
            width: 270px;
            font-size: 15pt;
        }
        td{
            padding: 6px;
        }
    </style>
</head>
<body>
    <div id="corpo">
        <?php 
            $u = $_POST['usuario'] ?? null;
            $s = $_POST['senha'] ?? null;

            if (is_null($u) || is_null($s)) {
                require_once 'user-login-form.php';
            } else {
                echo "Dados foram passados...";
            }
        ?>
    </div>
</body>
</html>