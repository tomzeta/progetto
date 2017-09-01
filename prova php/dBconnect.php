<?php
$servername = "localhost";
$dbUser = "root";
<<<<<<< HEAD
$dbPassword = " ";
$targetdb = "asap festival";
=======
$dbPassword = "root";
$targetdb = "tecweb";
>>>>>>> 8ee83d0136469a20855439f0555a6d96f4f035d7

//creazione connessione
$conn = new mysqli($servername, $dbUser, $dbPassword, $targetdb);
// $dbconn = mysqli_select_db($conn, $targetdb);

//Controllo connessione
if($conn->connect_error) {
	die("Connessione fallita: " . $conn->connect_error);
}
/* if($dbconn->connect_error){
    die("Connessione al database fallita" . $dbconn->connect_error);
<<<<<<< HEAD
}
?>
=======
} */
?>
>>>>>>> 8ee83d0136469a20855439f0555a6d96f4f035d7
