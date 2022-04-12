<?php
 require_once('../php/db.php');
 ?>

<?php

$email = $_POST['mailconnect'];
$pass = $_POST['mdpconnect'];






$req = $bdd->prepare('SELECT * FROM users WHERE email = ? '); // on selectionne tout les ID,pass de MEMBRES ou pseudo = ? (et pass aussi)
$req->execute(array($email)); // ? est rempli ici avec $email ou $_POST['pseudo']
$insertion = $req->fetch();

// SI $RESTEZ (CHECKBOX PAS VITE && INSERTION DONC CE QUON PREND DE LA BASE DE DONNEE  ET PASS = PASS DE LA BDD DONC  ON DEMARRE LA SESSION ET ON MET UN ID DE SESSION UN PSEUDO ET LES COOKIE SON = A LID ET MDP)

if($insertion && password_verify($pass,$insertion['pass'])){
    
    if($insertion['confirme'] == 1){
        
         echo "OUI";
    session_start(); //si oui on demarre la session
    $_SESSION['idUsers'] = $insertion['idUsers'];
    $_SESSION['nom']   =   $insertion['nom'];
    $_SESSION['prenom'] = $insertion['prenom'];
    $_SESSION['pseudo'] = $insertion['pseudo'];
    $_SESSION['email'] = $insertion['email'];
    $_SESSION['pass'] = $insertion['pass'];
    $_SESSION['adresse'] = $insertion['adresse'];
    $_SESSION['genre'] = $insertion['genre'];
    $_SESSION['statut'] = $insertion['statut'];
    $_SESSION['country'] = $insertion['country'];
       header("Location: ../membre/index.php?id=".$_SESSION['idUsers']);
       exit();

    }else{
        $msg = "Vous n'avez pas validé votre adresse email";
    } //on regarde si ce quon a saisi (insertion && password verify donc le pass saisi et celui de insertion pass)


    // on rajoute id groupe pour savoir si l'utilisateur est admin ou non , si oui il auras acces a plus de choses

    
    
}

header("Location: ../index.php ");
?>