<?php
$headerpage = file_get_contents('header.html');
echo str_replace('[HOMEPAGE]', 'Biglietti', $headerpage);
echo file_get_contents('h_tickets.txt');
echo file_get_contents('footer.html');
?>