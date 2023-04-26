<?php
  require 'back/articles.php';
  require 'back/language.php';
   $language ='fr';
   $articles =loadArticles();
   loadlanguage ( $language);


?>

<html>
  <head>
    <meta charset="utf-8" >
     <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>Vente en ligne</title>
  
   <link rel="stylesheet"  href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  
<style>
  
  
    h1 {
      font-style: italic;
      background: lightslategray;
     text-align: center;
      margin-top:-24%;
     
    } 
  
  p{
    margin:7px;
    
  }

    .transporteur{     
       height:30%;
       width: 20%;
       border-radius: 50px;
      margin-top:1%;
      margin-left:850px;
     
      
    }

  
    .block{     
       height:30%;
       width: 20%;
       border-radius: 50px;
      margin-top:-14%;
      margin-left:175px;
    }


  
  
        nav li {
    float:left;
      width:150px;
      border: 1px solid blue;
      margin-top:-18px;
        margin-left:160px;
    
    }
    
      form {
       text-align:center; 
      font-size:25px;
      margin-left:400px;
      margin-top:-150px;
        
 }
 
   
   .aspirateur{
      height: 10%;
      width: 10%;     
      margin-top:15%;  
     margin-left:250px;
     border-radius:10px;
   }
  
    
    .tapis {
       height: 10%;
       width: 10%;   
       margin-top:1%;
      margin-left:250px;
      border-radius:10px;
   }
    
    .table {
      height: 12%;
      width: 10%;     
      margin-top:1%;
      margin-left:250px;
      border-radius:10px;
   }

   
    
   html {
     background:lightgrey;
   }

  footer{
    margin-left:1100px;
    
  }

  #connexion {

      background: green;

      color: white;

    }

/* indique le style de l'élément au passage de la souris */

#connexion:hover {

    background: red;

    color: white;
}

      .shopping {

        width: auto;
        
        align-items: center;

        justify-content: center;

        text-align: left;

        margin-right: -10px;

      }

      .shop {

        width: auto;

        text-align: left;

        font-size: 30px;

        margin-left: 10px;

        padding-top: 10px;
         

      }


      #shop {

        display: none;

      }


      #shop:hover {

        cursor: pointer;

      }


      .article {

        width: auto;

        text-align: right;

        margin-: 500px;

      }
      #add {

        background: green;

      }


      #delete {

        background: red;

      }
  
  
 
</style>
  
  <body>
    
    <div id="transporteur">
     <img class="Transporteur"
       src="https://png.pngtree.com/png-vector/20200113/ourlarge/pngtree-flat-transport-van-vector-free-png-icon-download-png-image_2128590.jpg" alt="Van De Transporte Plana Vector Png Grátis Baixar ícone PNG , Clipart De  Carro De Brinquedo, Van De Transporte Plana Vector Png Grátis Baixar ícone  PNG , Carro Imagem PNG e Vetor">


    <div id="block">
     <img class="block"
       src="https://png.pngtree.com/png-vector/20200113/ourlarge/pngtree-flat-transport-van-vector-free-png-icon-download-png-image_2128590.jpg" alt="Van De Transporte Plana Vector Png Grátis Baixar ícone PNG , Clipart De  Carro De Brinquedo, Van De Transporte Plana Vector Png Grátis Baixar ícone  PNG , Carro Imagem PNG e Vetor">

      
   
<div id="aspirateur">
  
<img class="aspirateur block" src="https://cdn.leroymerlin.com.br/categories/aspirador_de_po_46f7_300x300.jpg" alt="ASPIRADOR DE PÓ: Vertical, Portátil, Pó e Água - Leroy Merlin">

 <div id="tapis">
    <img class="tapis" src="https://media.adeo.com/marketplace/MKP/84863191/41c6e209e1934a2d659d1ee445939e69.jpeg?width=650&height=650&format=jpg&quality=80&fit=bounds">


    <div id="table">
    <img class="table"
      src="https://www.pricefactory.fr/509-large_default/ensemble-table-et-chaises-table-160-cm-4-chaises-lina-table-pour-salle-a-manger-laquee-blanche-et-noire-avec-4-chaises.jpg">

   <php 
    $HeaderTitle = 'Petit Prix';
    require $_SERVER['DOCUMENT_ROOT'].'/front/header.php';
  ?>
    
  <h1>Petit Prix</h1>
    
 <nav role="navigation">

  
     <a href="./index.php" class="nav-item">Accueil</a>
     <a href="./front/form.php" class="nav-items ">Crée un Compte</a>
   <a href="./front/panier.php" class="nav-items">Panier</a>
 </nav>

  

 <?php echo TEXT_ARTICLES;?>

  <?php
  foreach ($articles as $article){
   $Title = $article['name'];
   $price = $article['price'];
   $description = $article['description'];
   require $_SERVER['DOCUMENT_ROOT'].'/front/article.php';
}
?>

    <form method='GET' action='valide.html'>
      login:<input type='text'name='login' 
      value='name'>
        <br>
        email:<input tupe='text' name='email'>
        <br>
       
       
    
        <button id="connexion" 
          type="button">Connexion</button>
      <nav>
          <button id="delete">Supprimer un article</button>
3
      </nav>
      </form>
        </div>

        <div class="article">

          <p id="number-article">0</p>

        </div>

        <div class="shop">

          <i id="shop" class="fas fa-shopping-cart"></i>

        </div>

      </div>

    </nav>
  <div class="logo"></div>

      <div class="shopping">

        <div class="actions">

          <button id="add">Ajouter un article</button>
        </div>
      </nav>
  

  
      <script src="script.js"></script>
<script src="1script.js"></script>
    
   <footer>Droits D'auteur</footer>
</body>
</html>