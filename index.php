<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Schermata iniziale</title>
</head>
<body>
   
    <!--Creazione schermata login-->
    <header>
        <h1>Benvenuto su Mondo Anime</h1>
        <img src="Anime.png" alt="Raffigura gli anime"></img>
        <p>
         In questo sito puoi trovare tutto ciò che riguarda gli anime: 
         <br> manga, novel, anime, film e 
         potrai sceglierne quanti ne vorrai, metterli nei preferiti o aggiungerli al carrello. 
         <br>Vi sono diversi stili e categorie che spaziano dal fantasy, all' avventura, fino al comico.
         <br>Cosa aspetti, registrati anche tu! Se invece sei un utente già registrato mi raccomando continua ad usare il mio sito! 
        <?php 
        $variabile = 'Ciao Mondo Bello';
        function saluta(){
            global $variabile;
            $temp = $variabile;
            return $temp;
        }
        echo '<h1 id="red">'.saluta().'</h1>'
        ?>
        </p>
    </header>
</body>
</html>