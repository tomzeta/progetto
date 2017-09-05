<?php session_start();
    require 'dBconnect.php';
    $conn = Connect();

    function formatta_stringa($stringa) {
        //sostituisco i caratteri speciali in entità html
        $stringa = htmlentities($stringa);
        $stringa = str_replace("'","&apos;", $stringa);
        //permetto l'utilizzo dei tag
        // <strong>
        $stringa = str_replace("&lt;strong&gt;","<strong>", $stringa);
        $stringa = str_replace("&lt;/strong&gt;","</strong>", $stringa);
        // e <em>
        $stringa = str_replace("&lt;em&gt;","<em>", $stringa);
        $stringa = str_replace("&lt;/em&gt;","</em>", $stringa);
        return $stringa;
    }

    $titolo = $_POST['title'];
    $testo = $_POST['testo'];
    $autore = $_SESSION['nome_completo'];
    $data = 0;

    $query = "INSERT into News(titolo, testo, autore, data) VALUES('" . $titolo . "','" . $testo . "','" . $autore . "','" . $data . "')";
    $success = $conn->query($query);
    if(!$success){
        die("Non si possono inserire i dati: ".$conn->error);
    }

    echo "Grazie per aver inserito i dati";

    $conn->close();
?>