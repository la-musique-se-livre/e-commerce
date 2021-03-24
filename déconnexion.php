<?php
$bdd = new PDO('mysql:host=localhost;dbname=woze', 'root', '.Valdemarne17');
session_start();
$_SESSION = array();
session_destroy();
header("Location: index.php");
?>