<?php
session_start();
if(isset($_SESSION['user'])== ""){
    header("Location: p_login.php");
} else {
    echo file_get_contents('header.html');

    $paginaRisultati = file_get_contents('ordini.html');
    echo str_replace("[NOMEUTENTE]", $_SESSION['username'], $paginaRisultati);
    echo file_get_contents('footer.html');
}
?>