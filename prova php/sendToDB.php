<?php 
    require 'dBconnect.php';
    $conn = Connect();

    $titolo = $_POST['title'];
    $testo = $_POST['testo'];

    $query = "INSERT into News(titolo, testo) VALUES('" . $titolo . "','" . $testo . "')";
    $success = $conn->query($query);
    if(!$success){
        die("Non si possono inserire i dati: ".$conn->error);
    }

    echo "Grazie per aver inserito i dati";

    $conn->close();
?>