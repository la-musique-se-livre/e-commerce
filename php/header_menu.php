<!doctype html>
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


    
    <!--inscription-->

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../inscription/style.css<?php echo "?" . rand(); ?>">
    <link rel="stylesheet" href="../css/notice.css<?php echo "?" . rand(); ?>">
   
    <!--inscription-->


    
  
  </head>
  <?php
    if (!isset($_SESSION)) {
        session_start();
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
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">La musique se livre</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  
                  <li><a href="#popup1" id="button" class="nav-link">Connexion</a></li>
                  <li><a href="#popup2" class="nav-link">Inscription</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>
         <!--Menu-->

         <!--notification login -->

         <body>


<div id="popup1" class="overlay">
	<div class="popup">
		
		<a class="close" href="#">&times;</a>
		<div class="content">
        
            <div class="containerr">
                <div >
                    

                    <div class="signin-form">
                 <div> <img class="woze21" src="/PPE/images/icone/image.png"/></div>
                        <form method="post"  action="/PPE/login/login.php" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="woze" name="mailconnect" id="email" placeholder="email"/>
                            </div>
                            <div class="form-group">
                                <label for="mdpconnect"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="password" name="mdpconnect" id="mdpconnect" placeholder="Password"/>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="formconnexion" id="signin" class="form-submit" value="Login"/>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
       
		</div>
	</div>
</div>

 <!--notification inscription -->



 <div id="popup2" class="overlay">
	<div class="popupp">
		<a class="close" href="#">&times;</a>

 <!-------------------------------------->


 <section>
            <div class="container">
                <div>
                    

                <div class="signinnnn-form">
                 <div> <img class="woze20" src="../PPE/images/icone/image.png"/></div>
                        <form method="post" action="../PPE/inscription/inscription.php" class="register-form" id="login-form">
                            <div class="form-groupp">
                                <label for="Nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="woze" name="Nom" id="Nom" placeholder="Nom"/>
                            </div>
                            <div class="form-groupp">
                                <label for="Prenom"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="text" name="Prenom" id="Prenom" placeholder="Prenom"/>
                            </div>

                            <div class="form-groupp">
                                <label for="Prenom"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="text" name="pseudo" id="pseudo" placeholder="pseudo"/>
                            </div>
                            
                            <div class="form-groupp">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="woze" name="mailconnect" id="email" placeholder="email"/><?php if(!empty($email_error)) echo $email_error; ?>
                            </div>

                            <div class="form-groupp">
                                <label for="mdpconnect"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="password" name="mdpconnect" id="mdpconnect" placeholder="Password"/><?php if(!empty($pass_error)) echo $pass_error; ?>
                            </div>

                            <div class="form-groupp">
                                <label for="mdpconnect1"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="password1" name="mdpconnect1" id="mdpconnect1" placeholder="Confiramtion mot de passe"/><?php if(!empty($pass_error)) echo $pass_error; ?>
                            </div>

                            <div class="form-groupp">
                                <label for="mdpconnect1"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="text" name="adresse" id="adresse" placeholder="Adresse"/>
                            </div>

                            <tr>
					<td>
                        <h4>Homme</h4><input type="radio"  class="sexe1" name="sexe" value="M" checked="checked">
					    <h4>Féminin</h4><input type="radio"  class="sexe2" name="sexe" value="F">
					</td>
				</tr>

                <div class="bloc">
                    <div class="select">
                        <select name="selec" id="select">
                         <option>pays</option>
                        <option value="France">France</option>
                        <option value="Royaume-Uni">Royaume-Uni</option>
                        <option value="Russie">Russie</option>
                        <option value="États-Unis">États-Unis</option>
                        <option value="Maurice">Maurice</option>                       
                        <option value="Mauritanie">Mauritanie</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Salomon">Salomon</option>
                        <option value="Suède">Suède</option>
                        <option value="Tunisie">Tunisie</option>
                        <option value="Népal">Népal</option>
                        <option value="Kazakhstan">Kazakhstan</option>	
                        <option value="Inde">Inde</option>
                        <option value="Ghana">Ghana</option>
                        </select>
                        </div>
                        </div>

                            <div class="form-groupp form-button">
                                <input type="submit" name="formconnexion" id="signin" class="form-submit" value="Login" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            
        </section>


<!-------------------------------------->
  
	</div>
</div>





  
</body>

          <!--notification-->





</body>

<script src="../PPE/js/navbar/bootstrap.min.js"></script>
<script src="../PPE/js/navbar/jquery-3.3.1.min.js"></script>
<script src="../PPE/js/navbar/jquery.sticky.js"></script>




<script src="../PPE/js/navbar/main.js"></script>
<script src="../PPE/js/navbar/owl.carousel.min.js"></script>
<script src="../PPE/js/navbar/popper.min.js"></script>
</html>