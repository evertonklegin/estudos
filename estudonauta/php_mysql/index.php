<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Jogos</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
    ?>
    <div id="corpo">
        <h1>Escolha seu Jogo</h1>
        <table class="listagem">
            <?php 
                $busca = $banco->query("select * from jogos order by nome");
                if(!$busca) {
                    echo "<tr><td>Infelismente a busca deu errado</td></tr>";
                } else {
                    if($busca->num_rows == 0) {
                        echo "<tr><td>Nenhum registro encontrado</td></tr>";
                    } else {
                        while($reg=$busca->fetch_object()){
                            $t = thumb($reg->capa);
                            echo "<tr><td><img src='$t' class='mini'></td><td>$reg->nome</td>";
                            echo "<td>Adm</td>";
                        }
                    }
                }
            ?>
        </table>
    </div>
    <?php $banco->close();?>
</body>
</html>