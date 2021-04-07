<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <Title>La musique se livre - Accueil</Title>
    <link rel="stylesheet" href="css/Menu_Navigation.css" />
    <link rel="stylesheet" href="css/header.css" />
    <?php 
     include "php/db.php"
     ?>

    <script src="https://use.fontawesome.com/4a30e1716d.js"></script>
  </head>

  <body>
    <header role="header">
      <nav class="menu" role="navigation">
        <div class="inner">
          <div class="m-left">
            <img class="woze20" src="images/image.png" />
          </div>

          <input
            type="search"
            id="site-search"
            name="q"
            aria-label="Search through site content"
            class="recherche"
          />
          <button id="loupe" type="submit" class="icone-loupe"></button>

          <div class="m-right">
            <nav class="l-menu" role="navigation">
              <a href="http:www.exemple-de-livres.com"
                ><i class="fa fa-bars" aria-hidden="true"></i> Livres
              </a>
              <a href=" http:www.exemple-de-cd.com  "
                ><i class="fa fa-bars" aria-hidden="true"></i> CDs
              </a>
              <a href=" http:www.exemple-de-vinyless.com  "
                ><i class="fa fa-bars" aria-hidden="true"></i> Vinyles
              </a>
              <a href=" http:www.exemple-de-contact.com  "> Nous contacter </a>
              <nav class="connecter">
                <a href=" login/index.php "> Se connecter </a>
              </nav>
              <a href=" http:www.exemple-de-panier.com  "
                ><i class="fa fa-shopping-basket" aria-hidden="true"></i
              ></a>
            </nav>
          </div>
        </div>
      </nav>
    </header>

    <div class="vitrine0">
      <?php $reponse=$bdd->query('SELECT * FROM produit'); while($donnees =
      $reponse->fetch()) { ?>

      <div class="vitrine">
        <p><img src="<?php echo $donnees['image']; ?>" alt="fdssd" /></p>
        <div class="text">
          <p><?php echo $donnees['nom']; ?></p>
        </div>
      </div>

      <?php } $reponse->closeCursor() ; ?>
    </div>
  </body>
</html>
