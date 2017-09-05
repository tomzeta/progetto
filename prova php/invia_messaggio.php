<?php
require 'dBconnect.php';
$conn = Connect();

function test_input($data)
{
    //toglie spazi inizio e fine del testo
    $data = trim($data);
    //toglie le virgolette
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

$nome = test_input($_POST['nome']);
$cognome = test_input($_POST['cognome']);
$email= test_input($_POST['email']);
$messaggio= test_input($_POST['messaggio']);
$oggetto = $_POST['oggetto'];

if (empty($nome)) {
    $errore = true;
    $nomeErr = "Inserire un nome utente";
} else if (!preg_match("/^[a-zA-z ]*$/", $nome)) {
    $errore = true;
    $nomeErr = "Per il nome sono consentite solo lettere e spazi";
}
if (empty($cognome)) {
    $errore = true;
    $cognomeErr = "Inserire un cognome";
} else if (!preg_match("/^[a-zA-z ]*$/", $cognome)) {
    $errore = true;
    $cognomeErr = "Per il cognome sono consentite solo lettere e spazi";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errore = true;
    $emailErr = "Inserire un indirizzo email valido";
}
$query="INSERT INTO Messaggi(nome, cognome, email, oggetto, messaggio) VALUES ('" . $nome . "','" . $cognome . "','" . $email . "','" . $oggetto . "','" . $messaggio . "')";
$res = $conn->query($query);
if($res) {

}


?>