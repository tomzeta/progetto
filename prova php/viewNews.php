<?php
    require 'dBconnect.php';
    $conn = Connect();

    $query = "SELECT titolo, testo FROM News";
    $result = $conn->query($query);

    if($result->num_rows > 0) {
        // crea html per ogni news
        while ($row = $result->fetch_assoc()) {
            echo '<h1>' . $row[titolo] . '</h1><p>' . $row[testo] . '</p>';
        }
    }


    $conn->close();

?>
