<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <Title>La musique se livre Accueill</Title>
    <link rel="stylesheet" href="../css/Menu_Navigation.css" />
    <link rel="stylesheet" href="../css/header.css" />
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

                <div class="imge">
                    <?php
                    $cheminimg = "/ppe/images/livre/" . $donnees['id'] . "_1.png";
                    echo "<img src = '$cheminimg' alt='' class='vitrine05' >";
                    ?>

                    <p class="vitrine05"></p>

                    <div>
                        <p class="texte"><?php echo $donnees['nom']; ?></p>
                        <p class="texte2"><?php echo $donnees['prix']; ?>€</p>
                    </div>
                </div>

        <?php
            }
            $reponse->closeCursor();
        }
        ?>
    </div>
</body>

</html>