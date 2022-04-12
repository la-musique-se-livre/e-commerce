<html lang="en">

<head>
    <title>Galerie</title>
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    <link rel="stylesheet" href="../css/article.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="../css/article1.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="css/style.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="css/style1.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="../css/commentaire.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
    <?php
    include "../php/db.php"
    
    ?>
    

<?php
if(!isset($_SESSION)) {
  session_start();
} 
?>


<?php
        if (isset($_GET["id"])) {
            $id = htmlspecialchars($_GET["id"]);
            $reponse = $bdd->query("SELECT * FROM article WHERE id = $id");
            if ($reponse != false) {
                $donnees = $reponse->fetch();
            }
          }
        ?>

<?php
if (!array_key_exists('idUsers', $_SESSION)) {
} else {
    $stmt = $bdd->prepare('SELECT * FROM users WHERE idUsers = :idUsers');
    $stmt->bindParam('idUsers', $_SESSION['idUsers'], PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch();
}

?>



<?php if($_SESSION['statut'] == '2'){?>
</head>
<body>


<div class = "cardd-wrapper">
      <div class = "cardd">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
            <?php
        $cheminimg = "/ppe/images/artivcle/artivcle" . $donnees['id'] . "";
        echo "<img src = '$cheminimg' alt='' class='vitrine05' >";
        ?>
     
            </div>
          </div>
          
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $donnees['titre_article']; ?></h2>
         
          

          <div class = "product-price">
            <p class = "new-price">Prix <span><?php echo $donnees['prix']; ?>€</p>
            
          </div>

          <div class = "product-detail">
            <h2>Description: </h2>
            <p><?php echo $donnees['descr']; ?></p>
            
            
          </div>

          <div class = "purchase-info">
          <form class="text-center" method="POST" action="/ppe/addpanier.php"> 
               <input type="text" class="control"  id="quantity" name="quant" min="1" max="100" value="1">

                        <input  class="hh" name="article" value="<?php echo $donnees['id'] ?>">
                        <input class="button"  type="submit" value="Ajouter au panier"> 
                        
                         
                    </form>

                    </form>
                    <form class="text-center" method="POST" action="/PPE/membre/index.php"> 
              

                        
                        <input class="button"  type="submit" value="retour"> 
                        
                    </form>
            <i class = "fas fa-shopping-cart"></i>
          </div>

          

        </div>
      </div>

   </div>

   <article class="text-centerrr">
				<header class="page-header">
					<h4 class="page-title">Ajoute ton commentaire !</h4>
                </header>
                <form action="../articlecomm_post.php" method="post">
                    <br>
                    <p class=""></p> 
                    <input type="hidden" name="id" value="<?php echo $_SESSION['idUsers'] ?>"/>  
                    <input type="hidden" name="id_article" value="<?php echo $_GET['id'] ?>"/>  
                    <div class="col-sm-12">
						<div class="col-sm-4 offset-sm-4 ">
							<textarea placeholder="Ecrivez votre message ici..." class="form-control" name ="texte"rows="9"></textarea>
						</div>
					</div>
					<br>
					<div class="row">	
						<div class="col-sm-12 ">
								<input class="btn btn-action" type="submit" value="Envoyer le message">
							</div>
						</div>
				</form>
			</article>

<?php 
                    $req = $bdd->prepare('SELECT users.nom, users.email,users.prenom,c.id,c.idUser, c.texte, c.idArticle,DATE_FORMAT(c.date_commentaire, \'%d/%m/%Y à %Hh %imin\') AS date_commentaire_fr  FROM commentaire AS c LEFT JOIN users ON c.idUser = users.idUsers WHERE c.idArticle = ? ORDER BY c.date_commentaire DESC'); 
                    $req->execute(array($_GET['id']));
                    if($req->rowCount() == 0){ // SI ROWCOUNT = 0 DONT IL YA PAS DE COMM ON ECHO XXX SINON ON FAIS LA BOUCLE
                    die("ya rien")?>

<?php
                    }else{

                            while ($donnees = $req->fetch()){
                    ?>  
                        <?php 
                            if ($_SESSION['email'] == $donnees['email']){ //On affiche sa uniquement si le pseudo = a la session donc juste SES commentaires
                        ?> 

                        <!--Supprimer le commentaire-->
                        
                        
                        <?php 
                            } 
                        ?>
                       
                    </div>
               

                    <div class="comments">

                    <div class="comment-wrap">
				
				<div class="comment-block">
						<p class="comment-text"><?php echo nl2br(htmlspecialchars($donnees['texte'])); ?></p>
						<div class="bottom-comment">
								<div class="comment-date"><?php echo $donnees['prenom'] ?>       <?php echo nl2br(htmlspecialchars($donnees['date_commentaire_fr'])); ?></div>
								<form action="../delcomm.php" method="post" class="del22">	
                <ul class="comment-actions">
                <button class="complain"  type="submit" >Supprimer
                            </button>
                            <input type="hidden" name="id" value="<?php echo $donnees['id'] ?>"/>  
                        </form>   
								</ul>
                </form>	
            
						</div>
				</div>
		</div>




</div>

</div>


  <?php }} ?>
                  
     








<script src="script.js"></script>

</body>
<?php  ?>

 <?php 
                            } 
                        ?>


    

	
<?php if($_SESSION['statut'] == '1'){?>
</head>
<body>



<div class = "cardd-wrapper">
      <div class = "cardd">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
            <?php
        $cheminimg = "/ppe/images/artivcle/artivcle" . $donnees['id'] . "";
        echo "<img src = '$cheminimg' alt='' class='vitrine05' >";
        ?>
     
            </div>
          </div>
          
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $donnees['titre_article']; ?></h2>
         
          

          <div class = "product-price">
            <p class = "new-price">Prix <span><?php echo $donnees['prix']; ?>€</p>
            
          </div>

          <div class = "product-detail">
            <h2>Description: </h2>
            <p><?php echo $donnees['descr']; ?></p>
            
            
          </div>

          <div class = "purchase-info">
          <form class="text-center" method="POST" action="/ppe/addpanier.php"> 
               <input type="text" class="control"  id="quantity" name="quant" min="1" max="100" value="1">

                        <input  class="hh" name="article" value="<?php echo $donnees['id'] ?>">
                        <input class="button"  type="submit" value="Ajouter au panier"> 
                        
                    </form>
                    <form class="text-center" method="POST" action="/PPE/membre/index.php"> 
              

                        
                        <input class="button"  type="submit" value="retour"> 
                        
                    </form>
                    
            <i class = "fas fa-shopping-cart"></i>
          </div>

          

        </div>
      </div>

   </div>

   <article class="text-centerrr">
				<header class="page-header">
					<h4 class="page-title">Ajoute ton commentaire !</h4>
                </header>
                <form action="../articlecomm_post.php" method="post">
                    <br>
                    <p class=""></p> 
                    <input type="hidden" name="id" value="<?php echo $_SESSION['idUsers'] ?>"/>  
                    <input type="hidden" name="id_article" value="<?php echo $_GET['id'] ?>"/>  
                    <div class="col-sm-12">
						<div class="col-sm-4 offset-sm-4 ">
							<textarea placeholder="Ecrivez votre message ici..." class="form-control" name ="texte"rows="9"></textarea>
						</div>
					</div>
					<br>
					<div class="row">	
						<div class="col-sm-12 ">
								<input class="btn btn-action" type="submit" value="Envoyer le message">
							</div>
						</div>
				</form>
			</article>

    <?php 
                    $req = $bdd->prepare('SELECT users.nom, users.email,users.prenom,c.id,c.idUser, c.texte, c.idArticle,DATE_FORMAT(c.date_commentaire, \'%d/%m/%Y à %Hh %imin\') AS date_commentaire_fr  FROM commentaire AS c LEFT JOIN users ON c.idUser = users.idUsers WHERE c.idArticle = ? ORDER BY c.date_commentaire DESC'); 
                    $req->execute(array($_GET['id']));
                    if($req->rowCount() == 0){ // SI ROWCOUNT = 0 DONT IL YA PAS DE COMM ON ECHO XXX SINON ON FAIS LA BOUCLE
                    die("ya rien")?>

<?php
                    }else{

                            while ($donnees = $req->fetch()){
                    ?>  
                        <?php 
                            if ($_SESSION['email'] == $donnees['email']){ //On affiche sa uniquement si le pseudo = a la session donc juste SES commentaires
                        ?> 

                        <!--Supprimer le commentaire-->
                        
                        
                        <?php 
                            } 
                        ?>
                       
                    </div>
               

                    <div class="comments">

                    <div class="comment-wrap">
				
				<div class="comment-block">
						<p class="comment-text"><?php echo nl2br(htmlspecialchars($donnees['texte'])); ?></p>
						<div class="bottom-comment">
								<div class="comment-date"><?php echo $donnees['prenom'] ?>       <?php echo nl2br(htmlspecialchars($donnees['date_commentaire_fr'])); ?></div>
								  
								</ul>
                </form>	
            
						</div>
				</div>
        
		</div>

  

    <?php }} ?>
 
    
    <script src="script.js"></script>

</body>
<?php } ?>



<?php
            
            $reponse->closeCursor();
        
?>


	
<?php if($_SESSION['statut'] == '3'){?>
</head>
<body>



<div class = "cardd-wrapper">
      <div class = "cardd">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
            <?php
        $cheminimg = "/ppe/images/artivcle/artivcle" . $donnees['id'] . "";
        echo "<img src = '$cheminimg' alt='' class='vitrine05' >";
        ?>
     
            </div>
          </div>
          
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $donnees['titre_article']; ?></h2>
         
          

          <div class = "product-price">
            <p class = "new-price">Prix <span><?php echo $donnees['prix']; ?>€</p>
            
          </div>

          <div class = "product-detail">
            <h2>Description: </h2>
            <p><?php echo $donnees['descr']; ?></p>
            
            
          </div>

          <div class = "purchase-info">
          
                    <form class="text-center" method="POST" action="/PPE/membre/index.php"> 
              

                        
                        <input class="button"  type="submit" value="retour"> 
                        
                    </form>
                    
            <i class = "fas fa-shopping-cart"></i>
          </div>

          

        </div>
      </div>

   </div>

   <article class="text-centerrr">
				<header class="page-header">
					
                </header>
                <form action="../articlecomm_post.php" method="post">
                    <br>
                    <p class=""></p> 
                    <input type="hidden" name="id" value="<?php echo $_SESSION['idUsers'] ?>"/>  
                    <input type="hidden" name="id_article" value="<?php echo $_GET['id'] ?>"/>  
                    <div class="col-sm-12">
					
					</div>
					<br>
					<div class="row">	
						
						</div>
				</form>
			</article>

    <?php 
                    $req = $bdd->prepare('SELECT users.nom, users.email,users.prenom,c.id,c.idUser, c.texte, c.idArticle,DATE_FORMAT(c.date_commentaire, \'%d/%m/%Y à %Hh %imin\') AS date_commentaire_fr  FROM commentaire AS c LEFT JOIN users ON c.idUser = users.idUsers WHERE c.idArticle = ? ORDER BY c.date_commentaire DESC'); 
                    $req->execute(array($_GET['id']));
                    if($req->rowCount() == 0){ // SI ROWCOUNT = 0 DONT IL YA PAS DE COMM ON ECHO XXX SINON ON FAIS LA BOUCLE
                    die("ya rien")?>

<?php
                    }else{

                            while ($donnees = $req->fetch()){
                    ?>  
                        <?php 
                            if ($_SESSION['email'] == $donnees['email']){ //On affiche sa uniquement si le pseudo = a la session donc juste SES commentaires
                        ?> 

                        <!--Supprimer le commentaire-->
                        
                        
                        <?php 
                            } 
                        ?>
                       
                    </div>
               

                    <div class="comments">

                    <div class="comment-wrap">
				
				<div class="comment-block">
						<p class="comment-text"><?php echo nl2br(htmlspecialchars($donnees['texte'])); ?></p>
						<div class="bottom-comment">
								<div class="comment-date"><?php echo $donnees['prenom'] ?>       <?php echo nl2br(htmlspecialchars($donnees['date_commentaire_fr'])); ?></div>
								  
								</ul>
                </form>	
            
						</div>
				</div>
        
		</div>

  

    <?php }} ?>
 
    
    <script src="script.js"></script>

</body>
<?php } ?>



<?php
            
            $reponse->closeCursor();
        
?>




</html>

                   
     

   

 
 
 
 
 
 
 
 
 
 
 
 
 

     

       
      
    
    

