<?php
    $paginalineup = file_get_contents('header.html');
    echo str_replace('[Homepage]', 'Line-Up', $paginalineup);
    echo file_get_contents('lineup.html');
    echo file_get_contents('footer.html');
?>