<?php
  include "../php/db.php";
 require "../PHPMailer/PHPMailerAutoload.php";
 
  ?>


<?php 
           $nom = $_POST['Nom'];
           $prenom = $_POST['Prenom'];
           $pseudo = $_POST['pseudo'];
           $email = $_POST['mailconnect'];
           $pass = $_POST['mdpconnect'];
           $pass2 = $_POST['mdpconnect1'];
           $adresse = $_POST['adresse'];
           $genre = $_POST['sexe'];
           $country = $_POST['selec'];
           $cle = rand(1000000, 9000000);
        /*
 * filtre pour valider l'email
 */
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Le format de l'email est invalide";
        }

        

        // IL YA DEJA QQUN QUI UTILISE CE PSEUDO 
        $req = $bdd->prepare('SELECT email FROM users WHERE email=?'); // on selectionne tout les pseudo ou pseudo = ?
        $req->execute(array($email)); // ? est rempli ici avec $pseudo ou $_POST'pseudo']
        if ($donnees = $req ->fetch())
        {
          $email_error = 'Il y a déjà une personne qui utilise ce pseudo !';

        }

       if(empty($email_error) && empty($password_error) && empty($zip_error)&& empty($tel_error)){
                $pass_hache = password_hash($pass, PASSWORD_DEFAULT);
                $req = $bdd->prepare('INSERT INTO users (nom,prenom,pseudo,email,pass,adresse,genre,statut,country,cle,confirme) VALUES(?,?,?,?,?,?,?,1,?,?,?)'); 
                $req->execute(array($nom,$prenom,$pseudo,$email,$pass_hache,$adresse,$genre,$country,$cle, 0 ));

        }

     if(!empty($email_error))
      
          header("Location: ../index.php ");
        
        else

             include "../inscription/inscription1.php";

        

        
        
          
          
     $req = $bdd->prepare('SELECT idUsers , cle FROM users ORDER BY idUsers DESC LIMIT 1  ');
        $test = $req->execute();
        $donnees = $req ->fetch();
        $to   = $email;
        $from = 'ppebts2022@gmail.com';
        $name = 'woze';
        $subj = 'Email de confirmation de compte';
        $msg = 'http://127.0.0.1/ppe/verif.php?id='.$donnees['idUsers'].'&cle='.$donnees['cle'];
        

        
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true; 
         
                $mail->SMTPSecure = 'ssl'; 
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = '465';  
                $mail->Username = 'ppebts2022@gmail.com';
                $mail->Password = '.Feaflight17';   
           
           //   $path = 'reseller.pdf';
           //   $mail->AddAttachment($path);
           
                $mail->IsHTML(true);
                $mail->From="ppebts2022@gmail.com";
                $mail->FromName='ilia';
                $mail->Sender='ppebts2022@gmail.com';
                $mail->AddReplyTo('ppebts2022@gmail.com', 'ilia');
                $mail->Subject = "confirmation de votre inscription";
                $mail->Body = $msg;
                $mail->AddAddress($to);
                if(!$mail->Send())



        {
            $password_error ="Please try Later, Error Occured while Processing...";
            return $password_error; 
        }
      
          
        
        


        
      
    ?>


    

        
        

        

       
   


 