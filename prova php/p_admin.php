<?php
session_start();
if(isset($_SESSION['user'])== ""){
    header("Location: p_login.php");
} else {
    $headerpage = file_get_contents('header.html');
    echo str_replace('[HOMEPAGE]', 'Pagina di amministrazione', $headerpage);

$paginaRisultati = file_get_contents('h_pagina_amministrazione.html');
echo str_replace("[NOMEUTENTE]", $_SESSION['username'], $paginaRisultati);
echo file_get_contents('footer.html');
}
?>