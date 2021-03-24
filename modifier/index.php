<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=woze', 'root', '.Valdemarne17');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM users WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND $_POST['pseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['pseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: ..?id='.$_SESSION['id']);
   }
   if(isset($_POST['mail']) AND !empty($_POST['mail']) AND $_POST['mail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['mail']);
      $insertmail = $bdd->prepare("UPDATE usersusers SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: ..?id='.$_SESSION['id']);
   }
   if(isset($_POST['mdp']) AND !empty($_POST['mdp']) AND isset($_POST['mdp2']) AND !empty($_POST['mdp2'])) {
      $mdp = sha1($_POST['mdp']);
      $mdp2 = sha1($_POST['mdp2']);
      if($mdp == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE users SET mdp = ? WHERE id = ?");
         $insertmdp->execute(array($mdp, $_SESSION['id']));
         header('Location: ..?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
}
?>
<?php
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "woze/users/avatar/".$_SESSION['id'].".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE users SET avatar = :avatar WHERE id = :id');
            $updateavatar->execute(array(
               'avatar' => $_SESSION['id'].".".$extensionUpload,
               'id' => $_SESSION['id']
               ));
            header('Location: ..?id='.$_SESSION['id']);
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Edition de mon profil</h2>
         <div align="left">
            <form method="POST" action="" enctype="multipart/form-data">
               <label>Pseudo :</label>
               <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /><br /><br />
               <label>Mail :</label>
               <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br /><br />
               <label>Mot de passe :</label>
               <input type="password" name="mdp" placeholder="Mot de passe"/><br /><br />
               <label>Confirmation - mot de passe :</label>
               <input type="password" name="mdp2" placeholder="Confirmation du mot de passe" /><br /><br />
               <label>Avatar :</label>
               <input type="file" name="avatar" />
               <input type="submit" value="Mettre à jour mon profil !" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: ..");
}
?>