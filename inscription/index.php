
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
    <link rel="stylesheet" href="style.css">
</head>
<body class="sign-in">

    <div>
        
        <section>
            <div class="container">
                <div>
                    

                <div class="signin-form">
                 <div> <img class="woze20" src="../images/image.png"/></div>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="Nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="woze" name="Nom" id="Nom" placeholder="Nom"/>
                            </div>
                            <div class="form-group">
                                <label for="Prenom"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="text" name="Prenom" id="Prenom" placeholder="Prenom"/>
                            </div>

                            <div class="form-group">
                                <label for="Prenom"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="text" name="Prenom" id="Prenom" placeholder="pseudo"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="woze" name="mailconnect" id="email" placeholder="email"/>
                            </div>

                            <div class="form-group">
                                <label for="mdpconnect"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="password" name="mdpconnect" id="mdpconnect" placeholder="Password"/>
                            </div>

                            <div class="form-group">
                                <label for="mdpconnect1"><i class="zmdi zmdi-lock"></i></label>
                                <input class="woze" type="password1" name="mdpconnect1" id="mdpconnect1" placeholder="Confiramtion mot de passe"/>
                            </div>

                            <div class="form-group">
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
                        <select>
                         <option>pays</option>
                        <option value="1">France</option>
                        <option value="2">Royaume-Uni</option>
                        <option value="3">Russie</option>
                        <option value="4">États-Unis</option>
                        <option value="5">Maurice</option>                       
                        <option value="6">Mauritanie</option>
                        <option value="7">Portugal</option>
                        <option value="8">Salomon</option>
                        <option value="9">Suède</option>
                        <option value="10">Tunisie</option>
                        <option value="11">Népal</option>
                        <option value="12">Kazakhstan</option>	
                        <option value="13">Inde</option>
                        <option value="14">Ghana</option>
                        </select>
                        </div>
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

   
</body>
</html>
