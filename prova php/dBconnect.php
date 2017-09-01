<?php
$servername = "localhost";
$dbUser = "root";
$dbPassword = "root";
$targetdb = "tecweb";

//creazione connessione
$conn = new mysqli($servername, $dbUser, $dbPassword, $targetdb);
// $dbconn = mysqli_select_db($conn, $targetdb);

//Controllo connessione
if($conn->connect_error) {
	die("Connessione fallita: " . $conn->connect_error);
}
/* if($dbconn->connect_error){
    die("Connessione al database fallita" . $dbconn->connect_error);
} */
?>
