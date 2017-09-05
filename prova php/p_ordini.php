<?php
session_start();
require 'dBconnect.php';
$conn = Connect();

if(!isset($_SESSION['[orderError]'])){
    $_SESSION['[orderError]'] = "";
}
if(isset($_SESSION['user'])== ""){
    header("Location: p_login.php");
} else {
    //Biglietti Ordinati
    $utente = $_SESSION['username'];
    $lista_ordini = "";
    $query = "SELECT id_ordine, tipologia_biglietti, num_biglietti, tot_ordine FROM Ordini WHERE username = '$utente'";
    $res = $conn->query($query);
    if($res->num_rows > 0) {
        while($row = $res->fetch_assoc()) {
            $ordine = "<h2>Ordine: </h2>";
            $ordine .="<p>ID: " . $row['id_ordine'] . "</p><p>Tipologia: " . $row['tipologia_biglietti'] . "</p><p>Numero biglietti ordinati: " . $row['num_biglietti'] . "</p><p>Tot: " . $row['tot_ordine'] . "&#8364;</p></br>";
            $lista_ordini .= $ordine;
        }
        $lista_ordini .= "<p>Verrai contattato a breve per definire i dettagli dell'acquisto.</p>";
        $res->close();
    } else {
        $lista_ordini = "<p>Non è stato effettuato ancora alcun ordine.</p>";
    }

    $headerpage = file_get_contents('header.html');
    echo str_replace('[HOMEPAGE]', 'Pagina Utente', $headerpage);

    $paginaRisultati = file_get_contents('h_ordini.html');
    $paginaRisultati = str_replace("[NOMEUTENTE]", $utente, $paginaRisultati);
    $paginaRisultati = str_replace("[ORDINI]", $lista_ordini, $paginaRisultati);
    echo str_replace('[ERROREORDINE]', $_SESSION['orderError'], $paginaRisultati);
    echo file_get_contents('footer.html');
}
?>