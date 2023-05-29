<?php 
//Utilizzo session_start per avviare la sessione 
session_start();
//Controllare l'accesso 
if(isset($_SESSION['username'])){
//Mi collego alla home tramite header
header('Location: home.php');
exit;
}
  //Verichiamo se i dati del post sono inizializzati
  if (isset($_POST['username']) && isset($_POST['password'])){
    //connessione al database 
    $conn = mysqli_connect('localhost', 'root', '','homework1') or die(mysqli_connect_error());
    //eseguo un escape, riceve una stringa ed effettua l'escape dei caratteri 
    //lo usiamo per evitare che per esempio un hacker entri in un database inserendo un "or""=" nella casella dell'username o della password
    $_POST['username'] = mysqli_real_escape_string($conn,$_POST['username']);
    $_POST['password'] = mysqli_real_escape_string($conn,$_POST['password']);
    //creo la query
    $myquery= "SELECT * FROM utenti AS U WHERE U.Username ='". $_POST['username']."' AND U.Password = '".$_POST['password']."'";
    //esecuzione query
    $result = mysqli_query($conn,$myquery);
    //controllo le righe che mi restituisce result
    $righe_result = mysqli_num_rows($result);

    //Verificare se le credenziali sono esatte
    if($righe_result >=1){
      $_SESSION['result_query'] = mysqli_fetch_assoc($result);
    //Imposto la variabile di sessione 
    $_SESSION['username'] = $_POST['username'];    
    //mi collego alla homepage
    header('Location: home.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accesso.css">
    <script src="accesso.js" defer></script>
    <title>Accesso</title>
</head>
<body>
     <header>
      <div>
        <h2>Effettua l'accesso al tuo profilo</h2>
      </div>
      <div id="user"><img src="influencer.png" alt=""></div>
     </header>
    <form method ='post' name="form_access">
     
     <input id='username' type='text' name = 'username' placeholder='USERNAME'>
     <input id='password' type='password' name= 'password'  placeholder='PASSWORD'>
     <input id="submit" type="submit" name='submit' value="Invia!">
     
    </form>
    <?php 
    if(isset($error)){
      echo "<div id='error' class='hidden'>Errore riempire i campi correttamente</div>";
    }
    
?>
    
</body>
</html>
