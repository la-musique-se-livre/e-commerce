<!DOCTYPE html>
<html lang="en">

<head>

<body>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--vitrine-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Menu_Navigation1.css<?php echo "?".rand();?>" />
  <link rel="stylesheet" href="../css/header.css<?php echo "?".rand();?>" />
  <link rel="stylesheet" href="../css/style.css<?php echo "?".rand();?>" />
  <link rel="stylesheet" href="../css/vitrine.css<?php echo "?".rand();?>" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Karantina:wght@300&display=swap" rel="stylesheet">
    <!--vitrine-->
  </head>

  <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            font-family: poppins;
        }
    </style>

    
 
  <?php
  include "../php/db.php"
?>
<?php
if(!isset($_SESSION)) {
  session_start();
} 
?>

  <?php
    include "../php/header_connexions.php";
  ?>

  <div class="vitrine0">
    <?php $reponse = $bdd->query('SELECT * FROM article');
    while ($donnees =
      $reponse->fetch()
    ) { ?>

<body>
</body>

</html>
<section class="feature-item">
    <div class="product-container">
        <div class="product-box">
            <div class="product-img">
                <a class="add-cart" href="../article/index.php?id=<?= $donnees["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
</svg></a>

                <img <?php
        $cheminimg = "/ppe/images/artivcle/artivcle" . $donnees['id'] . "";
        echo "<img src = '$cheminimg' alt='' class='vitrine06' >";
        ?>
            </div>

            <div class="product-details">
                <a href="#" class="p-name"><?php echo $donnees['titre_article']; ?></a>
                <span class="p-price"><?php echo $donnees['prix']; ?>€</span>
            </div>
        </div>

        <div class="product-box">

            <div >
        

              

              
            </div>
        </div>


    </div>
    
</section>



    <?php }
    $reponse->closeCursor(); ?>
  </div>
</body>



</html>