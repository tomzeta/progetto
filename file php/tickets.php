<?php
    $paginatrip = file_get_contents('header.html');
    echo str_replace('[Homepage]', 'Tickets', $paginatrip);
    echo file_get_contents('biglietti.html');
    echo file_get_contents('footer.html');
?>