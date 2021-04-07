<?php
$bdd = new PDO('mysql:host=localhost;dbname=klik_database;charset=utf8', 'root',''); ?>

<?php
function ver()
{
    return time();
}
?> 