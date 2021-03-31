<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <Title>La musique se livre - Accueil</Title>
    <link rel = "stylesheet" href = "css/Menu_Navigation.css">
</head>

<body>

<img class="woze20" src="images/image.png">

<input type="search" id="search" value="" onchange="ouvrirpage()">
  <input type="button"id="button" onclick="ouvrirpage()" value="Rechercher">


  <style>
    
    #search{
        border-radius: 5px;
        border: 2px solid black;
      } 

      
    #button{
        border-radius: 30px;
        border: 1px solid black;
        cursor: pointer;
    }
  </style>

    <script>
      function ouvrirpage(){

          var a = document.getElementById("search").value;
          if(a === livre ){ // Si la personne écrit livre (a=== Livres)
              <a href ="   /index.html"> Le nom </a> // Alors on ouvre la page des livres (livres/index.html)
          }
          if(a === cd ){ 
              <a href ="   /index.html"> Le nom </a>
          }
          if(a === vinyle ){ 
              <a href ="   /index.html"> Le nom </a> 
          }
      }
      
  </script>  


<nav class="menu">

<ul>
    <li class="btn"> <a href ="http:www.exemple-de-livres.com"> Livres </a></li>
    <li class="btn"> <a href =" http:www.exemple-de-cd.com  "> CDs </a></li>
    <li class="btn"> <a href =" http:www.exemple-de-vinyless.com  "> Vinyles </a></li>
    <li class="btn"> <a href =" http:www.exemple-de-contact.com  "> Nous contacter </a></li>
</ul>

</nav>

  

</body>

</html>