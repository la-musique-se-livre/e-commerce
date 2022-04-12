<?php
if(!isset($_SESSION)) {
  session_start();
} 
?>
<?php
    include('php/db.php');





$article = $_GET['commande'];
$exp = $_GET['exemplaire'];

$sql = "DELETE FROM commande WHERE idUser = :user AND idArticle = :article AND exemplaire = :exemplaire";

$panier = $bdd->prepare($sql);
    $panier->bindParam(':user',$_SESSION['idUsers']);
    $panier->bindParam(':article',$article);
    $panier->bindParam(':exemplaire',$exp);
    $check = $panier->execute();
   
    if($check)
    $msg = "votre article a bien été supprimé";
else
    $msg = "votre article n'a pas pu être supprimé";

    include("panier.php");

?>
