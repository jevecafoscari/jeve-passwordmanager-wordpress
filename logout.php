<?php
//Avvio la sessione
session_start();
session_unset();
//DISTRUGGE la sessione
session_destroy();
$_SESSION = array();

header("Location: index.php"); 
exit;
?>