<?php 
    function cripto($senha) {
        $c = '';
        for($pos = 0; $pos < strlen($senha); $pos++){
            $letra = ord($senha[$pos])+1;
            $c .= chr($letra);
        }
        return $c;
    }
    
    function gerarHash($senha) {
        $txt = cripto($senha);
        $hash = password_hash($txt, PASSWORD_DEFAULT);
        return $hash;
    }

    function testarHash($senha, $hash) {
        $ok = password_verify($senha,$hash);
        return $ok;
    }

    $original = 'estudonauta';
    echo "$original --- ";
    echo cripto($original) . " --- ";
    echo gerarHash($original);
    echo testarHash(cripto($original), '$2y$10$vZvSvEcoR2rbv1xMv1eXcuGWB.mzqJ8SKoco7OdSI4Q0Sp9rKlEva')?" SIM ":" NÃO ";
?>