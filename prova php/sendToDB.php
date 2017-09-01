<?php 
    include_once "dbConnect.php";
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if(isset($_POST["postNews"])) {
        $titolo = $_POST["title"];
        $testo = $_POST["testo"];
        
        $query = "INSERT INTO News(id, titolo, testo) VALUES (,'$titolo','$testo')";
        $result = $conn->query($query);
        if($result) echo "Hai pubblicato con successo";
        
    }
    
    echo "</br>";
    echo $titolo;
    echo $testo;
    
?>