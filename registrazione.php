<?php 
session_start();
//Controllare l'accesso 
if(isset($_SESSION['username'])){
//Mi collego alla home tramite header
header('Location: hmw1.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrazione.css">
    <script src="registrazione.js" defer></script>
    <title>Registrazione Utente</title>
</head>
<body>
    <form action='iscrizione.php' method='post' name='form_reg'>
        
        <div class='hidden errore' id='nome'>Compilare il campo nome correttamente</div><label>Nome <input type='text' name = 'nome' id='nome' placeholder='Inserire il nome'></label>
        <div class='hidden errore' id='cognome'>Compilare il campo cognome correttamente</div> <label>Cognome <input type='text' name = 'cognome' id='cognome' placeholder='Inserire il cognome'></label>
        <div class='hidden errore' id='email'>Compilare il campo email correttamente</div> <label>Email <input type='text' name = 'email' id='email' placeholder='Inserire la mail'></label>
        <div class='hidden errore' id='numero'>Compilare il campo numero correttamente</div> <label>Telefono <input type='text' name = 'telefono' id='numero' placeholder='Inserire il numero di telefono'></label>
        <div class='hidden errore' id='nomeutente'>Compilare il campo username correttamente</div> <label>Username <input type='text' name = 'username' id='nomeutente' placeholder='Inserire il tuo username'></label>
        <div class='hidden errore' id='password'>Compilare il campo password correttamente</div> <label>Password <input type='password' name= 'password' id='password'></label>
        <label><span><input type='submit' name='invio' value='Invia'></span><label>
        
    </form>
    <?php
   
    ?>
</body>
</html>