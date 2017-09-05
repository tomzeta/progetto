<?php
    $paginatrip = file_get_contents('header.html');
    echo str_replace('[Homepage]', 'Info', $paginatrip);
    echo file_get_contents('info.html');
    echo file_get_contents('footer.html');
?>