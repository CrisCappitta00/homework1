<?php 
//avvio la sessione
session_start();
//Controllare l'accesso 
if(isset($_SESSION['username'])){
//Mi collego alla home tramite header
header('Location: hmw1.php');
exit;
}
if(isset($_POST['nome'])&& isset($_POST['cognome'])&& isset($_POST['email'])&& isset($_POST['telefono']) && isset($_POST['username'])&& isset($_POST['password'])){
//mi connetto al database
$conn = mysqli_connect('localhost', 'root', '','homework1') or die(mysqli_connect_error());
$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$controllautente = "SELECT * FROM utenti AS U WHERE U.Username ='". $_POST['username']."' OR U.Email = '".$_POST['email']."'";
$risultato = mysqli_query($conn,$controllautente);
$conta = mysqli_num_rows($risultato);
if ($conta === 0){
 //creo la query che mi serve ad inserire i dati nel mio database
 $nome = mysqli_real_escape_string($conn,$_POST['nome']);
 $cognome = mysqli_real_escape_string($conn,$_POST['cognome']);
 $numero = mysqli_real_escape_string($conn, $_POST['telefono'] );
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 $newquery = "INSERT INTO utenti(Nome,Cognome,Email,Telefono,Username,Password) VALUES('".$nome."','".$cognome."','".$email."','".$numero."','".$username."','".$password."')";
 $nuovoutente = mysqli_query($conn,$newquery);
 if ($nuovoutente === false){
     echo "Errore utente non registrato";
 }else{
     $_SESSION['username'] = $username; 
     header('Location: iscrizione.php');
 }
}else{
    $errore = true;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrazione.css">
    <title>Registrazione Utente</title>
    <script src="registrazione.js" defer></script>
</head>
<body>
<header>
    <div><h2>EFFETTUA LA TUA ISCRIZIONE</h2></div>
</header>


<form id="form" class="topBefore" method='post' name='form_reg'>
<div id="utente">
<img src="influencer.png" alt="utente">
</div>
          <div class='hidden errore' id='nome'>Compilare il campo nome correttamente</div><input id="nome" type="text" name = 'nome' placeholder="NAME">
          <div class='hidden errore' id='cognome'>Compilare il campo cognome correttamente</div><input id='cognome' type='text' name = 'cognome'  placeholder="COGNOME">
		  <div class='hidden errore' id='email'>Compilare il campo email correttamente</div><input id='email' type='text' name = 'email' placeholder="EMAIL">
          <div class='hidden errore' id='numero'>Compilare il campo numero correttamente</div><input id='numero' type='text' name = 'telefono'  placeholder="TELEFONO">
          <div class='hidden errore' id='nomeutente'>Compilare il campo username correttamente</div><input  id='nomeutente' type='text' name = 'username' placeholder="USERNAME">
          <div class='hidden errore' id='password'>Compilare il campo password correttamente</div><input id='password' type='password' name= 'password'placeholder="PASSWORD">
          <input id="submit" type="submit" name='submit' value="Invia!">
          
</form>
<?php
if(isset($errore)){
echo "<div id='error'>Errore esiste già un utente con questo username o con questa mail</div>";
}
?>
</body>
</html>