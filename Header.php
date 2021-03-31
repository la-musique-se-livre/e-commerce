<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <Title>Histoire A Raconter - Accueil</Title>
    <link rel = "stylesheet" href = "Menu_Navigation.css">
</head>

<body>

<nav class="menu">

<ul>
    <li class="btn"> <a href ="   "> Livres </a></li>
    <li class="btn"> <a href ="   "> CDs </a></li>
    <li class="btn"> <a href ="   "> Vinyles </a></li>
    <li class="btn"> <a href ="   "> Nous contacter </a></li>
</ul>

</nav>

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


</body>

</html>