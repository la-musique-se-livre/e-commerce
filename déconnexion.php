<?php
$bdd = new PDO('mysql:host=localhost;dbname=klik_database', 'root', '');
session_start();
$_SESSION = array();
session_destroy();
header("Location: ../ppe");
?>