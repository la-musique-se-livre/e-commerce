

<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/profil.css" rel="stylesheet" id="profil-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--ajoute article-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css<?php echo "?".rand();?>" rel="stylesheet" id="bootstrap-css<?php echo "?".rand();?>">
<link rel="stylesheet" href="css/Menu_Navigation1.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="css/header.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="css/style.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="css/recherche.css<?php echo "?".rand();?>" />
     <link rel="stylesheet" href="css/recherche.css<?php echo "?".rand();?>" />
<!--ajoute article-->
<!--admin-->
     <link rel="stylesheet" href="../PPE/fonts/style.css">
    <link rel="stylesheet" href="../PPE/css/bottstrap.min.css">
    <link rel="stylesheet" href="/PPE/login/login.css">

  
    <link rel="stylesheet" href="../PPE/css/navbar/style.css">

    <!--admin-->
</head>
<body>
<?php 

if (!isset($_SESSION)) {
    session_start();
}
$bdd = new PDO('mysql:host=localhost;dbname=klik_database', 'root', '');
require_once "php/header_admin.php";


    

if(!isset($_POST['titre_article'])){
    $_POST['titre_article'] = '';
}
    if(!isset($_POST['description'])){
        $_POST['description'] = '';
}

if(!isset($_POST['prix'])){
    $_POST['prix'] = '';
}
if(!isset($_POST['categoriearticle'])){
    $_POST['categoriearticle'] = '';
}
if(isset($_SESSION['idUsers']) AND isset($_SESSION['email']) ){  ?>
<section class="jumbotro  ">
    <div class="container">
       
    </div>
</section>

<section class=" testici  container w-100 divBoxLog2 col-lg-4 col-10  ">
    
    <div class="rectangle">
        <div class="row text-center logSignForm">
            <div id="inscriptionForm" style = "display:black;" class="container w-100 col-12">
            <form action="addproduct_post.php" method="post" enctype="multipart/form-data" id="register_form">
             <div class="form-group">
                <labe1 for="titre">Titre de l'article  <a style="color:red;">*</a> :</label><input type="text" name="titre_article" required class="form-controll" value="<?php echo htmlspecialchars($_POST['titre_article'])?>"/><br/> <!-- value on protege contre l'injection de html grace a htmlspecialchars -->
                <label class="description" for="description">Description de l'article <a style="color:red;">*</a> :</label>   <input type="text" name="description" class="form-controll" required value="<?php echo htmlspecialchars($_POST['description'])?>"/><br /> 
                <label class="prix" for="prix">Prix de l'article <a style="color:red;">*</a> :</label>   <input type="number" name="prix" required class="form-controll"  value="<?php echo htmlspecialchars($_POST['prix'])?>"/><br /> 
                <label class="categorie" for="categoriearticle">Catégorie  <a style="color:red;">*</a> :</label>
                <select id="categoriearticle" name="categoriearticle" class="form-control">
                    <option value="CD">CD</option>
                    <option value="Roman courtois">Roman courtois</option>
                    <option value="Roman historique">Roman historique</option>
                    <option value="Roman épistolaire">Roman épistolaire</option>
                    <option value="Roman d'amour">Roman d'amour</option>
                    <option value="Nouvelle fiction">Nouvelle fiction</option>
                </select><br>          
                <label class="image" >Image : </label>
                <input accept="image/png, image/jpeg" type="file" name="img" /><br/><br/>
                <p><a style="color:red;">*</a> Champs obligatoires </p>
                <button type="submit" class="btn btn-primary">Ajouter l'article</button>
        </form>

            </div>              
        </div>
    </div>
</section>

    
   



<?php 



 }?>

</body>


 <!-- script admin -->
<script src="../PPE/js/navbar/bootstrap.min.js"></script>
<script src="../PPE/js/navbar/jquery-3.3.1.min.js"></script>
<script src="../PPE/js/navbar/jquery.sticky.js"></script>




<script src="../PPE/js/navbar/main.js"></script>
<script src="../PPE/js/navbar/owl.carousel.min.js"></script>
<script src="../PPE/js/navbar/popper.min.js"></script>

<!-- script admin -->
  
</html>