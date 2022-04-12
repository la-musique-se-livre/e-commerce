<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/Menu_Navigation1.css<?php echo "?" . rand(); ?>" />
  <link rel="stylesheet" href="css/header.css<?php echo "?" . rand(); ?>" />
  <link rel="stylesheet" href="css/style.css<?php echo "?" . rand(); ?>" />
  <link rel="stylesheet" href="css/recherche.css<?php echo "?" . rand(); ?>" />
  <link rel="stylesheet" href="css/recherches.css<?php echo "?" . rand(); ?>" />

  </head>
  <body>

<?php
  require_once "php/header_navigation.php";
  ?>

<?php
  include "php/db.php"
  ?>
<?php 
$nom = $bdd->query('SELECT * FROM klik_database ORDER BY id DESC');

if(isset($_GET['q']) AND !empty($_GET['q'])) {
  $q = htmlspecialchars($_GET['q']);
  $nom = $bdd->query("SELECT * FROM article WHERE titre_article LIKE '%".$q."%' ORDER BY id DESC");
//recherche du produit dans la base
}

?>

<?php if ($nom->rowCount() > 0){  ?>

<ul>
<?php while ($p = $nom->fetch()){ ?>
      <div class="recherches"><img class="img1" src="/ppe/images/artivcle/artivcle<?= $p['id'] ?>">
      </div><div class="marque"><?= $p['categoriearticle'] ?></div><div class="marque"><?= $p['titre_article']
       
      ?></div>


<div class=""><?php }  
       }else {
        echo '<p class="erreur">Pas trouvé !</p>';
      } ?></div>

</ul>
<div>
<?php 
    $nom->closeCursor(); ?>
</div>
</body>
</html>