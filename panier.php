<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css<?php echo "?".rand();?>">

	<link rel="stylesheet" href="css/panier.css<?php echo "?".rand();?>">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>Panier</title>
	<!--panier-->
	<link rel="stylesheet" href="../PPE/fonts/style.css">
    <link rel="stylesheet" href="../PPE/css/bottstrap.min.css">
    <link rel="stylesheet" href="/PPE/login/login.css">

  
    <link rel="stylesheet" href="../PPE/css/navbar/style.css">

    <!--panier-->
</head>

<body>
<?php
if(!isset($_SESSION)) {
  session_start();
} 
?>

	<?php

	include('php/db.php');
	require_once('php/header_connexion.php');
	




	$sql = "SELECT * FROM commande LEFT JOIN article ON commande.idArticle = article.id  WHERE commande.idUser = :idUser";

	$commande = $bdd->prepare($sql);
	$commande->bindParam(':idUser', $_SESSION['idUsers']);
	$commande->execute();
	$produits = $commande->fetchall();
	$total = 0;
	?>
	<?php if (!empty($msg)) echo "<div class='alert-success text-center'>" . $msg . "</div><br/>"; ?>
	</nav>
	<div class="container panierr mb-4">
		<div class="row">
			<div class="col-12">
				<div class="table-responsive">

					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col"> </th>
								<th scope="col">produit</th>
								<th scope="col">Disponible</th>
								<th scope="col" class="text-center">Quantité</th>
								<th scope="col" class="text-right">prix</th>
								<th> </th>
							</tr>
						</thead>
						<?php $count = 0;
						foreach ($produits as $produits) : $total +=   $produits['exemplaire'] * $produits['prix']; $count += $produits['exemplaire']; ?>
		

							<tbody>

								<tr>

									<td><?php
        $cheminimg = "/ppe/images/artivcle/artivcle" . $produits['id'] . "";
        echo "<img src = '$cheminimg' alt='' class='vitrine06' >";
        ?></td>
									<td><?php echo $produits['titre_article'] ?></td>
									<td ><?php if ($produits['disponible'] == 1) {
											echo "non";
										} else {
											echo "oui";
										} ?></h1>
									</td>
								<form method="post" action="/ppe/addpanier.php">
									<td class="control">x<?php echo $produits['exemplaire'] ?></td>
									
									</form>
									<td class="text-right"><?php echo $produits['prix'] . "€" ?></td>
									<td  class="btnn-sm btnn-danger text-right"><a class="faa fa-trash" href="dellpanier.php?commande=<?php echo $produits['id'] ?>&exemplaire=<?php echo $produits['exemplaire'] ?>"></a>
									</td>
									
								</tr>

							</tbody>
						<?php endforeach; ?>
						<tr>
                            <td></td>
                            <td></td>
                            <td><strong  class="rightt"><?php echo ' Total :  '  ?><?php echo $total . ' €' ?></strong></td>
                            <td></td>
                            <td class="text-right"></td>
                            <td ><i ></i>  </td>
                        </tr>

					</table>
				</div>

			</div>

			<div class="col mb-2">
				<div class="row">
					<div class="col-sm-12  col-md-6">
						
						<a  class="btn btn-block btn-light" href="/ppe/membre/index.php?id=<?= $_SESSION["idUsers"] ?>">Continue Shopping</a>
						  
						
					</div>
					<tbody>
                      
                    </tbody>
					<div class="col-sm-12 col-md-6 text-right">
						<a  class="btn btn-lg btn-block btn-success text-uppercase" href="/ppe/Payment.php?id=<?= $_SESSION["idUsers"] ?>">Acheter</a>
					</div>	
					


				</div>
			</div>
		</div>
	</div>


	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	 <!-- script panier -->
<script src="../PPE/js/navbar/bootstrap.min.js"></script>
<script src="../PPE/js/navbar/jquery-3.3.1.min.js"></script>
<script src="../PPE/js/navbar/jquery.sticky.js"></script>




<script src="../PPE/js/navbar/main.js"></script>
<script src="../PPE/js/navbar/owl.carousel.min.js"></script>
<script src="../PPE/js/navbar/popper.min.js"></script>

<!-- script panier -->

</body>

</html>