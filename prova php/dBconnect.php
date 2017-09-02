<?php
<<<<<<< HEAD
=======

>>>>>>> 9d9d424bfcd8dd062e95be88bffd4ea04871738f
function Connect() {
    $dbhost = "localhost";
    $dbUser = "root";
    $dbPassword = "root";
    $targetdb = "tecweb";
<<<<<<< HEAD
    $conn = new mysqli($dbhost, $dbUser, $dbPassword, $targetdb);
    if($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    }
    return $conn;
}
?>
=======

    $conn = new mysqli($dbhost, $dbUser, $dbPassword, $targetdb);

    if($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    }

    return $conn;
}
?>
>>>>>>> 9d9d424bfcd8dd062e95be88bffd4ea04871738f
