<?php

use function PHPSTORM_META\elementType;

if (!isset($_SESSION)) {
        session_start();
    }
    $bdd = new PDO('mysql:host=localhost;dbname=klik_database', 'root', '');
    if(isset($_GET['id']) AND !empty($_GET['id']) AND isset($_GET['cle']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $getcle = $_GET['cle'];
    $recupUser = $bdd->prepare('SELECT * FROM users WHERE idUsers = ? AND cle = ?');
    $recupUser->execute(array($getid, $getcle));
    $user = $recupUser->fetch();
      
    if(!empty($user)){     
  
        $userInfo = $recupUser->fetch();
        if($userInfo['confirme'] != 1){
            $updateConfirmation = $bdd->prepare('UPDATE users SET confirme = ? WHERE idUsers = ?');
            $updateConfirmation->execute(array(1, $getid));         
            
        }else{
           $msg = "vous êtes déjà confirmé";
        }

 

       
    }else{
        "votre cle ou identifiant et incorrect";
    }

    
    
    }else{
        echo "ancun utilisateur est trouvé !";
    }
  
    header("Location: ../ppe/confirmation.php");

    
    
    ?>