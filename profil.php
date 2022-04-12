<!DOCTYPE html>
<html>

<head>
<link href="css/profil.css" rel="stylesheet" id="profil-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css<?php echo "?".rand();?>" rel="stylesheet" id="bootstrap-css<?php echo "?".rand();?>">
<link rel="stylesheet" href="css/Menu_Navigation1.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="css/header.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="css/style.css<?php echo "?".rand();?>" />
    <link rel="stylesheet" href="css/recherche.css<?php echo "?".rand();?>" />
     <link rel="stylesheet" href="css/recherche.css<?php echo "?".rand();?>" />


        
     
    <!--profil-->
	<link rel="stylesheet" href="../PPE/fonts/style.css">
    <link rel="stylesheet" href="../PPE/css/bottstrap.min.css">
    <link rel="stylesheet" href="/PPE/login/login.css">

  
    <link rel="stylesheet" href="../PPE/css/navbar/style.css">

    <!--profil-->

</head>

<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>

<?php
        $bdd = new PDO('mysql:host=localhost;dbname=klik_database', 'root', '');
        require_once "php/header_connexion.php";
        ?>

<?php 
if (!isset($_SESSION))

{
    session_start();
}
if(isset($_SESSION['idUsers']) AND isset($_SESSION['email'])){  

if(!isset($_POST['pass'])){
    $_POST['pass'] = '';
}
if(!isset($_POST['pass2'])){
    $_POST['pass2'] = '';
}
if(!isset($_POST['pass3'])){
    $_POST['pass3'] = '';
}

?>

<?php } ?>




<div class="container emp-profile">
            <form method="post"enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            
                            <form action="./editpro.php">
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="avatar"/>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $_SESSION['pseudo']; ?>
                                    </h5>
                                   
                           
                        </div>

                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pseudo  :  <?php echo $_SESSION['pseudo']; ?></label> 
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>nom : <?php echo $_SESSION['nom']; ?></label>
                                            </div>
                                            <br>
                                            
                                            <br>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email :  <?php echo $_SESSION['email']; ?></label>
                                                <br>
                                            
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>prenom :  <?php echo $_SESSION['prenom']; ?></label>
                                            <br>
                                            <br>

                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>adresse : <?php echo $_SESSION['adresse']; ?></label>
                                            </div>
                                            
                                        </div>


                        
                    </div>

                    </form>
                    <form class="text-center" method="POST" action="/PPE/membre/index.php"> 
              

                        
                        <input class="button"  type="submit" value="retour"> 
                        
                    </form>

              
          
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                          
                        </div>
                    </div>
                    
                    </div>
                </div>
            </form>  
            <?php
        
?>  
 <!-- script addpanier -->
 <script src="../PPE/js/navbar/bootstrap.min.js"></script>
<script src="../PPE/js/navbar/jquery-3.3.1.min.js"></script>
<script src="../PPE/js/navbar/jquery.sticky.js"></script>




<script src="../PPE/js/navbar/main.js"></script>
<script src="../PPE/js/navbar/owl.carousel.min.js"></script>
<script src="../PPE/js/navbar/popper.min.js"></script>

<!-- script adpanier -->

        </div>