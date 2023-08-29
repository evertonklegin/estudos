<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
        require_once 'includes/banco.php';
        require_once 'includes/funcoes.php';
    ?>
    <div id="corpo">
        <?php 
            $c = $_GET['cod'] ?? 0;
            $busca = $banco->query("select * from jogos where cod='$c'");
        ?>
        <h1>Detalhes do Jogo</h1>
        <table class='detalhes'>
            <?php
                if (!$busca) {
                    echo "Busca falhou! $banco->error";
                } else {
                    if($busca->num_rows == 1) {
                        $reg = $busca->fetch_object();
                        $t = thumb($reg->capa);
                        echo "<tr><td rowspan='3'><img src='$t' class='full'>";
                        echo "<td><h2>$reg->nome</h2>";
                        echo "Nota: ".number_format($reg->nota,1)." / 10.0";
                        echo "<tr><td>$reg->descricao";
                        echo "<tr><td>Adm";
                    } else {
                        "<tr><td>Nenhum registro encontrado";
                    }
                }
            ?>
        </table>
        <a href="index.php"><img src="icones/icoback.png" alt=""></a>
    </div>
</body>
</html>