<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <Title>La musique se livre Accueill</Title>
    <link rel="stylesheet" href="../css/Menu_Navigation1.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Karantina:wght@300&display=swap" rel="stylesheet">
    <?php
    include "../php/db.php"
    ?>

    <script src="https://use.fontawesome.com/4a30e1716d.js"></script>
</head>

<body>
    <?php
    require_once "../php/header.php";
    ?>
    <div class="vitrine0">
        <?php
        if (isset($_GET["id"])) {
            $id = htmlspecialchars($_GET["id"]);
            $reponse = $bdd->query("SELECT * FROM produit WHERE id = $id");
            if ($reponse != false) {
                $donnees = $reponse->fetch();
        ?>

                <div class="contour">
                    <?php
                    $cheminimg = "/ppe/images/livre/" . $donnees['id'] . "_1.png";
                    echo "<img src = '$cheminimg' alt='' class='vitrine05' >";
                    ?>

                    <p class="vitrine05"></p>
                    </div>
                    <div>
                        <p class="contour1"><?php echo $donnees['description']; ?></p>
                        
                    </div>

                    <div class="contour2">
                    
                    <h5 class="texte"><?php echo $donnees['nom']; ?></h5>
                    <h1 class="text03">prix :   <?php echo $donnees['prix']; ?>€</h1>
                    <h1 class="texte02">disponible: <?php if ($donnees['disponible'] == 1) {echo "oui"; } else {echo "non"; }?></h1>
                    </div>

                    <input class="bouton40" type="submit" value="Ajouter au panier">

                    
                

                
               

        <?php
            }
            $reponse->closeCursor();
        }
        ?>
    </div>
</body>

</html>