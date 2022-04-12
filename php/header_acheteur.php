
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--navbar-->
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="../css/bottstrap.min.css">
    <link rel="stylesheet" href="/PPE/login/login.css">

  
    <link rel="stylesheet" href="../css/navbar/style.css">
    <!--navbar-->


    


</head>

<?php
if(!isset($_SESSION)) {
  session_start();
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

  <body>


   <!--Menu-->

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


 

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="roww align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">La musique se livre</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="/PPE/membre/index.php" class="nav-link">Home</a></li>
                 


                 
                 
                  <li><a href="" class="nav-link">Acheteur</a></li>

                  <li><a href="/PPE/panier.php" class="nav-link">Panier</a></li>
                  <li><a href="../profil.php" id="button" class="nav-link"><?php echo $_SESSION['pseudo']; ?></a></li>
                  <li><a href="../déconnexion.php" class="nav-link">Déconnexion</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>
         <!--Menu-->





</body>

<script src="../js/navbar/bootstrap.min.js"></script>
<script src="../js/navbar/jquery-3.3.1.min.js"></script>
<script src="../js/navbar/jquery.sticky.js"></script>




<script src="../js/navbar/main.js"></script>
<script src="../js/navbar/owl.carousel.min.js"></script>
<script src="../js/navbar/popper.min.js"></script>
  


</html>
