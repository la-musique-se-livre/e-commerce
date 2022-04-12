

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_article.css">
    <link rel="stylesheet" href="http://www.thismanslife.co.uk">
    <link rel="stylesheet" href="css/style.css">

    <!--addpanier-->
	<link rel="stylesheet" href="../PPE/fonts/style.css">
    <link rel="stylesheet" href="../PPE/css/bottstrap.min.css">
    <link rel="stylesheet" href="/PPE/login/login.css">

  
    <link rel="stylesheet" href="../PPE/css/navbar/style.css">

    <!--addpanier-->
</head>
<body>

<?php
if(!isset($_SESSION)) {
  session_start();
} 
?>

<?php


    include('php/db.php');

    $id_article = $_POST['article'];
    if(!empty($_POST['quant'])){
        $exemplaire = $_POST['quant'];
        $sql = "INSERT INTO commande (idUser, idArticle, exemplaire) VALUES (:idUser, :idArticle, :exemplaire);";
    }else
        $sql = "INSERT INTO commande (idUser, idArticle, exemplaire) VALUES (:idUser, :idArticle, 1);";
        
    $commande = $bdd->prepare($sql);
    $commande->bindParam('idUser',$_SESSION['idUsers']);
    $commande->bindParam('idArticle',$id_article);
    if(!empty($_POST['quant']))
        $commande->bindParam('exemplaire',$exemplaire);
     

    $check = $commande->execute();

    if($check)
        $msg = "Votre article a bien été ajouté à votre panier !";
    else
        $msg = "Votre article n'a pas pu être ajouté";?>
<div class="ajoute">
<?php 
echo $msg ?>
</div>
<?php
include("../PPE/php/header_connexion.php");
?>

</body>

 <!-- script addpanier -->
 <script src="../PPE/js/navbar/bootstrap.min.js"></script>
<script src="../PPE/js/navbar/jquery-3.3.1.min.js"></script>
<script src="../PPE/js/navbar/jquery.sticky.js"></script>




<script src="../PPE/js/navbar/main.js"></script>
<script src="../PPE/js/navbar/owl.carousel.min.js"></script>
<script src="../PPE/js/navbar/popper.min.js"></script>

<!-- script adpanier -->
</html>