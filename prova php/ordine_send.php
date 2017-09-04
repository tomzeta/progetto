<?php
session_start();
include_once 'dbConnect.php';
$conn = Connect();
if(isset($_POST['addcart'])) {
    $error = false;
if(isset($_POST['ticket_type'])) {
    echo $_POST['ticket_type'];
} else {
    $error = true;
    echo "Non è stata selezionata una tipologia di biglietti";
}
if(isset($_POST['num_tickets'])){
    echo $_POST['num_tickets'];
} else {
    $error = true;
    echo "Non è stato selezionato il numero di biglietti";
}
echo "Grazie dell'acquisto " . $_SESSION['username'];
}
?>