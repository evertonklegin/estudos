<?php 
    echo "<header>";
    if(empty($_SESSION['user'])){
        echo "<a href='user-login.php'>Entrar</a>";
    } else {
        echo "Olá, <strong>". $_SESSION['nome']."</strong>";
        echo " (".$_SESSION['tipo'].") ";
        echo " | <a href='user-logout.php'>Sair</a>";
    }
    echo "</header>";
?>