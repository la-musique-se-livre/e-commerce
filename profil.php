
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        
                    </div>
					
					<div class="signup-form" align="center">
         <h1>Profil de <?php echo $userinfo['pseudo']; ?></h1>
         <br />
      <p class="txtb">Pseudo = <?php echo $userinfo['pseudo']; ?></p>
      <p class="txtb">Mail = <?php echo $userinfo['mail']; ?></p>
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <a type="submit" name="signin" id="signin" class= "form-submit" href="login/modifier">Editer mon profil</a>
         <a type="submit" name="signin" id="signin" class= "form-submit" href="déconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>

                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>