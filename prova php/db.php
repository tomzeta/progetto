<?php
$connessione_al_server=mysql_connect("localhost","root","");
if(!$connessione_al_server){
die ('Non riesco a connettermi: errore '.mysql_error()); // questo apparirà solo se ci sarà un errore
}
 
$db_selected=mysql_select_db("asap festival",$connessione_al_server); // dove io ho scritto "prova" andrà inserito il nome del db
if(!$db_selected){
die ('Errore nella selezione del database: errore '.mysql_error()); // se la connessione non andrà a buon fine apparirà questo messaggio
}
?>