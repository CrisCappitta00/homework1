<?php
//Avvio la sessione nella home
session_start();
//Controllo se l'utente ha effettuato l'accesso 
if(!isset($_SESSION['username'])){
    //Mi reinderizza al login se ho effettuato un accesso illecito per esempio arrivo alla home tramite url
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
    <script src="menu.js" defer></script>
    <link rel="stylesheet" type="text/css" href="hmw1.css">
</head>
<body>
    <!--Creazione Menù nella parte superiore-->
    <header>
      
        <div id="foto">
            <img src="burger-menu.png" alt="tre rettangoli">
        </div>
        <div>
         <!--<a href="#">Home</a>
         <a href="#">Blog</a>
         <a href="#">Contatti</a>
         <a href="#">Avvisi</a>
         <a href="#">Categoria</a>
         <a href="#">Preferiti</a>
         <a href="#">Carrello</a>
         <a href="#">Profilo</a>-->
        </div> 
    </header>



    <div id = 'Titolo'><h1>World Anime</h1></div>
    <h2>Benvenuto <?php echo $_SESSION['username'];?>!</h2>
    <div id='Presentazione'>
        <p>Caro utente in questo sito potrai trovare tutto ciò che riguarda il mondo degli anime,<br>
         manga, film anime, novel e se vuoi puoi salvarli nei preferiti dividendoli in gruppi<br>
         oppure aggiungerli al carrello per poterli comprare.
        <br>
        Il sito è diviso in diverse sezioni, adesso ti trovi nella Home,<br>
        ma puoi trovare anche la sezione Blog in cui vi potrai esprimere diverse opinioni.
        </p>
    </div>
    <p><a href="logout.php">Effettua il logout</a></p>
    
</body>
</html>