<html lang="en">

<head>
    
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

<?php
if(!isset($_SESSION)) {
  session_start();
} 
?>


<?php
        if (isset($_GET["id"])) {
            $id = htmlspecialchars($_GET["id"]);
            $reponse = $bdd->query("SELECT * FROM users WHERE id = $id");
            if ($reponse != false) {
                $donnees = $reponse->fetch();
            }
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



<?php if($_SESSION['statut'] == '2'){?>
</head>
<body>


 



<?php 
    include "php/header_admin.php";
  
  ?>

                  
     








<script src="script.js"></script>

</body>
<?php  ?>

 <?php 
                            } 
                        ?>







    

	
<?php if($_SESSION['statut'] == '1'){?>






<?php
                 
                 include "php/header_acheteur.php";

                 ?>
 
 <?php }?>



 


</body>






</html>

                   
     

   

 
 
 
 
 
 
 
 
 
 
 
 
 

     

       
      
    
    

