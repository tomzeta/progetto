<?php
    ob_start();
    session_start();
    //se l'user ha una sessione attiva non permette la registrazione e reindirizza alla home
    if( isset($_SESSION['user'])!="" ){
        header("Location: welcome.php");
        exit;
    }
    include_once "dBconnect.php";
    
    //funzione per formattare l'input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    //variabile di controllo errore
    $errore = false;

    
    if(isset($_POST["btn-register"])) {
        
        /* $nomeErr = $emailErr = $passwordErr = $errMSG = "";
        $nome = $eta = $email = $password = ""; */
        
        $nome = test_input($_POST["nome"]);
        $eta = test_input($_POST["eta"]);
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        
        
        //gestione errori per campo $nome
        if(empty($nome)){
            $errore = true;
            $nomeErr = "Inserire un nome utente";
        } else if (strlen($nome) < 3) {
            $errore = true;
            $nomeErr = "Il nome deve avere almeno 3 caratteri";
        } else if(!preg_match("/^[a-zA-z ]*$/", $nome)) {
            $errore = true;
            $nomeErr = "Per il nome sono consentite solo lettere e spazi";
        }
    
    
        //gestione errori per campo $email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $emailErr = "Inserire un indirizzo email valido";
        } else {
            //controlla se email esiste o no
            $query = "SELECT userEmail FROM users WHERE userEmail = '$email'";
            $result = mysqli_query($conn, $query);
            $count = mysqli_num_rows($result);
            if($count != 0) {
                $error = true;
                $emailErr = "Indirizzo email già in uso";
            }
        }
        
        //gestione errori per campo $password
        if(empty($password)) {
            $error = true;
            $passwordErr = "Inserire una password";
        } else if(strlen($password) < 6) {
            $error = true;
            $passwordErr = "Inserire una password di almeno 6 caratteri";
        }
        
        //se non c'è errore inserisci dati nel DB
        if(!$error) {
            $query = "INSERT INTO users(userName, userAge, userEmail, userPass) VALUES('$nome','$eta','$email','$password')";
            $res = $conn->query($query);
            if($res) {
                $errMSG = "Ti sei registrato con successo, ora puoi fare il login";
                unset($nome);
                unset($eta);
                unset($email);
                unset($password);
            } else {
                $errMSG = "Qualcosa è andato storto, riprova più tardi";
            }
        }
    }
    
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Registrati: </h1>
		<form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " autocomplete= "off">
			<label>Nome e Cognome: </label><input type="text" name="nome" placeholder="Inserisci il tuo nome" value="<?php echo $nome ?>"/> <?php echo $nomeErr;?> </br>
			<label>Età: </label><input type="text" name="eta" placeholder="Inserisci la tua età" value="<?php echo $eta ?>" /> </br>
			<label>Email: </label><input type="text" name="email" placeholder="Inserisci la tua email" value="<?php echo $email ?>"/> <?php echo $emailErr;?> </br>
			<label>Password: </label><input type="password" name="password" placeholder="Inserisci la tua password"/> <?php echo $passwordErr;?> </br>
			<button type="submit" name="btn-register">Invia</button>
            <h2><?php echo $errMSG; ?></h2>
		</form>
        <a href="login.php">Accesso<a/>
		<?php
			echo "<h2>I tuoi dati </h2>";
			echo $nome;
			echo "</br>";
			echo $eta;
			echo "</br>";
			echo $email;
			echo "</br>";
			echo $password;
			echo "</br>";
		?>
	</body>
</html>

<?php ob_end_flush(); ?>
