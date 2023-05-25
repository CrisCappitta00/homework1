<?php
//Avvio la sessione nella home
session_start();
//Controllo se l'utente ha effettuato l'accesso 
if(!isset($_SESSION['username'])){
    //Mi reinderizza al login
    header('Location: accesso.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework1</title>
    <link rel="stylesheet" type="text/css" href="hmw1.css">
</head>
<body>
    <!--Creazione Menù nella parte superiore-->
    <header>
        <img src="Logo.png" alt="logo del sito">
        
         <div class='menu'>
         <a href="#">Home</a>
         <a href="#">Blog</a>
         <a href="#">Contatti</a>
         <a href="#">Avvisi</a>
         <a href="#">Categoria</a>
         <a href="#">Preferiti</a>
         <a href="#">Carrello</a>
         <a href="#">Profilo</a>
         </div> 
    </header>
    <div id = 'Titolo'><h1>World Anime</h1></div>
    <h2>Benvenuto<?php echo $_SESSION['username'];?>!</h2>
    <p><a href="logout.php">Effettua il logout</a></p>
</body>
</html>