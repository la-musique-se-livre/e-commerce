
 <?php
 require_once('php/db.php');
 ?>
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
    <link rel="stylesheet" href="css/style.css?v=<?= ver() ?>">
</head>
<body class="sign-in">

    <div>

        <!-- Sing in  Form -->
        <section>
            <div class="container">
                <div>
                    

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
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
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
