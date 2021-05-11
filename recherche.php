<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/Menu_Navigation1.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/recherche.css" />

  </head>
  <body>

<?php
  require_once "php/header.php";
  ?>

<?php
  include "php/db.php"
  ?>
<?php 
$nom = $bdd->query('SELECT * FROM klik_database ORDER BY id DESC');

if(isset($_GET['q']) AND !empty($_GET['q'])) {
  $q = htmlspecialchars($_GET['q']);
  $nom = $bdd->query("SELECT * FROM produit WHERE nom LIKE '%".$q."%' ORDER BY id DESC");
//recherche du produit dans la base
}

?>

<?php if ($nom->rowCount() > 0){  ?>

<ul>
<?php while ($p = $nom->fetch()){ ?>
      <div class="recherches"><img class="img1" src="images/livre/<?= $p['id'] ?>_1.png">
      </div><div class="marque"><?= $p['marque'] ?></div><div class="marque"><?= $p['nom'] ?></div>
      <a href="../PPE/article/index.php?id=<?= $p["id"] ?>"><input class="bouton20" type="submit" value="Voir l'article"></a>

      <?php
      }  
       } 
      ?>
  
</ul>
<div>
<?php 
    $nom->closeCursor(); ?>
</div>
</body>
</html>