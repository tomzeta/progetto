<?php
session_start();
if(isset($_SESSION['user'])== ""){
    header("Location: p_login.php");
}
$paginaRisultati = file_get_contents('pagina_amministrazione.html');
echo str_replace("[NOMEUTENTE]", $_SESSION['username'], $paginaRisultati);
?>