<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <Title> Accueil</Title>
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

          <nav>
            <ul class="menu1">
                <li><a href="#" title="">Home</a></li>
                <li class="services"><a href="#" title="">Services</a>
                    <ul class="sous-menu">
                    <li><a href="#" title="">Nouveautés</a></li>
                    <li><a href="#" title="">Coups de coeur</a></li>
                    <li><a href="#" title="">Polar/Thriller</a></li>
                    <li><a href="#" title="">Romance</a></li>
                    <li><a href="#" title="">Littérature Etrangère</a></li>
                    <li><a href="#" title="">Aventure/Ado</a></li>
                    <li><a href="#" title="">Cuisine/Patisserie</a></li>
                    <li><a href="#" title="">Livres Scolaire</a></li>
                    <li><a href="#" title="">Livres Universitaires</a></li>
                    <li><a href="#" title="">Dictionnaires</a></li>
                    <li><a href="#" title="">Les Touts Petits</a></li>
                    <li><a href="#" title="">Poésie</a></li>
                    <li><a href="#" title="">Classiques</a></li>
                    </ul>

                </li>
                <li class="services"><a href="#" title="">Livres</a>
                    <ul class="sous-menu">
                        <li><a href="#" title="">Service 1</a></li>
                        <li><a href="#" title="">Service 2</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        
                    </ul>

                </li>
                <li class="services"><a href="#" title="">CDs</a>
                    <ul class="sous-menu">
                        <li><a href="#" title="">Service 1</a></li>
                        <li><a href="#" title="">Service 2</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                    </ul>

                </li>

                <li class="services"><a href="#" title="">Vinyles</a>
                    <ul class="sous-menu">
                        <li><a href="#" title="">Service 1</a></li>
                        <li><a href="#" title="">Service 2</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                        <li><a href="#" title="">Service 3</a></li>
                    </ul>

                </li>

                <li> <a href =" http:www.exemple-de-panier.com  "><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                
            </ul>
        </nav>
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
