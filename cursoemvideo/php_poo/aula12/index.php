<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula12 POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Ave.php';
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Canguru.php';            
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';            
            
            $m = new Mamifero;
            $a = new Ave;
            $p = new Peixe;
            $r = new Reptil;

            $c = new Cachorro;
            $k = new Canguru;
            $t = new Tartaruga;
            $ar = new Arara;
            
            $c->emitirSom();
            $k->emitirSom();
            $t->emitirSom();
            $ar->emitirSom();
        ?>
    </pre>
</body>
</html>