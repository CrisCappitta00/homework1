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
    <link rel="stylesheet" href="home.css">
    <title>Homepage</title>
</head>
<body>
    <header>
        <div class="container">
            <a class="BarraNavigazione" href="#">Home</a>
            <a class="BarraNavigazione" href="#">Contacts</a>
            <a class="BarraNavigazione" href="#">Blog</a>
            <a class="BarraNavigazione" href="#">Services</a>
        </div>
        <div class="inner"> 
                <input type="text" id="search-bar" name="cerca" placeholder="Cerca un anime o un manga..."> 
                <button type="submit"><i class="icon icon-search">cerca</i></button> 
        </div>
        <div class="container-profile">
            <div id="Creator">
               <img src="MyLogo.png" alt="Logo coroncina">
               <p>N.Matricola: 1000001798</p>
            </div>
            <div id="profile">
             <img src="animeotaku.jpg" alt="immagine utente">
                <select onchange="window.location.href=this.value" name="Profilo" id="menu">
                        <option value="Opzioni">Opzioni</option>
                        <option value="profiloutente.php">Profilo</option>
                        <option value="Preferiti.php">Preferiti</option>
                        <option value="readinglist.php">ReadingList</option>
                        <option value="WatchList.php">WatchList</option>
                        <option value="Logout.php">Fai il Logout</option> 
                </select>
            </div>
        </div> 
    </header>
    <div>
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
    </div>
    <footer>
        <div class="contieneelementi">
         <ul>
            <li class="nav"><a href="#">Torna alla home</a></li>
            <li class="nav">Notizie</li>
            <li class="nav">Pubblicità</li>
            <li class="nav">Privacy</li>
         </ul>
        </div> 
    </footer>
</body>
</html>
