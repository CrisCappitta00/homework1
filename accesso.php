
<?php 
//Utilizzo session_start per avviare la sessione 
session_start();
//Controllare l'accesso 
if(isset($_SESSION['username'])){
//Mi collego alla home tramite header
header('Location: hmw1.php');
exit;
}
  //Verichiamo se i dati del post sono inizializzati
  if (isset($_POST['username']) && isset($_POST['password'])){
    //Verificare se le credenziali sono esatte
    if($_POST['username'] === 'admin' && $_POST['password'] === 'user1'){

    //Imposto la variabile di sessione 
    $_SESSION['username'] = $_POST['username'];    
    //mi collego alla homepage
    header('Location: hmw1.php');
    //chiude lo script
    exit;
    }
    else{
        $error = true;
    }
  }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accesso.css">
    <title>Accesso</title>
</head>
<body>
    <form method="post" name="form_access">
     <label>Username <input type='text' name = 'username' id='nomeutente' value='Inserire il tuo username'></label>
     <label>Password <input type='password' name= 'password' id='password'></label>
     <input type='submit' name='invio' value='Invia'>
    </form>
    <?php
    if(isset($error)){
        echo "<div class='errore'>Errore riempire i campi correttamente</div>";
    }
    ?>
</body>
</html>