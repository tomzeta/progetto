<?php
    ob_start();
    session_start();
    //se l'user ha una sessione attiva non permette il login e reinderizza al login
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
    $error = false;
    
    if(isset($_POST['btn-login'])){
        
        $email = test_input($_POST['email']);
        $pass = test_input($_POST['password']);
        
        
        //controllo email
        if(empty($email)) {
            $error = true;
            $emailErr = "Inserire una mail";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $emailErr = "Inserire un indirizzo email valido";
        }
        
        //controllo password
        if(empty($pass)) {
            $error = true;
            $passwordErr = "Inserire una password";
        }
        
        //se non ci sono errori tenta il login
        if(!$error){
            $query = "SELECT userID FROM users WHERE userEmail = '$email'";
            $result = mysqli_query($conn, $query);
            if($result) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);
            }
            if($count == 1) {
                $_SESSION['user'] = $row['userID'];
                header("Location: welcome.php");
            } else {
                $errMSG = "Credenziali errate, riprova...";
            }
        }
    }
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Accesso</h1>
        <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " autocomplete= "off">
            <label>Email: </label><input type="text" name="email" placeholder="Inserisci la tua email" value="<?php echo $email ?>"/> <?php echo $emailErr;?> </br>
            <label>Password: </label><input type="password" name="password" placeholder="Inserisci la tua password"/> <?php echo $passwordErr;?> </br>
            <button type="submit" name="btn-login">Accesso</button>

            <h2><?php echo $errMSG; ?></h2>
        </form>
        <a href="registration.php">Registrati<a/>
<?php if(!$result) {
    echo "La query non ha dato risultati";
} ?>
    </body>
</html>
<?php ob_end_flush(); ?>
