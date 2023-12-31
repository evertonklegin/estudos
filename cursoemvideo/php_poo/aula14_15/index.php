<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14_15 POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Video.php';
            require_once 'Visualizacao.php';
            require_once 'Gafanhoto.php';
            $v[0] = new Video("Aula 1 POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");

            $g[0] = new Gafanhoto("Jubileu",22,"M","juba");
            $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

            $f[0] = new Visualizacao($g[0], $v[2]);
            $f[1] = new Visualizacao($g[0], $v[1]);
            
            $f[0]->avaliar();
            $f[1]->avaliarPerc(85);

            print_r($f);
        ?>
    </pre>
</body>
</html>