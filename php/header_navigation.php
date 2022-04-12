<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--navbar-->
    <link rel="stylesheet" href="../css/header_navigation/style.css">
    <link rel="stylesheet" href="../css/header_navigation/login.css">
    <link rel="stylesheet" href="../css/header_navigation/bootstrapp.min.css">
    <link rel="stylesheet" href="../css/header_navigation/acceil.css">
    <link rel="stylesheet" href="../css/header_navigation/acceill.css">
    <link rel="stylesheet" href="../css/header_navigation/notife.css">
    <link rel="stylesheet" href="../css/header_navigation/style.scss">
    <link rel="stylesheet" href="../css/header_navigation/fonts/style.css">
    <!--navbar-->
    <!--notification-->
   
    <!--notification-->


    
  
  </head>
  <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
  <body>


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
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  


                  <li class="has-children">
                    <a href="#about-section" class="nav-link">About Us</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#team-section" class="nav-link">Team</a></li>
                      <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                      <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                      <li class="has-children">
                        <a href="#">More Links</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <li><a href="#why-us-section" class="nav-link">Why Us</a></li>

                  <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  <li><a href="#popup1" id="button" class="nav-link">Connexion</a></li>
                  <li><a href="#contact-section" class="nav-link">Inscription</a></li>
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

         <!--notification-->

         <body>


<div id="popup1" class="overlay">
	<div class="popup">
		
		<a class="close" href="#">&times;</a>
		<div class="content">
        
            <div class="containerr">
                <div >
                    

                    <div class="signin-form">
                 <div> <img class="woze21" src="/PPE/images/icone/image.png"/></div>
                        <form method="post"  action="../PPE/login/login.php" class="register-form" id="login-form">
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

  
</body>

          <!--notification-->





</body>

<script src="/js/navbar/header_navigation/bootstrap.min.js"></script>
<script src="/js/navbar/header_navigation/jquery.sticky.js"></script>
<script src="/js/navbar/header_navigation/main.js"></script>




<script src="/js/navbar/header_navigation/jquery-3.3.1.min.js"></script>
<script src="/js/navbar/header_navigation/owl.carousel.min.js"></script>
<script src="/js/navbar/header_navigation/popper.min.js"></script>
    
  
</html>