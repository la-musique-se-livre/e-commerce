<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>admin</title>
  <link rel="stylesheet" href="css/material.css<?php echo "?" . rand(); ?>">
  <link rel="stylesheet" href="css/base.css<?php echo "?" . rand(); ?>">
  <link rel="stylesheet" href="css/style1.css<?php echo "?" . rand(); ?>">
  <link rel="stylesheet" href="css/article1.css<?php echo "?".rand();?>" />
  <link rel="stylesheet" href="css/Menu_Navigation1.css<?php echo "?" . rand(); ?>" />
    <link rel="stylesheet" href="css/header.css<?php echo "?" . rand(); ?>" />
    <link rel="stylesheet" href="css/style.css<?php echo "?" . rand(); ?>" />

     <!--navbar-->
     <link rel="stylesheet" href="../PPE/fonts/style.css">
    <link rel="stylesheet" href="../PPE/css/bottstrap.min.css">
    <link rel="stylesheet" href="/PPE/login/login.css">

  
    <link rel="stylesheet" href="../PPE/css/navbar/style.css">
    <!--navbar-->


    
  
</head>

<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $bdd = new PDO('mysql:host=localhost;dbname=klik_database', 'root', '');
    require_once "php/header_vendeur.php";
    ?>

    <?php $reponse = $bdd->query('SELECT * FROM article');
?>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          
        </div>
      </nav>
    </div>
        <!-- articlce -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Article</h4>

                  <div class="table-responsive">
                    <table class="table">
 
                      <thead>
                      
                        <tr>
                          <th>Nom</th>
                          <th>Prix</th>
                          <th>Catégorie</th>
                          <th>Suppression</th>
                        </tr>
                      </thead>            
<?php         while ($donnees =
        $reponse->fetch()
    ) { ?>

                      <tbody>
                        <tr>
                          <td><?php echo $donnees['titre_article']; ?></td>
                          <td><?php echo $donnees['prix']; ?></td>
                          <td><?php echo $donnees['categoriearticle']; ?></td></td>
                          <td><form action="delproduit_vendeur.php" method="post" class="del2">
                            <button class=" btnn0"  type="submit" >
                            <img src="images/icone/trash-svg.svg" width="20" height="20" class="right" title="Supprimer l'article"></button>
                            <input type="hidden" name="id" value="<?php echo $donnees['id'] ?>"/>  
                        </form> </td>
                        </tr>
                      <?php }
    $reponse->closeCursor(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


                    
      

                   <!-- fin des messages -->
            
           
          </div>
        </div>
    
      

      </div>

    </div>
 
  </div>
<script src="../../vendors/base/vendor.bundle.base.js"></script>
 <script src="../../js/template.js"></script>



</body>


<script src="../PPE/js/navbar/bootstrap.min.js"></script>
<script src="../PPE/js/navbar/jquery-3.3.1.min.js"></script>
<script src="../PPE/js/navbar/jquery.sticky.js"></script>




<script src="../PPE/js/navbar/main.js"></script>
<script src="../PPE/js/navbar/owl.carousel.min.js"></script>
<script src="../PPE/js/navbar/popper.min.js"></script>

</html>
