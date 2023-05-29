<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="readinglist.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadingList</title>
</head>
<body>
    <header>
        <div id="menu">
            <a class="BarraNavigazione" href="home.php">Indietro</a>
            <a class="BarraNavigazione" href="profiloutente.php">Profilo</a>
            <a class="BarraNavigazione" href="Preferiti.php">Preferiti</a>
            <a class="BarraNavigazione" href="WatchList.php">WatchList</a>
        </div>
        <div class="container">
         <h1>Reading List</h1>
         <h4>This Is Your Reading List</h4>
         <div class="inner"> 
           <input type="text" id="search-bar" name="cerca" placeholder="Cerca un manga"> 
           <button type="submit"><i class="icon icon-search">cerca</i></button> 
         </div>
         <div id="lista">
            <p>Questa è la tua lista dei manga che hai <br>letto o che stai tuttora leggendo</p>
         </div>
        </div>
    </header>
    
</body>
</html>