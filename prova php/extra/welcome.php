<?php
    ob_start();
    session_start();
    require_once 'dbconnect.php';
    
    //se l'user non ha una sessione attiva reindirizza al login
    if(!isset($_SESSION['user']) ) {
        header("Location: login.php");
        exit;
    }
    
    //seleziona i dati dell'user
    $query = "SELECT * FROM users WHERE userID =".$_SESSION['user'];
    $res = mysqli_query($conn, $query);
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
    
    
    if (isset($_GET['logout'])) {
        unset($_SESSION['user']);
        session_unset();
        session_destroy();
        header("Location: registration.php");
        exit;
    }
?>
    
<html>
	<head>
		<title></title>
	</head>
	<body>
        <h1>I tuoi dati: </h1>
        <p>
            Benvenuto <?php echo $userRow['userName']; ?> </br>
            Email: <?php echo $userRow['userEmail'];?> </br>
        </p>
        <span>Logout: <a href="logout.php">Clicca qui!</a></span>

            

	</body>
</html>
