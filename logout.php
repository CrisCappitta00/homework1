<?php
//avvio la sessione su logout
session_start();
//La elimino
session_destroy();
//Reinderizzo al login
header('Location: accesso.php');
exit;
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
</body>
</html>