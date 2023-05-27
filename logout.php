<?php
//avvio la sessione su logout
session_start();
//La elimino
session_destroy();
//Reinderizzo al login
header('Location: index.php');
exit;
?>
