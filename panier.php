<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/header_panier.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Karantina:wght@300&display=swap" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/panier.css" />
	<link rel="stylesheet" href="css/herder_panier.css" />
	<title>Document</title>
</head>

<body>
	<?php require_once 'php/header_panier.php'; ?>
	<?php
	include "../PPE/php/db.php" ?>
	<?php
	if (isset($_GET["id"])) {
		$id = htmlspecialchars($_GET["id"]);
		$reponse = $bdd->query("SELECT * FROM produit WHERE id = $id");
		if ($reponse != false) {
			$donnees = $reponse->fetch();
	?>
	<?php
		}
		$reponse->closeCursor();
	}
	?>


	<div class="container">
		<table id="cart" class="table table-hover table-condensed woze99">
			<thead>
				<tr class="cart01">
					<th style="width:50%">Product</th>
					<th style="width:10%">Price</th>
					<th style="width:8%">Quantity</th>
					<th style="width:22%" class="text-center">Subtotal</th>
					<th style="width:10%"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td data-th="Product">
						<div class="row">
							<div class="col-sm-2 hidden-xs"><?php
															$cheminimg = "/ppe/images/panier/" . $donnees['id'] . "_1.jpg";
															echo "<img src = '$cheminimg' alt='' class='vitrine05' >";
															?></div>
							<div class="col-sm-10">
								<h4 class="nomargin">Product 1</h4>
								<p><?php echo $donnees['nom']; ?></p>
							</div>
						</div>
					</td>
					<td data-th="Price"><?php echo $donnees['prix']; ?>€</td>
					<td data-th="Quantity">
						<input type="number" class="form-control text-center" value="1">
					</td>
					<td data-th="Subtotal" class="text-center"><?php echo $donnees['prix']; ?>€</td>
					<td class="actions" data-th="">
						<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr class="visible-xs">
					<td class="text-center"><strong>Total 1.99</strong></td>
				</tr>
				<tr>
					<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
					<td colspan="2" class="hidden-xs"></td>
					<td class="hidden-xs text-center"><strong>Total : <?php echo $donnees['prix']; ?>€</strong></td>
					<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
				</tr>
			</tfoot>
		</table>



	</div>


</body>

</html>