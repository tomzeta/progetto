<?php
session_start();
    $paginaRisultati = file_get_contents('ordini.txt');
    echo str_replace("[NOMEUTENTE]", $_SESSION['username'], $paginaRisultati);
?>